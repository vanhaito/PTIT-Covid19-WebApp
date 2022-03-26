<?php
include "connect.php";

// Check user login or not
if(!isset($_SESSION['id'])){
    header('Location: /BOOTSTRAP/php/index.php');
}

// logout
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: /BOOTSTRAP/php/index.php');
}

function getData($conn, $sql){
    $query = mysqli_query($conn, $sql);
    if ($query->num_rows > 0) {
    while($row = $query->fetch_assoc()) {
     echo "<tr><td style='width: 50px; text-align: center;'>". $row['id']."</td>";
     echo "<td>".$row["name"]."</td>";
     echo "<td>".$row["age"]."</td>";
     echo "<td>".$row["company"]."</td>";
     echo "<td>".$row["position"]."</td>";
     echo "<td>".$row["email"]."</td>";
     echo "<td>".$row["phone"]."</td>";
    }
    } else{
        echo "Không có ai đăng ký";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- css -->
    <link rel="stylesheet" href="/BOOTSTRAP/css/admin.css">
    <!-- library -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- ------------------------HEADER----------------------- -->
    <div class="sidebar">
        <ul class="list-unstyled sidebar-items" id="sidebar">
            <li><a href="#"><img src="/BOOTSTRAP/assets/logo-bo-tt-va-tt_Artboard-1-e1596170075438-600x552.jpg"
                        width="80px" height="80px" style='margin-left: 10px; margin-top: 10px' id='image'></a></li>
            <li><button onclick='location.href="admin.php"' type="button" class="btn btn-primary mt-5 mb-3">&nbsp;Bài
                    đăng&nbsp;</button></li>
            <li><button onclick='location.href="member.php"' type="button" class="btn btn-warning mb-3" style ="color: #fff;">&nbsp;Đăng
                    ký&nbsp;&nbsp;</button>
            </li>
            <li>
                <form method="post">
                    <button class='btn btn-danger' type="submit" name="logout" id="btn" style="padding-top:2px">Đăng
                        xuất</button>
                </form>
            </li>
            <!-- <li><a class="text-decoration-none" style="padding-left: 20px;" href="#" onclick="closeNav()">Tin tức</a></li> -->
        </ul>
    </div>
    <!-- ------------------------BODY------------------------- -->

    <div class="body" id="body" style="background-color: #dfdfdf; padding-left: 95px;">
        <div class="container-fluid mb-3 d-flex" style="background-color: #fff;">
            <!-- <span style="font-size:30px; cursor:pointer; margin-right: 30px" onclick="openNav()">☰</span> -->
            <div>&nbsp;</div>
        </div>
        <div class="container-fluid mb-4 d-flex" style="background-color: #fff; margin-left: 20px; width: 98%;">
            <form method="post">
                <div class="username-form">
                    <div class="input pt-4" style="margin-left: 30px;">
                        <p class="title">
                        <h5>Tìm kiếm từ khoá</h5>
                        </p>
                        <input class="form-control mb-4" style="width: 700px;" type="text" name="keyword"
                            placeholder="Tên, tuổi, công ty, ..." required>
                    </div>
                    <button class='btn btn-primary' name="search" type="submit" style="margin-left: 650px; color: #fff">
                        <h4>Tìm kiếm</h4>
                    </button>
                </div>
            </form>
            <form method="post">
                <button class='btn btn-danger mb-3' name="reset" type="submit" style="margin-top: 143px; color: #fff; margin-left: 10px;">
                    <h4>Đặt lại</h4>
                </button>
            </form>
            <form method="post">
                <div class="username-form">
                    <div class="input pt-4" style="margin-left: 10px;">
                        <p class="title">
                        <h5 style="margin-left: 80px">Sắp xếp</h5>
                        </p>
                        <select name="order" id="order" style="width: 700px; height: 40px; margin-left: 80px">
                            <option value="default">Chọn thứ tự</option>
                            <option value="name1">Theo tên a-z</option>
                            <option value="name2">Theo tên z-a</option>
                            <option value="age1">Theo tuổi tăng dần</option>
                            <option value="age2">Theo tuổi giảm dần</option>
                        </select>
                        <br><br>
                        <button class='btn btn-warning' name="sort" type="submit" style ="color: #fff;">
                            <h4>Sắp xếp</h4>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container-fluid" style="background-color: #fff; margin-left: 20px; width: 98%;">
            <div class="container-fluid d-flex">
                <div class="body-head d-flex">
                    <h1>Danh sách người đăng ký</h1>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-hover table-bordered">
                    <thead class="table">
                        <tr style='text-align: center;'>
                            <th>Id</th>
                            <th>Tên</th>
                            <th>Tuổi</th>
                            <th>Công ty</th>
                            <th>Vị trí</th>
                            <th>Email</th>
                            <th style='width: 85px'>Sđt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                // Gen bảng
                if(isset($_POST['search'])){
                    $keyword = $_POST['keyword'];
                    $sql = "SELECT * FROM tblmember WHERE name LIKE '%$keyword%' || age LIKE '%$keyword%' ||
                    position LIKE '%$keyword%' || email LIKE '%$keyword%' || phone LIKE '%$keyword%' || company LIKE '%$keyword%'";   
                    getData($conn, $sql);
                }
                else if(isset($_POST['sort'])){
                    $order = $_POST['order'];
                    if($order != 'default'){
                        switch ($order){
                            case 'name1': 
                                $sql = "SELECT * FROM tblmember order by name asc;";
                                getData($conn, $sql);
                            break;
                            case 'name2': 
                                $sql = "SELECT * FROM tblmember order by name desc;";
                                getData($conn, $sql);
                            break;
                            case 'age1': 
                                $sql = "SELECT * FROM tblmember order by age asc;";
                                getData($conn, $sql);
                            break;
                            case 'age2': 
                                $sql = "SELECT * FROM tblmember order by age desc;";
                                getData($conn, $sql);
                            break;
                        }
                    }else{
                        $sql = "SELECT * FROM tblmember";
                        getData($conn, $sql);
                    }
                }
                else{
                    $sql = "SELECT * from tblmember";
                    getData($conn, $sql);
                }
                ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="" style="background-color: #dfdfdf">&nbsp;</div>
    </div>

    <script>
    function Delete(name) {
        return confirm("Bạn có chắc muốn xoá tin: '" + name + "'?");
    }

    function openNav() {
        document.getElementById("sidebar").style.width = "140px";
        document.getElementById("body").style.marginLeft = "50px";
    }

    function closeNav() {
        document.getElementById("sidebar").style.width = "95px";
        document.getElementById("body").style.marginLeft = "0px";
    }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>