<?php
/**
 * Template Name: Education page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

get_header(); ?>


<div class="site-content-contain">
	<div id="content" class="site-content">
<div class="wrap">
<!-- education intro section -->
<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='education-header'>
				<h1><?php the_content(); ?></h1>
			</div><!--education-header-->
		<?php endwhile; ?>
	</div><!-- .site-content -->
</section><!-- .home-page -->


<!-- courses section -->

<div class="courses-taken">


<?php while ( have_posts() ) : the_post();
				  $school_1 = get_field('school_1');
					$courses_1 = get_field('courses_1');
					$course_image_1 = get_field('$course_image_1');
					$school_2 = get_field('school_2');
					$courses_2 = get_field('courses_2');
					$course_image_2 = get_field('$course_image_2');
					$school_3 = get_field('school_3');
					$courses_3 = get_field('courses_3');
					$course_image_3 = get_field('$course_image_3');

					$size = 'thumbnail';
	?>

			<h1>Completed Course Work</h1>
			  <h2><?php echo $school_1; ?></h2>
				<p><?php echo $courses_1; ?></p>
		    <?php echo $course_image_1; ?>
	  	  <h2><?php echo $school_2; ?></h2>
				<p><?php echo $courses_2; ?></p>
				<?php echo wp_get_attachment_image( '$course_image_2, $size' ); ?>
				<h2><?php echo $school_3; ?></h2>
				<p><?php echo $courses_3; ?></p>
				<?php echo wp_get_attachment_image( '$course_image_3, $medium' ); ?>

	</div><!--courses-->




   <?php endwhile; // end of the loop. ?>


</div><!--????-->
</div>
</div>



	<!--interested??-->
<hr>

<div class="interested">
<h2>Interested in working with me?</h2>
<a class="button" href="<?php echo home_url(); ?>/blog">Contact</a>
</div><!--interested-->


<?php get_footer(); ?>
