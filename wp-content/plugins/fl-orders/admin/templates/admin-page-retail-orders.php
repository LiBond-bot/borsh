<div class="wrap">
    <h1>Заказы розница</h1><br>
    <input class="fl-delete" type="hidden" value="<?=$fl_delete_retail_order?>">
    <form>
        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <thead>
                <tr>
                    <th scope="col" id="fl-retail-orders-name" class="manage-column"><span>Имя</span></span></th>
                    <th scope="col" id="fl-retail-orders-phone" class="manage-column">Телефон</th>
                    <th scope="col" id="fl-retail-orders-count" class="manage-column">Количество обедов</th>
                    <th scope="col" id="fl-retail-orders-adress"  class="manage-column">Адрес</th>
                    <th scope="col" id="fl-retail-orders-date"  class="manage-column">Дата заказа</th>
                </tr>
            </thead>
            <tbody id="the-list">
                <? foreach ($fl_retail_orders as $key => $order) { ?>  
                <tr id="post-<?=$order->id?>" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-1">

                    <td>
                        <?=$order->name?>
                        <div class="row-actions">
                            <span class="trash">
                                <a href="admin.php?page=fl-retail-orders&delete=<?=$order->id?>" class="submitdelete">Удалить</a>
                            </span>
                        </div>
                    </td>
                    <td><a href="tel:<?=$order->phone?>"><?=$order->phone?></a></td>
                    <td><?=$order->count_launch?></td>
                    <td><?=$order->adress?></td>
                    <td><?=$order->date?></td>
                </tr>
                <? } ?>
            </tbody>
        </table>
        <div style="text-align:right;">
        <? 
            if ($retail_orders_count > 50) {
                $number_page = $_GET['number_page'];
                $pages = ceil($retail_orders_count/50) + 1;
                for ($i=1; $i < $pages; $i++) { ?> 
                    <? if ($number_page != $i) { ?> 
                        <a style="display: inline-block; padding: 8px;" href="admin.php?page=fl-retail-orders&number_page=<?=$i?>"><?=$i?></a>
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
        location.search = '?page=fl-retail-orders'
    }
</script>