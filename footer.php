<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package New Zea

 */



?>

	<?php

		$colCount = 0;

		if ( is_active_sidebar( 'new-zea-footer-one-widget' ) ){

			$colCount++;

		}

		if ( is_active_sidebar( 'new-zea-footer-two-widget' ) ){

			$colCount++;

		}

		if ( is_active_sidebar( 'new-zea-footer-three-widget' ) ){

			$colCount++;

		}

		if($colCount < 1){ $colCount = 1;}

		

		$colCount = 12/$colCount;

	?>

	</div><!-- #content -->

	<div class="footer-widget-container">

        <div class="container">

            <div class="row">



            	<?php if ( is_active_sidebar( 'new-zea-footer-one-widget' ) ){ ?>

                    <div class="col-md-<?php echo $colCount; ?>">                    

                        <?php dynamic_sidebar('new-zea-footer-one-widget'); ?>

                    </div>

                <?php } ?>

                <?php if ( is_active_sidebar( 'new-zea-footer-two-widget' ) ){ ?>

                    <div class="col-md-<?php echo $colCount; ?>">                    

                        <?php dynamic_sidebar('new-zea-footer-two-widget'); ?>

                    </div>

                <?php } ?>

                <?php if ( is_active_sidebar( 'new-zea-footer-three-widget' ) ){ ?>

                    <div class="col-md-<?php echo $colCount; ?>">                    

                        <?php dynamic_sidebar('new-zea-footer-three-widget'); ?>

                    </div>

                <?php } ?>

            </div>

        </div>

    </div>
<!-- Ovde pocinje kod -->



<footer class="main-footer">
									<div class="container clearfix">
											<div class="col-50">
											<small>&copy; Trul. Sva prava zadržana.</small>
											</div>

											<div class="col-50">
											<?php dynamic_sidebar('footer-right') ?>
											</div>
									</div>
</footer>


	<!-- #colophon --> <!-- Ovde zavrsava kod --> 

    

</div><!-- #page -->



<?php wp_footer(); ?>



</body>

</html>

