<?php 
/* Template Name: Contact */ 

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
                <h1 class="text-uppercase">We would love to hear from you</h1>

            </div>
        </div><!--end page header-->

        <div class="container">
            <div class="space-90"></div>
            <div class='row'>
                <div class="col-lg-6 col-md-7 margin-b-40">
                    <h3 class="margin-b-30">Already a customer and looking for support?</h3>

                    <!--<form method="post" action="#" class="saas-contact">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-12 margin-b-20">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name...." />
                                    </div>
                                    <div class="col-sm-12 margin-b-20">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address...." />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 margin-b-20">
                                <textarea name="message" class="form-control" rows="5" placeholder="Message...."></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="data-status"></div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" name="submit" class="btn btn-primary btn-rounded">send message</button>
                            </div>
                        </div>
                    </form>
-->
<?php echo do_shortcode('[contact-form-7 id="92" title="Contact form 1"]');?>
                </div>
                <div class="col-lg-6 col-md-5 margin-b-40">
                    <?php echo get_the_content();?>
                </div>
            </div>
            <div class='space-50'></div>
        </div>
        <!--Google Maps-->
        <div class="google-map-container margin-b-60">
            <div id="googlemaps" style="width: 100%;height: 400px;"><?php echo get_post_meta(get_the_ID(),'wpcf-iframe-code',true);?></div>
        </div>
				
 <?php
        
        endwhile;
        endif; ?>


<?php get_footer();?>