<section class="section-wrapper-4 content-inner-1 overflow-hidden bg-parallax" style="background-image:url('<?=get_template_directory_uri()?>/assets/images/patterns/back_02.png'); background-attachment: fixed; background-size: 800px;">
    <div class="container">
        <div class="section-head text-center">
            <h2 class="title wow flipInX" data-wow-delay="0.2s">Хотим дегустацию!</h2>
            <p>Выберите понравившиеся блюда из наших готовых сетов</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="dz-form-card bg-primary">
                    <form class="dzForm dezPlaceAni" method="POST" action="script/contact_smtp.php">
                        <div class="dzFormMsg"></div>
                        <div class="row">
                            <div class="col-lg-2 col-md-12 d-flex align-items-center">
                                <div class="input-group input-line">
                                    <input name="dzName" required type="text" class="form-control" placeholder="Ваше имя">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-12 d-flex align-items-center">
                                <div class="input-group input-line">
                                    <input name="dzName" required type="text" class="form-control" placeholder="Количество обедов">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 d-flex align-items-center">
                                <div class="input-group input-line">
                                    <input name="dzEmail" required type="text" class="form-control" placeholder="+7 (___) ___-__-__">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 d-flex align-items-center">
                                <div class="input-group input-line">
                                    <input name="dzEmail" required type="text" class="form-control" placeholder="Ваш адрес">
                                </div>
                            </div>
                            <div class="col-lg-2 col-12">
                                <button type="submit" name="submit" value="submit" class="btn btn-md btn-white btn-hover-1"><span>Отправить</span></button>	
                            </div>
                            <div class="dz-form-card__warning-message mt-3">Добавьте еще один, и стоимость обеда будет 300 руб.</div>
                            <div class="mt-3 p-0" style="font-size:14px;">
                                Нажимая кнопку <b>"Отправить"</b>, вы соглашаетесь с <b><a href="/privacy-policy/">Политикой конфеденциальности</a></b>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>