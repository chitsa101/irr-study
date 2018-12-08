<?php
/* Smarty version 3.1.33, created on 2018-10-26 14:16:12
  from 'C:\Server\data\htdocs\irk-tour.ru\views\admin\adminTransfer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd321ac0a87a0_80500074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed5bc8e70b96af8998fd7fcc1dc4b76823db8364' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\irk-tour.ru\\views\\admin\\adminTransfer.tpl',
      1 => 1540563119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd321ac0a87a0_80500074 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row headline">
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
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsBuses']->value, 'itemBus');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemBus']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['itemBus']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemBus']->value['name'];?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsTransfer']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsBuses']->value, 'itemBus');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemBus']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['itemBus']->value['id'] == $_smarty_tpl->tpl_vars['item']->value['parent_id']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['itemBus']->value['name'];?>

                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                    
                    <select id="itemParId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <option value="0">выбор автобуса
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsBuses']->value, 'itemBus');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemBus']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['itemBus']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemBus']->value['name'];?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </td>
                <td>
                    <textarea id="itemRoute_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['route'];?>

                    </textarea>
                </td>
                <td>
                    <input type="edit" id="ItemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['trans_price'];?>
" />
                </td>
                <td>
                    <input type="button" value="Сохранить" onclick="updateTransfer('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" />
                    <input type="button" value="Удалить" onclick="delTransfer('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" />

                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table><?php }
}
