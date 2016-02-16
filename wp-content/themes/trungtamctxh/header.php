<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
 
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmgp.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Habibi">
        <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?> > <!--Thêm class tượng trưng cho mỗi trang lên <body> để tùy biến-->
        <div id="container" >
        	<header id="header">

                                <div class="logo">
                                        <div class="container">
                                                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                                        <a href="<?php printf(__("http://ef.tdmu.edu.vn/en","cswd"));?>" title="<?php printf(__("Home","cswd")); ?>">
                                                                <img class="img-responsive logo-img" src="http://localhost/kinhte/wp-content/uploads/2016/01/logo.png" alt="<?php printf(__("Economic Faculty - Thu Dau Mot University","")); ?>" >
                                                        </a>
                                                </div>
                                        </div>
                                </div>
                                <div class="bg-img">
        			</div>

                        
                </header>
                <?php cswd_menu( 'primary-menu' ); ?>