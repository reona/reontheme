<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title(' | '); ?><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="all">
  <?php wp_head(); ?>
</head>
<body class="container">

  <header>
    <div class="sixteen">
      <h1 class="remove-buttom" style="margin-top: 40px"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>
  </header>
  
