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
    <link rel="stylesheet" href="<?= getCss('contact.css'); ?>">
</head>

<body>

    <!-- ---------------------- -->
    <!-- ------ Header here ------>
    <!-- ---------------------- -->
    <?php include('../includes/header.php'); ?>

    <!-- ---------------------- -->
    <!-- Contact company info section   -->
    <!-- ---------------------- -->

    <section class="contact-company-info">
        <h2 class="main-heading">
            Company info
        </h2>
        <p class="text">
            This is the official page of Physicswallah, where you can share all your queries, feedback, complaints, or any concern you may have about our centers, courses, and programs. Physicswallah, India's leading student-oriented Edtech organization, is here to help all the students to solve their grievances. We're here to help you. We aim to solve all the queries within 7 days. You can call on Physicswallah's official Contact No. +91 9513850450, 24 x 7. If the phone is busy, we're resolving someone else's queries. We request you to contact us again after 15 minutes so that we can address your query or concern you may have regarding lectures or course material. You may notify us in the "contact us" section only. Your suggestions will help us improve and give you and all the children a bright future.
        </p>
    </section>

    <!-- ---------------------- -->
    <!-- Contact/Connect form   -->
    <!-- ---------------------- -->

    <section>
        <h2 class="main-heading" style="text-align:center">
            Contact us
        </h2>
        <div class="contact-container grid grid-2">
            <div class="contact-map-container">
                <div class="map">
                    <iframe _ngcontent-serverapp-c169="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2174420938013!2d77.36433651508234!3d28.623244482421565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce544da5a9ebf%3A0x4024cbbabd66b412!2sKLJ%20Noida%20One!5e0!3m2!1sen!2sin!4v1652965290577!5m2!1sen!2sin" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border: 0;"></iframe>
                    <div class="contact-info grid grid-2">
                        <div class="contact-info-adress">
                            <h4 class="box-headings sub-heading">Address</h4>
                            <p> KLJ Nodia one
                                B 8, Block B, Industrial Area,
                                Sector 62, Noida,
                                Uttar Pradesh 201309
                            </p>
                        </div>
                        <div class="contact-info-connect">
                            <div class="contact-info-mail">
                                <h4 class="box-headings sub-heading">Email</h4>
                                <a href="mail-to:support@pw.live">
                                    support@pw.live
                                </a>
                            </div>
                            <div class="contact-info-phone">
                                <h4 class="box-headings sub-heading">Phone No.</h4>
                                <a href="tel:7019243492">
                                    7019243492
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="contact-form-container">
                <h2 class="main-heading">
                    Any other Queries?
                </h2>
                <form action="">
                    <input placeholder="Name" type="text">
                    <input placeholder="Email" type="Email">
                    <textarea id="message" name="message" placeholder="Message"></textarea>
                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
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