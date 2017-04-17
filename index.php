<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package stanmd
 */

get_header(); ?>

<?php
$blog_img = get_template_directory_uri() . '/assets/img/data.jpg';
$blog_text = 'Blog'
  
?>
 <div class="blog header" style="background-image: url('<?php echo $blog_img;?>'); height: 30vh;">
    <div class="container" style="padding-top: 8vh;">
      <div class="row">
        <div class="col-md-8 col-md-offset-2" align="center">
            <?php if ($blog_text) : ?>

            <h1> <?php echo $blog_text; ?> </h1>
             
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

<div class="main main-raised">
  <div class="section">

  <!--<div class="container">-->
    <div id="content" class="row">
    	<div id="primary" class="col-md-8 col-md-offset-2">
    		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
			get_sidebar();

			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
				<div>
			<?php


				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			?>
				</div>
				<br>
			<?php
			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	</div>
      </div>
      <!--</div>-->
      </div>

<?php
get_footer();
