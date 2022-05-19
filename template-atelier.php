<?php /*Template name: Atelier */?>
<?php get_header() ?> 
<main class="site__main">
    <?php if (have_posts()): the_post();?>
            <h2>Atelier : <?php the_title(); ?></h2>

            <h5>Description de l'atelier</h5>
            <p> L'animateur de l'atelier est <?php the_field('animateur')?></p>
            <p> L'atelier se déroulera au local <?php the_field('local')?></p>
            <p><?php the_field('description'); ?></p>

            <h5>Horaires et dates de l'atelier</h5>
            <p>Durée de chacune des scéances est de <?php the_field('duree')?> heures</p>
            <p>Date de début: <?php the_field('date_de_debut'); ?></p>
            <p>Date de fin: <?php the_field('date_de_fin'); ?></p>
            <p>La formation se donnera: <?php the_field('jours')?></p>
            <p>L'horaire: De <?php the_field('heure_de_debut'); ?> à <?php the_field('heure_de_fin')?></p>              
        <?php endif ?>
</main>
<?php get_footer() ?>