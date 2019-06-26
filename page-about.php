<?php



/* Template Name: O nama  */



?>

<?php get_header(); ?>

<main id="about">
    <div class="container">
        <div class="about-info">
            <div class="bio-image">
            <?php the_post_thumbnail(); ?>
            </div>



            <div class="bio">
                <h2><?php the_title(); ?></h2>
                <p><?php while (have_posts()) : the_post(); ?>
                   <?php the_content(); ?>
                    <?php endwhile; ?>
                        </p>
            </div>

            <div class="jobs job-1">
                <div><?php the_field('povoljno'); ?></div>
            </div>
            <div class="jobs job-2">
                <div><?php the_field('ukusno'); ?></div>
            </div>
            <div class="jobs job-3">
                <div><?php the_field('brzo'); ?></div>
            </div>
        </div>
      </div> 
    </main>


<?php get_footer(); ?>