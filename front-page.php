<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class = "home-about-me">
			<div class = "home-about-me-text">
       <p>I’m a curriculum designer at  Teach Think Elementary,  as well as a digital nomad and <del>future</del> WordPress developer.
         <br>
				 <br>I got my start as a teacher in New York City public schools, and learned and worked my way into running my own online businesses.
         <br>
				 <br>When I’m not out wandering the globe (which is most of the time), I can usually be found on the ice (skating!),
				 attempting to learn languages, devouring whatever street food I can find, building human towers, or doing whatever it is the locals do.</p>
		 </div><!--home-about-me-text-->
		</div><!--home-about-me-->

		<div class = "home-help-you">
			<div class = "home-help-you-text">
       <p>Have you been meaning to build a website, but haven’t had the time to figure it out?
          <br>
					<br>
          Have you been putting off restyling your website to match your brand colors?
					<br>
					<br>
          Do you have blog envy and wish your site were a little more exciting?
					<br>
					<br>
          Do you wish your site were easier for YOU to maintain, without the need for a developer?
					<br>
					<br>
          Good news!!  I can help you!</p>
		 </div><!--home-help-you-text-->
	 </div><!--home-help-you-->

	 <div class = "home-why-me">
	 	<div class = "home-why-me-text">
	 	 <p>Why work with me? <br>
     <br>
      I'm focused solely on WordPress. <br>
      I pride myself on impeccable customer service.<br>
			I can help with both design and code.<br>
			I love what I do and it shows in my work.<br>
			I'm a detail-oriented life-long learner.
    </p>
	  </div><!--home-why-me-text-->
	</div><!--home-why-me-->

	<div class = "home-contact-me">
	 <div class = "home-contact-me-text">
		<p>Let's work together!!<br>
		<br>
		 Contact me at:  <br>
		 chriscadalzo AT gmail DOT com <br>
		 <br>
     Talk to you soon!</p>
 </div><!--home-contact-me-text-->
	</div><!--home-contact-me-->



	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
