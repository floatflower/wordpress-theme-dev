<html>
  <head>
    <meta charset="UTF-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo wp_title(); ?></title>
    <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri( 'apple-touch-icon.png' ); ?>">
    <link rel="icon" type="image/png" href="<?php echo get_theme_file_uri( 'favicon.png' ); ?>">
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" 
        integrity="sha512-oHDEc8Xed4hiW6CxD7qjbnI+B07vDdX7hEPTvn9pSZO1bcRqHp8mj9pyr+8RVC2GmtEfI2Bi9Ke9Ass0as+zpg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <link rel="stylesheet" 
      href="https://cdn.vash.network/fontawesome/6.1.1/css/all.css">
    <script src="<?php echo get_theme_file_uri( 'public/build/app.js' ); ?>"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'public/build/app.css' ); ?>">
  </head>
  <body>
  <?php wp_body_open(); ?>
