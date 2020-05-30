<?php
get_header(); ?>

	<div id="page7" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<?php twentyseventeen_edit_link( get_the_ID() ); ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
	<?php
	    the_content();

	    wp_link_pages(
		array(
		    'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
		    'after'  => '</div>',
		)
	    );
	    ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
