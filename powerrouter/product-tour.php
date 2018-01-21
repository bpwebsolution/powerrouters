<?php 
/* Template Name: Product Tiur */ 

get_header();

?>

<div class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 450px;">

            <div class="divimage  " style="width: 101%; height: 600px; background-image: url(<?php echo get_template_directory_uri()?>/assets/images/bg2.jpg)">
            </div>
            <div class=" parallax-text center-it page-title text-center">
                <h1 class="text-capitalize">Super charge your routing strategies</h1>

            </div>
        </div><!--end page header-->

        <section class="showcase-section">
            <div class="space-90"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 margin-b-30">
                        <?php echo get_post_meta(get_the_ID(),'wpcf-super-charge-area-content',true);?>
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo get_post_meta(4,'wpcf-route-section-step-left',true);?>
                            </div>
                            <div class="col-md-6">
                               <?php echo get_post_meta(4,'wpcf-route-section-steps-right',true);?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-1 margin-b-30">
                        <img src="<?php echo get_post_meta(4,'wpcf-route-section-image',true);?>" alt="" class="img-fluid center-img">
                    </div>
                </div>
                <div class="space-60"></div>
            </div>
        </section><!--end showcase section-->

        <section class="showcase-section grey-bg">
            <div class="space-90"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 margin-b-30">
                        <img src="<?php echo get_post_meta(get_the_ID(),'wpcf-built-for-scaling-image',true);?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-5 margin-b-30">
                       <?php echo get_post_meta(get_the_ID(),'wpcf-built-for-scaling-content',true);?>
                    </div>
                </div>
            </div>
            <div class="space-30"></div>
        </section>
        <section class="showcase-section">
            <div class='space-90'></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 margin-b-30">
                        <?php echo get_post_meta(get_the_ID(),'wpcf-analytics-content',true);?>

                    </div>
                    <div class="col-md-6 md-offset-1 margin-b-30">
                        <img src=" <?php echo get_post_meta(get_the_ID(),'wpcf-analytics-image',true);?>" alt="" class="img-fluid center-img">
                    </div>
                </div>
                <div class="space-60"></div>
            </div>
        </section>

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
            <div class="space-90"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 offset-md-1 margin-b-30">
                        <img src="<?php echo get_post_meta(get_the_ID(),'wpcf-rely-less-image',true);?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-5 margin-b-30">
                       <?php echo get_post_meta(get_the_ID(),'wpcf-rely-less-content',true);?>
                    </div>
                </div>
            </div>
            <div class="space-30"></div>
        </section><!--end showcase section-->


       


<?php get_footer();?>