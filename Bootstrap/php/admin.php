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
     echo "<td><img src='/BOOTSTRAP/assets/" .$row['image']. "'width='150px' height='150px' alt='image'>"."</td>";
     echo "<td>". $row["title"] ."</td>";
     echo "<td>". $row["descr"] ."</td>";
     echo "<td>". $row["content"] ."</td>";
     echo "<td>". date_format(date_create($row["createdTime"]),"d/m/Y H:m:s") ."</td>";
     echo  "<td>
            <br>
            <a href='edit.php?getId=" . $row['id'] ."'target='_blank' style='color: white;'
                class='text-decoration-none btn-edit'>Sửa</a>
            <br></br>";
    echo "<a onclick= 'return Delete(\"". $row['title']."\")' href='delete.php?getId=". $row['id']." '
         style='color: white;' class='text-decoration-none btn-del'>Xoá</a>
        </td>";
    
    }
    } else{
        echo "Không có tin nào";
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
                            placeholder="Tiêu đề, miêu tả, nội dung, ..." required>
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
                            <option value="desc">Tin mới nhất</option>
                            <option value="asc">Tin cũ nhất</option>
                        </select>
                        <br><br>
                        <button class='btn btn-warning' style='color: #fff' name="sort" type="submit">
                            <h4>Sắp xếp</h4>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="container-fluid" style="background-color: #fff; margin-left: 20px; width: 98%;">
            <div class="container-fluid d-flex">
                <div class="body-head d-flex">
                    <h1>Danh sách bản tin</h1>
                    <a href="add.php" target="_blank" style="color: white;" class="text-decoration-none btn-add">
                        <h3>+Thêm bài</h3>
                    </a>
                </div>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-hover table-bordered">
                    <thead class="table">
                        <tr style='text-align: center;'>
                            <th>Id</th>
                            <th>Ảnh</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Nội dung</th>
                            <th>Ngày tạo</th>
                            <th style='width: 85px'>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                // Gen bảng
                if(isset($_POST['search'])){
                    $keyword = $_POST['keyword'];
                    $sql = "SELECT * FROM tblnews WHERE title LIKE '%$keyword%' || descr LIKE '%$keyword%' || content LIKE '%$keyword%'";   
                    getData($conn, $sql);
                }
                else if(isset($_POST['sort'])){
                    $order = $_POST['order'];
                    if($order != 'default'){
                        $sql = "SELECT * FROM tblnews order by createdTime $order";
                        getData($conn,$sql);
                    }else{
                        $sql = "SELECT * FROM tblnews";
                        getData($conn, $sql);
                    }
                }
                else{
                    $sql = "SELECT * FROM tblnews";
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