<?php 
/* Template Name: Faq */ 

get_header();

?>
<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
<div class="dzsparallaxer auto-init" data-options='{   direction: "reverse"}' style="height: 450px;">

            <div class="divimage dzsparallaxer--target " style="width: 101%; height: 600px; background-image: url(assets/images/bg2.jpg)">
            </div>
            <div class=" parallax-text center-it page-title text-center">
                <h1 class="text-uppercase">frequently asked questions</h1>

            </div>
        </div><!--end page header-->

        <div class="container">
            <div class="space-90"></div>
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
       <!-- <div class="container">
            <div class="center-title">
                <h2>Question with collapse.</h2>
                <p>Do not hesitate for any questions </p>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div id="accordion" class="card-accrodions" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-block">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-block">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="card-block">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-90"></div>
        </div>-->
        <div class="cta-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h3>Try Saas now and take your project to a new level</h3>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="btn btn-rounded btn-white-border">Sign Up Free</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="app-section">
            <div class="space-90"></div>
            <div class="container">
                <div class="row vertical-align-child">

                    <?php echo get_the_content(); ?>

                </div>
            </div>
            <div class="space-60"></div>
        </section>
        
        <?php
        
        endwhile;
        endif; ?>


<?php get_footer();?>