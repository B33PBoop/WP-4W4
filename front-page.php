<?php get_header(); ?>
<main class="site__main">

    

    <section class="formation">
        <h2 class="formation__titre">Page Principale du Site</h2>
            <?php if (have_posts()): the_post();?>
                 <!--Pour accéder au titre de l'article ("Page d'accueil")-->
                 <!-- inclure the_title(); dans une balise php -->
                <?php the_content(); ?>
            <?php endif; ?>
    </section>

    <?php 
        wp_nav_menu(array(  'menu'=> 'accueil',
                            'container' => 'nav',
        ))
    ?>

    <h2 style="text-align:center;">--- Évènements à venir ---</h2>

    <?php  wp_nav_menu(array(   "menu"=>"evenement",
                                "container"=>"nav",
        ));
    ?>    

</main>
<?php get_footer(); ?>