<?php 
    include("../../path.php");
    include(ROOT_PATH."/app/controllers/topics.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/ddb52df6e8.js" crossorigin="anonymous"></script>

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Yomogi&display=swap" rel="stylesheet">

    <!-- Custom Styling-->
    <link rel="stylesheet" href="../../assets/css/style.css" class="css">
    <!-- Admin Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css" class="css">
    <title>Admin Section - Edit Post</title>
</head>
<body>
    <?php include(ROOT_PATH."/app/includes/adminHeader.php"); ?>
    <!--Admin Page wrapper-->
    <div class="admin-wrapper">
        <?php include(ROOT_PATH."/app/includes/adminSidebar.php"); ?>
        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit Post</h2>
                <form action="create.php" method="post">
                    <div>
                        <label>Username</label>
                        <input name="username" type="text" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input name="email" type="email" class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input name="password" type="password" class="text-input">
                    </div>
                    <div>
                        <label>Password confirmation</label>
                        <input name="email" type="passwordConf" class="text-input">
                    </div>
                    <div>
                        <label>Role</label>
                        <select name="role" class="text-input">
                            <option value="Admin">Admin</option>
                            <option value="Author">Author</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-big">Update Post</button>
                    </div>
                </form>
            </div>
        </div>
        <!--//Admin Content-->
    </div>
    <!--//Page wrapper-->
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <!--Custom script-->
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>