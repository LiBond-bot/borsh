<?php

    $id = get_the_ID();

    $offer_title = carbon_get_post_meta( $id,  'offer_title' );
	$offer_subtitle = carbon_get_post_meta( $id, 'offer_subtitle' );
	$offer_img_1 = carbon_get_post_meta( $id, 'offer_img_1' );
	$offer_img_2 = carbon_get_post_meta( $id, 'offer_img_2' );
	$offer_button_text = carbon_get_post_meta( $id, 'offer_button_1_text' );
	$offer_button_link = carbon_get_post_meta( $id, 'offer_button_1_link' );
	$offer_button_text_2 = carbon_get_post_meta( $id, 'offer_button_2_text' );
	$offer_button_link_2 = carbon_get_post_meta( $id, 'offer_button_2_link' );

?>


<div class="main-bnr-two offer">
	<div class="main-slider-2">
		<div class="banner-inner">
			<div class="primary-box"></div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-7 col-md-7">
						<div class="banner-content">
							<?
								if($offer_title) {
									?> <h1 class="title wow fadeInUp" data-wow-delay="0.2s"><?=$offer_title?></h1><?
								}

								if($offer_title) {
									?><p class="wow fadeInUp" data-wow-delay="0.4s"><?=$offer_subtitle?></p><?
								}

								if($offer_button_text || $offer_button_text_2){
									?>
										<div class="banner-btn d-flex align-items-start align-items-lg-center flex-column flex-lg-row wow fadeInUp" data-wow-delay="0.6s">
											
											<?
												if($offer_button_text && $offer_button_link) {
													?>
														<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#orderLunchCorp" class="btn btn-primary btn-md shadow-primary m-r30 btn-hover-3 mb-3 mb-lg-0 offer__button"><span class="btn-text" data-text="<?=$offer_button_text?>"><?=$offer_button_text?></span></a>
													<?
												}

												if($offer_button_text_2 && $offer_button_link_2) {
													?>
														<a href="<?=$offer_button_link_2?>" class="btn btn-outline-primary btn-md shadow-primary btn-hover-3 offer__button"><span class="btn-text" data-text="<?=$offer_button_text_2?>"><?=$offer_button_text_2?></span></a>
													<?
												}
											?>
										</div>
									<?
								}
							?>
						</div>
					</div>
					<div class="col-xl-6 col-lg-5 col-md-5">
						<div class="banner-media">
							<img src="<?=get_template_directory_uri()?>/assets/images/offer/back_03.png" class="item-bg" alt="/">									
							<?
								if($offer_img_2){
									?>
										<div class="item-media wow fadeInRight dz-move-down" data-wow-delay="1s" data-speed-x="-2" data-speed-scale="-1">
											<img src="<?=wp_get_attachment_image_url( $offer_img_2, 'full' );?>" class="img2" alt="/">
										</div>
									<?
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<?
				if($offer_img_1){
					?>
						<div class="offer__launch-1">
							<img src="<?=wp_get_attachment_image_url( $offer_img_1, 'full' );?>" alt="">
						</div>
					<?
				}
			?>
		</div>
	</div>
</div>