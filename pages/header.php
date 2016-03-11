<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Penta-info</title>
    <link href="<?=CSS?>bootstrap.min.css" rel="stylesheet">
    <link href="<?=CSS?>wesome.min.css" rel="stylesheet">
    <link href="<?=CSS?>animate.min.css" rel="stylesheet"> 
    <link href="<?=CSS?>lightbox.css" rel="stylesheet"> 
	<link href="<?=CSS?>main.css" rel="stylesheet">
	<link href="<?=CSS?>responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       

</head><!--/head-->

<body>
	<header id="header">      

        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <a href ="" ><img src="<?=IMAGE?>logo.png" alt="logo"></a>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php?action=accueil">Accueil</a></li>
                        <li class="dropdown"><a href="index.php?action=emploi">Emploi du temps </a>

                        </li>                    
                        <li class="dropdown"><a href="index.php?action=annonce">Annonces <i class="fa fa-angle-down"></i></a>

                        </li>
                        <li class="dropdown"><a href="index.php?action=epreuve">Epreuves </a>

                        </li>                         
                        <li><a href="index.php?action=portfolio">Portfolio</a></li> 
						<li><a href="index.php?action=contact">Contact</a></li>
                    </ul>
                </div>
				
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->
