<?php

    $addons_cat = get_terms( array( 'taxonomy' => 'addon_cat', 'order' => 'DESC'));

    if($addons_cat){
        ?>
            <section class="add-menu content-inner-4 section-wrapper-6 section-wrapper-2 right">
                <div class="container inner-section-wrapper">
                    <div class="section-head text-center">
                        <h2 class="title">Добавьте к заказу</h2>
                        <p>В дополнение к основе</p>
                    </div>
                    <div class="row">
                        <ul class="nav nav-tabs tabs-style-1">
                            <?
                                $active_cat = 0;

                                foreach ($addons_cat as $key => $cat) {

                                    $class;
                                    if($active_cat == 0) {$class = 'active';} else {$class = '';};

                                    $icon = carbon_get_term_meta( $cat->term_id, 'icon' );

                                    ?>
                                        <li class="nav-item">
                                            <button class="nav-link <?=$class?>" data-bs-toggle="tab" href="#<?=$cat->slug?>">
                                                <i class="<?=$icon?>"></i>
                                                <span class="d-none d-md-inline-block m-l10"><?=$cat->name?></span>
                                            </button>
                                        </li>
                                    <?

                                    $active_cat = $active_cat + 1;
                                }
                            ?>
                        </ul>
                        <div class="tab-content">
                            <?
                                $active_cat = 0;

                                foreach ($addons_cat as $key => $cat) {

                                    $class;
                                    if($active_cat == 0) {$class = 'active';} else {$class = '';};

                                    // Получение всех допов
                                    $args = array(
                                        'post_type'      => 'addon',
                                        'post_status'    => 'publish',
                                        'posts_per_page' => '-1',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'addon_cat',
                                                'field' => 'id',
                                                'terms' => $cat->term_id
                                            )
                                        )
                                    );

                                    $addons = get_posts($args);

                                    ?>
                                        <div id="<?=$cat->slug?>" class="tab-pane <?=$class?>">
                                            <div class="swiper menu-swiper swiper-visible swiper-btn-lr">
                                                <div class="swiper-wrapper">
                                                    <?php
                                                        foreach ($addons as $data) {

                                                            setup_postdata( $data );

                                                            $add_photo = get_the_post_thumbnail_url($data->ID, 'full');
                                                            $add_price = carbon_get_post_meta( $data->ID, 'addon_price' );

                                                            ?>
                                                                <div class="swiper-slide">
                                                                    <li class="card-container col-12 m-b30">
                                                                        <div class="dz-img-box style-7">
                                                                            <div class="dz-media">
                                                                                <?php
                                                                                    if($add_photo){
                                                                                        ?>
                                                                                            <div>
                                                                                                <img src="<?=$add_photo?>" alt="/">
                                                                                            </div>
                                                                                        <?
                                                                                    } else {
                                                                                        ?>
                                                                                            <div class="dz-media__no-photo">
                                                                                                <div>
                                                                                                    <img src="<?=get_template_directory_uri()?>/assets/images/icons/no-photo.png" alt="">
                                                                                                </div>
                                                                                                <div>Мы не успеваем делать фото<br>за шеф-поваром</div>
                                                                                            </div>
                                                                                        <?
                                                                                    }
                                                                                
                                                                                ?>
                                                                                
                                                                            </div>
                                                                            <div class="dz-content">
                                                                                <h5 class="title"><?=$data->post_title?></h5>
                                                                                <?
                                                                                    if($data->post_content) {
                                                                                        ?><p><span>Состав: </span> <?=$data->post_content?></p><?
                                                                                    }
                                                                                ?>
                                                                                <?
                                                                                    if($add_price) {
                                                                                        ?><span class="price"><?=$add_price?> руб.</span><?
                                                                                    }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                            <?
                                                        }
                                                    ?>    
                                                    
                                                </div>
                                                <div class="pagination mt-xl-0 m-t40">
                                                    <div class="img-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
                                                    <div class="img-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?

                                    $active_cat = $active_cat + 1;
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#menu" class="btn btn-primary btn-md shadow-primary btn-hover-3"><span class="btn-text" data-text="Узнать меню">Узнать меню</span></a>
                    </div>
                </div>
                
                <img class="bg bg6 dz-move-down" src="<?=get_template_directory_uri()?>/assets/images/background/back_04.png" alt="/">
                <img class="bg bg4 dz-move-down" src="<?=get_template_directory_uri()?>/assets/images/background/back_03.png" alt="/">
            </section>
        <?
    }
?>