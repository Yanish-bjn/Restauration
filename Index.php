<!doctype html>
<?php session_start(); ?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Acceuil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- logo -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">

    <!-- Style de la page -->
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
    <!-- fin du style -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Début de la nav bar-->
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
    <!-- fin de la nav bar -->

    <!--code permettant de mettre en place du texte sur l'image de la nav bar-->
    <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
        <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3>Acceuil</h3>
                <p>Bienvenue chez Steack shop le restaurants specialiser dans la revistite des plats du monde entier<br>
            </div>
        </div>
    </div>
    <!-- breadcam_area_end -->

    <!-- Présentation des meilleur plats + description des plats  -->
    <div class="order_area">
        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>Voici nos nouveaux plats</h3>
                            <p>Nouveaux plat de nos chef etoiles revister<br> L'arriver d'un plat 100% vegetariens, d'un plat mexicans, d'une glace et d'un pain fait maison. Venez vite ! ...</p>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="img/order/order-1.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="Reservation.php">Salade des milles legumes spécial vegétarien</a></h3>
                            <p>Olives  |   Tomate <br>
                                    Figues   |   Mache <br>
                                    Fromage blanc
                            </p>
                            <a href="Reservation.php" class="boxed_btn">Reserver maintenant !</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="img/order/order-2.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="Reservation.php">Viande cuite aux feux de bois accompagné de tomate garnis</a></h3>
                            <p>Filet de poulet   |   Tomate <br>
                                    Viande haché   |   Legumes assaisonée <br>
                                    Sauce au poivre
                            </p>
                            <a href="Reservation.php" class="boxed_btn">Reserver maintenant !</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="img/order/order-3.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="Reservation.php">Galette de riz accompagné de poulet fried</a></h3>
                            <p>Poulet friee   |   Galette de riz <br>
                                    Pomme de terre   |   Salade <br>
                                    Sauce aigre doux
                            </p>
                            <a href="Reservation.php" class="boxed_btn">Reserver maintenant !</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="img/order/order-4.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="Reservation.php">Saumon fumée avec ces légumes bouilis</a></h3>
                            <p>Saumé fuméé   |   Legumes du soleil<br>
                                    carotte   |   Legumes boulils <br>
                                    Sauce hollandaise
                            </p>
                            <a href="Reservation.php" class="boxed_btn">Reserver maintenant!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="img/order/order-5.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="#">Glace a la framboise et son coulis de fraise</a></h3>
                            <p>Framboise   |   Fraise <br>
                                    Coulis de fraise   |    <br>
                                      Acompagné de glace a la vanille
                            </p>
                            <a href="Reservation.php" class="boxed_btn">Reserver maintenant!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="img/order/order-6.png" alt="">
                            <div class="order_prise">
                                <span>10.00</span>
                            </div>
                        </div>
                        <div class="order_info">
                            <h3><a href="Reservation.php">Pain Italien frais servis avec chaque plat</a></h3>
                            <p>Pain Italien   |   Graines de lin brun <br>
                                    Farine de blé complet   |   Graines de courges <br>
                                    Graines de tournesol
                            </p>
                            <a href="Reservation.php" class="boxed_btn">Reserver maintenant!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin -->

    <!-- Début du footer -->
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
    <!-- Fin du footer -->


    <!-- Début du JS -->
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
 <!-- Fin-->
</body>

</html>
