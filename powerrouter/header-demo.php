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
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- plugins -->
        <link href="<?php echo get_template_directory_uri()?>/assets/css/plugins/bundle.css" rel="stylesheet">
        
        <!--main css file-->
        <link href="<?php echo get_template_directory_uri()?>/assets/css/style.css" rel="stylesheet">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<div id="preloader">
            <div id="preloader-inner"></div>
        </div><!--/preloader-->
        <!--back to top-->
        <a href="#" class="scrollToTop"><i class="ion-ios-arrow-up"></i></a>
        <!--back to top end-->

        <div class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 20 0px;">

            <div class="divimage  " style="width: 100%; height: 100%; background-image: url(<?php echo get_template_directory_uri()?>/assets/images/home1.jpg)">
            </div>

            <div class=" parallax-text center-it page-title text-center">
                <h1>Great sales processes begin with efficient lead distribution, Schedule a demo now!</h1>

            </div>
        </div><!--end page header-->

          <!-- Static navbar -->
        <nav class="navbar navbar-toggleable-md navbar-light fixed-top  navbar-transparent clearfix">
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

                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                   <img src="https://www.powerrouter.io/wp-content/themes/lead-final/assets/images/router.png" alt="" class="logo-default">
                    <img src="https://www.powerrouter.io/wp-content/themes/lead-final/assets/images/router_blue.png" alt="" class="logo-scroll">
                </a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">

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
                        <li class="nav-item"><a href="https://appexchange.salesforce.com/listingDetail?listingId=a0N3A00000EONOtUAP" class="btn btn-rounded btn-primary nav-link">TRY ON APPEXCHANGE</a></li>
                    </ul>
                </div>
                 <!-- Start search Navigation -->
                <div class="search-nav float-right">
                    <a href="javascript:void(0)"><i class="ion-search"></i></a>
                </div>
            </div>
        </nav><!--navbar end-->