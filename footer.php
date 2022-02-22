<footer class="site__footer">

    <h2 class="footer__title">Un site web fait par Jean-Romain Roy</h2>

    <form action="" class="recherche-footer">
        <input type="text" class="recherche-footer__input" placeholder="Recherche">
        <button class="recherche-footer__bouton">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
        </button>
    </form>

    <?php 
    
    $icone= '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M8.72 18.78a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06L9.78 5.22a.75.75 0 00-1.06 1.06L14.44 12l-5.72 5.72a.75.75 0 000 1.06z"></path></svg>';

    wp_nav_menu(array("menu" =>"simple", 
                    "container" => "nav", 
                    "container_class" =>"site__footer__menu",
                    "menu_class" => "site__footer__menu__ul",
                    "link_before" => $icone)) 
    ?>


</footer>
</body>

</html>