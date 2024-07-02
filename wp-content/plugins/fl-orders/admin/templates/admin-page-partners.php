<div class="wrap">
    <h1>Заявки на партнерство</h1><br>
    <input class="fl-delete" type="hidden" value="<?=$fl_delete_partners?>">
    <form >
    <table class="wp-list-table widefat fixed striped table-view-list posts">
        <thead>
            <tr>
                <th scope="col" id="fl-partners-name" class="manage-column">Контактное лицо</th>
                <th scope="col" id="fl-partners-phone" class="manage-column">Телефон</th>
                <th scope="col" id="fl-partners-date" class="manage-column">Дата заказа</th>
            </tr>
        </thead>
        <tbody id="the-list">
            <? foreach ($fl_partners as $key => $partner) { ?>  
            <tr id="post-<?=$key?>" class="iedit author-self level-0 post-1 type-post status-publish format-standard hentry category-1">
                
                <td>
                    <?=$partner->name?>
                    <div class="row-actions">
                        <span class="trash">
                            <a href="admin.php?page=fl-partners&delete=<?=$partner->id?>" class="submitdelete">Удалить</a>
                        </span>
                    </div>
                    
                </td>
                <td><a href="tel:<?=$partner->phone?>"><?=$partner->phone?></a></td>
                <td><?=$partner->date?></td>
            </tr>
            
            <? } ?>
        </tbody>
    </table>
    <div style="text-align:right;">
    <? 
        if ($fl_partners_count > 50) {
            $number_page = $_GET['number_page'];
            $pages = ceil($fl_partners_count/50) + 1;
            for ($i=1; $i < $pages; $i++) { ?> 
                <? if ($number_page != $i) { ?> 
                    <a style="display: inline-block; padding: 8px;" href="admin.php?page=fl-partners&number_page=<?=$i?>"><?=$i?></a>
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
        location.search = '?page=fl-partners'
    }
</script>