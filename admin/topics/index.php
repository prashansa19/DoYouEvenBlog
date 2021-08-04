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
    <title>Admin Section - Manage Topic</title>
</head>
<body>
    <?php include(ROOT_PATH."/app/includes/adminHeader.php"); ?>
    <!--Admin Page wrapper-->
    <div class="admin-wrapper">
        <?php include(ROOT_PATH."/app/includes/adminSidebar.php"); ?>
        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topic</a>
            </div>
            <div class="content">
                <h2 class="page-title">Manage Topics</h2>
                <?php include(ROOT_PATH."/app/includes/message.php") ?>
                <table>
                    <thead>
                        <th></th>
                        <th>Title</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($topics as $key => $topic): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $topic['name']; ?></td>
                                <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">Edit</a></td>
                                <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">Delete</a></td>
                            </tr> 
                        <?php endforeach; ?>
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