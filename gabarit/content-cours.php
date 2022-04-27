<?php $categories = get_the_category(); ?>

                <article class="formation__cours <?= $categories[1]->slug; ?>">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        // $nbHeures = substr($titre, -6);
                        $nbHeures = get_field("nombre_dheures");
                        $sigleCours = substr($titre, 4, 3);
                        $departement = get_field("departement");
                        //^^ voir vidéos pour trouver ou placer cette variable^^
                        // $descCours = get_the_excerpt();
                        $descCours = get_the_content();
                        ?>

                        <code class="cours__desc__complet" style="display: none;">
                            <?= $descCours ?>
                        </code>

                        <?php the_post_thumbnail("thumbnail")?>
                        <h3 class="cours__titre">
                            <a href="<?= get_permalink();?>">
                                <?= $titreFiltreCours; ?>
                            </a>
                        </h3>
                        <div class="cours__nbre-heure"><?= $nbHeures; ?>h</div>
                        <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <p class="cours__desc"> <?= wp_trim_words($descCours, 20, '<button class="cours__desc__suite"> la suite </button>');?></p>
                        <p class="cours__dep"><?= $departement ?></p>
                    </article>