<?php /*Template name: Évènement */?>
<main class="site__main">
    <h1>---Template-evenement.php---</h1>
    <?php get_header() ?> 
        <?php if (have_posts()): the_post();?>
            <?php the_post_thumbnail();?>
            <?php the_title(); ?>
            <?php 
                $image = get_field('image');
                if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>

            <h3>L'endroit</h3>
            <p><?php the_field('endroit'); ?></p>
            <p>Date de l'événement: <?php the_field('date'); ?></p>  
            <p>L'heure: <?php the_field('heure'); ?></p>
            <p>L'heure: <?php the_field('heure'); ?></p>
            <h3>Résumé de l'événement</h3>
            <p><?php the_field('resume'); ?></p>
            <h3>Organisateur de l'événement</h3>
            <p><?php the_field('organisateur'); ?></p>
            <!-- Voir vidéo sem11 c2 pour la création des custom fields requis -->
        <?php endif ?>
</main>
<?php get_footer() ?>