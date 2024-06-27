<? $gallery = carbon_get_theme_option('clients_gallery'); 

    if($gallery){
        ?>
            <section class="certificates content-inner-1 section-wrapper-2 section-wrapper-6 right">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">Наши клиенты</h2>
                        <p class="about-p">Компании, которые кормим</p>
                    </div>
                    <div class="row">
                        <?php
                            foreach ($gallery as $img) {
                                ?>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div>
                                            <img src="<?=wp_get_attachment_image_url($img, 'full');?>" alt="">
                                        </div>
                                    </div>
                                <?
                            }
                        ?>
                    </div>
                </div>
                <img class="bg bg4 dz-move-down" src="<?=get_template_directory_uri()?>/assets/images/background/back_05.png" alt="/">
            </section>
        <?
    }
?>
        