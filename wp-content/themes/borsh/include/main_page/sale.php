<?php

    // Получение всех скидок
    $args = array(
        'post_type'      => 'sale',
        'post_status'    => 'publish',
        'posts_per_page' => '-1'
    );

    $sales = get_posts($args);

    if($sales){
        ?>
            <section class="content-inner-4 overflow-hidden">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">Акции</h2>
                        <p>Эксклюзив от БОРЩ</p>
                    </div>
                    <div class="swiper blog-swiper swiper-visible swiper-btn-lr">
                        <div class="swiper-wrapper">
                            <?php
                                foreach ($sales as $data) {
                                                                    
                                    setup_postdata( $data );
                                    
                                    $sale_photo = get_the_post_thumbnail_url($data->ID, 'full');

                                    $sale_title = carbon_get_post_meta( $data->ID, 'sale_title' );
                                    $sale_date = carbon_get_post_meta( $data->ID, 'sale_date' );
                                    ?>
                                        <div class="swiper-slide">
                                            <div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom">
                                                <div class="dz-media">
                                                    <img src="<?=$sale_photo?>" alt="/">
                                                </div>
                                                <div class="dz-info">
                                                    <?
                                                        if($sale_date){
                                                            ?>
                                                                <div class="dz-meta">
                                                                    <ul>
                                                                        <li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> <?=$sale_date?></a></li>
                                                                    </ul>
                                                                </div> 
                                                            <?
                                                        }
                                                    ?>
                                                    
                                                    <?
                                                        if($sale_title) {
                                                            ?><h5 class="dz-title"><?=$sale_title?></h5><?
                                                        } else {
                                                            ?><h5 class="dz-title"><?=$data -> post_title?></h5><?
                                                        }
                                                    ?>
                                                    <?=$data -> post_content?>
                                                </div>
                                            </div>
                                        </div>
                                    <?
                                }
                            ?>
                        </div>
                        <div class="pagination mt-xl-0 m-t40">
                            <div class="blog-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
                            <div class="blog-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </section>
        <?
    }

?>


