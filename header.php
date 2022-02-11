<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body  <?php body_class("site"); ?>>
<header class="site__header">
    <section class="site__header__titre">
        <h1 class="header__titre"><?php bloginfo('name'); ?></h1>
        <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    </section>
    <section class="site__header__util">
        <div class="icones">
            <a href="" class="icones__lien">
            <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="" class="icones__lien">
            <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path></svg>
            </a>
            <a href="" class="icones__lien">
                <!-- Insert SVG icon here (see svgBox.net) -->
            </a>
            <a href="" class="icones__lien">
                <!-- Insert SVG icon here (see svgBox.net) -->
            </a>
            <a href="" class="icones__lien">
                <!-- Insert SVG icon here (see svgBox.net) -->
            </a>
        </div>
        <form action="" class="recherche">
            <input type="text" class="recherche__input" placeholder="Recherche">
            <button class="recherche__bouton">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
            </button>
        </form>
    </section>
    
</header>
<section class="site__barre">
    <input type="checkbox" id="chk-burger">
    <label for="chk-burger" id="burger">
    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </label>
    <?php wp_nav_menu(array("menu"=>"principal",
                            "container"=>'nav')); ?>
</section>
