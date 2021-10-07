<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_ver1
 */

get_header('pf1');
?>
<div class="home__contents">
	<div class="home__contents-top">
		<div class="home__contents-img">
			<img src="http://portfoliover1.local/wp-content/uploads/2021/10/town2.jpg" alt="town">
		</div>
		<!-- <h2>OUR SERVICES</h2> -->
		<div class="home__services-boxs">
			<div class="home__services-box">
				<div class="home__services-text">
					<h3>SERVICE-1</h3>
				</div>
				<div class="home__services-img">
					<img src="http://portfoliover1.local/wp-content/uploads/2021/10/services1.jpg" alt="services1">
				</div>
			</div>
			<div class="home__services-box">
				<div class="home__services-text">
					<h3>SERVICE-2</h3>
				</div>
				<div class="home__services-img">
					<img src="http://portfoliover1.local/wp-content/uploads/2021/10/services1.jpg" alt="services2">
				</div>
			</div>
			<div class="home__services-box">
				<div class="home__services-text">
					<h3>SERVICE-3</h3>
				</div>
				<div class="home__services-img">
					<img src="http://portfoliover1.local/wp-content/uploads/2021/10/services1.jpg" alt="services3">
				</div>
			</div>
			<div class="home__services-box">
				<div class="home__services-text">
					<h3>SERVICE-4</h3>
				</div>
				<div class="home__services-img">
					<img src="http://portfoliover1.local/wp-content/uploads/2021/10/services1.jpg" alt="services4">
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="home__concept-boxs">
		<div class="home__concept-img">
			<img src="http://portfoliover1.local/wp-content/uploads/2021/10/engineer1.jpg" alt="engineer">
		</div>
		<div class="home__concept-text">
			<h2>CONCEPT</h2>
			<ul>
				<li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
				<li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
				<li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
				<li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
			</ul>
		</div>
	</div>
	<div class="home__concept-color"></div>
	<h2>OUR PORTFOLIO</h2>
	<div class="home__portfolio-boxs">
		<!-- <div class="home__portfolio-color"></div> -->
		<div class="home__portfolio-box">
			<h3>PORTFOLIO-1</h3>
		</div>
		<div class="home__portfolio-box">
			<h3>PORTFOLIO-2</h3>
		</div>
		<div class="home__portfolio-box">
			<h3>PORTFOLIO-3</h3>
		</div>
		<div class="home__portfolio-box">
			<h3>PORTFOLIO-4</h3>
		</div>
		<div class="home__portfolio-box">
			<h3>PORTFOLIO-5</h3>
		</div>
		<div class="home__portfolio-box">
			<h3>PORTFOLIO-6</h3>
		</div>
		<div class="home__portfolio-box">
			<h3>PORTFOLIO-7</h3>
		</div>
		<div class="home__portfolio-box">
			<h3>PORTFOLIO-8</h3>
		</div>
		<div class="home__portfolio-box">
			<h3>PORTFOLIO-9</h3>
		</div>
	</div>
	<div class="home__image-boxs">
		<img src="http://portfoliover1.local/wp-content/uploads/2021/10/programing2.jpg" alt="programing">
	</div>
</div>
<div class="home__contents-main">
	<div class="home__contents-posts">
		<div class="home__contents-flexbox">
			<main id="primary" class="site-main">
		
				<?php
				while ( have_posts() ) :
					the_post();
		
					get_template_part( 'template-parts/content', 'pf1' );
		
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
		
				endwhile; // End of the loop.
				?>
		
			</main><!-- #main -->
		</div>
	</div>
	<div class="home__contents-sidebar">
		<?php
			get_sidebar('pf1');
		?>
	</div>
</div>
<div class="home__footer">
	<?php
		get_footer('pf1');
	?>
</div>