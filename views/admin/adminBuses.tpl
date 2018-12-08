<div class="row headline">
    <h1>Управление автопарком</h1>
</div>
<table class="table table-bordered">
    <h2>Добавление автобуса:</h2>
    <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
            <th scope="col">Расценки</th>
            <th scope="col">Сохранить</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="edit" id="newItemName" value="" />
            </td>
            <td>
                <textarea id="newItemDesc"></textarea>
            </td>
            <td>
                <input type="edit" id="newItemPrice" value="" />
            </td>
            <td>
                <input type="button" value="Сохранить" onclick="addBus();" />
            </td>
        </tr>
    </tbody>
</table>

<h2>Редактирование:</h2>

<table class="table table-bordered ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Название</th>
            <th scope="col">Картинка-превью</th>
            <th scope="col">Вторая картинка</th>
            <th scope="col">Третья картинка</th>
            <th scope="col">Описание</th>
            <th scope="col">Расценки</th>
            <th scope="col">Сохранить</th>
        </tr>
    </thead>
    <tbody>
        {foreach $rsBuses as $item name = base}
        <tr>
            <td>{$item['id']}</td>
            <td>
                <input type="edit" id="itemName_{$item['id']}" value="{$item['name']}" />
            </td>
            <td>
                {if $item['main_image']}
                <img src="/img/buses/{$item['main_image']}" width="100" height="100" />
                {/if}
                <form action="/admin/uploadmain/" method="post" enctype="multipart/form-data" class="loader">
                    <input type="file" name="filename" class="form-control-file"><br />
                    <input type="hidden" name="itemId" value="{$item['id']}"><br />
                    <input type="submit" value="Загрузить"><br />
                </form>
            </td>
            <td>
                {if $item['image1']}
                <img src="/img/buses/{$item['image1']}" width="100" height="100" />
                {/if}
                <form action="/admin/uploadimageone/" method="post" enctype="multipart/form-data" class="loader">
                    <input type="file" name="filename" class="form-control-file"><br />
                    <input type="hidden" name="itemId" value="{$item['id']}"><br />
                    <input type="submit" value="Загрузить"><br />
                </form>
            </td>
            <td>
                {if $item['image2']}
                <img src="/img/buses/{$item['image2']}" width="100" height="100" />
                {/if}
                <form action="/admin/uploadimagetwo/" method="post" enctype="multipart/form-data" class="loader">
                    <input type="file" name="filename" class="form-control-file"><br />
                    <input type="hidden" name="itemId" value="{$item['id']}"><br />
                    <input type="submit" value="Загрузить"><br />
                </form>
            </td>
            <td>
                <textarea id="itemDesc_{$item['id']}">
                        {$item['description']}
                    </textarea>
            </td>
            <td>
                <input type="edit" id="itemPrice_{$item['id']}" value="{$item['price']}" />
            </td>
            <td>
                <input type="button" value="Сохранить" onclick="updateBase('{$item['id']}');" />
                <input type="button" value="Удалить продукт" onclick="deleteBuse('{$item['id']}');">
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>