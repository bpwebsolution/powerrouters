<!DOCTYPE html>
<!-- saved from url=(0038)http://support.useloom.com/get-started -->
<html lang="en" data-direction="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get Started</title>
    <meta name="description" content="We&#39;re very happy to have you here. Let&#39;s get you on the right path with Loom.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     

   
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/css1.css">
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/css2.css">

     <?php wp_head(); 

     $authors = array();
     ?>
    

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
  <body class="header__lite non-react__templates custom_supp">
    <header class="header " style="background-color: #5946C3 !important;">
  <div class="container header__container o__ltr" dir="ltr">
    <div class="content">
      <div class="mo o__centered o__reversed header__meta_wrapper">
        <div class="mo__body">
          <div class="header__logo">
            <a href="http://support.useloom.com/">
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

    <div class="container search__page-content">
      <div class="content"><section class="content section">
  <div class="breadcrumb" dir="ltr">
  <div class="link__arrow o__ltr">
    <a href="<?php echo home_url();?>/support">All Collections</a>
  </div>


  <div class="link__arrow o__ltr"><?php echo get_queried_object()->name; ?></div>
</div>

  <div class="section__bg demo">    
    <div class="paper g__space collection__headline get_cus">
  <div class="collection o__ltr">
    <div class="collection__photo">
      <svg role="img" viewBox="0 0 48 48"><g id="user-check" stroke-width="2" fill="none" fill-rule="evenodd"><path d="M42 34l-6.05 6L32 35.99" stroke-linecap="round"></path><path d="M25 29v-5.72m-10 .126V29L4.98 32.577A6 6 0 0 0 1 38.227V43h22"></path><path d="M29.976 13c0 6.627-4.476 12-10 12-5.522 0-10-5.373-10-12s4.478-12 10-12c5.524 0 10 5.373 10 12z"></path><path d="M29.938 11.938c-.336.04-.62-.004-.96.06-3.408.66-5.596-.576-7.47-3.857-1.125 2.16-4.642 3.86-7.53 3.86a8.035 8.035 0 0 1-3.873-.96M47 37c0 5.523-4.478 10-10 10-5.524 0-10-4.477-10-10s4.476-10 10-10c5.522 0 10 4.477 10 10z"></path></g></svg>
    </div>
    <div class="collection__meta intercom-force-break" dir="ltr">
      <h2 class="t__h1"><?php echo get_queried_object()->name; ?></h2>   

      <p class="paper__preview"><?php echo get_queried_object()->description; ?></p>
      
      <div class="avatar">
  <div class="avatar__photo avatars__images o__ltr">
        <img src="http://placehold.it/50x50" class="avatar__image">

        <img src="http://placehold.it/50x50" class="avatar__image">

  </div>
  <div class="avatar__info">

    <div>
      <?php      
          $cat_count = get_category( get_queried_object()->term_id ); 
          
          if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); 
            $authors = get_the_author(); 
          }
        }

       

      ?>
      <span class="c__darker">
        <?php  echo $cat_count->count; ?> articles in this collection
      </span>
      <br>
      Written by <span class="c__darker"> <?php print_r($authors) ?>  </span> 
      <?php  if(count($authors) > 1){ ?>

        and <span class="c__darker"> <?php echo $authors[1] ?> and <?php echo (count($authors) - 2); ?> Others</span>

      <?php    }  ?>
      
    </div>
  </div>
</div>

    </div>
  </div>
</div>

    <div class="g__space">

       <?php       

      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); ?>         

    <a href="<?php echo get_permalink(); ?>" class="t__no-und paper paper__article-preview"> 
      <div class="article__preview intercom-force-break" dir="ltr">
        <h2 class="t__h3"><span class="c__primary"><?php the_title(); ?></span></h2>
        <!--<span class="paper__preview c__body"><?php the_excerpt(); ?></span>-->
        <div class="avatar">
        <div class="avatar__photo o__ltr">
            <img src="http://placehold.it/50x50" class="avatar__image">

        </div>
        <div class="avatar__info">
          <div>
            Written by <span class="c__darker"> <?php echo get_the_author(); ?></span>
              <br> Updated over a week ago
          </div>
        </div>
      </div>

      </div>

    </a>

          <?php
         
        } // end while
      } // end if
      ?>


    <!-- 
    <a href="http://support.useloom.com/get-started/install-loom" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">Install Loom ����</span></h2>
  <span class="paper__preview c__body">How to get our extension up and running on your Chrome browser</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/13443282_10153501863571150_6521914400640715225_o_(1)-1473757417.jpg" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Joe Thomas</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/how-do-i-start-a-recording" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">How do I start a recording? ����</span></h2>
  <span class="paper__preview c__body">Recording a video has never been so simple!</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/13443282_10153501863571150_6521914400640715225_o_(1)-1473757417.jpg" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Joe Thomas</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/benefits-of-the-3-capture-types" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">Benefits of the 3 Capture types</span></h2>
  <span class="paper__preview c__body">There are multiple features and benefits for the 3 capture types: Desktop, Current Tab, and Cam Only</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/susanacigano-1486922416.png" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Susana</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/navigating-your-my-videos-library" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">Navigating your "My Videos" library</span></h2>
  <span class="paper__preview c__body">Learn how to get the most out of your Loom experience ����</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/susanacigano-1486922416.png" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Susana</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/how-much-does-loom-cost" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">How much does Loom cost?</span></h2>
  <span class="paper__preview c__body">The price of quick videos? It's free!</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/13443282_10153501863571150_6521914400640715225_o_(1)-1473757417.jpg" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Joe Thomas</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/why-and-how-is-loom-free" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">Why and how is Loom free?</span></h2>
  <span class="paper__preview c__body">Pricing and revenue is simply not our focus right now.</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/13443282_10153501863571150_6521914400640715225_o_(1)-1473757417.jpg" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Joe Thomas</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/what-is-opentest-what-changed" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">What is Opentest? What changed?</span></h2>
  <span class="paper__preview c__body">Why Opentest was rebranded into Loom</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/susanacigano-1486922416.png" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Susana</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/folders" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">Folders</span></h2>
  <span class="paper__preview c__body">Easy organisation for your Loom videos.</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/susanacigano-1486922416.png" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Susana</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/loom-hint-integrations" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">Loom Hint &amp; Integrations</span></h2>
  <span class="paper__preview c__body">One-click access to your existing videos anywhere on the web ����</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/susanacigano-1486922416.png" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Susana</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/link-expanding-integrations" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">Link Expanding &amp; Integrations</span></h2>
  <span class="paper__preview c__body">Watch Loom videos without leaving your favourite platforms</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/susanacigano-1486922416.png" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Susana</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a> -->
    <!-- <a href="http://support.useloom.com/get-started/how-to-create-an-account" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">How to create an account</span></h2>
  <span class="paper__preview c__body">Signing up is quick and easy in every possible way!</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/13443282_10153501863571150_6521914400640715225_o_(1)-1473757417.jpg" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Joe Thomas</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a>
    <a href="http://support.useloom.com/get-started/embedly-integration" class="t__no-und paper paper__article-preview">
      <div class="article__preview intercom-force-break" dir="ltr">
  <h2 class="t__h3"><span class="c__primary">Embedly Integration</span></h2>
  <span class="paper__preview c__body">What is Embedly &amp; how Loom integrates with this platform</span>
  <div class="avatar">
  <div class="avatar__photo o__ltr">
      <img src="images/susanacigano-1486922416.png" class="avatar__image">

  </div>
  <div class="avatar__info">
    <div>
      Written by <span class="c__darker"> Susana</span>
        <br> Updated over a week ago
    </div>
  </div>
</div>

</div>

    </a> -->
</div>

    
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
          
         
        </div>
      </div>
    </div>
  </div>
</footer>


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

    <!-- <script src="js/js1.js" ></script> -->

    <?php wp_footer(); ?>

   
  
</body></html>