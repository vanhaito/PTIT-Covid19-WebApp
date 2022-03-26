<?php
include "connect.php";

// add
if(isset($_POST['addImage'])){
    // $img =base64_encode(file_get_contents($_FILES['pic']['tmp_name']));
    $img = $_POST['addImage'];
    // $img_tmp = $_FILES['image']['tmp_name'];
    $title = $_POST['addTitle'];
    $descr = $_POST['addDesc'];
    $content = $_POST['addContent'];
    
    $sql = "INSERT into tblnews(image, title, descr, content) Value ('$img', '$title', '$descr', '$content');";
    $query = mysqli_query($conn, $sql);
    // move_uploaded_file($img_tmp, 'BOOTSTRAP/assets/'.$img);
    // echo "<div class='alert alert-success'> <strong> Thêm bài thành công </strong> </div>";
}

?>