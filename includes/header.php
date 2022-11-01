<!-- ---------------------- -->
<!-- ------ Header here ------>
<!-- ---------------------- -->

<header class="flex-center-between ">
    <div class="header-logo">
        <a href="<?= homePath(); ?>">
            <img src="<?= getImg('skills_logo.png') ?>" alt="Web developement">
        </a>
    </div>
    <div class="navs">
        <nav class="flex-center">
            <li><a href="<?= homePath() . 'admin/index.php'; ?>">Courses</a></li>

            <li><a href="<?= homePath() . 'pages/about.php'; ?>">About Us</a></li>
            <li><a href="<?= homePath() . 'pages/contact.php'; ?>">Contact Us</a></li>
            <button onclick="window.location.href='<?= INCLUDEPATH . '/header.php'; ?>'"><span>Login/ Register</span></button>
        </nav>
    </div>
</header>