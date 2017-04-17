<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stanmd
 */

get_header(); ?>
<?php
$blog_img = get_template_directory_uri() . '/assets/img/data.jpg';
// $blog_text = 'Blog'
  
?>
 <div class="blog header" style="background-image: url('<?php echo $blog_img;?>'); height: 20vh;">
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

    <div id="content" class="row">
    	<div id="primary" class="col-md-8 col-md-offset-2"
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
      </div>
      </div>


<?php
get_sidebar();
get_footer();
