<? $certificates = carbon_get_theme_option('certificates'); 

    if($certificates){
        ?>
            <section class="certificates content-inner-1 section-wrapper-2 right">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">Сертификаты качества</h2>
                        <p class="about-p">Официальное подтверждение деятельности</p>
                    </div>
                    <div class="swiper-btn-lr">
                        <div class="swiper portfolio-swiper">
                            <div class="swiper-wrapper">
                                <?php
                                    foreach ($certificates as $img) {
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="menu__photo">
                                                    <a class="certificate" href="<?=wp_get_attachment_url($img['certificates_file']);?>">
                                                        <img src="<?=wp_get_attachment_image_url($img['certificates_thumb'], 'large');?>"  alt="/" width="800" height="650">
                                                    </a>
                                                </div>
                                            </div>
                                        <?
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="pagination mt-xl-0 m-t40">
                            <div class="img-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
                            <div class="img-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
                        </div>

                    </div>
                </div>
                <img class="bg bg5 dz-move-down" src="<?=get_template_directory_uri()?>/assets/images/background/back_02.png" alt="/">
            </section>
        <?
    }

?>

