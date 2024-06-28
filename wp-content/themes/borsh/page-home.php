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

	require_once 'include/main_page/faq.php'; 

	require_once 'include/contacts.php'; 
			
	get_footer();

?>	