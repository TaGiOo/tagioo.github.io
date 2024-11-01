<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    
</head>

<style>
  @font-face {
      font-family:'Helvetica';
      src: url(<?php echo get_template_directory_uri(); ?>/fonts/helve/Helvetica-Bold.ttf);
  }
  @font-face {
      font-family: 'Aktiv Grotesk Light';
      src: url(<?php echo get_template_directory_uri(); ?>/fonts/aktiv/AktivGroteskCorp-Light.ttf);
  }
  @font-face {
      font-family: 'Aktiv Grotesk Medium';
      src: url(<?php echo get_template_directory_uri(); ?>/fonts/aktiv/AktivGroteskCorp-Medium.ttf);
  }
</style>

<body <?php body_class(); ?>>

  <header class="header">

    <a href="<?php echo home_url( '/' ); ?>"><h1>ALAN SIVINIANT</h1></a>

    <ul class="menu">
        
    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>

    </ul>

    <ul class="reseaux">
        <a href="https://www.youtube.com/channel/UCMJFtlKDMVaQC2K7ShBegbg" class="scale"><li><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" width="30px"></li></a>
        <a href="https://www.linkedin.com/in/alan-siviniant-a31267202/" class="scale"><li><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" width="30px"></li></a>
        <a href="https://alans-tagioo.itch.io" class="scale"><li><img src="<?php echo get_template_directory_uri(); ?>/img/itch-io.png" width="30px"></li></a>
        <a href="<?php echo get_template_directory_uri(); ?>/img/Alan Siviniant CV.pdf" ><li id="cv"><p id="moncv">Mon CV</p></li></a>
    </ul>

  </header>

    <?php wp_body_open(); ?>