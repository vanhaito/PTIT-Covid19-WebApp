<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

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
                        <a class="navbar-brand" href="#">
                            <img src="/BOOTSTRAP/assets/logo-bo-tt-va-tt_Artboard-1-e1596170075438-600x552.jpg"
                                alt="Avatar Logo" style="width:60px;" class="rounded-pill">
                        </a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class=" text-center nav-link active" href="#">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="text-center nav-link active" href="infor.php">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item pt-2">
                        <a class="text-center nav-link active" href="news.php">TIN TỨC</a>
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

    <div class="body">

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="/BOOTSTRAP/assets/Slide1.jpg" alt="Los Angeles" style="width:100%; height: 520px;">
                    <div class="carousel-content">
                        <h1>HỘI NGHỊ KHOA HỌC CÔNG NGHỆ NGÀNH Y TẾ </h1>
                        <div class="d-flex pb-2" style=" padding-left: 350px;">
                            <img src="/BOOTSTRAP/assets/iCalendar.png" alt="iCalendar">
                            <h5 style="padding-left: 20px;">19-20/11/2021</h5>
                        </div>
                        <div class="d-flex" style=" padding-left: 330px;">
                            <img src="/BOOTSTRAP/assets/iLocation.png" alt="iLocation">
                            <h5 style="padding-left: 15px;">Thành phố Hà Nội</h5>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/BOOTSTRAP/assets/lang-bac.jpg" alt="Chicago" style="width:100%; height: 520px;">
                    <div class="carousel-content">
                        <h1>HỘI NGHỊ KHOA HỌC CÔNG NGHỆ NGÀNH Y TẾ </h1>
                        <div class="d-flex pb-2" style=" padding-left: 350px;">
                            <img src="/BOOTSTRAP/assets/iCalendar.png" alt="iCalendar">
                            <h5 style="padding-left: 20px;">19-20/11/2021</h5>
                        </div>
                        <div class="d-flex " style=" padding-left: 330px;">
                            <img src="/BOOTSTRAP/assets/iLocation.png" alt="iLocation">
                            <h5 style="padding-left: 15px;">Thành phố Hà Nội</h5>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/BOOTSTRAP/assets/10445594_f2aBanner1_15-11-11.jpg" alt="New York"
                        style="width:100%; height: 520px;">
                    <div class="carousel-content">
                        <h1>HỘI NGHỊ KHOA HỌC CÔNG NGHỆ NGÀNH Y TẾ </h1>
                        <div class="d-flex pb-2" style=" padding-left: 350px;">
                            <img src="/BOOTSTRAP/assets/iCalendar.png" alt="iCalendar">
                            <h5 style="padding-left: 20px;">19-20/11/2021</h5>
                        </div>
                        <div class="d-flex" style=" padding-left: 330px;">
                            <img src="/BOOTSTRAP/assets/iLocation.png" alt="iLocation">
                            <h5 style="padding-left: 15px;">Thành phố Hà Nội</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="info container-fluid pt-5">
            <div class="info-title text-center pb-5">
                <h1 style="color: #0058c0;">GIỚI THIỆU</h1>
            </div>
            <div class="info-content d-flex pb-5 col-md-8 col-lg-12 justify-content-center" style="padding-left: 100px;">
                <div class="content w-50" style="margin-right: 150px;">
                    <h5><a class="title text-decoration-none" href="infor.php">HỘI NGHỊ KHOA HỌC CÔNG NGHỆ NGÀNH Y
                            TẾ</a></h5>
                    <p class="desc">Hội nghị Khoa học và Công nghệ tuổi trẻ các trường đại học, cao đẳng Y Dược Việt Nam
                        là sự kiện do Bộ Y tế phối hợp với Trung ương Đoàn TNCS Hồ Chí Minh chủ trì và được các trường
                        Đại học, Cao đẳng ngành Y Dược đăng cai tổ chức tổ chức 02 năm/lần nhân dịp kỷ niệm ngày sinh
                        của Chủ tịch Hồ Chí Minh (19/5)</p>
                </div>
                <div class="logo">
                    <h5 class="text-center" style="padding-left: 25px;"><a class="title text-decoration-none"
                            href="infor.php">Đơn vị tổ chức</a></h5>
                    <div class="image d-flex">
                        <a href="#"><img src="/BOOTSTRAP/assets/logo-bo-tt-va-tt_Artboard-1-e1596170075438-600x552.jpg"
                                alt="Bộ Thông tin Truyền thông" style="height: 150px;"></a>
                        <a href="#"><img src="/BOOTSTRAP/assets/Logo-Bộ-Y-tế-01-e1585994422207-300x213.png"
                                alt="Bộ Thông tin Truyền thông" style="height: 140px;"></a>
                        <a href="#"><img src="/BOOTSTRAP/assets/logo-cp.png" alt="Bộ Thông tin Truyền thông"
                                style="height: 130px;"></a>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        </hr>

        <div class="new container-fluid pt-5">
            <div class="new-title text-center pb-5">
                <h1 style="color: #0058c0;">TIN TỨC</h1>
            </div>

            <div class="new-content d-flex pb-5 col-md-8 col-lg-12 justify-content-center" style="padding-left: 50px">
                <?php 
                // Gen bảng
                $sql = "SELECT * from tblnews";
                $query = mysqli_query($conn, $sql);
                $count = 0;
                while ($query->num_rows >0 && $count <3 && $count != $query->num_rows) {
                    $count++;
                    $row = $query->fetch_assoc();  
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
                }
                ?>
            </div>

            <div class="btn-view d-flex justify-content-center">
                <a href="news.php" target="blank" style="color: #fff;" class="text-decoration-none">Xem thêm</a>
            </div>
        </div>

        <hr>
        </hr>

        <div class="noty container-fluid pt-5">
            <div class="new-title text-center pb-5">
                <h1 style="color: #0058c0;">THÔNG BÁO</h1>
            </div>
            <div class="new-content d-flex pb-5 col-md-8 col-lg-12 justify-content-center" style="padding-left: 50px">
                <div class="box">
                    <img class="card-img-top" src="/BOOTSTRAP/assets/59_-Chuong-trinh-du-kien-1920-x-1080.jpg"
                        alt="Card image">
                    <div class="card-body">
                        <h6 class="noty-date">26/04/2021</h6>
                        <h4 class="card-title"><a href="#" class="noty-content-title text-decoration-none">Chương trình
                                khám bệnh, phát
                                thuốc và tặng quà miễn phí tại huyện Mường Lát, Thanh Hóa</a></h4>
                        <p class="card-text">Nhằm phát huy tinh thần “tương thân tương ái”, “lá lành đùm lá rách”, Bệnh
                            viện Hữu nghị Việt Đức thường xuyên tổ chức nhiều chương trình khám chữa bệnh, phát thuốc
                            miễn phí cho người dân trên khắp mọi miền của Tổ quốc.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img class="card-img-top" src="/BOOTSTRAP/assets/Thong-bao-so-10-KT-1920-x-1080.jpg"
                        alt="Card image">
                    <div class="card-body">
                        <h6 class="noty-date">11/01/2021</h6>
                        <h4 class="card-title"><a href="#" class="noty-content-title text-decoration-none">Tuổi trẻ
                                ngành Y tri ân người có
                                công</a></h4>
                        <p class="card-text">Ngày 25/7 tại xã Triệu Phước (huyện Triệu Phong, tỉnh Quảng Trị), diễn ra
                            hoạt động khám bệnh, tư vấn sức khỏe, phát thuốc và tặng quà tri ân người có công nhân kỷ
                            niệm 73 năm Ngày Thương binh – Liệt sĩ và chào mừng Đại hội Đại biểu Đảng bộ Bộ Y tế lần thứ
                            XXII, nhiệm kỳ 2020-2025.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <img class="card-img-top" src="/BOOTSTRAP/assets/Thong-bao-so-11-1920px--x-1080px.jpg"
                        alt="Card image">
                    <div class="card-body">
                        <h6 class="noty-date">05/01/2021</h6>
                        <h4 class="card-title"><a href="#" class="noty-content-title text-decoration-none">Nhân ái Hải
                                Dương: Gửi trao yêu
                                thương cho 300 người dân có hoàn cảnh khó khăn</a></h4>
                        <p class="card-text">Trên hành trình gửi trao yêu thương, chuyến xe nhân ái của Bệnh viện Hữu
                            nghị Việt Đức đã lăn bánh đến nhiều địa phương trên mọi miền tổ quốc, mang lại cơ hội được
                            khám bệnh miễn phí cho hàng nghìn người dân.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        </hr>

        <div class="container pt-5 pb-5" style="width: 1310px; padding-left: 25px;">
            <div class="new-title text-center pb-5">
                <h1 style="color: #0058c0;">CHƯƠNG TRÌNH</h1>
            </div>
            <table class="table" style="width: 100%; border-style: ridge;">
                <thead class="table" style="background-color: #183661; color: #fff; height: 80px;">
                    <tr>
                        <td class="pb-3"> <img class="card-img-top"
                                src="/BOOTSTRAP/assets/logo-bo-tt-va-tt_Artboard-1-e1596170075438-600x552.jpg"
                                alt="Card image" style="width:50px; height: 50px;">
                            CHƯƠNG TRÌNH HỘI NGHỊ KHOA HỌC</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-primary" style="text-align: center;">
                        <td class="col-4">
                            <h5>THỜI GIAN</h5>
                            <h6 class="grey-1">Time</h6>
                        </td>
                        <td>
                            <h5>NỘI DUNG CHƯƠNG TRÌNH</h5>
                            <h6 class="grey-1">CONTENTS</h6>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding-top: 2rem;">7:30 – 8:15</td>
                        <td>
                            <p>Đón tiếp đại biểu</p>
                            <p class="grey-1">Welcome delegates</p>
                        </td>
                    </tr>
                    <tr class="table-primary">
                        <td style="text-align: center; padding-top: 10rem;">8:15 – 9:00</td>
                        <td>
                            <p>Khai mạc hội nghị</p>
                            <p class="grey-1">Opening ceremony</p>
                            <p>Báo cáo thành tựu khoa học của trường Đại học Y Dược Cần Thơ qua 40 năm xây dựng
                                và phát
                                triển,</p>
                            <p>định hướng giai đoạn 2020 – 2025</p>
                            <p class="grey-1">Report on scientific achievements of Can Tho University of Medicine and
                                Pharmacy
                                through
                                40</p>
                            <p class="grey-1">years of construction and development, orientation in the period of 2020 -
                                2025
                            </p>
                            <p>Vinh danh các nhà khoa học</p>
                            <p class="grey-1">Honoring ceremony for the scientists</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding-top: 10rem;">9:00 – 9:45</td>
                        <td>
                            <p>Diễn đàn Y Dược học thế kỷ 21</p>
                            <p class="grey-1">21st century medicine and pharmacy forum</p>
                            <p class="grey-1">Trend of diseases in South-East Asia: how developments of 40 years will
                                set the stage for
                                the future</p>
                            <p class="grey-1">Prof. Henri van Asten, Tropical Medicine & International Health, the
                                Netherlands</p>
                            <p>Climate change in general and the effects of climate change on human health and
                                agriculture, food security</p>
                            <p>Assoc.Prof. Robert Andrew Gertler, Medical Education Exchange Teams, the U.S.
                            </p>
                            <p>Prof. Nguyen Duc Cong, Can Tho University, Vietnam</p>
                            <p>Physician - Nurse collaboration</p>
                            <p class="grey-1">Prof. Yvonne Osborn, Vietnam Nurse Practice Improvement Project, Australia
                            </p>
                        </td>
                    </tr>
                    <tr class="table-primary">
                        <td style="text-align: center; padding-top: 11rem;">9:00 – 17:00</td>
                        <td>
                            <p>Tham quan</p>
                            <p class="grey-1">Exhibitiony</p>
                            <p>Triển lãm poster khoa học</p>
                            <p class="grey-1">Scientific poster exhibition</p>
                            <p>Triển lãm trang thiết bị y tế và dược phẩm</p>
                            <p class="grey-1">Exhibition of medical equipments and pharmaceutical products</p>
                            <p>Hội chợ việc làm khối ngành khoa học sức khỏe</p>
                            <p class="grey-1">Job fair for healthcare science</p>
                            <p>Thành tựu 40 năm xây dựng và phát triển trường Đại học Y Dược Cần Thơ</p>
                            <p class="grey-1">The 40-year achievements in construction and development of Can Tho
                                University of
                                Medicine and Pharmacy</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding-top: 2rem;">10:15 – 17:00</td>
                        <td>
                            <p>Báo cáo tại hội trường</p>
                            <p class="grey-1">Oral presentations in halls</p>
                        </td>
                    </tr>
                    <tr></tr>

                </tbody>
            </table>
        </div>

        <hr>
        </hr>

        <div class="sponsor container-fluid pt-5">
            <div class="sponsor-title text-center pb-5">
                <h1 style="color: #0058c0;">NHÀ TÀI TRỢ</h1>
            </div>
            <div class="sponsor-content d-flex pb-5 col-md-8 col-lg-12 justify-content-center" style="padding-left: 230px;">
                <a href="#"><img class="card-img-top sponsor-img" src="/BOOTSTRAP/assets/2000px-Pfizer_logo_svg_.png"
                        alt="Card image"></a>
                <a href="#"><img class="card-img-top sponsor-img" src="/BOOTSTRAP/assets/VietMedical Logo-01.png"
                        alt="Card image"></a>
                <a href="#"><img class="card-img-top sponsor-img" src="/BOOTSTRAP/assets/Roche.png"
                        alt="Card image"></a>
            </div>
            <div class="sponsor-content d-flex pb-5 col-md-8 col-lg-12 justify-content-center" style="padding-left: 200px;">
                <a href="#"><img class="card-img-top sponsor-img" src="/BOOTSTRAP/assets/karlstorz 898x334.png"
                        alt="Card image"></a>
                <a href="#"><img class="card-img-top sponsor-img" src="/BOOTSTRAP/assets/johnson-johnson-298.png"
                        alt="Card image" style="padding-right: 20px;"></a>
                <a href="#"><img class="card-img-top sponsor-img" src="/BOOTSTRAP/assets/Medtronic.png"
                        alt="Card image"></a>
            </div>
        </div>

        <button onclick="topFunction()" id="myBtn" title="Lên đầu trang"
            style="background: url(/BOOTSTRAP/assets/a.png); background-size: 32px;position: fixed;bottom: 60px;right: 45px;width: 32px;height: 32px;border: none;"></button>
    </div>

    <!-- -----------------------FOOTER--------------------- -->

    <div class="footer pt-5 pb-1">
        <div class="inforFooter container-fluid d-flex col-md-8 col-lg-12 justify-content-center">
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