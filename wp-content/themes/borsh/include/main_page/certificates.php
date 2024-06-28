<? $certificates = carbon_get_theme_option('certificates'); 

    if($certificates){
        ?>

            <div class="swiper-btn-lr">
                <div class="swiper portfolio-swiper swiper-visible">
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
        <?
    }

?>

