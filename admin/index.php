<?php
require_once "../configuration.php";

// Validating the User with id 
if (isset($_COOKIE['UserId'])) {
    $userId = $_COOKIE['UserId'];
} else {
    header("Location:../auth/contact_number.php");
    exit();
}

// Getting the Additional data from DB using ID in Coookie

$getUserDataQuery = "SELECT * FROM `userdetails` WHERE `id`= $userId  ORDER BY `id` DESC LIMIT 1;";
$getUserQueryExecute = mysqli_query($conn, $getUserDataQuery);
$userDetails = mysqli_fetch_assoc($getUserQueryExecute);
$userName = $userDetails['name'];
$userContactNo = $userDetails['contactno'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dashboard || <?= $userName; ?></title>
    <!-- ---------------------- -->
    <!-- ------ Routes here ------>
    <!-- ---------------------- -->
    <?php include('../includes/head.php'); ?>
    <!-- ---------------------- -->
    <!-- ------ CSS here ------>
    <!-- ---------------------- -->
    <link rel="stylesheet" href="<?= getCss('global.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('home.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('about.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('utility.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('footer.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('login.css'); ?>">
    <link rel="stylesheet" href="<?= getCss('user_dashboard.css'); ?>">
</head>

<body>
    <!-- ---------------------- -->
    <!-- Dashboard container ------>
    <!-- ---------------------- -->
    <section class="dashboard-container">
        <div class="dashboard-left ">
            <div class="logo flex-center-between">
                <img src="<?= getImg('skills_logo.png'); ?>" alt=" Top svg">
                <br>
                <button id="open-btn"><a href="#">Edit Profile</a></button>
            </div>
            <div class="content-list">
                <div onclick="hideDivOne(this)" class="content-btn">
                    <button onclick="">
                        <div class="content-type flex-center">
                            <ion-icon name="documents-outline"></ion-icon>
                            <p>Courses</p>
                        </div>
                    </button>
                </div>
                <div onclick="hideDivTwo(this)" class="content-btn">
                    <button onclick="">
                        <div class="content-type flex-center">
                            <ion-icon name="document-attach-outline"></ion-icon>
                            <p>My Courses</p>
                        </div>
                    </button>
                </div>
                <div onclick="hideDivThree(this)" class="content-btn border-bottom">

                    <button onclick="">
                        <div class="content-type flex-center">
                            <ion-icon name="headset-outline"></ion-icon>
                            <p>Support</p>
                        </div>
                    </button>
                </div>
                <div onclick="hideDivFour(this)" class="content-btn">

                    <button onclick="">
                        <div class="content-type flex-center">
                            <ion-icon name="information-circle-outline"></ion-icon>
                            <p>About Us</p>
                        </div>
                    </button>
                </div>
                <div onclick="hideDivFive(this)" class="content-btn">

                    <button onclick="">
                        <div class="content-type flex-center">
                            <ion-icon name="terminal-outline"></ion-icon>
                            <p>Terms & Conditions</p>
                        </div>
                    </button>
                </div>
            </div>

        </div>
        <div class="dashboard-right">
            <!-- ---------------------- -->
            <!-- ------ Header here ------>
            <!-- ---------------------- -->
            <div class="dashboard-header flex-center-between ">
                <p class="username">Hello, <?= $userName ?></p>

                <div class="logout">
                    <div class="avatar ">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </div>
                    <a href="../auth/logout.php">
                        <p>Logout</p>
                    </a>
                </div>
            </div>
            <!-- ---------------------- -->
            <!-- MAin sections here -->
            <!-- ---------------------- -->
            <div class="content-container">

                <!-- ---------------------- -->
                <!-- All courses  here ------>
                <!-- ---------------------- -->
                <div class="all-courses-container class-selector" id="all-courses">
                    <h2>
                        Welcome to PW Skills!
                        Explore our courses
                    </h2>
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
                                    <p> SELF-PACED COURSE ???
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
                                    <p> SELF-PACED COURSE ???
                                        3 MONTHS</p>
                                    <button class="basic-button">Explore Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---------------------- -->
                <!-- My enrolled courses  here ------>
                <!-- ---------------------- -->
                <div class="my-courses-container class-selector" id="selected-couses">
                    <h2>
                        Your Enrolled Courses
                    </h2>
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
                                    <p> SELF-PACED COURSE ???
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
                                    <p> SELF-PACED COURSE ???
                                        3 MONTHS</p>
                                    <button class="basic-button">Explore Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---------------------- -->
                <!-- Support details ------>
                <!-- ---------------------- -->
                <div class="support-details class-selector" id="support-details">
                    <h2>Contact Us</h2>
                    <p> Hi <?= $userName ?>!! I'm your MITRA!!
                        <br>
                        Facing issues with Courses, Videos etc??
                        <br>
                        No problem I'm here to help you.
                    </p>
                    <button class="basic-button"><a href="">Let's chat</a></button>
                    <h4>Follow us on :</h4>
                    <div class="social-icon-container flex-center">
                        <div class="social-icon flex">
                            <a href="">
                                <img src="<?= getImg('social-logo/fb.svg') ?>" alt="Java app development">
                            </a>
                        </div>
                        <div class="social-icon flex">
                            <a href="">
                                <img src="<?= getImg('social-logo/insta.svg') ?>" alt="Java app development">
                            </a>
                        </div>
                        <div class="social-icon flex">
                            <a href="">
                                <img src="<?= getImg('social-logo/linkedin.svg') ?>" alt="Java app development">
                            </a>
                        </div>
                        <div class="social-icon flex">
                            <a href="">
                                <img src="<?= getImg('social-logo/utube.svg') ?>" alt="Java app development">
                            </a>
                        </div>
                        <div class="social-icon flex">
                            <a href="">
                                <img src="<?= getImg('social-logo/telegram.svg') ?>" alt="Java app development">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ---------------------- -->
                <!-- About us section ------>
                <!-- ---------------------- -->
                <div class="about-us class-selector" id="about-us">
                    <section class="about-owner grid-center">
                        <h2 class="main-heaidng">Founder</h2>
                        <img src="<?= getImg('alak-pandey-sir.svg'); ?>" alt="">
                        <p>
                            Physics Wallah is India's top online ed-tech platform that provides affordable and comprehensive learning experience to students of classes 6 to 12 and those preparing for JEE and NEET exams. We also provide extensive NCERT solutions, sample papers, NEET, JEE Mains, BITSAT previous year papers, which makes us a one-stop solution for all resources.

                            Physics Wallah also caters to over 3.5 million registered students and over 78 lakh+ Youtube subscribers with 4.8 rating on its app.
                        </p>
                    </section>
                </div>
                <!-- ---------------------- -->
                <!-- Privacy Policy ------>
                <!-- ---------------------- -->
                <div class="privacy-policy class-selector" id="privacy-policy">
                    <h2>
                        Terms and Conditions
                    </h2>
                    <p>
                        This privacy policy applies to all Users who access the Platform and are therefore required to read and understand the Policy before submitting any Personal Information (defined hereinafter). This ??riv????y ????li??y governs your use of the ??????li????ti??n of. 'Physicswallah', Physicswallah YouTube Channel, www. Physicswallah.live ('Website') ??nd the ??ther ??ss????i??ted ??????li????ti??ns, ??r??du??ts, Website ??nd servi??es managed by the ????m????ny. By submitting Personal Information, you are consenting to the use and processing of such information in accordance with this Policy. Third party Website may place their own cookies or other files on the Users' computer, collect data or solicit personal information from the Users, for which Physicswallah is not responsible or liable. Accordingly, Physicswallah does not make any representations concerning the privacy practices or policies of such third parties or terms of use of such Website, nor does Physicswallah guarantee the accuracy, integrity, or quality of the information, data, text, software, sound, photographs, graphics, videos, messages or other materials available on such Website/Applications. The inclusion or exclusion does not imply any endorsement by Physicswallah of the Website, the Website???s provider, or the information on the Website/Application. Physicswallah encourages the User to read the privacy policies of each such Website/Application and the User understands that it is solely such a third party who is responsible to the User in this regard. Physicswallah has taken reasonable precautions as per applicable Indian law and implemented industry standards to treat Personal Information as confidential and to protect it from unauthorized access, improper use or disclosure, modification and unlawful destruction or accidental loss of the Personal Information. We will not use or share your information with anyone except as described in this Privacy Policy. Each time you use our Service you are accepting the practices described in this Privacy Policy at that time.
                        USAGE AND RETENTION OF INFORMATION
                        We obtain the ??nf??rm??t????n you provide when you access ??nd register on the Application or Website/ or YouTube Channel or Services or ??r??du??ts. When y??u register with us, y??u gener??lly ??r??vide (??) y??ur n??me, ??ge, e mail ??ddress, l??????ti??n, ??h??ne number, password ??nd y??ur edu????ti??n??l interests; (b) tr??ns????ti??n-rel??ted inf??rm??ti??n, su??h ??s when y??u m??ke ??ur??h??ses, res????nd t?? ??ny ??ffers, ??r d??wnl????d ??r use ??????li????ti??ns fr??m us; (??) ??nf??rm??t????n you provide us when you ????nt????t us f??r hel??; (d) inf??rm??ti??n y??u enter int?? ??ur system when using the Application/Website/YouTube Channel/Servi??es/??r??du??ts, such as while ??sking d??ubts, ????rti??i????ting in dis??ussi??ns ??nd t??king tests. The s??id ??nf??rm??t????n ????lle??ted fr??m the users ????uld be categorized as ?????ers??n??l Information???, ???Sensitive Personal Information??? ??nd ?????ss????i??ted Inf??rm??ti??n???. ??ers??n??l Inf??rm??ti??n, Sensitive ??ers??n??l Inf??rm??ti??n ??nd ??ss????i??ted Inf??rm??ti??n (e????h ??s individu??lly defined under this Inf??rm??ti??n Te??hn??l??gy (Re??s??n??ble se??urity ??r????ti??es ??nd ??r????edures ??nd sensitive ??ers??n??l d??t?? ??r inf??rm??ti??n) Rules, 2011 (the ???D??t?? ??r??te??ti??n Rules???)) sh??ll ????lle??tively be referred t?? ??s 'Inf??rm??ti??n' in this ????li??y. We m??y use the Inf??rm??ti??n t?? ????nt????t y??u fr??m time t?? time, t?? ??r??vide y??u with the Servi??es, im????rt??nt inf??rm??ti??n, required n??ti??es ??nd m??rketing ??r??m??ti??ns. We will use your personal information to provide, analyze, administer and improve our services, to provide you with a personalized experience on our Website/Application (especially, by offering you services that is best suited for you), to contact you about your account and our services, to provide you customer service, to provide you with personalized marketing and to detect, prevent, mitigate and investigate fraudulent or illegal activities. We further use your personal information to determine your general geographic location, provide localized courses and classes, provide you with customized and personalized study material, recommendations, determine your Internet service provider , and help us quickly and efficiently respond to inquiries and requests and enforcing our terms and communicate with you concerning our service (for example by email, push notifications, text messaging ,and online messaging channels), so that we can send you details about new features and content available on the Website/Application, special offers, promotional announcements, surveys, and to assist you with operational requests such as password reset requests.
                    </p>
                    <h2> ??OOKIES</h2>
                    <p> We send ??????kies (sm??ll files ????nt??ining ?? string ??f ??h??r????ters) t?? y??ur ????m??uter, thereby uniquely identifying y??ur br??wser. Cookies are used t?? tr????k y??ur ??referen??es, hel?? y??u l??gin

                        f??ster, ??nd ??ggreg??ted t?? determine user trends. This d??t?? is used t?? im??r??ve ??ur ??fferings, su??h ??s ??r??viding m??re ????ntent in ??re??s ??f gre??ter interest t?? ?? m??j??rity ??f users. M??st br??wsers ??re initi??lly set u?? t?? ??????e??t ??????kies, but y??u ????n reset y??ur br??wser t?? refuse ??ll ??????kies ??r t?? indi????te when ?? ??????kie is being sent. S??me ??f ??ur fe??tures ??nd servi??es m??y n??t fun??ti??n ??r????erly if y??ur ??????kies ??re dis??bled.
                        SHARING AND DISCLOSING PERSONAL INFORMATION
                        We use other companies, agents or contractors ("Service Providers") to perform services on our behalf or to assist us with the provision of services to you. We engage Service Providers to provide marketing, advertising, communications, infrastructure and IT services, to personalize and optimize our service, to process credit card transactions or other payment methods, to provide customer service, to collect debts, to analyse and enhance data, and to process and administer consumer surveys. In the course of providing such services, these Service Providers may have access to your personal or other information. We do not authorize them to use or disclose your personal information except in connection with providing their services. We shall use Your Personal Information to ensure services with respect to the Platform are presented to You in the most effective manner, to secure the Platform and make improvements, to carry out our obligations to You, and to communicate with You. The said communication can either be by calls, text or emails and for purposes which include transactional, service, or promotional calls or messages. If at any time You wish to not receive any communication from our end You can opt-out of the same by writing to us.
                        INFORMATION SECURITY
                        We do not sell, transfer or rent your personal information to third parties for their marketing purposes without your explicit consent and we only use your information as described in the

                        Privacy Policy. We view protection of your privacy as a very important community principle. We understand clearly that you and your Information is one of our most important assets. We store and process your personal information on computers located in India that are protected by physical as well as technological security devices. We use third parties to verify and certify our privacy principles. If you object to your Information being transferred or used in this way, please do not use this Website/Application. Under no circumstances, we rent, trade, transfer or share your personal information that we have collected with any other company for their marketing purposes without your consent. We reserve the right to communicate your personal information to any third party that makes a legally-compliant request for its disclosure.
                    </p>
                    <h2> ??UBLIC FORUMS</h2>
                    <p> When you use ??ert??in features on our Website/Application/ YouTube Channel like the discussion forums and you ????st or share your ??ers??n??l inf??rm??ti??n such ??s ????mments, mess??ges, files, ??h??t??s, will be ??v??il??ble t?? ??ll users, ??nd will be in the ??ubli?? d??m??in. ??ll such sh??ring ??f inf??rm??ti??n is d??ne ??t y??ur ??wn risk. ??le??se kee?? in mind th??t if y??u dis??l??se ????rs??n??l ??nf??rm??t????n in y??ur ??r??file ??r when ????sting ??n ??ur f??rums this inf??rm??ti??n m??y be????me ??ubli??ly ??v??il??ble.
                    </p>
                    <h2> CONSULTING</h2>
                    <p> We use third parties to help us provide services to You including the fulfillment of service, processing of payments, monitoring site activity, conducting surveys, maintaining our database, administering emails, and administering contents, and to provide aggregate, comparative information on the performance of our Website/Application to us and a select group.
                    </p>
                    <h2>USER CUSTOMS</h2>
                    <p> It is open for you to customize our usage of your personal information to communicate with you, to send you marketing information, how we provide you with customized and relevant advertising, and whether you want to stay signed into your account. If you do not wish to receive marketing communications from us, you can unsubscribe from the link in the email you would receive or change your communication preferences or indicate your communication preferences. You can also reach us via email to block promotional communication to you. Keep in mind, we do not sell or rent your personal information to third parties for their marketing purposes without your explicit consent.
                    </p>
                    <h2>OWNERSHIP OF RIGHTS</h2>
                    <p> All rights, including copyright, in this Website/Application are owned by or licensed to us. Any use of this Website/Application or its contents, including copying or storing it or them in whole or part, other than for your own personal, non-commercial use is prohibited without our permission. You are prohibited from modifying, copying, distributing, transmitting, displaying, printing, publishing, selling, licensing, creating derivative works or using any content available on or through our Website/Application for commercial or public purposes. You may not modify, distribute or re-post something on this Website/Application for any purpose. You acknowledge that you do not acquire any ownership rights by downloading copyrighted material. Trademarks that are located within or on our Website/Application or a Website/Application otherwise owned or operated in conjunction with Physicswallah shall not be deemed to be in the public domain but rather the exclusive property of Physicswallah, unless such site is under license from the trademark owner thereof in which case such license is for the exclusive benefit and use of Physicswallah, unless otherwise stated.
                    </p>
                    <h2>CONSENT</h2>
                    <p> We believe th??t, every user ??f ??ur YouTube Channel/Servi??es/??r??du??ts/Website/Application must be in ?? ????siti??n t?? ??r??vide ??n inf??rmed consent ??ri??r t?? ??r??viding ??ny Inf??rm??ti??n required f??r the use ??f the YouTube Channel/Servi??es/??r??du??ts/Website/Application but in case of minors, consent for retention of data is deemed to be given by their guardians/ parents. By registering with us, y??u ??re ex??ressly ????nsenting t?? ??ur ????lle??ti??n, ??r????essing, st??ring, dis??l??sing ??nd h??ndling ??f y??ur inf??rm??ti??n ??s set f??rth in this ????li??y n??w ??nd ??s ??mended by us, It is implied that at the time of registration the parents/ guardians of a minor agree to the privacy policy and terms and conditions of the company. ??r????essing, y??ur inf??rm??ti??n in ??ny w??y, in??luding, but n??t limited t??, ????lle??ting, st??ring, deleting, using, ????mbining, sh??ring, tr??nsferring ??nd dis??l??sing inf??rm??ti??n, ??ll ??f whi??h ????tivities will t??ke ??l????e in Indi??. If y??u reside ??utside Indi?? y??ur inf??rm??ti??n will be tr??nsferred, ??r????essed ??nd st??red in ????????rd??n??e with the ??????li????ble d??t?? ??r??te??ti??n l??ws ??f Indi??. By submitting ????ntent ??n ??r thr??ugh the Servi??es (y??ur ???M??teri??l???), y??u gr??nt us ?? w??rldwide, n??n-ex??lusive, r??y??lty-free li??ense (with the right t?? subli??ense) t?? use, ??????y, re??r??du??e, ??r????ess, ??d????t, m??dify, ??ublish, tr??nsmit, dis??l??y ??nd distribute su??h M??teri??l in ??ny ??nd ??ll medi?? ??r distributi??n meth??ds (n??w kn??wn ??r l??ter devel????ed) ??nd t?? ??ss????i??te y??ur M??teri??l with y??u, ex??e??t ??s des??ribed bel??w. Y??u ??gree th??t ??thers m??y use Y??ur M??teri??l in the s??me w??y ??s ??ny ??ther ????ntent ??v??il??ble thr??ugh the Servi??es. ??ther users ??f the Servi??es m??y f??rk, twe??k ??nd re??ur????se y??ur M??teri??l in ????????rd??n??e with these Terms. If y??u delete y??ur user ????????unt y??ur M??teri??l ??nd n??me m??y rem??in ??v??il??ble thr??ugh the Servi??es.
                    </p>
                    <h2>EXCLUSIVE SERVICE</h2>
                    <p> By having a Physicswallah account, you have explicitly given consent for us to capture images camera/mic permissions to make video calls and record the same.
                    </p>
                    <h2>SECURITY</h2>
                    <p> We ??re ????n??erned ??b??ut s??fegu??rding the ????nfidenti??lity ??f y??ur Inf??rm??ti??n. We ??r??vide ??hysi????l, ele??tr??ni??, ??nd ??r????edur??l s??fegu??rds t?? ??r??te??t Inf??rm??ti??n we ??r????ess ??nd m??int??in. F??r ex??m??le, we limit ??????ess t?? this Inf??rm??ti??n t?? ??uth??rized em??l??yees ??nly wh?? need t?? kn??w th??t inf??rm??ti??n in ??rder t?? ????er??te, devel???? ??r im??r??ve ??ur YouTube

                        Channel/Servi??es/??r??du??ts/Website/Application. ??le??se be ??w??re th??t, ??lth??ugh we ende??v??r t?? ??r??vide re??s??n??ble se??urity f??r inf??rm??ti??n we ??r????ess ??nd m??int??in, n?? security system ????n ??revent ??ll ????tenti??l se??urity bre????hes.
                    </p>
                    <h2> Physicswallah MAY DISCLOSE INFORMATION IN THE FOLLOWING SITUATION: -
                        <br> ??? as required by law;
                    </h2>
                    <p>
                        <li> - to enforce applicable ???Terms of Use???, including investigation of potential violations thereof;
                        </li>
                        <li>
                            - when we believe in good faith that the disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, address security or technical issues or respond to a government request;
                        </li>
                        <li>
                            - with our trusted service providers. CONSENT TO THIS POLICY The Terms of Use Agreement is incorporated herein by reference in its entirety. By submitting data to us or our agent or using the Site, you consent to our use of your data in the manner set out in this Privacy Policy.
                        </li>
                    </p>
                    <h2> UPDATES TO POLICY</h2>
                    <p> ??s the ??ompany ev??lves, ??ur ??riv????y ????li??y will need t?? ev??lve ??s well t?? ????ver new situ??ti??ns. Y??u ??re ??dvised t?? review this ????li??y regul??rly f??r ??ny ??h??nges, ??s ????ntinued use is deemed ??????r??v??l ??f ??ll ??h??nges.
                    </p>
                    <h2> LIMITATION OF LIABILITY
                    </h2>
                    <p> The user acknowledge that the c??m????ny is n??t the m??nuf????turer ??f the ????ntent ??n the Website or Application ??r YouTube Channel ??nd shall n??t be li??ble f??r ??ny re??er??ussi??ns f??r the ????ntent.

                        In n?? event sh??ll the ????m????ny, its ??ffi??ers, dire??t??rs, em??l??yees, ????rtners ??r ??gents be liable t?? Y??u ??r ??ny third ????rty f??r ??ny s??e??i??l, in??ident??l, indire??t, ????nsequenti??l ??r ??unitive d??m??ges wh??ts??ever, in??luding th??se resulting fr??m l??ss ??f use, d??t?? ??r ??r??fits ??r ??ny ??ther ??l??im ??rising ??ut, ??f ??r in ????nne??ti??n with, Y??ur use ??f, ??r ??????ess t??, the Website/Application/YouTube Channel.

                        In the event of Your bre????h of these Terms, you agree that the ????m????ny will be irre????r??bly harmed and may not have an ??dequ??te remedy in money or damages. The ????m????ny therefore, shall be entitled in such event t?? ??bt??in ??n injunction ??g??inst such ?? bre????h fr??m ??ny ????urt ??f ????m??etent jurisdi??ti??n. The ????m????ny's right t?? ??bt??in su??h relief sh??ll n??t limit its right t?? ??bt??in ??ther remedies. ??ny vi??l??ti??n by You of the terms ??f this ??l??use m??y result in immedi??te sus??ensi??n ??r termin??ti??n ??f Y??ur ????????unts ??????rt fr??m ??ny leg??l remedy th??t the ????m????ny ????n ??v??il. In su??h inst??n??es, the ????m????ny m??y ??ls?? dis??l??se Y??ur ????????unt Inf??rm??ti??n if required by ??ny G??vernment??l ??r leg??l ??uth??rity. Y??u underst??nd th??t the vi??l??ti??n ??f these Terms ????uld ??ls?? result in ??ivil ??r ??rimin??l li??bility under ??????li????ble l??ws.
                    </p>
                    <h2> Refund Policy</h2>
                    <p> When you buy our products/services, your purchase is not entitled for any refund. If you buy any online batch/service, it is non-refundable. If you purchase any batch by mistake, you can request to change it to another batch of the same amount within 10 days of the purchase. We recommend you to first check the complete system and then decide to make a payment in case of books. If the product received is damaged/lost by the courier partner, the student is entitled for a replacement. However, in case of wrong address given or books not accepted by students the purchase will not be entitled for any kind of refund.
                    </p>
                    <h2> CONTACT US:</h2>
                    <p> If you have any questions about this Privacy Policy, You can contact us
                        <li>
                            - By visiting this page on our Website/Application: https://www.pw.live/
                        </li>
                        <li> - By emailing us at: support@pw.live
                        </li>
                    </p>
                </div>
            </div>

            <!-- Set the CSS -->
            <dialog class="profile-dialog" id="modal">
                <div class="dialog-header flex-center-between">
                    <h2>Edit Profile</h2>
                    <button id="close-btn" class="flex-center">X</button>
                </div>
                <div class="dialog-container">
                    <div class="dialog-field-container flex">
                        <label for="">Name: </label>
                        <input type="text" value="<?= $userName ?>">
                    </div>
                    <div class="dialog-field-container flex-center">
                        <label for="">Gender: </label>
                        <input type="checkbox"><label for="male">Male</label>
                        <input type="checkbox"><label for="Female">Female</label>
                    </div>
                    <div class="dialog-field-container flex">
                        <label for="">Mobile No. : </label>
                        <input type="Number" value="<?= $userContactNo  ?>">
                    </div>
                    <div class="dialog-field-container flex">
                        <label for="">Mail: </label>
                        <input type="Email">
                    </div>
                    <div class="dialog-field-container flex">
                        <label for="">Language Prefered: </label>
                        <select name="English" id="English" value="English">
                            <option value="Hignlish">Hignlish</option>
                            <option value="English">English</option>
                        </select>

                    </div>
                </div>
                <div class="dialog-footer flex-center">
                    <button>Save Details</button>
                </div>
            </dialog>
        </div>
    </section>


    <?php include('../includes/foot-js-links.php'); ?>

    <!-- ---------------------- -->
    <!-- Main page JavaScript ------>
    <!-- ---------------------- -->

    <script src="<?= getJs('dashboard.js'); ?>"></script>
</body>

</html>