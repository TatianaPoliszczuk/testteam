<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="./img/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LuizaRadecka</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css"
      integrity="sha512-4xo8blKMVCiXpTaLzQSLSw3KFOVPWhm/TRtuPVc4WG6kUgjH6J03IBuG7JZPkcWMxJ5huwaBpOpnwYElP/m6wg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/styles.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/img/icons.svg" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

<?php get_header(); ?>

<?php get_template_part('hero'); ?>
<?php get_template_part('about'); ?>

<?php get_footer(); ?>