<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cake - Bakery</title>

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/linearicons/style.css" rel="stylesheet">
    <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
    <link href="vendors/stroke-icon/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
    <link href="vendors/lightbox/simpleLightbox.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--================Main Header Area =================-->
<header class="main_header_area">
    <div class="main_menu_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="">
                    <img src="img/logo-2.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================End Main Header Area =================-->

<!--================End Main Header Area =================-->
<section class="banner_area">
    <div class="container">
		<div class="banner_text">
        		<h3>Inscription</h3>
                <ul>
				</ul>
        </div>
    </div>
</section>
<!--================End Main Header Area =================-->

<section class="portfolio_area portfolio_full p_100 text-center">
    <div class="wrap-login100 p-t-50 p-b-90 text-center">
        <form class="login100-form validate-form flex-sb flex-w" id="form1" name="form1" method="POST" action="inscrire.php">
            <h1>
                inscription
            </h1>
            <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                <input class="input100" type="text"  placeholder="login" name="login" id="login" required=""  autofocus>
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                <input class="input100" type="password" placeholder="mot de passe" name="mdp" id="mdp" required="">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input m-b-16" data-validate="Role is required">
                <select name="admin" id="admin">
                    <option value="0">client</option>
                    <option value="1">admin</option>
                </select>
                <span class="focus-input100"></span>
            </div>
            <div class="container-login100-form-btn m-t-17">
                <button class="login100-form-btn">
                    S'inscrire
                </button>
            </div>
        </form>
    </div>
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<!-- Extra plugin js -->
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/datetime-picker/js/moment.min.js"></script>
<script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>

<script src="js/theme.js"></script>
</body>

</html>