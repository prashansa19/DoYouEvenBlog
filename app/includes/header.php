    <header>
        <a href="<?php echo BASE_URL.'/index.php'?>" class="logo">
            <h1 class="logo-text">DoYouEven<span>Blog</span>?</h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="<?php echo BASE_URL.'/index.php'?>" class="a1">Home</a></li>
            <li><a href="#" class="a1">About</a></li>
            <li><a href="#" class="a1">Services</a></li>
            <?php if(isset($_SESSION['id'])): ?>
                <li>
                    <a href="#" class="a1">
                        <i class="fa fa-user"></i>
                            <?php echo $_SESSION['username']; ?>
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul>
                        <?php if($_SESSION['admin']): ?>
                            <li><a href="<?php echo BASE_URL.'/admin/dashboard.php'?>" class="a1">Dashboard</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo BASE_URL.'/logout.php'?>" class="logout a1">Logout</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="<?php echo BASE_URL.'/register.php'?>">Sign Up</a></li>
                <li><a href="<?php echo BASE_URL.'/login.php'?>">Log in</a></li>
            <?php endif; ?>
        </ul>   
    </header>