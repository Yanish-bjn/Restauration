<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>

    <!-- logo -->
    <link rel="stylesheet" href="Reservation/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Liens pour le css -->
    <link rel="stylesheet" href="Reservation/css/style.css">
    <link rel="stylesheet" href="Reservation\scss\common\global.scss"
</head>
<body>

    <div class="main">
  <!-- Début du formulaire -->
        <div class="container">
            <div class="booking-content">
                <div class="booking-image">
                    <img class="booking-img" src="Reservation/images/form-img.jpg" alt="Booking Image">
                </div>
                <div class="booking-form">
                    <form id="booking-form" action='Manager/manager_reservation.php' method='POST'>
                        <h2>Reserver une table !</h2>
                        <div class="form-group form-input">
                            <input type="text" name="nom" id="name" value="" required/>
                            <label for="name" class="form-label">Votre nom</label>
                        </div>
                        <div class="form-group form-input">
                            <input type="text" name="email" id="phone" value="" required />
                            <label for="email" class="form-label">Votre email</label>
                        </div>
                        <div class="form-group">
                            <div class="select-list">
                              <p>  <select  name="heure" required></p>
                                    <option value="">Heure</option>
                                    <option value="12H00">12H00</option>
                                    <option value="21H00">21H00</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="select-list">
                                <select  name="menu" required>
                                    <option value="menu">Menu</option>
                                    <option value="salade nicoise">salade nicoise</option>
                                    <option value="Burger frites maison">Burger frites maison</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-radio">
                            <label class="label-radio"> Selectioner le nombre de personne</label>
                            <div class="radio-item-list">
                                <span class="radio-item">
                                    <input type="radio" name="personne" value="2" id="number_people_2" />
                                    <label for="number_people_2">2</label>
                                </span>
                                <span class="radio-item active">
                                    <input type="radio" name="personne" value="4" id="number_people_4" checked="checked" />
                                    <label for="number_people_4">4</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="personne" value="6" id="number_people_6" />
                                    <label for="number_people_6">6</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="personne" value="8" id="number_people_8" />
                                    <label for="number_people_8">8</label>
                                </span>
                                <span class="radio-item">
                                    <input type="radio" name="personne" value="10" id="number_people_10" />
                                    <label for="number_people_10">10</label>
                                </span>
                            </div>
                        </div>
                          <!--Fin du formulaire -->
                        <div class="form-submit">
                            <input type="submit" value="Reserver" class="submit" id="submit" />   <!-- Bouton permettant d'envoyer les données -->
                            <a href="#" class="vertify-booking">Verfier votre reservation sur votre telephone</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Liens JS -->
    <script src="Reservation/vendor/jquery/jquery.min.js"></script>
    <script src="Reservation/js/main.js"></script>
      <!--fin-->
</body>
</html>
