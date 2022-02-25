<footer class="site__footer">

    <h2 class="footer__title">Un site web fait par Jean-Romain Roy</h2>

    <?php 
    
    $icone= '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M8.72 18.78a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06L9.78 5.22a.75.75 0 00-1.06 1.06L14.44 12l-5.72 5.72a.75.75 0 000 1.06z"></path></svg>';

    wp_nav_menu(array("menu" =>"simple", 
                    "container" => "nav", 
                    "container_class" =>"site__footer__menu",
                    "menu_class" => "site__footer__menu__ul",
                    "link_before" => $icone)) 
    ?>

    <div class="footer__recherche"><?php get_search_form();?></div>
</footer>
</body>
<?php wp_footer(); ?>
</html>