<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php wp_head(); ?>
    <title>The Arham</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <style>
@media (max-width: 1200px){
.row {
    margin-right: -2vw;
    margin-left: -2vw;
} 
}     

    </style>
  </head>
  <body>

    <div class="preloader js-preloader flex-center">
			<div class="dots">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">&Mridha</a>
             <a class="navbar-brand logo_white" href="<?php echo esc_url( home_url( '/' ) ); ?>">&Mridha</a>
             <div class="toggle-container">
               <div class="toggle">
               <span></span>
               <span></span>
               <span></span>
               </div>
             </div>
       
             <nav class="mobile-nav">
               <ul>
               <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>work">Work</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>clients">Clients</a></li>
               <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>info">Info</a></li>
               <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact</a></li>
               </ul>
             </nav>
         </nav>

    </header>
<body <?php body_class(); ?>>
