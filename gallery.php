<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Titre-->
    <title>Gallery</title>

    <!-- logo -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- Début du style -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
<link rel="stylesheet" href="assets/css/style2.css">
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
    <!-- Fin du style-->
</head>
<body>

  <!-- Début de la nav-bar -->
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
                                      <li><a href="blog.php">blog</a>
                                      </li>
                                      <li><a href="contact.php">Contact</a></li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                      <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                          <div class="custom_order">
                              <?php
                            if (empty($_SESSION['login']) && empty($_SESSION['role'])){
                              ?> <li><a href="connexion.php" class="boxed_btn_white"><span>Connexion</span></a></li>
                            <?php  }
                              if (isset($_SESSION['role'])){
                            if ($_SESSION['role'] == 'admin'){
                             ?>
                                <li><a href="moncompte_admin.php" class="boxed_btn_white"><span>Mon compte</span></a></li>

                              <?php
                            }
                              if ($_SESSION['role'] == 'user'){

                                 ?>
                                <li><a href="moncompte.php" class="boxed_btn_white"><span>Mon compte</span></a></li>
                              <?php }}
                            ?>

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
  <!-- fin -->


<!-- Code permettat de mettre en place du texte sur l'image de la nav-bar -->
  <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
      <div class="breadcam_inner">
          <div class="breadcam_text">
              <h3>Gallery</h3>
              <p>Voici nos plus grand succés, qui vous ravivront les papiles et qui vont donneront de la joie et de la bonne humeur. <br>
          </div>
      </div>
  </div>
  <!-- fin -->



    <!-- Code permettant la présentation de la page galerie -->
    <section class="welcome-area section-padding2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="welcome-img">
                        <img src="assets/images/welcome-bg.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="welcome-text mt-5 mt-md-0">
                        <h3><span class="style-change">Bienvenue</span> <br>Steak house shop</h3>
                        <p class="pt-3">Chez nous, on prend soin de vous </p>
                        <p>Avec nos produit 100% local Français, </p>
                        <a href="reservation.php" class="template-btn3 mt-">Reserver une table <span><i class="fa fa-long-arrow-right"></i></span></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin -->

    <!-- Code permettant de réaliser un classement des plats speciaux -->
    <div class="deshes-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Nos <span>plat</span> spéciaux</h3>
                        <p><i>Pour des moments tres speciaux.</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-center">
                    <h1>01.</h1>
                    <div class="deshes-text">
                        <h3><span>Saveur</span><br> du Japon</h3>
                        <p class="pt-3">Notre menu japonais avec 5 varienté de Sushi ou maki au choix avec en plus 10 brochettes de boeuf ou poulet fried et pour finir des raviolis aux crevettes, poulet ou légumes cuit a la vapeur.</p>
                        <span class="style-change">20.00€</span>
                        <a href="reservation.php" class="template-btn3 mt-">Reserver une table <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="assets/images/deshes1.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="assets/images/deshes2.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2">
                    <h1>02.</h1>
                    <div class="deshes-text">
                        <h3><span>Poulet</span><br> braisé aux milles epices</h3>
                        <p class="pt-3">Notre poulet braisé cuit aux bois de hêtre et assaisonée de différentes epices tel que l'aneth, la canelle ou encore du girofle avec sa sauce aigre doux et c'est pomme de terre sauté. Acompagné de riz parfumé aux lotus.</p>
                        <span class="style-change">15.00€</span>
                        <a href="reservation.php" class="template-btn3 mt-">Reserver une table <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin  -->

    <!-- Code permettant de présenter différents avis  -->
  <p><section class="testimonial-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Les cliens <span>nous donnent leur avis</span></h3>
                        <p><i>Lieux calme et agréable pour manger, un service rapide et efficace !</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel">
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="assets/images/photo.jpg" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>Bhujun Yanish</h5>
                                <span><i>Client régulier</i></span>
                                <p class="pt-3">Je mange ici de maniére réguliere, les prix sont convenables et le service et trés rapide tel un fast food.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="assets/images/chef.png" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>Philipe etchebest</h5>
                                <span><i>Chef étoilé</i></span>
                                <p class="pt-3">On ma vivement conseilée ce restaurant et j'ai etais surpris des la premiere boucher. Restaurants de tres grande classe.</p>
                            </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="assets/images/customer1.png" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>adame nesane</h5>
                                <span><i>Serveur</i></span>
                                <p class="pt-3">Moi qui suis serveur, je n'est jamais vue un restaurent pareille, ces à ce demander si les plats ne sont pas deja cuit a l'avance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section></p>
    <!-- fin des avis  -->

    <!-- debut du footer -->
    <footer class="footer_area footer-bg zigzag_bg_1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Acces :
                            </h3>
                            <ul>
                                <li><a>Metro 8 :École Militaire</a></li>
                                <li><a>Bus: 69, 87, 82, 92, 28 ou 80</a></li>
                                <li><a>Velib : Station 7103, 2 rue de belgrade</a></li>
                                <li><a>Velib : Station 15105, 84 rue de la federation</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Besoin de quelque chose ?
                            </h3>
                            <ul>
                                <li><a href="Contact.php">Nous contacter ?</a></li>
                                <li><a href="Reservation.php">Passer commande ?</a></li>
                                <li><a href="connexion.php">Se connecter ?</a></li>
                                <li><a href="Contact.php">Venir nous rencontrer ?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    A venir bientot !
                            </h3>
                            <ul>
                                <li><a>Jobs</a></li>
                                <li><a>Candidature spontané</a></li>
                                <li><a>Relation profesionneles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Notre image !
                            </h3>
                            <ul>
                                <li><a href="index.php">Nos plats speciaux</a></li>
                                <li><a href="gallery.php">Nos meilleur plats</a></li>
                                <li><a href="blog.php">Notre blog</a></li>
                            </ul>
                        </div>
                    </div>
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
                                <li><a href="https://fr-fr.facebook.com/"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="https://twitter.com/?lang=fr"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="https://dribbble.com/"> <i class="fa fa-dribbble"></i> </a></li>
                                <li><a href="https://www.behance.net/"> <i class="fa fa-behance"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- fin du footer -->




      <!-- Début du JS -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>


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

    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <!-- fin du js-->
</body>
</html>
