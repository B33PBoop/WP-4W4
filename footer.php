<footer class="site__footer" style="background-color:<?= get_theme_mod('couleur_background_footer')?>;">

    <div class="site__footer__colonne">
        <section class="footer__article">
            <?php get_sidebar('footer_colonne_1'); ?>
        </section>
        <section class="footer__lien">
            <?php get_sidebar('footer_colonne_2'); ?>
        </section>
        <section class="footer__adresse">
            <?php get_sidebar('footer_colonne_3'); ?>
        </section>
    </div>
    <div class="site__footer__ligne">
        <section class="footer__desc">4W4 - Conception d'interfaces et développement Web - TIM - Collège de Maisonneuve</section>
        <section class="footer__copyright"> &copy; Tout droits réservés - TIM Maisonneuve </section>
        <section class="footer__auteur">Site Web par Jean-Romain Roy</section>
        <section class="footer__menu">
            <?php 
            $icone= '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M8.72 18.78a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06L9.78 5.22a.75.75 0 00-1.06 1.06L14.44 12l-5.72 5.72a.75.75 0 000 1.06z"></path></svg>';
            wp_nav_menu(array("menu" =>"simple", 
                "container" => "nav", 
                "container_class" =>"site__footer__menu",
                "menu_class" => "site__footer__menu__ul",
                "link_before" => $icone)) 
            ?>
        </section>
        <section class="footer__recherche"><?php get_search_form();?></section>
    </div>
</footer>
<div class="boite__modale">
    <article class="boite__modale__texte"></article>
    <button class="boite__modale__fermer">Fermer</button>
</div>
<div class="boite__carrousel">
    <button class="boite__carrousel__fermer">X</button>
    <section class="boite__carrousel__nav"></section>
</div>
</body>
<?php wp_footer(); ?>
</html>