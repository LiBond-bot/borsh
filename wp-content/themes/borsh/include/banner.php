<div class="banner">

    <div class="banner__container">
        <div class="banner__button-close">
            <div class="button-close"></div>
        </div>
        <div class="banner__block">
            <div class="banner__img">
                <img src="<?=get_template_directory_uri()?>/assets/images/banners/person_1.png" alt="">
            </div>
            <div class="banner__ribbon">
                <div class="banner__ribbon-main">
                    Вкусный обед за 300₽ *
                </div>
            </div>
            <div class="banner__content">
                <div class="banner__subtitle">
                    *При заказе от 3-х шт.
                </div>
                <div class="banner-button">
                    <a data-title="Вкусный обед за 300₽" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#sale" class="btn btn-outline-primary shadow-primary btn-md btn-hover-3 w-100 sale_button"><span class="btn-text" data-text="Получить">Получить</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner__mobile"></div>


<script>

    window.addEventListener('load', function () {

        let banner = document.querySelector('.banner');
        setTimeout(function () { banner.classList.add('active'); }, 10000)   
        

        let button_close = document.querySelector('.button-close');
        let w_w = window.screen.width;
        let post_banner_mobile = document.querySelector('.banner__mobile');
        if (w_w <= 991) {setTimeout(function () { post_banner_mobile.style.display = "block"}, 10000) };
        button_close.addEventListener( "click" , function () {
            banner.classList.add('remove');
            setTimeout(function () { banner.classList.remove('active'); post_banner_mobile.style.display = "none"; }, 1000)   
            post_banner_mobile.style.opacity = 0;
            banner.style.opacity = 0;
        });

    });


</script>