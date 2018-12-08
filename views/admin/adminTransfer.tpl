<div class="row headline">
    <h1>Управление трансфером</h1>
</div>
<table class="table table-bordered">
    <h2>Добавление трансфера:</h2>
    <thead>
        <tr>
            <th scope="col">Выбор автобуса</th>
            <th scope="col">Маршрут</th>
            <th scope="col">Стоимость</th>
            <th scope="col">Сохранить</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <select id="newItemParId" required>
                    <option value="0">
                        {foreach $rsBuses as $itemBus}
                    <option value="{$itemBus['id']}">{$itemBus['name']}
                        {/foreach}
                </select>
            </td>
            <td>
                <textarea id="newItemRoute"></textarea>
            </td>
            <td>
                <input type="edit" id="newItemPrice" value="" />
            </td>
            <td>
                <input type="button" value="Сохранить" onclick="addTransfer();" />
            </td>
        </tr>
    </tbody>
</table>

<table class="table table-bordered">
        <h2>Редактирование трансфера:</h2>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Выбор автобуса</th>
                <th scope="col">Маршрут</th>
                <th scope="col">Стоимость</th>
                <th scope="col">Сохранить</th>
            </tr>
        </thead>
        <tbody>
            {foreach $rsTransfer as $item}
            <tr>
                    <td>{$item['id']}</td>
                <td>
                    {foreach $rsBuses as $itemBus}
                        {if $itemBus['id'] == $item['parent_id']}
                            {$itemBus['name']}
                        {/if}
                    {/foreach}                    
                    <select id="itemParId_{$item['id']}">
                        <option value="0">выбор автобуса
                            {foreach $rsBuses as $itemBus}
                        <option value="{$itemBus['id']}">{$itemBus['name']}
                            {/foreach}
                    </select>
                </td>
                <td>
                    <textarea id="itemRoute_{$item['id']}">
                        {$item['route']}
                    </textarea>
                </td>
                <td>
                    <input type="edit" id="ItemPrice_{$item['id']}" value="{$item['trans_price']}" />
                </td>
                <td>
                    <input type="button" value="Сохранить" onclick="updateTransfer('{$item['id']}');" />
                    <input type="button" value="Удалить" onclick="delTransfer('{$item['id']}');" />

                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>