<section class="leadform">
    <div class="container">
        <div class="dz-form-card bg-primary">
            <div class="section-head">
                <h4 class="title m-0">Накормим сотрудников<br>и выдадим документы для отчетности!</h4>
                <p class="m-t10">Доставка от двух обедов БЕСПЛАТНО. Принимаем заказы ежедневно</p>
            </div>
            <form class="dzForm dezPlaceAni" method="POST" action="script/contact_smtp.php">
                <div class="dzFormMsg"></div>
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <div class="input-group input-line">
                            <input name="dzName" required type="text" class="form-control" placeholder="Ваше имя">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="input-group input-line">
                            <select name="" id="">
                                <option value="">1 обед</option>
                                <option value="">2 обеда</option>
                                <option value="">3 обеда</option>
                                <option value="">4 обеда</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="input-group input-line">
                            <input name="dzEmail" required type="text" class="form-control" placeholder="+7(___)___-__-__">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="input-group input-line">
                            <input name="dzEmail" required type="text" class="form-control" placeholder="Ваш адрес">
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="submit" name="submit" value="submit" class="btn btn-md btn-white btn-hover-1"><span>Отправить</span></button>	
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>