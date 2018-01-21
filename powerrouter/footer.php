<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		<div class="cta-skin">

            <div class="container text-center">

               <?php echo get_post_meta(4,'wpcf-get-started-section',true);?>

            </div>

        </div>

		<footer class="footer">
            <div class="space-50"></div>
            <div class="container">
                <div class="row vertical-align-child">
                    <div class="col-md-3 margin-b-30">
                    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                            
                                <?php dynamic_sidebar( 'sidebar-2' ); ?>
                            
                        <?php endif; ?>
                        <!-- <div class="margin-b-20">
                            <a href="#">
                                <img src="http://localhost/lead/wp-content/themes/lead/assets/images/router.png" alt="">
                            </a>
                        </div>
                        <p class="demo">
                            Route to your best rep.
                        </p> -->
                    </div>
                    <div class="col-md-2 margin-b-30">
                        <ul class="list-unstyled">
                            <?php if ( has_nav_menu( 'footer1' ) ) : ?>

<?php wp_nav_menu( array(
        'theme_location' => 'footer1',
        'menu_id'        => '',
'menu' => 'top', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => 'menu', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li >%3$s</li>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => ''
    ) ); ?>
        

<?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-md-2 margin-b-30">
                        <ul class="list-unstyled">
                           <?php if ( has_nav_menu( 'footer2' ) ) : ?>

<?php wp_nav_menu( array(
        'theme_location' => 'footer2',
        'menu_id'        => '',
'menu' => 'top', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => 'menu', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li >%3$s</li>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => ''
    ) ); ?>
        

<?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-md-5 margin-b-30">
                       <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                            
                                <?php dynamic_sidebar( 'sidebar-3' ); ?>
                            
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="space-20"></div>
        </footer>

        <!-- jQuery plugins-->
        <script src="<?php echo get_template_directory_uri()?>/assets/js/plugins/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri()?>/assets/js/template-custom.js" type="text/javascript"></script>
         <script src="<?php echo get_template_directory_uri()?>/assets/masterslider/masterslider.min.js"></script>
        <script type="text/javascript">

            var slider = new MasterSlider();

            slider.control('arrows');
            slider.control('bullets', {autohide: false, align: 'bottom', margin: 10});
            slider.control('scrollbar', {dir: 'h', color: '#333'});

            slider.setup('masterslider', {
                width: 600,
                height: 400,
                space: 0,
                view: 'normal',
                loop: true
            });

        </script>
<?php wp_footer(); ?>

</body>
</html>
