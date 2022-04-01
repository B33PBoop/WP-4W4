<?php get_header() ?>
<main class="site__main">
    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <?php wp_nav_menu(array("menu" =>   "categorie_cours",
                                            "container" => "nav",
                                            "container_class" => "formation__menu",
                                            "menu_class" => "formation__menu__ul",
        ))?>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>

                <?php
                    if(is_category(array('cours', 'web', 'jeu', 'utilitaire', 'design', 'creation-3d', 'video'))):
                        get_template_part('gabarit/content','cours');
                    else:
                        get_template_part('gabarit/content', 'macrame');
                    endif
                ?>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>