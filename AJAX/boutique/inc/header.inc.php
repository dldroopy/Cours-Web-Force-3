<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Isaac's Shop - <?= $page ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= RACINE_SITE ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= RACINE_SITE ?>css/style.css" rel="stylesheet">

    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>

  <body>

    <nav class="navbar navbar-inverse ma-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Isaac's Weird Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
   
		 
			<?php if(userConnecte()) : ?> 
			<li <?= ($page == 'Profil') ? 'class="active"' : '' ?> ><a href="<?= RACINE_SITE ?>profil.php">Profil</a></li>
			<li><a href="<?= RACINE_SITE ?>connexion.php?action=deconnexion">Deconnexion</a></li>	
			<?php else : ?>	
			<li <?= ($page == 'Connexion') ? 'class="active"' : '' ?> ><a href="<?= RACINE_SITE ?>connexion.php">Connexion</a></li>
			
			
			<li <?= ($page == 'Inscription') ? 'class="active"' : '' ?> ><a href="<?= RACINE_SITE ?>inscription.php">Inscription</a></li>
			
			
			
			
			<?php endif; ?>
			
			
			<li <?= ($page == 'Boutique') ? 'class="active"' : '' ?> ><a href="<?= RACINE_SITE ?>boutique.php">Boutique</a></li>
			
			<li><a href="<?= RACINE_SITE ?>panier.php">Panier   
			<?php if(isset($_SESSION['panier']['id_produit'])) : ?>
			<span class="bulle"><?= nbProduit() ?></span>    
			<?php endif; ?>
			</a></li>
			
			<?php if(userAdmin()) : ?>
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="<?= RACINE_SITE ?>admin/gestion_produits.php">Gestion des produits</a></li>
					<li><a href="<?= RACINE_SITE ?>admin/gestion_membres.php">Gestion des membres</a></li>
					<li><a href="<?= RACINE_SITE ?>admin/gestion_commandes.php">Gestion des commandes</a></li>
				</ul>
			</li>
			<?php endif; ?>		
			
			
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container mon-conteneur">