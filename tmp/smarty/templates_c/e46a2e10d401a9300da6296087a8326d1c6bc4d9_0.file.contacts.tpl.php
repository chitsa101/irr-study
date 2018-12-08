<?php
/* Smarty version 3.1.33, created on 2018-11-28 14:32:32
  from 'C:\Server\data\htdocs\irk-tour.ru\views\default\contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfea7007ad160_40163628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e46a2e10d401a9300da6296087a8326d1c6bc4d9' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\irk-tour.ru\\views\\default\\contacts.tpl',
      1 => 1543415404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5bfea7007ad160_40163628 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container header d-none d-md-block">
    <header class="row justify-content-end">
        <a href="tel:+73952624515" class="usphone"><i class="fas fa-phone"></i>+7 (3952) 624-515</a><br>
    </header>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-md-9 car_park container">
    <div class="row headline">
        <h1>Контакты</h1>
    </div>
    <div class="row cars us">
        <p>
            Мы находимся по адресу: <br>
            Иркутск, ул. Ракитная 16,  оф 201а <br>
            тел: +7 (3952) 624-515 <br>
            e-mail: irk-tour@yandex.ru<br>
        </p>
        <iframe src="https://goo.gl/maps/QimqsqkuSdn" width="560" height="400" frameborder="1"
            allowfullscreen="true"></iframe>
    </div>
</div>

</div>
</div>
</div><?php }
}
