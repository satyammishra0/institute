<?php

session_start();

print_r($_SESSION);
// $_SESSION['session_id'] = 1234;

?>


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
    <?php include('./includes/head.php'); ?>
    <!-- ---------------------- -->
    <!-- ------ CSS here ------>
    <!-- ---------------------- -->
    <link rel="stylesheet" href="<?= getCss('global.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('footer.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('utility.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('header.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('home.css'); ?>">
</head>

<body>

    <!-- ---------------------- -->
    <!-- ------ Header here ------>
    <!-- ---------------------- -->
    <?php include('./includes/header.php'); ?>

    <!-- ---------------------- -->
    <!--  Hero section here --  -->
    <!-- ---------------------- -->

    <section>
        <article class="hero-section grid background-property">
            <div class="hero-section-content flex-center">
                <h1>Learn from
                    <br>
                    The <b>Best Educators</b>
                    <br>
                    & <b>boost your career</b>
                </h1>
            </div>
            <div class="hero-section-courses grid grid-2">
                <div class="courses-card">
                    <div class="free-btn">FREE</div>
                    <div class="card-content">
                        <div class="course-desc-1 grid">
                            <div class="course-name-heading">
                                <p>Java Foundation</p>
                            </div>
                            <div class="course-img">
                                <img src="<?= getImg('course-goal.png') ?>" alt="Java app development">
                                <p>109 Lessons</p>
                            </div>
                        </div>
                        <div class="course-timing">
                            <h4>Starts On 21st October 2022</h4>
                            <p> SELF-PACED COURSE ●
                                6 MONTHS</p>
                            <button class="basic-button">Explore Now</button>
                        </div>
                    </div>
                </div>
                <div class="courses-card">
                    <div class="free-btn">FREE</div>
                    <div class="card-content">
                        <div class="course-desc-1 grid">
                            <div class="course-name-heading">
                                <p>C++ Foundation</p>
                            </div>
                            <div class="course-img">
                                <img src="<?= getImg('course-goal.png') ?>" alt="Java app development">
                                <p>89 Lessons</p>
                            </div>
                        </div>
                        <div class="course-timing">
                            <h4>Starts On 21st October 2022</h4>
                            <p> SELF-PACED COURSE ●
                                3 MONTHS</p>
                            <button class="basic-button">Explore Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <!-- ---------------------- -->
    <!-- Company's images slideshow here --  -->
    <!-- ---------------------- -->

    <section class="company-img-slider">
        <h2 class="main-heading">Get Coached by the best in Industry!</h2>
        <div class="company-slider flex">
            <img src="<?= getImg('google_name.svg') ?>" alt="Google Coorperation">
            <img src="<?= getImg('uber.svg') ?>" alt="Uber">
            <img src="<?= getImg('amazon.svg') ?>" alt="Amazon web services">
            <img src="<?= getImg('netflix.svg') ?>" alt="Netflix Co.">
            <img src="<?= getImg('atlassian.svg') ?>" alt="Atlassian Co.">
            <img src="<?= getImg('microsoft.svg') ?>" alt="Microsoft">
            <img src="<?= getImg('google_name.svg') ?>" alt="Google">
            <img src="<?= getImg('github.png') ?>" alt="Github Co.">
        </div>
    </section>

    <!-- ---------------------- -->
    <!-- Courses Cards here  --  -->
    <!-- ---------------------- -->

    <section class="all-courses-cards">
        <h2 class="main-heading">Upgrade with our Courses ...</h2>
        <div class="all-cards">
            <div class="hero-section-courses grid grid-2 grid-center ">
                <div class="courses-card">
                    <div class="free-btn">FREE</div>
                    <div class="card-content">
                        <div class="course-desc-1 grid">
                            <div class="course-name-heading">
                                <p>Java Foundation</p>
                            </div>
                            <div class="course-img">
                                <img src="<?= getImg('course-goal.png') ?>" alt="Java app development">
                                <p>109 Lessons</p>
                            </div>
                        </div>
                        <div class="course-timing">
                            <h4>Starts On 21st October 2022</h4>
                            <p> SELF-PACED COURSE ●
                                6 MONTHS</p>
                            <button class="basic-button">Explore Now</button>
                        </div>
                    </div>
                </div>
                <div class="courses-card">
                    <div class="free-btn">FREE</div>
                    <div class="card-content">
                        <div class="course-desc-1 grid">
                            <div class="course-name-heading">
                                <p>C++ Foundation</p>
                            </div>
                            <div class="course-img">
                                <img src="<?= getImg('course-goal.png') ?>" alt="Java app development">
                                <p>89 Lessons</p>
                            </div>
                        </div>
                        <div class="course-timing">
                            <h4>Starts On 21st October 2022</h4>
                            <p> SELF-PACED COURSE ●
                                3 MONTHS</p>
                            <button class="basic-button">Explore Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------- -->
    <!-- Skills PW provides  --  -->
    <!-- ---------------------- -->

    <section class="boost-skill-section">
        <h2 class="main-heading">How PW Skills Boost your Skill Set</h2>
        <div class="skill-box-container">
            <div class="skill-box grid">
                <div class="skill-box-content">
                    <p>Careers <br> <b>Mentorship program</b></p>
                    <p> Personlize career mentorship session with Industry Leaders to help you to prepare and chart out our career plan </p>
                </div>
                <div class="skill-box-img">
                    <img src="<?= getImg('learning-online-from-mobile.gif') ?>" alt="Boost skill with us">
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------- -->
    <!-- Our Coaches section --  -->
    <!-- ---------------------- -->

    <section class="our-coaches-section">
        <h2 class="main-heading">
            Know your Coaches
        </h2>

        <div class="profile-cards-conainer grid grid-3 ">
            <div class="profile-cards">
                <div class="profile-card-image grid grid-center">
                    <img src="<?= getImg('urvi.png') ?>" alt="Boost skill with us">
                </div>
                <div class="designation grid-center">
                    <h4>Urvi Goel</h4>
                    <p>SDE 2</p>
                </div>
                <div class="profiles-company-img grid-center">
                    <img src="<?= getImg('microsoft.svg') ?>" alt="Our Coaches">
                </div>
            </div>
            <div class="profile-cards">
                <div class="profile-card-image grid grid-center">
                    <img src="<?= getImg('manvi.png') ?>" alt="Boost skill with us">
                </div>
                <div class="designation grid-center">
                    <h4> Manvi Tyagi</h4>
                    <p>SDE </p>
                </div>
                <div class="profiles-company-img grid-center">
                    <img src="<?= getImg('linkedin_logo.png') ?>" alt="Our Coaches">
                </div>
            </div>
            <div class="profile-cards">
                <div class="profile-card-image grid grid-center">
                    <img src="<?= getImg('vishwa.png') ?>" alt="Boost skill with us">
                </div>
                <div class="designation grid-center">
                    <h4>Vishwa Mohan
                    </h4>
                    <p> Staff Engineer</p>
                </div>
                <div class="profiles-company-img grid-center">
                    <img src="<?= getImg('twitter.png') ?>" alt="Our Coaches">
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------- -->
    <!-- FAQ/ Doubts section --  -->
    <!-- ---------------------- -->
    <section class="doubts-section">
        <h2 class="main-heading">
            Still have some doubts ?
        </h2>
        <div class="doubts-container grid grid-2">
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!</p>
                    </details>
                </div>

            </div>
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!</p>
                    </details>
                </div>
            </div>
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!</p>
                    </details>
                </div>

            </div>
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>
                            PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!
                        </p>
                    </details>
                </div>
            </div>
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!</p>
                    </details>
                </div>

            </div>
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!</p>
                    </details>
                </div>
            </div>
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!</p>
                    </details>
                </div>

            </div>
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!</p>
                    </details>
                </div>
            </div>
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!</p>
                    </details>
                </div>

            </div>
            <div class="doubts">
                <div class="question">
                    <details>
                        <summary>How does PW Skills help you?</summary>
                        <p>PW Skills elevates your potential by giving you the skills to become successful in the industry you choose to be in. Its course structure focuses on real-time requirements of a working professional and disburses it to you in a simple, yet effective way!</p>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------- -->
    <!-- Footer section --  -->
    <!-- ---------------------- -->

    <?php include('./includes/footer.php'); ?>

    <!-- ---------------------- -->
    <!-- ----Including Links here -->
    <!-- ---------------------- -->
    <?php include('./includes/foot-js-links.php'); ?>

</body>

</html>