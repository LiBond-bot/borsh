
<? $menu = carbon_get_theme_option('main_menu'); 

    if($menu){
        ?>  
            <section class="menu content-inner-4 bg-white section-wrapper-2 section-wrapper-6 right">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">Наши обеды</h2>
                        <p>Вкусные, сытные, свежие</p>
                    </div>
                    <div class="swiper-btn-lr">
                        <div class="swiper portfolio-swiper">
                            <div class="swiper-wrapper">
                                <?php
                                    foreach ($menu as $img) {
                                        ?>
                                            <div class="swiper-slide">
                                                <div class="menu__photo">
                                                    <img src="<?=wp_get_attachment_image_url($img, 'full');?>" alt="">
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
                <img class="bg bg6 dz-move-down" src="<?=get_template_directory_uri()?>/assets/images/background/back_08.png" alt="/">
            </section>
        <?
    }
?>


    