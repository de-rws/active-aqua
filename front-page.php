<?php

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
	Front Page Template
*/

add_action("aqua_front_page", "aqua_fp_content");
function aqua_fp_content() {

	// Get ACF Info
	$heroImage = get_field("hero_image");
	$heroTitle = get_field("hero_title_text");
	$heroSub   = get_field("hero_subtitle_text");

	$sOneLeft  = get_field("s_one_left_side_content");
	$sOneRight = get_field("s_one_right_side_content");

	$sTwoColOne   = get_field("s_two_column_one");
	$sTwoColTwo   = get_field("s_two_column_two");
	$sTwoColThree = get_field("s_two_column_three");

	$sThreeLeft  = get_field("s_three_left_side_content");
	$sThreeRight = get_field("s_three_right_side_content");


	if ( ! empty( $heroImage ) ): ?>
	<div class="hero-img" style="background:url(<?php echo $heroImage['url']; ?>);background-size:cover;">
		<div class="hero-wrap">
			<div class="hero-inner-wrap">
				<?php if ( ! empty( $heroTitle ) ): ?>
					<h2><?php echo $heroTitle; ?></h2>
				<?php endif; ?>
				<?php if ( ! empty( $heroSub ) ): ?>
					<p><?php echo $heroSub; ?></p>
				<?php endif; ?>
				<a href="#contact" class="btn hvr-sweep-to-top">Contact Active Aqua Spa</a>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="home-section section-one">
		<div class="wrap">
			<div class="two-thirds first">
				<?php if ( ! empty( $sOneLeft ) ) { echo $sOneLeft; } ?>
			</div>
			<div class="one-third">
				<?php if ( ! empty( $sOneRight ) ) { echo $sOneRight; } ?>
			</div>
		</div>
	</div>

	<div class="home-section section-two">
		<div class="wrap">
			<div class="one-third first">
				<?php if ( ! empty( $sTwoColOne ) ) { echo $sTwoColOne; } ?>
			</div>
			<div class="one-third">
				<?php if ( ! empty( $sTwoColTwo ) ) { echo $sTwoColTwo; } ?>
			</div>
			<div class="one-third">
				<?php if ( ! empty( $sTwoColThree ) ) { echo $sTwoColThree; } ?>
			</div>
		</div>
	</div>

	<div class="home-section section-three">
		<div class="wrap">
			<div class="one-half first">
				<?php if ( ! empty( $sThreeLeft ) ) { echo $sThreeLeft; } ?>
			</div>
			<div class="one-half" id="contact">
				<?php if ( ! empty( $sThreeRight ) ) { echo $sThreeRight; } ?>
			</div>
		</div>
	</div>


	<?php
}

get_header();
do_action("aqua_front_page");
get_footer();


