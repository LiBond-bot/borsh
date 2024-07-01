<div class="modal fade" id="menu" data-bs-keyboard="false" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="dz-form-card bg-primary mb-5 mb-lg-0 dz-form-card_footer" id="formMenu">
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
                        <h4 class="title m-0">Узнать меню</h4>
                        <p class="m-t10">Доставка от двух обедов БЕСПЛАТНО. Принимаем заказы ежедневно</p>
                    </div>
                    <input type="hidden" name="title" value="Узнать меню розница | Форма с блока меню">
                    <? get_template_part('include/form_main') ?>
                </div>
            </div>
        </div>
    </div>
</div>