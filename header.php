<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package me
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
        <meta name="description" content="Emad Shtay Website is for show last work">
        <meta name="author" content="Emad Shtay">
        <!-- Google Font -->
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/fonts/Dosis.woff2" rel='stylesheet' type='text/css'>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/fonts/Montserrat.woff2" rel='stylesheet' type='text/css'>
        <!-- Font Awesome -->
        
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/font-awesome.min.css">
         <!-- Preloader -->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/preloader.css" type="text/css" media="screen, print"/>
        <!-- Icon Font-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/style.css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.theme.default.css">
        <!-- Animate CSS-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/animate.css">
        <!-- Bootstrap -->
        <link href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- Style -->
        <link href="<?php echo esc_url(get_template_directory_uri());?>/css/style.css" rel="stylesheet">

        <!-- Responsive CSS -->
        <link href="<?php echo esc_url(get_template_directory_uri());?>/css/responsive.css" rel="stylesheet">
        
        <!--Lightbox -->
        <link href="<?php echo esc_url(get_template_directory_uri());?>/css/lightbox.css" rel="stylesheet">
        <!-- Modern lightbox  -->
        <link href="<?php echo esc_url(get_template_directory_uri());?>/css/wa-mediabox.min.css" rel="stylesheet">

        <?php if(!is_front_page()){ ?>
          <!-- load main.css in other page -->
        <link href="<?php echo esc_url(get_template_directory_uri());?>/css/main.css" rel="stylesheet">
        <link href="<?php echo esc_url(get_template_directory_uri());?>/css/intimate-fonts.css" rel="stylesheet">
        <?php }?>
        
        <!--  Load animation game -->
        <?php if(is_page('1467')){ ?>
        <link href="<?php echo esc_url(get_template_directory_uri());?>/css/jquery-ui.css" rel="stylesheet">
        <?php } ?>
        <!--  Load Dubai Arabic Font in blog page -->
        <?php if (is_page('1682') || is_singular('arpost')) { ?>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/fonts/dubai.ttf" rel="stylesheet">
        <?php } ?>

        <!-- If landing page product -->
        <?php if(is_singular('product')){?>
        <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/landpage.css" rel="stylesheet">

        <?php } ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="js/lte-ie7.js"></script>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <!-- Preloader
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>


 -->
    <header id="HOME" style="background-position: 50% -125px;">
	        <div class="section_overlay">
	            <nav class="navbar navbar-default navbar-fixed-top">
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                  <a class="navbar-brand" href="http://emadsh.com"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/logo.png" alt=""></a>
	                </div>

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                 <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'menu_nav1 nav navbar-nav navbar-right',
					'link_before' => '<span><</span>', 'link_after' => ' <span>/></span>',
				) );
			?>
	                  
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 

	     
	            <div class="container">
	                <div class="row">
	                  
	                </div>
	            </div>            
	        </div>  
	    </section>         
    </header>
