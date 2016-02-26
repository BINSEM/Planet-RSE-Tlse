<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Planet'RSE</title>	
  <link rel="stylesheet" type="text/css" href="../css/semantic.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Bitter:400,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600,700,600italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

  <div class="ui top attached massive stackable segment menu_header">
    <div class="ui secondary stackable menu">


      <a href="acceuil.php">
        <div class="item">
          <div class="ui list">
            <h1 class="header item title_color">Planet'RSE</h1>
            <h4 class="item title_color">Plateforme de Notation et d'Evaluation Territoriale de la RSE</h4>
          </div>
        </div>
      </a>


      <div class="right stackable menu">
        <a class="stackable item" href="actu.php">Actualités</a>
        <a class="stackable item" href="description.php">Génèse du projet Planet'RSE</a>
        <a class="stackable item" href="criteres.php">Critérisation</a>
        <a class="stackable item" href="qui.php">Qui est évalué ?</a>
        <a class="stackable item" href="faq.php">FAQ</a>
        <a class="stackable item" href="contact.php">Contact/Adhésion</a>

        <div class="item">
          <div class="ui list">

            <li><a href="login.php"><button class="ui green button login">Se connecter</button></a></li>
            <li><a href="login.php"><button class="ui green button signup">S'inscrire</button></a></li>

          </div>
        </div>

      </div> 
    </div>
  </div>


  <div class="ui small modal comodale">
    <?php
    include ('boxConnextion.php');
    ?>
  </div>

  </div>


