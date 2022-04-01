<?php get_header(); ?>
<main class="site__main">

    <section class="animation">
        <div class="animation__bloc">1</div>
        <div class="animation__bloc">2</div>
        <div class="animation__bloc">3</div>
        <div class="animation__bloc">4</div>
        <div class="animation__bloc">5</div>
    </section>

    <?php 
        wp_nav_menu(array(  'menu'=> 'accueil',
                            'container' => 'nav',
        ))
    ?>

    <section class="formation">
        <h2 class="formation__titre">Page Principale du Site</h2>
            <?php if (have_posts()): while(have_posts()) : the_post();?>
                 <!--Pour accéder au titre de l'article ("Page d'accueil")-->
                 <!-- inclure the_title(); dans une balise php -->
                <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
</section>
</main>
<?php get_footer(); ?>