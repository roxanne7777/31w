<?php

/**
 * index.php - Le modèle par défaut de wordpress
 */
?>
<?php get_header(); ?>

  <main class="principal">
    <section class="global">
        <h2>Résultats de recherche</h2>
        <div class="principal__recherche">
          <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post(); ?>
                
                <article class="principal__article">
                    <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 10, null ); ?></p>
                </article>
              <?php endwhile; ?>
          <?php endif; ?>
        </div>
    </section>
  </main>
  <?php get_footer(); ?>

 