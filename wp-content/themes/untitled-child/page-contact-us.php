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
		$board_1 = get_field("board_1");
		$board_2 = get_field("board_2");
		$board_3 = get_field("board_3");
		$board_4 = get_field("board_4");
		$board_5 = get_field("board_5");
		$board_6 = get_field("board_6");
		$board_7 = get_field("board_7");
		$board_8 = get_field("board_8");
		$board_9 = get_field("board_9");
		$board_10 = get_field("board_10");
		$consultant = get_field("consultant");	
?>

<div class="contact-page">
<div class="staff-head">
	<h1 style="text-align: center;"><span style="color: #ff0000;"><strong>Staff</strong></span></h1>
</div><!--staff-head-->
	
	<div class="staff">
		<div class="employee-area">
			<div class="director">
				<div class="image">
					<?php echo wp_get_attachment_image($director_photo, $size); ?>
				</div><!--image-->
				<div class="staff-info">
					<?php echo $director_name; ?><br>
					<span style="text-decoration: underline; color: #0000ff;">
						<a style="color: #0000ff; text-decoration: underline;" 
						   href="mailto:<?php echo $director_email; ?>"> 
							<?php echo $director_email ?>
						</a>
					</span>
				</div><!--staff-info-->
			</div><!--director-->
		</div><!--employee-area-->
			
		<div class="employee-area">		
			<div class="coordinator">
				<div class="image">
					<?php echo wp_get_attachment_image($coordinator_photo, $size); ?>
				</div><!--image-->
				<div class="staff-info">	
					<?php echo $coordinator_name; ?><br>
					<span style="text-decoration: underline; color: #0000ff;">
						<a style="color: #0000ff; text-decoration: underline;" 
						   href="mailto:<?php echo $coordinator_email; ?>"> 
							<?php echo $coordinator_email ?>
						</a>
					</span>
				</div><!--staff info-->
			</div><!--coordinator-->	
		</div><!--employee-area-->
	</div><!--staff-->
			

			<h1 style="text-align: center;"><span style="color: #ff0000;"><strong>Board</strong></span></h1>

<div class="board">
	<?php if ($board_1) { ?>
		<?php echo $board_1; ?><br>
	<?php } ?>
	<?php if ($board_2) { ?>
		<?php echo $board_2; ?><br>
	<?php } ?>
	<?php if ($board_3) { ?>
		<?php echo $board_3; ?><br>
	<?php } ?>
	<?php if ($board_4) { ?>
		<?php echo $board_4; ?><br>
	<?php } ?>
	<?php if ($board_5) { ?>
		<?php echo $board_5; ?><br>
	<?php } ?>
	<?php if ($board_6) { ?>
		<?php echo $board_6; ?><br>
	<?php } ?>
	<?php if ($board_7) { ?>
		<?php echo $board_7; ?><br>
	<?php } ?>
	<?php if ($board_8) { ?>
		<?php echo $board_8; ?><br>
	<?php } ?>
	<?php if ($board_9) { ?>
		<?php echo $board_9; ?><br>
	<?php } ?>
	<?php if ($board_10) { ?>
		<?php echo $board_10; ?><br>
	<?php } ?>
	<br>
	<?php if ($consultant) { ?>
		<strong>Consultant</strong><br>
		<?php echo $consultant; ?><br>
	<?php } ?>

</div><!--board-->


</div><!--contact-page-->



<?php
get_footer(); ?>