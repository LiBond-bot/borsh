<div class="dz-form-card bg-primary dz-form-card_footer">
    <div class="section-head">
        <h4 class="title m-0">Заказать обед</h4>
        <p class="m-t10">Тут будет подзаголовок</p>
    </div>
    <form class="dzForm dezPlaceAni" method="POST" action="script/contact_smtp.php">
        <div class="dzFormMsg"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="input-group input-line">
                    <input name="dzName" required type="text" class="form-control" placeholder="Ваше имя">
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="input-group input-line">
                    <input name="dzEmail" required type="text" class="form-control" placeholder="+7(___)___-__-__">
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="input-group input-line">
                    <input name="dzEmail" required type="text" class="form-control" placeholder="Ваш адрес">
                </div>
            </div>
            <div class="col-sm-12">
                <button type="submit" name="submit" value="submit" class="btn btn-md btn-white btn-hover-1"><span>Отправить</span></button>	
            </div>
        </div>
    </form>
</div>