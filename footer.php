
    <footer class="pied">
    <section class="global pied__global">
      <div>
          Auteur: Roxanne Auclair
          <h5><a href="https://github.com/roxanne7777/31w/tree/exercice02">Lien github</a></h5>
      </div>
      <div>
        <p>Les objectifs de l'exercice sont d'ajouter les modèles front-page.php et search.php, d'ajouter le gabarit searchform.php, d'améliorer la structure Sass, d'utiliser les variables ainsi que les "Mixin".</p>
        <img src="wp-content\themes\theme-31w\citrouille.jpg" alt="citrouille" height="75">
      </div>
      <div>
        <?php wp_nav_menu(
            array(
              "menu" => "principal",
              "container" => "nav"
            )
            );
            get_search_form();
        ?>
        menu sur une colonne
      </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>