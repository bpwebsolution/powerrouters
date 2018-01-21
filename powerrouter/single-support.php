<!DOCTYPE html>

<html lang="en" data-direction="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Why do I need Loom? | Loom Help Center</title>
    <meta name="description" content="Why individuals use Loom to communicate through quick videos.">
    
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/css1.css">
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/css2.css">

    <?php wp_head(); ?>
  
      <style>
        .header, .avatar__image-extra { background-color: #fd5f60; }
        .article a, .c__primary { color: #fd5f60; }
        .avatar__fallback { background-color: #fd5f60; }
        article a.intercom-h2b-button { background-color: #fd5f60; border: 0; }
    
      </style>
      
      <style>

[data-filter-item] {
  padding: 15px;
  /*background-color: #ccc;
  border: 1px solid #fff;*/
}
.hidden {
  display: none;
}
</style>



</head>
  <body class="header__lite non-react__templates">
    <header class="header " style="background-color: #5946C3 !important;">
  <div class="container header__container o__ltr" dir="ltr">
    <div class="content">
      <div class="mo o__centered o__reversed header__meta_wrapper">
        <div class="mo__body">
          <div class="header__logo">
            <a href="https://www.powerrouter.io/support">
                <img alt="Loom Help Center" src="<?php echo get_template_directory_uri()?>/assets/images/router.png">
            </a>
          </div>
        </div>
        <div class="mo__aside">
          <div class="header__home__url">
          </div>
        </div>
      </div>
      <form autocomplete="off" class="header__form search js__search">
        <input type="text" autocomplete="off" id="searchBox" class="search__input js__search-input o__ltr" placeholder="Search for answers..." tabindex="1" data-search>
        <button type="submit" class="search__submit o__ltr"></button>
      </form>
    </div>
  </div>
</header>

<section class="section search__results">
  <div class="container">
    <div class="js__search-results content search__results-content"></div>
  </div>
</section>

<?php       

      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); ?>  

    <div class="container search__page-content">
      <div class="content"><section class="section">
  <div class="breadcrumb" dir="ltr">
  <div class="link__arrow o__ltr">
    <a href="<?php echo home_url();?>/support">All Collections</a>
  </div>

     <!-- <div class="link__arrow o__ltr">
        <a href="http://support.useloom.com/get-started">
        <?php //$taxonomies=get_taxonomies('','names');
//$taxonomie = wp_get_post_terms(get_the_ID(, $taxonomies,  array("fields" => "names")); 

//print_r($taxonomie);
?>
</a>
      </div>-->

  <div class="link__arrow o__ltr"><?php the_title(); ?></div>
</div>

  

  <div class="paper paper__large demo">
  <div class="content content__narrow">
    <div class="article intercom-force-break">
      <div class="article__meta" dir="ltr">
        <h1 class="t__h1"><?php the_title();?></h1>
        <!--<div class="article__desc">
          <?php the_excerpt();?>
        </div> -->
        <div class="avatar">
  <div class="avatar__photo o__ltr">
       <?php echo get_avatar( get_the_author_meta( $post->post_author ) ); ?>

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> <?php the_author() ?></span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

      </div>
      <article dir="ltr">
	
	<p class="intercom-align-left"><?php the_content();?></p>
	
</article>
    </div>
  </div>
    <!--<div class="intercom-reaction-picker" dir="ltr">
  <div class="intercom-reaction-prompt">Did this answer your question?</div>

    <span class="intercom-reaction" data-reaction-index="0">
      <span data-emoji="smiley" title="smiley"><span style="display:inline-block;height:32px;width:32px;background-position:-704px -736px;" title="smiley" class="intermoji-default-class"></span></span>
    </span>
    <span class="intercom-reaction" data-reaction-index="1">
      <span data-emoji="neutral_face" title="neutral_face"><span style="display:inline-block;height:32px;width:32px;background-position:-768px -352px;" title="neutral_face" class="intermoji-default-class"></span></span>
    </span>
    <span class="intercom-reaction" data-reaction-index="2">
      <span data-emoji="disappointed" title="disappointed"><span style="display:inline-block;height:32px;width:32px;background-position:-32px -768px;" title="disappointed" class="intermoji-default-class"></span></span>
    </span>
</div>-->

</div>
<div class="g__space items">

         

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

    'post_type' => 'supports',

    'post_status' => 'draft, publish, future, pending, private',

    'suppress_filters' => true

);

$j=1;

$banner = wp_get_recent_posts( $args, ARRAY_A );

foreach($banner as $banner)

{  

$user_info = get_userdata($banner['post_author']);
?>         

   <div class="g__space hidden" data-filter-item data-filter-name="<?php echo strtolower(wp_strip_all_tags($banner['post_content'])); ?>">
      <div class="article__preview intercom-force-break" dir="ltr">
        <h2 class="t__h3"><span class="c__primary"><a href="<?php echo $banner['guid']; ?>"><?php echo $banner['post_title']; ?></a></span></h2>
        <span class="paper__preview c__body"><?php echo substr($banner['post_excerpt'], 0, 100) ; ?></span>
        <div class="avatar">
        <div class="avatar__photo o__ltr">
            <img src="http://placehold.it/50x50" class="avatar__image">

        </div>
        <div class="avatar__info">
          <div>
            Written by <span class="c__darker"> <?php echo $user_info->user_login; ?></span>
              <br> Updated over a week ago
          </div>
        </div>
      </div>

      </div>

    </div>

          <?php
         
        } // end while
      
      ?>
   
   <div class="no_found" style="display: none">No Result Found</div>
   
		<!--<div data-filter-item data-filter-name="apple sssss" class="hidden">Apple</div>
		<div data-filter-item data-filter-name="google" class="hidden">Google</div>
		<div data-filter-item data-filter-name="microsoft" class="hidden">Microsoft</div>
		<div data-filter-item data-filter-name="hp" class="hidden">HP</div>
		<div data-filter-item data-filter-name="dell" class="hidden">Dell</div>
		<div data-filter-item data-filter-name="samsung" class="hidden">Samsung</div>-->
	</div>

</section>
</div>
    </div>
    
    	
    
   <footer class="footer">
  <div class="container">
    <div class="content">
      <div class="u__cf" dir="ltr">
        <div class="footer__logo">
          <a href="https://www.powerrouter.io/support/">
              <img alt="Loom Help Center" src="<?php echo get_template_directory_uri()?>/assets/images/router_blue.png">
          </a>
        </div>
        <div class="footer__advert logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/intercom-a6a6ac0f033657af1aebe2e9e15b94a3cd5eabf6ae8b9916df6ea49099a894d8.png" alt="Intercom">
        <!--  <a href="https://www.powerrouter.io/">We run on powerrouter</a> -->
        </div>
      </div>
    </div>
  </div>
</footer>


      


    <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/images/application-04e15adb448160e690bc833ca49100c7821b21904ee96d2ac4efd168ac4bd873.js.download" nonce=""></script> -->
    <!-- <script src="js/js1.js"></script> -->

   <!--  <script nonce="">
  $(function () {
    var eventData = $('meta[name="intercom:trackingEvent"]').attr('content');
    if (eventData) {
      eventData = JSON.parse(eventData);
      createMetric(eventData.name, eventData.metadata);
    }
  });
</script>
   -->
   
   <script>
    	
    	jQuery('[data-search]').on('keyup', function() {
    		jQuery('.no_found').hide();
    		
	var searchVal = jQuery(this).val();
	var filterItems = jQuery('[data-filter-item]');
	
	jQuery('.demo').addClass('hidden');

	if ( searchVal != '' ) {
		filterItems.addClass('hidden');
		
		jQuery('.g__space').find('.test').removeClass('test');
		
		
		jQuery('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
		
		jQuery('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').addClass('test');
		
		var len = jQuery('.g__space').find('.test').length;
		if(len ==0)
		{
			jQuery('.no_found').show();
		}
		
	} else {
		filterItems.addClass('hidden');
		jQuery('.demo').removeClass('hidden');
	}
});
    </script>

<?php

}
}?>

    <!-- <script src="js/js1.js" nonce=""></script> -->

  </div></div>
  
  <script>
    	
    	jQuery('[data-search]').on('keyup', function() {
    		jQuery('.no_found').hide();
    		
	var searchVal = jQuery(this).val();
	var filterItems = jQuery('[data-filter-item]');
	
	jQuery('.demo').addClass('hidden');

	if ( searchVal != '' ) {
		filterItems.addClass('hidden');
		
		jQuery('.g__space').find('.test').removeClass('test');
		
		
		jQuery('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
		
		jQuery('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').addClass('test');
		
		var len = jQuery('.g__space').find('.test').length;
		if(len ==0)
		{
			jQuery('.no_found').show();
		}
		
	} else {
		filterItems.addClass('hidden');
		jQuery('.demo').removeClass('hidden');
	}
});
    </script>
<?php wp_footer(); ?>

</body></html>