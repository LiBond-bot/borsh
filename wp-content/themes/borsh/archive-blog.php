<? get_header(); ?>

	<div class="dz-bnr-inr style-1 text-center bg-parallax">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Блог</h1>

				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item active" aria-current="page">Блог</li>
					</ul>
				</nav>
				
			</div>
		</div>
	</div>

	<section class="content-inner-1">
		<div class="container">
			<div class="row loadmore-content">
                <?php 

                    if ( have_posts() ) : ?>

                        <!-- начало цикл -->
                        <?php while ( have_posts() ) : the_post();

                            $blog_id = get_the_ID();

                            $blog_photo = get_the_post_thumbnail_url($blog_id, 'large');
                            $blog_link = get_permalink($blog_id);
                            $blog_title = get_the_title();

                            // Вывод даты
                            $date_day = get_the_date( 'd', $blog_id );
                            $date_month = get_the_date( 'm', $blog_id );
                            $date_year = get_the_date( 'Y', $blog_id );
                        ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="dz-card style-1 overlay-shine dz-img-effect zoom m-b30">
                                    <div class="dz-media">
                                        <a href="<?=$blog_link?>"><img src="<?=$blog_photo?>" alt="/"></a>
                                    </div>
                                    <div class="dz-info">
                                        <div class="dz-meta">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);"><i class="flaticon-calendar-date"></i>
                                                        <?=$date_day?>.<?=$date_month?>.<?=$date_year?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> 
                                        <h5 class="dz-title"><a href="<?=$blog_link?>"><?=$blog_title?></a></h5>
                                        <p><?=the_excerpt()?></p>
                                        <a href="<?=$blog_link?>" class="btn btn-primary btn-hover-2">Подробнее</a>
                                    </div>
                                </div>
                            </div>  
                            
                        <?php endwhile; ?>
                        <!-- конец цикла -->

                <?php endif; ?>
				
			</div>
            <?php

                $args = array(
                    'show_all'     => false, // показаны все страницы участвующие в пагинации
                    'end_size'     => 1,     // количество страниц на концах
                    'mid_size'     => 1,     // количество страниц вокруг текущей
                    'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                    'prev_text'    => __('«'),
                    'next_text'    => __('»'),
                    'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                    'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                    'screen_reader_text' => __( 'Posts navigation' ),
                );  

                the_posts_pagination( $args );

            ?>
		</div>
	</section>

<?php get_footer(); ?>	