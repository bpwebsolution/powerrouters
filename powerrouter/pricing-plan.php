<?php 
/* Template Name: Pricing Plan */ 

get_header();

?>

<div class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 450px;">

            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 600px; background-image: url(<?php echo get_template_directory_uri()?>/assets/images/bg2.jpg)">
            </div>
            <div class=" parallax-text center-it page-title text-center">
                <h1 class="text-uppercase">Easy Plans </h1>

            </div>
        </div><!--end page header-->


       <section class="pricing-section">

            <div class="space-90"></div>



            <div class="container">

                <div class="center-title">

                    <?php echo get_post_meta(4,'wpcf-our-pricing-content',true);?>

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

                $our_feature = wp_get_recent_posts( $args, ARRAY_A );

                foreach($our_feature as $our_feature)

                { 



                    ?>

                    <div class="col-md-4 margin-b-30">

                        <div class="price-box best-plan">

                            <div class="price-header">



                               <?php echo $our_feature['post_excerpt']; ?>

                            </div>

                            <?php echo $our_feature['post_content']; ?>

                            <div class="price-footer">

                            </div>

                        </div>



                    <div class="col-md-4 margin-b-30">

                    </div><!--/col-->

                                        </div><!--/col-->





                <?php } ?>    







                    

                

                </div>





            <div class="space-60"></div>

        </section><!--end pricing section-->

        <div class="container">
             <div class="center-title">
                    <h2>General questions.</h2>
                    <p>Do not hesitate for any questions </p>
                </div>
            <div class="row">
            
             <?php

                $args = array(

                    'numberposts' => 3,

                    'offset' => 0,

                    'category' => 0,

                    'orderby' => 'post_date',

                    'order' => 'ASC',

                    'include' => '',

                    'exclude' => '',

                    'meta_key' => '',

                    'meta_value' =>'',

                    'post_type' => 'general-question',

                    'post_status' => 'draft, publish, future, pending, private',

                    'suppress_filters' => true

                );

                $j=1;

                $our_feature = wp_get_recent_posts( $args, ARRAY_A );

                foreach($our_feature as $our_feature)

                { 



                    ?>
                    
                     <div class="col-lg-4 col-md-6 margin-b-40">
                    <div class="faq-box">
                        <h4><?php echo $our_feature['post_title'];?></h4>
                        <p>
                            <?php echo $our_feature['post_content'];?>
                        </p>
                    </div>
                </div>
                    <?php } ?>
               
               
            </div>
              <div class="row">
              <?php

                $args = array(

                    'numberposts' => 3,

                    'offset' => 0,

                    'category' => 0,

                    'orderby' => 'post_date',

                    'order' => 'DESC',

                    'include' => '',

                    'exclude' => '',

                    'meta_key' => '',

                    'meta_value' =>'',

                    'post_type' => 'general-question',

                    'post_status' => 'draft, publish, future, pending, private',

                    'suppress_filters' => true

                );

                $j=1;

                $our_feature = wp_get_recent_posts( $args, ARRAY_A );

                foreach($our_feature as $our_feature)

                { 



                    ?>
                    <div class="col-lg-4 col-md-6 margin-b-40">
                    <div class="faq-box">
                        <h4><?php echo $our_feature['post_title'];?></h4>
                        <p>
                            <?php echo $our_feature['post_content'];?>
                        </p>
                    </div>
                </div>
                    
                    <?php } ?>
               
               
            </div>
            <div class="space-50"></div>
        </div>
        </div>

         <section class="app-section bg-faded" >
            <div class="space-90"></div>
            <div class="container">
                <div class="row vertical-align-child">

                    <div class="col-md-1"></div>
                    <div class="col-md-5 margin-b-30">
                       <?php echo get_the_content();?>
                    </div>

                </div>
            </div>
            <div class="space-60"></div>
        </section>



<?php get_footer();?>