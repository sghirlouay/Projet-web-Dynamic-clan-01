<?PHP
//session_start();
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeproduits=$produit1C->afficherproduits();
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="Afficher.php"> <i class="menu-icon fa fa-dashboard"></i>Accueil </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Produits</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="afficherproduit.php">Afficher</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="AjouterProd.html">Ajouter</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="ModifierProd.html">Modifier</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="SupprimerProd.html">Supprimer</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="RechercherProd.html">Rechercher</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Promotions</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="AfficherProm.php">Afficher</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="AjouterPromo.php">Ajouter</a></li>
                        </ul>
                    </li>
            
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </header><!-- /header -->
        <!-- Header-->
        <section class="portfolio_area portfolio_full p_100">
            <div class="portfolio_full_width_area grid_portfolio_area imageGallery1">
            <?php
            foreach($listeproduits as $row){
                ?>
                    <div class="portfolio_full_item cake choco">

                
                        <div class="portfolio_item">
                            <div class="portfolio_img">
                                <img class="img-fluid" src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['nom']; ?>">
                            </div>
                            <div class="portfolio_text">
                                <a href="#"><h4><?PHP echo $row['nom']; ?></h4></a>
                                </br> <?PHP echo $row['description']; ?></br>
                            </div>
                            Nom: <?PHP echo $row['nom']; ?><br>
                            Prix: <?PHP echo $row['prix']; ?>dt<br>
                            Disponibilite: <?PHP echo $row['disponibilite']; ?></br>
                            Date: <?PHP echo $row['datep']; ?><br>
                            Parfum: <?PHP echo $row['parfum']; ?><br>
                            Type: <?PHP echo $row['type']; ?><br>

                            <a class="lien" href="ModifierProduit.php?nom=<?PHP echo $row['nom']; ?>" >Modifier</a>
                            <form method="GET" action="SupprimerProduit.php" enctype="multipart/form-data">
                                <input type="submit" name="supprimer" value="Supprimer" class="button">
                                <input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
                            </form>
                        </div>
                    </div>



                <?PHP
            }
            ?>
                </div>
        </section>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
