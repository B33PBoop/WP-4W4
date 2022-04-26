<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP-4P4 - Interfaces et developement web</title>
    <?php wp_head() ?>
</head>
<body  <?php body_class("site"); ?> style="background-color:<?= get_theme_mod('couleur_background_body')?>;">
<header class="site__header">
    <?= get_custom_logo(); ?>
    <section class="site__header__titre">
        <h1 class="header__titre">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php bloginfo('name'); ?>
            </a>
        </h1>
        <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    </section>
    <section class="site__header__util">
        <?php get_sidebar('header_links');?>
        <?php get_search_form();?>
    </section>
    
</header>
<section class="site__barre">
    <input type="checkbox" id="chk-burger">
    <label for="chk-burger" id="burger">
        <svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
     </label>
    <?php 
    $icone= '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#ffffff"><path fill-rule="evenodd" d="M8.72 18.78a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06L9.78 5.22a.75.75 0 00-1.06 1.06L14.44 12l-5.72 5.72a.75.75 0 000 1.06z"></path></svg>';
    wp_nav_menu(array("menu"=>"principal",
                            "container"=>'nav',
                            "link_before" => $icone));
    ?>
</section>
