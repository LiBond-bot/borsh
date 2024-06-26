</div>
	<!--Footer-->
	<footer class="site-footer  style-1 bg-dark" id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-5 col-md-12">

						<?php 

							if(get_the_ID() != 15 && get_the_ID() != 13) {
								require_once 'include/form_footer_main.php';
							} else {

								if(get_the_ID() == 15) {
									?>
										<div class="dz-form-card_offset">
											<? require_once 'include/form_footer_corporate.php';?>
										</div>
									<?
									
								} else {
									?>
										<div class="dz-form-card_offset">
											<? require_once 'include/form_footer_main.php';?>
										</div>
									<?
								}
							}
						?>
					</div>
					<div class="col-xl-4 col-lg-3 col-md-6 col-12">
						<div class="widget widget_getintuch">
							<h5 class="footer-title">Контакты</h5>
							<ul>

									<?
										if(carbon_get_theme_option('site_adress')) {
											?>
												<li>
													<i class="flaticon-placeholder"></i>
													<p><?=carbon_get_theme_option('site_adress')?></p>
												</li>
											<?
										}
									?>

								<?
									if(carbon_get_theme_option('site_phone') || carbon_get_theme_option('site_phone_2')) {
										?>
											<li>
												<i class="flaticon-telephone"></i>
												<p>
													<a href="tel:<?=carbon_get_theme_option('site_phone_digits')?>"><?=carbon_get_theme_option('site_phone')?></a><br>
													<a href="tel:<?=carbon_get_theme_option('site_phone_digits_2')?>"><?=carbon_get_theme_option('site_phone_2')?></a>
												</p>
											</li>
										<?
									}
								?>
								
								<?
									if(carbon_get_theme_option('site_email')) {
										?>
											<li>
												<i class="flaticon-email-1"></i>
												<p>
													<a href="mailto:<?=carbon_get_theme_option('site_email')?>"><?=carbon_get_theme_option('site_email')?></a><br>
													
												</p>
											</li>
										<?
									}
								?>

								<?
									if(carbon_get_theme_option('site_whatsapp')) {
										?>
											<li>
												<i class="la la-whatsapp"></i>
												<p>
													<a href="https://api.whatsapp.com/send?phone=<?=carbon_get_theme_option( 'site_whatsapp' )?>">Whatsapp</a><br>
													
												</p>
											</li>
										<?
									}
								?>

								<?
									if(carbon_get_theme_option('site_telegram')) {
										?>
											<div class="mb-2 text-light fw-bold mt-5">Наш ТГ-канал<br>с ежедневным актуальным меню:</div>
											<li>
												<i class="la la-telegram"></i>
												<p>
													<a href="https://t.me/<?=carbon_get_theme_option('site_telegram')?>">Telegram</a><br>
												</p>
											</li>
										<?
									}
								?>

							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-6 col-12 mt-md-0 mt-3">
						<div class="widget widget_services">
							<h5 class="footer-title">Меню</h5>
							<?php
								wp_nav_menu( [
									'theme_location'  => 'menu_main_footer',
									'container'       => null,
									'menu_class'      => '',
								] );
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom Part -->
		<div class="container">
			<div class="footer-bottom">
				<div class="row">
					<div class="col-xl-6 col-md-6 text-md-start">
						<?=carbon_get_theme_option( 'footer_text' )?>			
					</div>
					<div class="col-xl-6 col-md-6 text-md-end">
						<p><a href="/privacy-policy/">Политика конфиденциальности</a></p>
					</div>
				</div>
			</div>
		</div>
		<img class="bg bg1 dz-move" src="<?=get_template_directory_uri()?>/assets/images/background/pic5.png" alt="/">
	</footer>

	<? require_once 'include/messenger-panel.php'?>
	<? require_once 'include/form_orderlunch.php'?>
	<? require_once 'include/form_menu.php'?>
	<? require_once 'include/form_orderlunch_corp.php'?>
		
	<!-- Footer -->
	<div class="scroltop-progress scroltop-primary">
		<svg width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
		
</div>

	<!-- JS -->
	<?=wp_footer();?>
	
</body>
</html>