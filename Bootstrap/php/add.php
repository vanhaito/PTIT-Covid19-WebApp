<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài đăng</title>
    <!-- css -->
    <link rel="stylesheet" href="/BOOTSTRAP/css/login.css">
    <!-- library -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="login container mt-5 pt-5 pb-4" style="width: 600px; height: 750px;">
        <form method="post" enctype="multipart/form-data" id="form-add">
            <div class="login-title text-center">
                <h3 class="title">Thêm bài đăng</h1>
            </div>
            <br></br>
            <div class="username-form">
                <div class="input d-flex">
                    <p class="title">Ảnh</p>
                    <p class="text-danger">*</p>
                </div>
                <input class="form-control" type="file" name="image" id="addImage" placeholder="Ảnh">
            </div>
            <br></br>
            <div class="password-form">
                <div class="input d-flex">
                    <p class="title">Tiêu đề</p>
                    <p class="text-danger">*</p>
                </div>
                <input class="form-control" type="text" name="title" id="addTitle" placeholder="Tiêu đề">
            </div>
            <br></br>
            <div class="password-form">
                <div class="input d-flex">
                    <p class="title">Mô tả</p>
                    <p class="text-danger">*</p>
                </div>
                <input class="form-control" type="text" name="desc" id="addDesc" placeholder="Mô tả">
            </div>
            <br></br>
            <div class="password-form">
                <div class="input d-flex">
                    <p class="title">Nội dung</p>
                    <p class="text-danger">*</p>
                </div>
                <input class="form-control" type="text" name="content" id="addContent" placeholder="Nội dung">
            </div>
            <br></br>
            <button class="" type="submit" id="btn-add" name="add"
                style=" margin-left: 240px; margin-top: 10px; padding-left: 10px; width: 120px; height: 30px; background-color: #f37b4c; border-radius: 8px; color: white; border-width: 1px;">Thêm</button>
        </form>
    </div>

    <script type="text/javascript">
    $("#btn-add").on('click', function() {
        var addImage = document.getElementById("addImage").files[0].name; //de lay ten file anh
        var addTitle = document.getElementById("addTitle").value;
        var addDesc = document.getElementById("addDesc").value;
        var addContent = document.getElementById("addContent").value;

        if (addImage == '' || addTitle == '' || addDesc == '' || addContent == '') {
            alert('Không được bỏ trống các trường');
        } else {
            $.ajax({
                url: "ajax.php",
                method: "POST",
                data: {
                    addImage: addImage,
                    addTitle: addTitle,
                    addDesc: addDesc,
                    addContent: addContent
                },
                success: function(data) {
                    alert('Thêm tin thành công');
                }
            });
        }
    });
    </script>
</body>
</html>