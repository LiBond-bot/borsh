<? get_header(); ?>

    <?
        $blog_id = get_the_ID();
        $title = get_the_title();

        // Вывод даты
        $date_day = get_the_date( 'd', $blog_id );
        $date_month = get_the_date( 'm', $blog_id );
        $date_year = get_the_date( 'Y', $blog_id );

        $blog_photo = get_the_post_thumbnail_url($blog_id, 'full');
    ?>

	<div class="dz-bnr-inr style-1 text-center bg-parallax">
		<div class="container">
			<div class="dz-bnr-inr-entry">
				<h1>Блог</h1>

				<nav aria-label="breadcrumb" class="breadcrumb-row">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Главная</a></li>
						<li class="breadcrumb-item"><a href="/blog/">Блог</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?=$title?></li>
					</ul>
				</nav>
				
			</div>
		</div>
	</div>

	<section class="content-inner section-wrapper-2 right">
		<div class="min-container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="blog-single dz-card sidebar">
						<div class="dz-media rounded-md">
							<img src="<?=$blog_photo?>" alt="/">
						</div>
						<div class="dz-info">
							<h1 class="title"><?=$title?></h1>
							<div class="dz-meta">
								<ul>
									<li class="dz-date">
                                        <a href="javascript:void(0);"><i class="flaticon-calendar-date"></i>
                                            <?=$date_day?>.<?=$date_month?>.<?=$date_year?>
                                        </a>
                                    </li>
								</ul>
							</div>
							<div class="dz-post-text">
								<?=the_content()?>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>