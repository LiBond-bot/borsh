<?php get_header(); ?>

	<div class="content-inner overflow-hidden pt-4 error-page" id="app-banner">
		<div class="container">
			<div class="inner-content text-center">
				<div class="error-img">
					<img src="<?=get_template_directory_uri()?>/assets/images/404.png" alt="">
				</div>
				<h3 class="error-para">Упс! Страница не найдена</h3>
				<p>Извините. Страница, которую вы ищете, не найдена</p>
				<a href="index.html" class="btn btn-md btn-primary btn-hover-1"><span>На главную</span></a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
