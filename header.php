<!DOCTYPE html>
<html lang="en">
  <head>
  <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php  the_field('artist_name') ?> <?php bloginfo('name'); ?></title>
    <!-- <link rel="stylesheet" href="/public/dist/styles.css" /> -->
    <link rel="stylesheet" href="<?php emailLandingPage_resources(); ?>" type="text/css" media="all" />
    
  </head>
