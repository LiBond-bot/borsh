<? $gallery = carbon_get_theme_option('staff_gallery'); 

    if($gallery){
        ?>
            <section class="certificates content-inner-2 section-wrapper-2">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">Наше производство</h2>
                        <p class="about-p">Команда и кухня БОРЩа в деле!</p>
                    </div>
                    <div class="gallery__block" id="lightgallery">
                        <div class="row">
                            <?php
                                foreach ($gallery as $img) {
                                    ?>
                                        <div class="col-md-4 col-sm-6 col-12 mb-4">
                                            <a href="<?=wp_get_attachment_image_url($img, 'full');?>" data-src="<?=wp_get_attachment_image_url($img, 'full');?>" class="dz-media rounded-md lg-item gallery__img">
                                                <img src="<?=wp_get_attachment_image_url($img, 'large');?>"  alt="/" width="800" height="650">
                                            </a>
                                        </div>
                                    <?
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <img class="bg bg3 dz-move-down" src="<?=get_template_directory_uri()?>/assets/images/background/back_06.png" alt="/">
            </section>
        <?
    }
?>

