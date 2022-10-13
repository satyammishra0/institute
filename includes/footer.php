 <!-- ---------------------- -->
 <!-- ------ Footer here  ------>
 <!-- ---------------------- -->

 <footer class="footer-section">
     <div class="footer-container grid">
         <div class="footer-company-desc">
             <img src="<?= getImg('footer-logo.png') ?>" alt="Our logo">
             <p class="footer-company-about">
                 We understand that every student has different needs and capabilities, which is why we create such a wonderful and unique curriculum that is the best fit for every student.
             </p>
             <div class="social-icons flex flex-center">
                 <p>Follow us :</p>
                 <div class="footer-social-media-icons grid-center fb-logo">
                     <img src="<?= getImg('social-logo/fb.svg') ?>" alt="Our logo">
                 </div>
                 <div class="footer-social-media-icons grid-center">
                     <img src="<?= getImg('social-logo/insta.svg') ?>" alt="Our logo">
                 </div>
                 <div class="footer-social-media-icons grid-center">
                     <img src="<?= getImg('social-logo/linkedin.svg') ?>" alt="Our logo">
                 </div>
                 <div class="footer-social-media-icons grid-center">
                     <img src="<?= getImg('social-logo/telegram.svg') ?>" alt="Our logo">
                 </div>
                 <div class="footer-social-media-icons grid-center">
                     <img src="<?= getImg('social-logo/twitter.svg') ?>" alt="Our logo">
                 </div>
                 <div class="footer-social-media-icons grid-center">
                     <img src="<?= getImg('social-logo/utube.svg') ?>" alt="Our logo">
                 </div>
             </div>
             <p class="footer-contact-mail"><span>Contact us at :</span> <a href="mail-to:support@pw.live">support@pw.live</a></p>
         </div>
         <div class="footer-courses">
             <p class="footer-grid-heaidng">Our Courses</p>
             <nav>
                 <ul class="footer-grid-list">
                     <li><a href="<?= homePath() . 'pages/courses.php'; ?>"> Java - Foundation</a></li>
                     <li><a href="<?= homePath() . 'pages/courses.php'; ?>"> C++ - Foundation</a></li>
                 </ul>
             </nav>
         </div>
         <div class="footer-channels">
             <p class="footer-grid-heaidng">Our Channels</p>
             <nav>
                 <ul class="footer-grid-list">
                     <li><a href="">Physics Wallah</a></li>
                     <li><a href=""> Competition Wallah</a></li>
                     <li><a href="">JEE Wallah</a></li>
                     <li><a href=""> NCERT Wallah</a></li>
                     <li><a href=""> Defence Wallah(NDA)</a></li>
                     <li><a href=""> PW Foundation(9th & 10th)</a></li>
                 </ul>
             </nav>
         </div>
     </div>

     <div class="footer-bottom flex-center-between">
         <div class="footer-bottom-company-links flex">
             <a href="<?php echo homePath() . 'pages/tnc.php'; ?>">Terms & Conditions</a>
             <a href="<?php echo homePath() . 'pages/privacy.php'; ?>">Privacy & Policy</a>
             <a href="<?php echo homePath() . 'pages/contact.php'; ?>">Contact Us</a>
         </div>
         <p>
             Copyright © 2022 Physics Wallah Pvt. Ltd. All rights reserved.
         </p>
     </div>
 </footer>