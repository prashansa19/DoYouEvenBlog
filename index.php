<?php 
    include("path.php");
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
    <link rel="stylesheet" href="assets/css/style.css" class="css">
    <title>Blog</title>
</head>
<body>
    <?php include(ROOT_PATH."/app/includes/header.php") ?>
    <?php include(ROOT_PATH."/app/includes/message.php") ?>
    <!--Page wrapper-->
    <div class="page-wrapper">
        <!--Post slider-->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>
            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/image_6.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="<?php echo BASE_URL.'/single.php'?>">One Day your own life will flash in front of your eyes</a></h4>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 8,2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/image_7.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="<?php echo BASE_URL.'/single.php'?>">One Day your own life will flash in front of your eyes</a></h4>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 8,2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/image_3.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4>"<?php echo BASE_URL.'/single.php'?>">One Day your own life will flash in front of your eyes</a></h4>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 8,2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/image_4.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="<?php echo BASE_URL.'/single.php'?>">One Day your own life will flash in front of your eyes</a></h4>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 8,2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/image_5.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="<?php echo BASE_URL.'/single.php'?>">One Day your own life will flash in front of your eyes</a></h4>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 8,2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/image_1.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="<?php echo BASE_URL.'/single.php'?>">One Day your own life will flash in front of your eyes</a></h4>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 8,2020</i>
                    </div>
                </div>
                <div class="post">
                    <img src="assets/images/image_2.png" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="<?php echo BASE_URL.'/single.php'?>">One Day your own life will flash in front of your eyes</a></h4>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 8,2020</i>
                    </div>
                </div>
            </div>
        </div>
        <!--//Post slider-->
        <!--Content-->
        <div class="content clearfix">
            <!--Main content-->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>
                <div class="post clearfix">
                    <img src="assets/images/image_2.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="<?php echo BASE_URL.'/single.php'?>">The strongest and the sweetest songs yet remain to be sung</a></h2>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 11,2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Iusto mollitia maxime ipsum magni suscipit sunt?
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/image_2.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="<?php echo BASE_URL.'/single.php'?>">The strongest and the sweetest songs yet remain to be sung</a></h2>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 11,2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Iusto mollitia maxime ipsum magni suscipit sunt?
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/image_2.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="<?php echo BASE_URL.'/single.php'?>">The strongest and the sweetest songs yet remain to be sung</a></h2>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 11,2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Iusto mollitia maxime ipsum magni suscipit sunt?
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="assets/images/image_2.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="<?php echo BASE_URL.'/single.php'?>">The strongest and the sweetest songs yet remain to be sung</a></h2>
                        <i class="far fa-user"> Prashansa</i>
                        &nbsp;
                        <i class="far fa-calendar"> Jan 11,2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Iusto mollitia maxime ipsum magni suscipit sunt?
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
            </div>
            <!--//Main content-->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" id="" class="text-input" placeholder="Search...">
                    </form>
                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href=""><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--//Content-->
    </div>
    <!--//Page wrapper-->
    <!--footer-->
    <?php include(ROOT_PATH."/app/includes/footer.php") ?>
    <!--//Footer-->
    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Slick carousal-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--Custom script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>