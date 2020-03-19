<!doctype html>
<?php session_start() ?>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contacter nous !</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <logo> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- fin -->

    <!-- liens pour le style du templates-->
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
    <!-- Style pour la carte -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <!-- fin-->
    <style type="text/css">
           #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
               height:400px;
           }
       </style>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- code pour la Nav-bar -->
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

 <!-- Code permettant de mettre en place du texte sur l'image de la nav bar -->
 <div class="breadcam_area breadcam_bg_1 zigzag_bg_2">
    <div class="breadcam_inner">
       <div class="breadcam_text">
          <h3>Contact</h3>
          <p>Vous avez besoin de renseignement, sur la provenance des produits, ou encore l'ouverture des nouveaux restaurants, contacter nous !<br>
       </div>
    </div>
 </div>
 <!-- fin -->

    <!-- ================ Debut de la carte ================= -->
    <section class="contact-section">

            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                  <div id="map">
 	    <!-- Ici s'affichera la carte -->
 	</div>

  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	<script type="text/javascript">
            // On initialise la latitude et la longitude de Paris (centre de la carte)
            var lat = 48.852969;
            var lon = 2.349903;
            var macarte = null;
            // Fonction d'initialisation de la carte
            function initMap() {
                // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
            }
            window.onload = function(){
		// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé

		initMap();
    var marker = L.marker([48.8561, 2.2980]).addTo(macarte);
            };
        </script>
        <!-- Début du formulaire de contact -->
                </div>
                <form action='Manager/manager_contact.php' method='POST'>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Contacter nous !</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">

                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" placeholder=" Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nom" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ' nom'" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="sujet" id="sujet" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sujet'" placeholder="Sujet">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="button button-contactForm boxed-btn" value='Valider'>
                            </div>
                        </form>
                    </div>
                    <!-- Fin du formulaire -->

                    <!-- Code permettant de mettre en place les coordonnées du restaurant -->
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Paris, Ile de France</h3>
                                <p>Champ de Mars, Avenue de la Bourdonnais, 75007 Paris</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>07 00 00 00 00</h3>
                                <p>Disponible de 9H a 17H</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>Steck.House@gmail.com</h3>
                                <p>Envoyer nous un email à n'importe quel moment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </form>
    <!-- fin -->

    <!-- début du footer -->
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
    <!-- fin du flooter  -->

        <!-- liens pour le JS -->
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
        <!-- fin -->

    </body>

    </html>
