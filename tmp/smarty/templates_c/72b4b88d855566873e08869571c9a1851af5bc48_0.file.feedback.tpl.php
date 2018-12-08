<?php
/* Smarty version 3.1.33, created on 2018-12-07 14:43:47
  from 'C:\Server\data\htdocs\irk-tour.ru\views\default\feedback.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0a8723966263_19460011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b4b88d855566873e08869571c9a1851af5bc48' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\irk-tour.ru\\views\\default\\feedback.tpl',
      1 => 1544193822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5c0a8723966263_19460011 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container header d-none d-md-block">
    <header class="row justify-content-end">
        <a href="tel:+79526288555" class="usphone"><i class="fas fa-phone"></i>+7 (952) 628-85-55</a><br>
    </header>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-md-9 car_park container">
    <div class="row headline">
        <h1>Обратная связь</h1>
    </div>
    <div class="row cars  justify-content-around">
        <form action="../contactform/" method="POST" role="form" >
            <div class="form-group" >
                <label for="name"> Ваше имя</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="Иван">
            </div>
            <div class="form-group">
                <label for="tel">Телефон</label>
                <input type="tel" name="tel" class="form-control" id="tel" data-mask="+7 000 000 00 00" placeholder=" 7xxxxxxxxxx">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea class="form-control" id="message" rows="3" name="message"></textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck">
                <label class="form-check-label" for="exampleCheck">Check me out</label>
              </div>
            <button class="btn order check" type="submit" disabled="disabled">Отправить</button>
        </form>
    </div>
</div>

</div>
</div>
</div><?php }
}
