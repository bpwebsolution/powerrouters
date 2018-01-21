<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

 <link href="<?php echo get_template_directory_uri()?>/assets/css/plugins/bundle.css" rel="stylesheet">
        
        <!--main css file-->
        <link href="<?php echo get_template_directory_uri()?>/assets/css/style.css" rel="stylesheet">


        

        <!-- Static navbar -->
        <nav class="navbar navbar-toggleable-md navbar-light fixed-top abs navbar-transparent clearfix" style="position:absolute;">
            <!-- Start Top Search -->
            <div class="top-search clearfix">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="ion-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="ion-android-close"></i></span>
                    </div>
                </div>
            </div><!-- End Top Search -->
            <div class="clearfix"></div>
            <div class="container">


                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="<?php echo home_url();?>">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/router.png" alt="" class="logo-default">
                    <img src="<?php echo get_template_directory_uri()?>/assets/images/router_blue.png" alt="" class="logo-scroll">
                </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto" style="float: right;">
                     <?php
$menu_name = 'top';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

    <?php
        $count = 0;
        $submenu = false;

        foreach( $menuitems as $item ):
            // set up title and url
            $title = $item->title;
            $link = $item->url;
    ?>
<li class="nav-item"><a class="nav-link" href="<?php echo $link;?>"><?php echo $title;?></a></li>

<?php endforeach; ?>

 <li class="nav-item"><a href="<?php echo home_url(); ?>/free-demo/" class="btn btn-rounded btn-primary nav-link">FREE DEMO</a></li>


                       <!-- <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>

                        <li class="nav-item"><a class="nav-link" href="product-tour.html">Product Tour</a></li>

                        <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
                        <li class="nav-item"><a href="demo-form.html" class="btn btn-rounded btn-primary nav-link">FREE DEMO</a></li>-->
                    </ul>
                </div>
                 <!-- Start search Navigation -->
                <div class="search-nav float-right">
                    <a href="javascript:void(0)"><i class="ion-search"></i></a>
                </div>
            </div>
        </nav><!--navbar end-->

    <!--<div class="dzsparallaxer auto-init dzsprx-readyall" data-options="{   direction: &quot;reverse&quot;}" style="height: 450px;">

        <div class="divimage  " style="width: 101%; height: 600px; background-image: url(http://hailmogambo.com/wp-content/themes/lead/assets/images/bg2.jpg)">
        </div>
        <div class=" parallax-text center-it page-title text-center">
            <h1 class="text-capitalize">Super charge your routing strategies</h1>

        </div>
    </div>-->





<script type="text/javascript" id="hs-script-loader" async defer="defer" src="https://js.hs-scripts.com/2760806.js"></script><!-- /HubSpot -->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <!--[endif]-->
      <!-- ab tests -->
       <link href="<?php echo get_template_directory_uri()?>/assets/css/blog.css" rel="stylesheet">

<!-- plugins -->
      <!--  <link href="<?php echo get_template_directory_uri()?>/assets/css/plugins/bundle.css" rel="stylesheet"> -->
        
        
        <!--<link href="<?php echo get_template_directory_uri()?>/assets/css/style.css" rel="stylesheet">-->

        <style>
        	.abs{
        		position: absolute;
        		left: 0;
        		top: 0;
        	}
        </style>

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?> style="padding: 0; background: #fff !important;">

