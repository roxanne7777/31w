<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>31W</title>
  <?php wp_head(); ?>
</head>
<body>
    <header class="entete">
    <section class="global entete__global">
      <div class="entete__titre">
        <h1><a href="<?php bloginfo('url')?>">31W (ajouter bloginfo name)</a></h1> 
        <h3>Voici un sous-titre pour l'exercice 1 (ajouter bloginfo description)</h3>
      </div>
      
      <div class="entete__nav">
        <?php wp_nav_menu(
          array(
            "menu" => "principal",
            "container" => ""
          )
        ) ?>
      </div>
      <--!
      <nav>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">À propos</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </section>
  </header>
