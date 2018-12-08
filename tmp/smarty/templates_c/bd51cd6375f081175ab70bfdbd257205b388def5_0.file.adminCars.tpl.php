<?php
/* Smarty version 3.1.33, created on 2018-11-26 13:09:54
  from 'C:\Server\data\htdocs\irk-tour.ru\views\admin\adminCars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfbf0a29147a4_76484818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd51cd6375f081175ab70bfdbd257205b388def5' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\irk-tour.ru\\views\\admin\\adminCars.tpl',
      1 => 1543237790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfbf0a29147a4_76484818 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row headline">
    <h1>Управление автопарком</h1>
</div>
<table class="table table-bordered">
    <h2>Добавление автомобиля:</h2>
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
                <input type="button" value="Сохранить" onclick="addCar();" />
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCars']->value, 'item', false, NULL, 'base', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td>
                <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />
            </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['main_image']) {?>
                <img src="/img/cars/<?php echo $_smarty_tpl->tpl_vars['item']->value['main_image'];?>
" width="100" height="100" />
                <?php }?>
                <form action="/admin/uploadcar/" method="post" enctype="multipart/form-data" class="loader">
                    <input type="file" name="filename" class="form-control-file"><br />
                    <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><br />
                    <input type="submit" value="Загрузить"><br />
                </form>
            </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['image_1']) {?>
                <img src="/img/cars/<?php echo $_smarty_tpl->tpl_vars['item']->value['image_1'];?>
" width="100" height="100" />
                <?php }?>
                <form action="/admin/uploadcarone/" method="post" enctype="multipart/form-data" class="loader">
                    <input type="file" name="filename" class="form-control-file"><br />
                    <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><br />
                    <input type="submit" value="Загрузить"><br />
                </form>
            </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['image_2']) {?>
                <img src="/img/cars/<?php echo $_smarty_tpl->tpl_vars['item']->value['image_2'];?>
" width="100" height="100" />
                <?php }?>
                <form action="/admin/uploadcartwo/" method="post" enctype="multipart/form-data" class="loader">
                    <input type="file" name="filename" class="form-control-file"><br />
                    <input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><br />
                    <input type="submit" value="Загрузить"><br />
                </form>
            </td>
            <td>
                <textarea id="itemDesc_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

                    </textarea>
            </td>
            <td>
                <input type="edit" id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" />
            </td>
            <td>
                <input type="button" value="Сохранить" onclick="updateCar('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');" />
                <input type="button" value="Удалить продукт" onclick="deleteCar('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');">
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}
