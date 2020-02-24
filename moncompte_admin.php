<!doctype html>
<?php session_start() ?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mon compte</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">


    <link rel="stylesheet" type="text/css" href="admin/css/main.css">
   <!--===============================================================================================-->

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

   <!-- header-start -->
   <header>
       <div class="header-area ">
           <div id="sticky-header" class="main-header-area">
               <div class="container">
                   <div class="row align-items-center">
                       <div class="col-xl-10 col-lg-10">
                           <div class="main-menu d-none d-lg-block">
                               <nav>
                                   <ul class="mein_menu_list" id="navigation">
                                       <li><a href="reservation.php">Reservation</a></li>
                                       <li><a href="Index.php">Acceuil</a></li>
                                       <li><a href="gallery.php">gallery</a></li>
                                       <div class="logo-img d-none d-lg-block">
                                               <a href="Index.php">
                                                   <img src="img/logo.png" alt="">
                                               </a>
                                           </div>
                                       <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                           <ul class="submenu">
                                               <li><a href="blog.php">blog</a></li>
                                               <li><a href="single-blog.html">single-blog</a></li>
                                           </ul>
                                       </li>
                                       <li><a href="contact.php">Contact</a></li>
                                   </ul>
                               </nav>
                           </div>
                       </div>
                       <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                           <div class="custom_order">
                               <?php
                               if (isset($_SESSION['email']))
                               { ?>

                                 <li><a href="moncompte_admin.php" class="boxed_btn_white"><span>Mon compte</span></a></li></div>
</div>
<?php
                               }
                               else
                               {
                                   ?>
                                 <a href="connexion.php" class="boxed_btn_white">Connexion</a>
                               <?php  }?>
                           </div>
                       </div>
                       <div class="col-12">
                           <div class="mobile_menu d-block d-lg-none"></div>
                       </div>
                       <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                               <a href="index.html">
                                   <img src="img/logo.png" alt="">
                               </a>
                           </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
 <!-- header-end -->

 <!-- breadcam_area_start -->
 <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
    <div class="breadcam_inner">
       <div class="breadcam_text">
          <h3>Mon compte</h3>
          <p>Bienvenue sur votre compte, ici vous pourez consulter vos reservation et plus ...<br>
       </div>
    </div>
 </div>
 <!-- breadcam_area_end -->

       <table class="table">
          <thead>
             <tr>
               <th>id</th>
                <th>nom</th>
                <th>telephone</th>
                <th>heure</th>
                <th>menu</th>
                <th>personne</th>
             </tr>
          </thead>
          <tbody>
     <?php
     $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8', 'root', '');

     $req = $bdd->query('SELECT * from reservation');
     $donne = $req->fetchall();

     foreach($donne as $value){
     echo '<tr>';
     echo '<td>'.$value['id'].'</td>';
     echo '<td>'.$value['nom'].'</td>';
       echo '<td>'.$value['telephone'].'</td>';
         echo '<td>'.$value['heure'].'</td>';
           echo '<td>'.$value['menu'].'</td>';
             echo '<td>'.$value['personne'].'</td>';
               ?>
     <?php echo '</tr>';
     }
      ?>
 </table>
 
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">

                  <form action="deconnexion.php" method="POST">
                  <center><input type="submit" class="button button-contactForm boxed-btn" value='Déconnexion'></center>

                  </form>

                </div>
                            </div>
        </section>

    <!-- ================ contact section end ================= -->

    <!-- footer-start -->
    <footer class="footer_area footer-bg zigzag_bg_1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Top Products
                            </h3>
                            <ul>
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#"> Manage Reputation</a></li>
                                <li><a href="#">Power Tools</a></li>
                                <li><a href="#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Quick Links
                            </h3>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#"> Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Features
                            </h3>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Resources
                            </h3>
                            <ul>
                                <li><a href="#">Guides</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Experts</a></li>
                                <li><a href="#">Agencies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                      <div class="col-xl-4 col-md-12 col-lg-4">
                          <div class="footer_widget">
                              <h3 class="heading">
                                      Newsletter
                              </h3>
                              <form method="POST" action="news.php">
                                  <input type="text" name="email" placeholder="Votre email" method="POST" >
                                  <button type="submit"> <i class="ti-arrow-right"></i> </button>
                              </form>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-12 col-lg-8">
                        <div class="copyright">
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-4">
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-behance"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>

        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>

        <script src="admin/js/main.js"></script>
        <!--===============================================================================================-->
         <script src="admin/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
         <script src="admin/vendor/bootstrap/js/popper.js"></script>
         <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
         <script src="admin/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
         <script src="admin/js/main.js"></script>

    </body>

    </html>
