<?php
/**
*  le modèle résultats de recherche
*
*  affiche les résultats de recherche
*  
*
*  @package cidw-4w4
*/
?>

<?php get_header();?>

<main class="site__main">
    <section class="site__main__recherche">
        <h1>Résultat de la recherche</h1>
        <?php if (have_posts()): while(have_posts()) : the_post();?>
            <h2><?php the_title();?></h2>
            <a href="<?= get_permalink(); ?>">
                <p><?= wp_trim_words(get_the_content(), 20, "...>>");?></p>
            </a>
            <hr>
        <?php endwhile; ?>
        <?php else: ?>
            <h2>Aucun Résultat pour la recherche</h2>
        <?php endif; ?>
    </section>
</main>
<?php get_footer();?>