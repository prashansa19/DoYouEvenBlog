<?php include("path.php") ?>
<?php include(ROOT_PATH."/app/controllers/users.php")?>
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
    <link rel="stylesheet" href="assets/css/style.css" class="css">
    <title>Login</title>
</head>
<body>
    <?php include(ROOT_PATH."/app/includes/header.php") ?>
    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>
            <?php include(ROOT_PATH."/app/helpers/formErrors.php") ?>
            <div>
                <label>Username</label>
                <input name="username" type="text" value="<?php echo $username; ?>" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input name="password" type="password" value="<?php echo $password; ?>" class="text-input">
            </div>
            <div>
                <button name="login-btn" type="submit" class="btn btn-big">Login</button>
            </div>
            <p>Need an account? <a href="<?php echo BASE_URL.'/register.php'?>">Sign up</a></p>
        </form>
    </div>
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Custom script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>