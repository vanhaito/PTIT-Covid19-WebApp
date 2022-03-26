<?php
include "connect.php";

$id = $_GET['getId'];
$sql1 = "SELECT * FROM `tblnews` WHERE id = '$id'";
$query1 = mysqli_query($conn, $sql1);
$row_up = $query1->fetch_assoc();

if(isset($_POST['edit'])){
    $img = $_FILES['image']['name'];
    // $img_tmp = $_FILES['image']['tmp_name'];
    $title = $_POST['title'];
    $descr = $_POST['desc'];
    $content = $_POST['content'];
    
    $sql = "UPDATE tblnews SET image = '$img', title = '$title', descr = '$descr', content = '$content' WHERE id = '$id';";
    $query = mysqli_query($conn, $sql);
    // move_uploaded_file($img_tmp, 'BOOTSTRAP/assets/'.$img);
    echo "<script> alert(\"Sửa bài thành công!\"); </script>";

    $id = $_GET['getId'];
    $sql1 = "SELECT * FROM `tblnews` WHERE id = '$id'";
    $query1 = mysqli_query($conn, $sql1);
    $row_up = $query1->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa bài đăng</title>
    <!-- css -->
    <link rel="stylesheet" href="/BOOTSTRAP/css/login.css">
    <!-- library -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="login container mt-5 pt-5 pb-4" style="width: 600px; height: 750px;">
        <form method="post" enctype="multipart/form-data">
            <div class="login-title text-center">
                <h3 class="title">Sửa bài đăng</h1>
            </div>
            <br></br>
            <div class="username-form">
                <div class="input d-flex">  
                    <p class="title">Ảnh</p>
                    <p class="text-danger">*</p>
                </div> 
                <input class="form-control" type="file" name="image" placeholder="Ảnh" required>
            </div>
            <br></br>
            <div class="password-form">
                <div class="input d-flex">
                    <p class="title">Tiêu đề</p>
                    <p class="text-danger">*</p>
                </div>
                <input class="form-control" type="text" name="title" placeholder="Tiêu đề" required value = "<?php echo $row_up['title']?>">
            </div>
            <br></br>
            <div class="password-form">
                <div class="input d-flex">
                    <p class="title">Mô tả</p>
                    <p class="text-danger">*</p>
                </div>
                <input class="form-control" type="text" name="desc" placeholder="Mô tả" required value = "<?php echo $row_up['descr']?>">
            </div>
            <br></br>
            <div class="password-form">
                <div class="input d-flex">
                    <p class="title">Nội dung</p>
                    <p class="text-danger">*</p>
                </div>
                <input class="form-control" type="text" name="content" placeholder="Nội dung" required value = "<?php echo $row_up['content']?>">
            </div>
            <br></br>
            <div style="margin-left: 230px;">
            <!-- class="nav-item text-decoration-none btn-login" -->
            <button class = "edit" type = "submit" 
               name = "edit" 
               style="  padding-left: 10px; width: 120px; height: 30px; background-color: #f37b4c; border-radius: 8px; color: white; border-width: 1px;"
            >Sửa</button>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>