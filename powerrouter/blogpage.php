<?php 
/* Template Name: Blog */ 

get_header('blog');

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
var jq = $.noConflict();
jq( document ).ready(function() {
    jq(".custom-pagination a").removeClass("next");
    jq(".custom-pagination a").removeClass("prev");
});
</script>
<?php

$args = array(

    'numberposts' => 1,

    'offset' => 0,

    'category' => 0,

    'orderby' => 'post_date',

    'order' => 'DESC',

    'include' => '',

    'exclude' => '',

    'meta_key' => '',

    'meta_value' =>'',

    'post_type' => 'post',

    'post_status' => 'draft, publish, future, pending, private',

    'suppress_filters' => true

);

$j=1;

$banner = wp_get_recent_posts( $args, ARRAY_A );

foreach($banner as $banner)

{ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $banner['ID'] ), 'single-post-thumbnail' );

$user_info = get_userdata($banner['post_author']);
?>


<?php

$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
?>






<section class="blog-featured" style="background: <?php echo get_post_meta(get_the_ID(),'wpcf-background-color',true);?> url(<?php echo $image[0]?>) no-repeat right center;  background-size: 562px 315px; ">
  <div class="o-container">
    
    


    
    <div class="link feature-link" style="">
    

      <div class="o-row">
        <div class="o-col-10@md o-col-offset-1@md">
          
            
              <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
                
              </div>
            

            <h1 class="post-title" itemprop="headline" style="line-height: 2.3em">
              <?php echo $banner['post_title']; ?>
            </h1>
            <p class="meta">
              
              
                <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                  <span itemprop="name">
                   <?php echo $user_info->user_login; ?>
                  </span>
                </span>
              
              &nbsp;|&nbsp; <?php echo get_the_date( 'F d y', get_the_ID() );?>
              <meta itemProp="datePublished" content="2017-10-19T00:00:00-05:00" />
              
              
              <meta itemProp="dateModified" content="2017-10-19T00:00:00-05:00" />
            </p>
          
        </div>
        <!-- /.o-col -->
      </div>
      <!-- /.o-row -->

    
    </div>
    
    <!-- /.link -->
  </div>
  <!-- /.o-container -->
</section>
<!-- /.blog-featured -->

<?php } ?>

<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>
				
         <!--/nl-pop-->
      </section>
      <!-- /bodyWrap -->
      <script src="https://www.helpscout.net/js/awesome.js?v=d249cb9c8c837187f5cfd3f5d0034fdc" async defer="defer"></script><script>window.AppData = window.AppData || {};
         window.AppData.layout = 'content';
      </script><!-- /Adroll --><!-- Perfect Audience -->
				
				
 <?php
        
        endwhile;
        endif; ?>
		
<section id="post-nav" class="u-pad-b-10 u-pad-b-0@md">
            <div class="o-container">
               <div class="o-flexy@md">
                  <div class="o-flexy__item">
                     <ul id="post-tabs" class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Most Recent</a></li>
                        <?php $tem=1; 
			  $categories = get_categories(array('orderby'=>'name','taxonomy'=>'category'));
			  foreach ( $categories as $category ) { 
			   $cat_name=$category->name;
			   $term_id = get_cat_ID($cat_name);
			 ?>
			 <?php if($category->name !="Uncategorized"){ ?>
			 <li><a data-toggle="tab" href="#menu<?php echo $tem; ?>"><?php echo $category->name; ?></a></li>
			  <?php } ?>
			 <?php $tem++; } ?>
                     </ul>
                      
                  </div>
                  
               </div>
               <!--/post-tabs-->
            </div>
         </section>		         		
<div class="o-container">
	<div id="post-list" class="tab-content">
		
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<div class="o-row-flex">
					<?php 
					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$args = array('post_type' => 'post','order' => 'DESC','showposts'=> 6 ,'paged' => $paged);
					$custom_query = new WP_Query( $args ); ?>
					<?php if ( $custom_query->have_posts() ) : 
					while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
					<div class="o-col-6 o-col-4@md post">						
						<a href="<?php the_permalink(); ?>" class="post-box">
							<figure><img alt="7 Quick-and-Dirty Tips to Boost Holiday Sales" class="b-skipped" data-src="" height="196" src="<?php echo get_the_post_thumbnail();?>" width="350" title="7 Quick-and-Dirty Tips to Boost Holiday Sales"></figure>
							   <p><span class="category"><?php //echo $cat->name;?></span><br><?php the_title(); ?></p>
						</a>
					</div>
					<?php endwhile; ?>
					
				</div>
				<div class="clear"></div>
					<?php if (function_exists(custom_pagination)) {
					custom_pagination($custom_query->max_num_pages,"",$paged); }  ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
			</div>
	 
		   <?php  global $cat_id;
			$args = array('order by' => 'name','taxonomy'=>'category');
			$count=1;
			$cats = get_categories($args); 
			foreach ($cats as $cat) {
				if($cat->name !="Uncategorized"){
			$cat_id= $cat->term_id; ?>
			<?php $paged2 = ( get_query_var('paged') ) ? get_query_var('paged') : 1; ?>
		   <?php $args = array('cat' =>$cat_id ,'post_type'=>'post','order' => 'DESC','posts_per_page'=>6,'paged' => $paged2);
			$custom_query = new WP_Query( $args ); ?>
			<div class="tab-pane fade in" id="menu<?php echo $count++; ?>">
				<div class="o-row-flex">
					<?php if ( $custom_query->have_posts() ) :
					while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<div class="o-col-6 o-col-4@md post">						
							<a href="<?php the_permalink(); ?>" class="post-box">
								<figure><img alt="7 Quick-and-Dirty Tips to Boost Holiday Sales" class="b-skipped" data-src="" height="196" src="<?php echo get_the_post_thumbnail();?>" width="350" title="7 Quick-and-Dirty Tips to Boost Holiday Sales"></figure>
								   <p><span class="category"><?php echo $cat->name;?></span><br><?php the_title(); ?></p>
							</a>
						</div>
					<?php endwhile; ?>
					
				</div>
				<div class="clear"></div>
					<?php if (function_exists(custom_pagination)) {
					custom_pagination($custom_query->max_num_pages,"",$paged); }  ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
			</div>
			<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>



<?php //get_footer();?>				