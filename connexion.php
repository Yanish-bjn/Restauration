<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="Connexion/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Connexion/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Connexion/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Connexion/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Connexion/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Connexion/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Connexion/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Connexion/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Connexion/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Connexion/css/util.css">
	<link rel="stylesheet" type="text/css" href="Connexion/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('Connexion/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="manager_connexion.php" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Connexion
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="mdp" placeholder="Mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Connexion
						</button>
					</div>

          <div class="text-center p-t-90">
            <a class="txt1" href="inscription.php">
              Crée un compte ?
            </a>
          </div>
					<div class="text-center p-t-90">
            <a class="txt1" href="connexion_administration.php">
              Administration ?
            </a>
          </div>
					<div class="text-center p-t-90">
						<a class="txt1" href="mdp_oublier.php">
							Mot de passe oublier ?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="Connexion/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Connexion/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Connexion/vendor/bootstrap/js/popper.js"></script>
	<script src="Connexion/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Connexion/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Connexion/vendor/daterangepicker/moment.min.js"></script>
	<script src="Connexion/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Connexion/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Connexion/js/main.js"></script>

</body>
</html>


         </div>
    </div>
