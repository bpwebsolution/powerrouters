<?php

/**

 * The front page template file

 *

 * If the user has selected a static page for their homepage, this is what will

 * appear.

 * Learn more: https://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.0

 */



get_header(); ?>



<section id="home" class="dzsparallaxer auto-init dzsparallaxer---window-height use-loading" style="position: relative; height: 800px;" data-options='{  mode_scroll: "normal" }'>

<?php the_content(); ?>

<?php

$args = array(

    'numberposts' => 10,

    'offset' => 0,

    'category' => 0,

    'orderby' => 'post_date',

    'order' => 'ASC',

    'include' => '',

    'exclude' => '',

    'meta_key' => '',

    'meta_value' =>'',

    'post_type' => 'banner',

    'post_status' => 'draft, publish, future, pending, private',

    'suppress_filters' => true

);

$j=1;

$banner = wp_get_recent_posts( $args, ARRAY_A );

foreach($banner as $banner)

{ 

    

    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $banner['ID'] ), 'single-post-thumbnail' ); ?>

            

            <div class="divimage dzsparallaxer--target " data-src="<?php echo $image[0] ?>" style="width: 100%; height: 130%; background-image: url()">



             

                <div class="hero-parallax">

                    <div class="hero-inner">

                        <div class="hero-content">

                            <div class="container text-center">

                                <div class="row">

                                    <div class="col-md-10 offset-md-1">

                                        <div class="hero-static">

                                           <?php echo $banner['post_content']?>

                                        </div>

                                    </div>

                                </div>

                            </div><!--container-->

                        </div><!--hero content-->

                    </div><!--hero inner-->



                </div><!--parallax hero-->

            </div><!--parallax image div-->

<?php } ?>



        </section>

        <!--intro section end-->



        <section class="showcase-section">

            <div class="space-90"></div>

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-md-5 margin-b-30">

                       <?php echo get_post_meta(get_the_ID(),'wpcf-route-section-content',true);?>

                        <div class="row">

                            <div class="col-md-6">

                                <?php echo get_post_meta(get_the_ID(),'wpcf-route-section-step-left',true);?>

                            </div>

                            <div class="col-md-6">

                                <?php echo get_post_meta(get_the_ID(),'wpcf-route-section-steps-right',true);?>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 offset-md-1 margin-b-30">

                        <img src="<?php echo get_post_meta(get_the_ID(),'wpcf-route-section-image',true);?>" alt="" class="img-fluid center-img">

                    </div>

                </div>

                <div class="space-60"></div>

            </div>

        </section><!--end showcase section-->



        <section class="features-section border-bottom bg-faded">

            <div class="container">

                <div class="row">

                <?php

                $args = array(

                    'numberposts' => 10,

                    'offset' => 0,

                    'category' => 0,

                    'orderby' => 'post_date',

                    'order' => 'ASC',

                    'include' => '',

                    'exclude' => '',

                    'meta_key' => '',

                    'meta_value' =>'',

                    'post_type' => 'our-feature',

                    'post_status' => 'draft, publish, future, pending, private',

                    'suppress_filters' => true

                );

                $j=1;

                $our_feature = wp_get_recent_posts( $args, ARRAY_A );

                foreach($our_feature as $our_feature)

                { 



                    ?>



                    <div class="col-md-6 col-lg-3 margin-b-30">

                        <div class="feature-box-center text-center">

                           <?php echo $our_feature['post_excerpt']; ?>

                            <h4 class="text-capitalize"><?php echo $our_feature['post_title']; ?></h4>

                            <p>

                                <?php echo $our_feature['post_content']; ?>

                            </p>

                        </div>

                    </div><!--/col-->





            <?php } ?>

                    

                   

                </div>

            </div>

        </section><!--end features section-->



        <section class="showcase-section">

            <div class='space-90'></div>

            <div class="container">

                <div class="row align-items-center">

                    <div class="col-md-7 margin-b-30">

                        <img src=" <?php echo get_post_meta(get_the_ID(),'wpcf-analytics-image',true);?>" alt="" class="img-fluid">

                    </div>



                    <div class="col-md-5 margin-b-30">

                         <?php echo get_post_meta(get_the_ID(),'wpcf-analytics-section-content',true);?>



                    </div>

                </div>

                <div class="space-60"></div>

            </div>

        </section>





        <section class="pricing-section">

            



            <div class="container">

                <div class="center-title">

                    <?php echo get_post_meta(get_the_ID(),'wpcf-our-pricing-content',true);?>

                </div>



                <div class="row">

                    <!--<div class="col-md-2 margin-b-30">



                    </div>/col-->

                    <?php

                $args = array(

                    'numberposts' => 10,

                    'offset' => 0,

                    'category' => 0,

                    'orderby' => 'post_date',

                    'order' => 'ASC',

                    'include' => '',

                    'exclude' => '',

                    'meta_key' => '',

                    'meta_value' =>'',

                    'post_type' => 'our-pricing',

                    'post_status' => 'draft, publish, future, pending, private',

                    'suppress_filters' => true

                );

                $j=1;
                $tt=1;

                $our_feature = wp_get_recent_posts( $args, ARRAY_A );

                foreach($our_feature as $our_feature)

                { 



                    ?>

                    <div class="col-md-4 margin-b-30">

                        <div class="price-box best-plan">

                            <div class="price-header" id="rr<?php echo $tt; ?>">



                               <?php echo $our_feature['post_excerpt']; ?>

                            </div>

                            <?php echo $our_feature['post_content']; ?>

                            <div class="price-footer" id="rr<?php echo $tt; ?>">

                            </div>

                        </div>



                    <div class="col-md-4 margin-b-30">

                    </div><!--/col-->

                                        </div><!--/col-->





                <?php $tt++; } ?>    







                    

                

                </div>





            

        </section><!--end pricing section-->







        


<section class="home_video_section" style="text-align:center;">
<div class="container">
<div class="row align-items-center">
<div class="col-md-7 margin-b-30">
<iframe width="560" height="315" src="https://www.youtube.com/embed/3oIhhDR-D3Y" frameborder="0" allowfullscreen></iframe>
</div>
<div class="col-md-5 margin-b-30">
<h2> Great Sales process start with efficient lead distribution </h2>
</div>
</div>
</div>
</section>
<div class="customer-logo">
	<div class="container">
		<!--<div class="center-title">
			<?php //echo get_post_meta(get_the_ID(),'wpcf-customer-title',true);?>
		</div>-->
		<div class="row">
			<div class="col-sm-1"></div>
            <div class="col-sm-2"><img src="<?php echo get_post_meta(get_the_ID(),'wpcf-customer-logo',true);?>" alt=""></div>
			<div class="col-sm-2"><img src="<?php echo get_post_meta(get_the_ID(),'wpcf-customer-logo2',true);?>" alt=""></div>
			<div class="col-sm-2"><img src="<?php echo get_post_meta(get_the_ID(),'wpcf-customer-logo3',true);?>" alt=""></div>
			<div class="col-sm-2"><img src="<?php echo get_post_meta(get_the_ID(),'wpcf-customer-logo4',true);?>" alt=""></div>
            <div class="col-sm-2"><img src="<?php echo get_post_meta(get_the_ID(),'wpcf-customer-logo5',true);?>" alt=""></div>
		</div>
	</div>
</div>        



<?php get_footer();

