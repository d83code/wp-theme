

<?php



/* Template Name: Pocetna  */



?>



<?php get_header(); ?>





<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <div class="container">

            <div class="white-background">

                <div class="row">





                    <div class="col-xs-12 col-sm-7 col-md-8">

                             <p>

                            <?php echo the_field ('text-pocetna') ?>



                        </p>

                    </div>



                    <div class="col-xs-12 col-sm-5 col-md-4">

                        <div class="img-pocetna">



                        <img class="img-responsive center-block img-rounded" src="<?php echo the_field ('img-pocetna')

                        ?>" alt=""/>



                        </div>







                    </div>























                </div>

            </div>

        </div>

    </main><!-- #main -->

</div><!-- #primary -->







<?php get_footer(); ?>