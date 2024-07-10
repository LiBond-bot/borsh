<div class="wrap">
    <h1>Заявки на звонок</h1><br>
    <input class="fl-delete" type="hidden" value="<?=$fl_delete_callback?>">
    <form >
    <table class="wp-list-table widefat fixed striped table-view-list posts">
        <thead>
            <tr>
                <th width="15%" scope="col" id="fl-callbacks-name" class="manage-column">Контактное лицо</th>
                <th width="15%" scope="col" id="fl-callbacks-phone" class="manage-column">Телефон</th>
                <th width="12%" scope="col" id="fl-callbacks-url"  class="manage-column">Url страницы заказа</th>
                <th width="11%" scope="col" id="fl-callbacks-form"  class="manage-column">Форма</th>
                <th width="8%" scope="col" id="fl-callbacks-date"  class="manage-column">Дата заказа</th>
                <th width="6%" scope="col" id="fl-callbacks-utm_source"  class="manage-column">utm_source</th>
                <th width="6%" scope="col" id="fl-callbacks-utm_medium"  class="manage-column">utm_medium</th>
                <th width="6%" scope="col" id="fl-callbacks-utm_term"  class="manage-column">utm_term</th>
                <th width="6%" scope="col" id="fl-callbacks-utm_content"  class="manage-column">utm_content</th>
                <th width="7%" scope="col" id="fl-callbacks-utm_campaign"  class="manage-column">utm_campaign</th>
            </tr>
        </thead>
        <tbody id="the-list">
            <? foreach ($fl_callbacks as $key => $callback) { ?>  
            <tr id="post-<?=$key?>" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-1">
                
                <td>
                    <?=$callback->name?>
                    <div class="row-actions">
                        <span class="trash">
                            <a href="admin.php?page=fl-callback&delete=<?=$callback->id?>" class="submitdelete">Удалить</a>
                        </span>
                    </div>
                    
                </td>
                <td><a href="tel:<?=$callback->phone?>"><?=$callback->phone?></a></td>
                
                <td><a target="_bank" href="<?=$callback->url_page?>"><?=$callback->url_page?></a></td>
                <td><?=$callback->name_form?></td>
                <td><?=$callback->date?></td>
                <td><?=$callback->utm_source?></td>
                <td><?=$callback->utm_medium?></td>
                <td><?=$callback->utm_term?></td>
                <td><?=$callback->utm_content?></td>
                <td><?=$callback->utm_campaign?></td>
            </tr>
            
            <? } ?>
        </tbody>
    </table>
    <div style="text-align:right;">
    <? 
        if ($fl_callbacks_count > 50) {
            $number_page = $_GET['number_page'];
            $pages = ceil($fl_callbacks_count/50) + 1;
            for ($i=1; $i < $pages; $i++) { ?> 
                <? if ($number_page != $i) { ?> 
                    <a style="display: inline-block; padding: 8px;" href="admin.php?page=fl-callback&number_page=<?=$i?>"><?=$i?></a>
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
        location.search = '?page=fl-callback'
    }
</script>