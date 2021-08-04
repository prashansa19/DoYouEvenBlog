<?php 
    include("../../path.php");
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
    <title>Admin Section - Manage Users</title>
</head>
<body>
    <?php include(ROOT_PATH."/app/includes/adminHeader.php"); ?>
    <!--Admin Page wrapper-->
    <div class="admin-wrapper">
        <?php include(ROOT_PATH."/app/includes/adminSidebar.php"); ?>
        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage Users</h2>
                <table>
                    <thead>
                        <th></th>
                        <th>Username</th>
                        <th>Role</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Prashansa</td>
                            <td>Admin</td>
                            <td><a href="#" class="edit">Edit</a></td>
                            <td><a href="#" class="delete">Delete</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Akshay</td>
                            <td>Author</td>
                            <td><a href="#" class="edit">Edit</a></td>
                            <td><a href="#" class="delete">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
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