<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW Skills</title>
    <!-- ---------------------- -->
    <!-- ------ Routes here ------>
    <!-- ---------------------- -->
    <?php include('../includes/head.php'); ?>
    <!-- ---------------------- -->
    <!-- ------ CSS here ------>
    <!-- ---------------------- -->
    <link rel="stylesheet" href="<?= getCss('global.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('footer.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('utility.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('header.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('about.css'); ?>">
</head>

<body>

    <!-- ---------------------- -->
    <!-- ------ Header here ------>
    <!-- ---------------------- -->
    <?php include('../includes/header.php'); ?>


    <!-- ---------------------- -->
    <!-- About us Description section --  -->
    <!-- ---------------------- -->

    <section class="about-header-img background-property grid grid-2">
        <div class="about-header-gradient"></div>
        <div class="about-header-content">
            HELLO
            WE ARE
            <br><span>PW TEAM</span>
        </div>
    </section>

    <!-- ---------------------- -->
    <!-- About us Company Details  --  -->
    <!-- ---------------------- -->

    <section class="about-company-desc">
        <h2 class="main-heading">
            About Us
        </h2>
        <h4 class="sub-heading">
            Your journey to your dream job begins here!
        </h4>
        <p>
            <br><br> As a people-centric “Opportunity-For-All’ organization, PW believes that career specializations should not be ‘bought’, it should be ‘developed’. This was why, ‘PW Skills’ was born.
            <br><br> PW Skills is the direct-result of helping every person in India have a successful career, without having to invest enormous amounts of money. In PW Skills, you can upgrade your professional skill-set with focused courses in multiple categories and domains. With the latest technology, interactive and engaging pedagogy, industry partners and world-class faculty, PW Skills creates an immersive learning experience for all our students. In true PW fashion, all courses are structured and disbursed in superlative quality, while also being extremely affordable. You can exponentially increase your chances to get entry into the best companies of your respective domains, such as Software Development, Business Analytics, Business Development, Digital Marketing and more!
            Unlike other similar upskilling institutions, all the fundamentals-building courses are 100% FREE! ANYONE with the will and commitment of fast-tracking their career, can join PW Skills and upgrade their skill-set! PW Skills Courses are available for Graduates, Post-Graduates & Professionals. Add the career-boosting edge to your resume, today!
        </p>
    </section>

    <!-- ---------------------- -->
    <!-- About Owner  --  -->
    <!-- ---------------------- -->

    <section class="about-owner grid-center">
        <h2 class="main-heaidng">Founder</h2>
        <img src="<?= getImg('alak-pandey-sir.svg'); ?>" alt="">
        <p>
            Physics Wallah is India's top online ed-tech platform that provides affordable and comprehensive learning experience to students of classes 6 to 12 and those preparing for JEE and NEET exams. We also provide extensive NCERT solutions, sample papers, NEET, JEE Mains, BITSAT previous year papers, which makes us a one-stop solution for all resources.

            Physics Wallah also caters to over 3.5 million registered students and over 78 lakh+ Youtube subscribers with 4.8 rating on its app.
        </p>
    </section>
    <!-- ---------------------- -->
    <!-- Footer section --  -->
    <!-- ---------------------- -->

    <?php include('../includes/footer.php'); ?>

    <!-- ---------------------- -->
    <!-- ----Including Links here -->
    <!-- ---------------------- -->
    <?php include('../includes/foot-js-links.php'); ?>

</body>

</html>