<html>
  <head>
    <meta charset="UTF-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo wp_title(); ?></title>
    <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri(
        "apple-touch-icon.png"
    ); ?>">
    <link rel="icon" type="image/png" href="<?php echo get_theme_file_uri(
        "favicon.png"
    ); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <script src="<?php echo get_theme_file_uri(
        "public/build/app.js"
    ); ?>"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(
        "public/build/app.css"
    ); ?>">
  </head>
  <body>
  <?php wp_body_open(); ?>
