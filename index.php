<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>31W</title>
  <?php wp_head(); ?>
</head>
<?php get_header(); ?>
<body>
  <main class="principal">
    <section class="global">
        <h2>Liste de cours</h2>
        <div class="principal__conteneur">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
              <?php
                $chaine = get_the_title();
                $sigle = substr($chaine, 0, 7);
                $titre = substr($chaine, 8, strrpos($chaine, "(")-8);
                ?>
              <article class="principal__article">
                  <h5><?php echo $sigle; ?></h5>
                  <h6><?php echo $titre; ?></h6>
                  <p><?php echo wp_trim_words( get_the_excerpt(), 10, null ); ?></p>
              </article>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </section>
  </main>
  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>

</html>