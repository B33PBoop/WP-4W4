<?php get_header() ?>
<main class="principal">
    <h1>Page.php</h1>
    <section class="site__main">

    </section>
    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
            <?php if (have_posts()): the_post();?>
                <?php the_title(); ?>
                <?php the_content(); ?>
            <?php endif ?>
    </section>
</main>
<?php get_footer() ?>