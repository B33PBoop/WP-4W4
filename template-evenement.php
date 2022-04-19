<?php /*Template name: Évènement */?>
<main class="site__main">
    <h1>---Template-evenement.php---</h1>
    <?php get_header() ?> 
        <?php if (have_posts()): the_post();?>
            <?php the_post_thumbnail();?>
            <?php the_title(); ?>
            <?php the_content(); ?>
        <?php endif ?>
</main>
<?php get_footer() ?>