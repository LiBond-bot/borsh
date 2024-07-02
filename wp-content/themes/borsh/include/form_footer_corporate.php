<div class="dz-form-card bg-primary dz-form-card_footer" id="formFooterCorporate">
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
        <h4 class="title m-0">Питание для ваших сотрудников тут!</h4>
        <p class="m-t10">Оставьте заявку, заполнив короткую форму</p>
    </div>
    <input type="hidden" name="title" value="Заказ обеда корпоративный | Форма с подвала">
    <input type="hidden" name="typeForm" value="corporate">
    <? get_template_part('include/form_corporate') ?>
</div>