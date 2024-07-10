<div class="modal fade" id="orderLunchCorp" data-bs-keyboard="false" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="dz-form-card bg-primary mb-5 mb-lg-0 dz-form-card_footer" id="formOrderLunchCorp">
                    <div class="dz-form-card__message">
                        <div class="dz-form-card__message-img">
                            <img src="<?=get_template_directory_uri()?>/assets/images/send.png" alt="">
                        </div>
                        <div class="dz-form-card__message-text">
                            <div>Спасибо, что выбрали нас!</div>
                            <div>Наш менеджер свяжется с вами для подтверждения заказа!</div>
                        </div>
                    </div>
                    <div class="section-head">
                        <h4 class="title m-0">Накормим персонал<br>и выдадим чеки!</h4>
                        <p class="m-t10">Обслуживаем коллективы от 10 человек. По договору.<br>С отсрочкой платежа на специальных условиях</p>
                    </div>
                    <input type="hidden" name="title" value="Заказ обеда коорпоративный">
                    <input type="hidden" name="WhereForm" value="Форма с оффера">
                    <input type="hidden" name="typeForm" value="corporate">
                    <form class="dzForm dezPlaceAni">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="input-group input-line">
                                    <input name="phone" required type="text" class="form-control" placeholder="+7(___)___-__-__">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="input-group input-line">
                                    <input name="name_company" required type="text" class="form-control" placeholder="Название компании">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="input-group input-line">
                                    <input name="countLunch" required type="text" class="form-control" placeholder="Количество обедов">
                                    <div class="dz-form-card__warning-message mb-2">Добавьте еще один, и стоимость обеда будет 300 руб.</div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="input-group input-line">
                                    <input name="adress" required type="text" class="form-control" placeholder="Адрес">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="input-group input-line">
                                    <input name="name" required type="text" class="form-control" placeholder="Контактное лицо">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" name="submit" value="submit" class="btn btn-md btn-white btn-hover-1"><span>Заказать</span></button>	
                            </div>
                            <div class="mt-3" style="font-size:14px;">
                                Нажимая кнопку <b>"Заказать"</b>, вы соглашаетесь с <b><a href="/privacy-policy/">Политикой конфиденциальности</a></b>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>