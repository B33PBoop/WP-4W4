<?php get_header() ?>
<main class="principal">
    <section class="site__main">
        <section class="formation">
            <h2 class="formation__titre">Page Générale</h2>
                <?php if (have_posts()): the_post();?>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                <?php endif ?>
        </section>
    </section>
</main>
<?php get_footer() ?>