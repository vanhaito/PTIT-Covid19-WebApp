<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>

    <!-- css -->
    <link rel="stylesheet" href="/BOOTSTRAP/css/index.css">
    <!-- library -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <!-- ------------------------HEADER----------------------- -->

    <div class="header">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item" style="margin-right: 15px;">
                        <a class="navbar-brand" href="index.php">
                            <img src="/BOOTSTRAP/assets/logo-bo-tt-va-tt_Artboard-1-e1596170075438-600x552.jpg"
                                alt="Avatar Logo" style="width:60px;" class="rounded-pill">
                        </a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class=" text-center nav-link active" href="index.php">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="text-center nav-link active" href="infor.php">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="text-center nav-link active" href="#">TIN TỨC</a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="text-center nav-link active" href="#">THÔNG BÁO</a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="text-center nav-link active" href="#">ĐỊA ĐIỂM TỔ CHỨC</a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="text-center nav-link active" href="#">LIÊN HỆ</a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="text-center nav-link active" href="register.php" target="blank">ĐĂNG KÝ</a>
                    </li>
                    <li class="nav-item text-decoration-none btn-login">
                        <a href="login.php" target="blank" style="color: #fff;" class="text-decoration-none">ĐĂNG
                            NHẬP</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- ------------------------BODY----------------------- -->

    <div class="new container-fluid pt-5">
        <div class="new-title text-center pb-5">
            <h1 style="color: #0058c0;">TIN TỨC</h1>
        </div>

        <div class="new-content d-flex pb-5 flex-flow: wrap;" style="padding-left: 320px; flex-flow: wrap;">
            <?php 
                // Gen bảng
                $sql = "SELECT * from tblnews";
                $query = mysqli_query($conn, $sql);
                $count = 0;
                while ( $row = $query->fetch_assoc()) {
                    $count++; 
                        ?>
            <div class="box">
                <a href="new-detail.php?id=<?php echo $row['id']?>"><img class="card-img-top"
                        src="/BOOTSTRAP/assets/<?php echo $row['image']?>" alt="Card image"></a>
                <div class="card-body">
                    <h6 class="new-date"><?php echo date_format(date_create($row["createdTime"]),"d/m/Y")?></h6>
                    <h4 class="card-title"><a href="new-detail.php?id=<?php echo $row['id']?>"
                            class="new-content-title text-decoration-none"><?php echo $row["title"]?></a></h4>
                    <p class="card-text"><?php echo $row["descr"]?></p>
                </div>
            </div>
            <?php
                        if($count %3 ==0)
                        echo "<hr style =\"width:100%; margin-right: 300px\"></hr>";
                }
                ?>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Lên đầu trang"
            style="background: url(/BOOTSTRAP/assets/a.png); background-size: 32px;position: fixed;bottom: 60px;right: 45px;width: 32px;height: 32px;border: none;"></button>
    </div>

    <!-- -----------------------FOOTER--------------------- -->

    <div class="footer pt-5 pb-1">
        <div class="inforFooter container-fluid d-flex" style="padding-left: 350px;">
            <div class="footer-logo" style="padding-right: 150px;">
                <a class="navbar-brand" href="#">
                    <img src="/BOOTSTRAP/assets/logo-bo-tt-va-tt_Artboard-1-e1596170075438-600x552.jpg"
                        alt="Avatar Logo" style="width:150px;height: 150px;" class="rounded-pill">
                </a>
            </div>
            <div class="infor" style="padding-right: 150px;">
                <h5 class="footer-infor pb-2">LIÊN HỆ</h5>
                <p class="footer-infor" style="color: #f37b4c;">Ban Tổ chức Hội nghị khoa học công nghệ ngành y tế năm
                    2020 </p>
                <p class="footer-infor">Điện thoại: (84-24) 39.287.882</p>
                <p class="footer-infor">Fax: (84-24) 32.669.896</p>
            </div>
            <div class="contact">
                <h5 class="footer-infor pb-2">LIÊN KẾT MẠNG XÃ HỘI</h5>
                <a class="footer-img" href="#"><img src="/BOOTSTRAP/assets/facebook.png" alt="Avatar Logo"></a>
                <a class="footer-img" href="#"><img src="/BOOTSTRAP/assets/youtube.png" alt="Avatar Logo"></a>
                <a class="footer-img" href="#"><img src="/BOOTSTRAP/assets/zalo.png" alt="Avatar Logo"></a>
                <a class="footer-img" href="#"><img src="/BOOTSTRAP/assets/linkin.png" alt="Avatar Logo"></a>
            </div>
        </div>
        <hr style="color: #fff; margin-left: 350px; margin-right: 370px;">
        </hr>
        <div class="footer-copyright">
            <p class="text-center" style="color: #fff;">COPYRIGHT © HỘI NGHỊ KHOA HỌC CÔNG NGHỆ NGÀNH Y TẾ NĂM 2020</p>
        </div>
    </div>

    <!-- -----------------------SCRIPT--------------------- -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
</body>

</html>