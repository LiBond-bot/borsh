<div class="wrap">
    <h1>Корпоративные заказы</h1><br>
    <input class="fl-delete" type="hidden" value="<?=$fl_delete_corporate_order?>">
    <form>
        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <thead>
                <tr>
                    <th width="8%" scope="col" id="fl-corporate-orders-name" class="manage-column"><span>Контактное лицо</span></span></th>
                    <th width="9%" scope="col" id="fl-corporate-orders-company" class="manage-column">Название компании</th>
                    <th width="9%" scope="col" id="fl-corporate-orders-phone" class="manage-column">Телефон</th>
                    <th width="9%" scope="col" id="fl-corporate-orders-count" class="manage-column">Количество обедов</th>
                    <th width="9%" scope="col" id="fl-corporate-orders-adress"  class="manage-column">Адрес</th>
                    <th width="10%" scope="col" id="fl-corporate-orders-adress"  class="manage-column">Url страницы заказа</th>
                    <th width="9%" scope="col" id="fl-corporate-orders-adress"  class="manage-column">Форма</th>
                    <th width="7%" scope="col" id="fl-corporate-orders-date"  class="manage-column">Дата заказа</th>
                    <th width="6%" scope="col" id="fl-corporate-orders-adress"  class="manage-column">utm_source</th>
                    <th width="6%" scope="col" id="fl-corporate-orders-adress"  class="manage-column">utm_medium</th>
                    <th width="6%" scope="col" id="fl-corporate-orders-adress"  class="manage-column">utm_term</th>
                    <th width="6%" scope="col" id="fl-corporate-orders-adress"  class="manage-column">utm_content</th>
                    <th width="7%" scope="col" id="fl-corporate-orders-adress"  class="manage-column">utm_campaign</th>
                </tr>
            </thead>
            <tbody id="the-list">
                <? foreach ($fl_corporate_orders as $key => $order) { ?>  
                <tr id="post-<?=$order->id?>" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-1">

                    <td>
                        <?=$order->name?>
                        <div class="row-actions">
                            <span class="trash">
                                <a href="admin.php?page=fl-corporate-orders&delete=<?=$order->id?>" class="submitdelete">Удалить</a>
                            </span>
                        </div>
                    </td>
                    <td><?=$order->name_company?></td>
                    <td><a href="tel:<?=$order->phone?>"><?=$order->phone?></a></td>
                    <td><?=$order->count_launch?></td>
                    <td><?=$order->adress?></td>
                    <td><a target="_bank" href="<?=$order->url_page?>"><?=$order->url_page?></a></td>
                    <td><?=$order->name_form?></td>
                    <td><?=$order->date?></td>
                    <td><?=$order->utm_source?></td>
                    <td><?=$order->utm_medium?></td>
                    <td><?=$order->utm_term?></td>
                    <td><?=$order->utm_content?></td>
                    <td><?=$order->utm_campaign?></td>
                </tr>
                <? } ?>
            </tbody>
        </table>
        <div style="text-align:right;">
        <? 
            if ($corporate_orders_count > 50) {
                $number_page = $_GET['number_page'];
                $pages = ceil($corporate_orders_count/50) + 1;
                for ($i=1; $i < $pages; $i++) { ?> 
                    <? if ($number_page != $i) { ?> 
                        <a style="display: inline-block; padding: 8px;" href="admin.php?page=fl-corporate-orders&number_page=<?=$i?>"><?=$i?></a>
                    <? } else {?>
                        <span style="display: inline-block; padding: 8px;"><?=$i?></span>
                    <?} ?>
                <? }

            }
        ?>
        </div>
    </form>
</div>

<script>
    const inputDelete = document.querySelector('.fl-delete');

    if(inputDelete.value == '1'){
        location.search = '?page=fl-corporate-orders'
    }
</script>