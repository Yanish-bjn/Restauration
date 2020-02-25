<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title><!-- Titre -->

    <!-- logo -->
    <link rel="stylesheet" href="inscription/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- css -->
    <link rel="stylesheet" href="inscription/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Début du formulaire -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Inscription</h2>
                        <form method="POST" action="manager_inscription.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom" id="name" placeholder="Votre nom"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mdp" id="pass" placeholder="Mot de passe"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="tel" name="telephone" id="re_pass" placeholder="Numero de telephone" maxlength="10" minlength="10"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>j'accepte les <a href="#" class="term-service">termes et services</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Enregistrer"/><!-- Bouton permettant l'envoie des données -->
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="Inscription/images/menu.png" alt="sing up image"></figure>
                        <a href="connexion.php" class="signup-image-link">Deja membre</a><!-- Bouton permettant d'être rediriger vers la page connexion -->
                    </div>
                </div>
            </div>
        </section>

    </div>
<!-- Fin du formulaire -->
    <!-- Début du JS -->
    <script src="Inscription/vendor/jquery/jquery.min.js"></script>
    <script src="Inscription/js/main.js"></script>
</body><!-- fin -->
</html>
