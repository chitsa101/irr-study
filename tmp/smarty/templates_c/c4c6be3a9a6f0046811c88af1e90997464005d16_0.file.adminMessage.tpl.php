<?php
/* Smarty version 3.1.33, created on 2018-10-27 05:41:37
  from 'C:\Server\data\htdocs\irk-tour.ru\views\admin\adminMessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd3fa9169e868_69801762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4c6be3a9a6f0046811c88af1e90997464005d16' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\irk-tour.ru\\views\\admin\\adminMessage.tpl',
      1 => 1540618883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd3fa9169e868_69801762 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row headline">
    <h1>Просмотр сообщений</h1>
</div>
<div class="row ">
    <div class="carpark">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>


</div><?php }
}
