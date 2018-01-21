<?php 
/* Template Name: Free Demo */ 

get_header('demo');

?>
<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

<section class="showcase-section">
            <div class="space-90"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 margin-b-30">

                        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="signup-form navbar-form margin-b-20 demo_frm">

                            <h3>Schedule a Demo</h3>

                            <div class="form-group">
                            <input type=hidden name="oid" value="00D410000012Eni">
                            <input type=hidden name="retURL" value="http://www.powerrouter.io/thank-you.html">

                            <label for="first_name">First Name*</label><input id="first_name" maxlength="20" name="first_name" size="10" type="text" class="form-control" required/><br>

                            <label for="last_name">Last Name*</label><input id="last_name" maxlength="80" name="last_name" size="10" type="text" class="form-control" required/><br>

                            <label for="email">Email*</label><input id="email" maxlength="80" name="email" size="10" type="email" class="form-control" required/><br>

                            <label for="company">Company</label><input id="company" maxlength="40" name="company" size="10" type="text" class="form-control" required/><br>

                            <label for="phone">Phone*</label><input id="phone" maxlength="40" name="phone" size="0" type="number" class="form-control" required/><br>

                            </div>
                            <button type="submit" class="btn btn-cta btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6 offset-md-1 margin-b-30">
                        <?php echo get_the_content();?>
                    </div>
                </div>
                <div class="space-60"></div>
            </div>
        </section><!--end showcase section-->
        
        <?php
        
        endwhile;
        endif; ?>


<?php get_footer();?>