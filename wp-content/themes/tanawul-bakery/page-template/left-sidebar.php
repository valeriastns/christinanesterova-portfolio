<?php
/**
 * Template Name:Page with Left Sidebar
 */

get_header(); ?>

<?php do_action( 'tanawul_bakery_pageleft_header' ); ?>

<div class="container">
    <main id="main" role="main" class="wrapper">
        <div class="row">
            <div id="sidebox" class="col-lg-4 col-md-4">
                <?php dynamic_sidebar('sidebox-2'); ?>
            </div>
    		<div class="col-lg-8 col-md-8" id="main-content">
    			<?php while ( have_posts() ) : the_post(); ?>	
                    <h1><?php the_title();?></h1>
                    <?php the_post_thumbnail(); ?>
                    <div class="text"><p><?php the_content();?></p></div>
                    <?php	
                        if ( comments_open() || '0' != get_comments_number() )
                        	comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>
            </div> 
        </div>      
        <div class="clearfix"></div>    
    </main>
</div>

<?php do_action( 'tanawul_bakery_pageleft_footer' ); ?>

<?php get_footer(); ?>