<?php

/*
Template Name: Главная
*/

    // Header
    get_header();

    require_once 'include/main_page/offer.php'; 

	require_once 'include/main_page/menu.php'; 

	require_once 'include/main_page/add_menu.php'; 

	require_once 'include/main_page/numbers.php'; 

	require_once 'include/main_page/delivery.php'; 

	require_once 'include/main_page/sale.php'; 

	require_once 'include/main_page/about.php'; 

	require_once 'include/main_page/partners.php'; 

	require_once 'include/main_page/gallery.php'; 


	$certificates = carbon_get_theme_option('certificates'); 
    if($certificates){
        ?>
 			<section class="certificates content-inner-1 section-wrapper-2 right">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">Сертификаты качества</h2>
                        <p class="about-p">Официальное подтверждение деятельности</p>
                    </div>
					<? require_once 'include/main_page/certificates.php'; ?>
				</div>
                <img class="bg bg5 dz-move-down" src="<?=get_template_directory_uri()?>/assets/images/background/back_02.png" alt="/">
            </section>
		<?
	}

	require_once 'include/main_page/certificates.php'; 

	?>
		<section class="content-inner-4">
			<div class="container">
				<div class="dz-form-card bg-primary" id="formAbout">
					<div class="dz-form-card__message">
						<div class="dz-form-card__message-text">
							<div>Спасибо, что выбрали нас!</div>
							<div>Наш менеджер свяжется с вами для подтверждения заказа!</div>
						</div>
					</div>
					<div class="section-head">
						<h2 class="title">Не смогли определится с выбором?</h2>
						<p>Оставьте заявку на обратный звонок, менеджер подскажет вам!</p>
					</div>

					<form class="dzForm dezPlaceAni">
						<div class="row">
							<div class="col-lg-5 col-md-12 d-flex align-items-center">
								<div class="input-group input-line">
									<input name="name" required type="text" class="form-control" placeholder="Контактное лицо">
								</div>
							</div>
							<div class="col-lg-5 col-md-12 d-flex align-items-center">
								<div class="input-group input-line">
									<input name="phone" required type="text" class="form-control" placeholder="+7 (___) ___-__-__">
								</div>
							</div>
							
							<div class="col-lg-2 col-12">
								<button type="submit" name="submit" value="submit" class="btn btn-md btn-white btn-hover-1"><span>Отправить</span></button>	
							</div>

							<div class="mt-3" style="font-size:14px;">
								Нажимая кнопку <b>"Отправить"</b>, вы соглашаетесь с <b><a href="/privacy-policy/">Политикой конфиденциальности</a></b>
							</div>
						</div>
					</form>
					<input type="hidden" name="title" value="Обратный звонок">
					<input type="hidden" name="WhereForm" value="Форма не смогли определится с выбором">
					<input type="hidden" name="typeForm" value="callback">
				</div>
			</div>
		</section>
	<?

	require_once 'include/main_page/faq.php'; 

	require_once 'include/contacts.php'; 
			
	get_footer();

?>	