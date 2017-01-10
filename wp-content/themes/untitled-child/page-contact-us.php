<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package untitled
 */

get_header(); ?>

	<?php
		$director_photo = get_field("director_photo");
		$director_name = get_field("director_name");
		$director_email = get_field("director_email");
		$coordinator_photo = get_field("coordinator_photo");
		$coordinator_name = get_field("coordinator_name");
		$coordinator_email = get_field("coordinator_email");
		$size = "thumbnail";
?>

	<div id="main" class="site-main">
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

	<div class="staff">
		<div class="staff-head">
			<h1 style="text-align: center;"><span style="color: #ff0000;"><strong>Staff</strong></span></h1>
		</div>
		<div class="employee-area">
			<div class="director">
				<div class="image">
					<?php echo wp_get_attachment_image($director_photo, $size); ?>
				</div>
				<div class="staff-info">
					<?php echo $director_name; ?><br>
					<span style="text-decoration: underline; color: #0000ff;"><a style="color: #0000ff; text-decoration: underline;" href="mailto:<?php echo $director_email; ?>"> <?php echo $director_email ?></a></span>
				</div>
			</div>
		</div>
			
		<div class="employee-area">		
			<div class="coordinator">
				<div class="image">
					<?php echo wp_get_attachment_image($coordinator_photo, $size); ?>
				</div>
				<div class="staff-info">	
					<?php echo $coordinator_name; ?><br>
					<span style="text-decoration: underline; color: #0000ff;"><a style="color: #0000ff; text-decoration: underline;" href="mailto:<?php echo $coordinator_email; ?>"> <?php echo $coordinator_email ?></a></span>
				</div>
			</div>	
		</div>
	</div>
					
			<?php
				while ( have_posts() ) :the_post();
					get_template_part( 'content', 'page' );
				endwhile;
?>
	

			</div><!-- #content -->
		</div><!-- #primary -->

<?php
get_footer(); ?>