<?php get_header(); ?>
<main class="site__main">

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

    <h2 style="text-align: center;"> Ateliers du TIM </h2>
    <?php  wp_nav_menu(array(   "menu"=>"atelier",
                                "container"=>"nav",
        ));
    ?>

    <h2 style="text-align: center;">--- Galerie gutenberg ---</h2>
    <?php if (have_posts()): the_post();?>
        <?php the_title() ?>
            <?php the_content(); ?>
        <?php endif; ?>

</main>
<?php get_footer(); ?>