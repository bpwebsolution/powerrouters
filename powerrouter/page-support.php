<!DOCTYPE html>

<html lang="en" data-direction="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Support Center</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- <link rel="stylesheet" media="all" href="css/css1.css">
    <link rel="stylesheet" media="all" href="css/css2.css"> -->
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/css1.css">
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/css2.css">
    <!-- <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/images/fonts-all-ce256a6e6d7c35260aadef4f82b5d32f89274d86a5d8ddcc796e99a61d40a3bd.css" class="all-fonts-selector"> -->
    <!-- <script type="text/javascript" async="" src="<?php echo get_template_directory_uri(); ?>/assets/images/cgfc6jcc"></script><script nonce="">
      document.getElementsByClassName("all-fonts-selector")[0].media = 'all'
</script>    <link rel="canonical" href="http://support.useloom.com/">
      <link href="https://downloads.intercomcdn.com/i/o/4278/94dd156d0f20e00c69d123a5/mstile-150x150.png" rel="shortcut icon" type="image/png"> -->
  <?php wp_head(); ?>
      <style>
        .header, .avatar__image-extra { background-color: #5946C3 !important; }
        .article a, .c__primary { color: #fd5f60 !important; } 
        .avatar__fallback { background-color: #fd5f60 !important; }
        article a.intercom-h2b-button { background-color: #fd5f60 !important;border: 0 !important; }
    
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
  <body class=" non-react__templates">
    <header class="header ">
  <div class="container header__container o__ltr" dir="ltr">
    <div class="content">
      <div class="mo o__centered o__reversed header__meta_wrapper">
        <div class="mo__body">
          <div class="header__logo">
            <a href="https://www.powerrouter.io">
                <img alt="Loom Help Center" src="<?php echo get_template_directory_uri()?>/assets/images/router.png">
            </a>
          </div>
        </div>
        <div class="mo__aside">
          <div class="header__home__url">
          </div>
        </div>
      </div>
        <h1 class="header__headline">Advice and answers from Team</h1>
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

    


    <div class="container search__page-content">
      <div class="content"><section class="section">
<?php
$taxonomy = 'supports_category_tax';

$categories = get_terms( $taxonomy, 'orderby=count&hide_empty=0' );

 //print_r($categories); 

foreach ($categories as $cat) {
  
?>


    <div class="g__space demo">
      <a href="<?php echo get_term_link($cat ->term_id) ?>" class="paper ">
        <div class="collection o__ltr">
          <div class="collection__photo">
            <svg role="img" viewBox="0 0 48 48"><g id="user-check" stroke-width="2" fill="none" fill-rule="evenodd"><path d="M42 34l-6.05 6L32 35.99" stroke-linecap="round"></path><path d="M25 29v-5.72m-10 .126V29L4.98 32.577A6 6 0 0 0 1 38.227V43h22"></path><path d="M29.976 13c0 6.627-4.476 12-10 12-5.522 0-10-5.373-10-12s4.478-12 10-12c5.524 0 10 5.373 10 12z"></path><path d="M29.938 11.938c-.336.04-.62-.004-.96.06-3.408.66-5.596-.576-7.47-3.857-1.125 2.16-4.642 3.86-7.53 3.86a8.035 8.035 0 0 1-3.873-.96M47 37c0 5.523-4.478 10-10 10-5.524 0-10-4.477-10-10s4.476-10 10-10c5.522 0 10 4.477 10 10z"></path></g></svg>
          </div>
          <div class="collection_meta" dir="ltr">
            <h2 class="t__h3 c__primary"><?php echo $cat ->name; ?></h2>
            <p class="paper__preview"><?php echo $cat ->description; ?></p>
            <div class="avatar">
            <div class="avatar__photo avatars__images o__ltr">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/13443282_10153501863571150_6521914400640715225_o_(1)-1473757417.jpg" class="avatar__image">

                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/susanacigano-1486922416.png" class="avatar__image">

            </div>
        <div class="avatar__info">
          <div>
            <?php $cat_count = get_category( $cat->term_id );  ?>
            <span class="c__darker">
              <?php  echo $cat_count->count; ?> articles in this collection
            </span>
            <br>
            
          </div>
        </div>
          </div>

          </div>
        </div>
      </a>
    </div>

    <?php 
    }
    ?>

  
   
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
        <span class="paper__preview c__body"><?php echo substr($banner['post_content'], 0, 100) ; ?></span>
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
  <script nonce="">
    document.getElementById('searchBox').focus()
</script></section>
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
          
         <!-- <a href="https://www.powerrouter.io/">We run on powerrouter</a> -->
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

</div>
</div>
<?php wp_footer(); ?> 
</body>
</html>