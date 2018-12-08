<?php
/* Smarty version 3.1.33, created on 2018-11-28 13:49:05
  from 'C:\Server\data\htdocs\irk-tour.ru\views\default\vip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfe9cd1429087_55856488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5fd03c01be2e13422ec7936f165f82a738c7870' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\irk-tour.ru\\views\\default\\vip.tpl',
      1 => 1543412941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5bfe9cd1429087_55856488 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container header d-none d-md-block">
    <header class="row justify-content-end">
        <a href="tel:+79526288555" class="usphone"><i class="fas fa-phone"></i>+7 (952) 628-85-55</a><br>
    </header>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCars']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<div class="modal fade" id="example<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body container w-100">
                <div id="carouselExample<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
Controls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/cars/<?php echo $_smarty_tpl->tpl_vars['item']->value['main_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="d-block w-100 product_modal">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/cars/<?php echo $_smarty_tpl->tpl_vars['item']->value['image_1'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="d-block w-100 product_modal">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/cars/<?php echo $_smarty_tpl->tpl_vars['item']->value['image_2'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="d-block w-100 product_modal">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
Controls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
Controls" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5> Напишите нам или позвоните по номеру: <br> <a href="tel:+79526288555" class="usphone "><i class="fas fa-phone"></i>+7
                        (952) 628-85-55</a></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/menu/carparkform/" method="POST" role="form">
                    <div class="form-group">
                        <label for="name"> Ваше имя</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Иван" required>
                    </div>
                    <div class="form-group">
                        <label for="tel">Телефон</label>
                        <input type="tel" name="tel" class="form-control" id="tel" pattern="\7\[0-9]10" placeholder=" 7xxxxxxxxxx">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="message">Сообщение</label>
                        <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                    </div>
                    <button class="btn order" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div> -->
<div class="col-md-9 car_park container">
    <div class="row headline">
        <h1>Заказ автобусов</h1>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCars']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5> Напишите нам или позвоните по номеру: <br> <a href="tel:+79526288555" class="usphone "><i class="fas fa-phone"></i>+7
                            (952) 628-85-55</a></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/menu/vipform/" method="POST" role="form">
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
                        <div class="form-group">
                            <input type="hidden" name="car" class="form-control" id="car" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
                        </div>
                        <div class="form-group">
                            <label for="name"> Ваше имя</label>
                            <input type="name" class="form-control" id="name" name="name" placeholder="Иван" required>
                        </div>
                        <div class="form-group">
                            <label for="tel">Телефон</label>
                            <input type="tel" name="tel" class="form-control" id="tel" pattern="\7\[0-9]10" placeholder=" 7xxxxxxxxxx">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                        </div>
                        <button class="btn order" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row cars  justify-content-around">
        <div class="col-md-3 img">
            <img src="/img/cars/<?php echo $_smarty_tpl->tpl_vars['item']->value['main_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="image pictures btn" data-toggle="modal"
                data-target="#example<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
        </div>
        <div class="col-md-7 col-lg-8 col-xl-9">
            <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
            <p class="car_info"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
            <p class="car_info"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</p>
            <button class="btn order" type="button" data-toggle="modal" data-target="#exampleModalCenter">Заказать</button>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

</div>
</div>
</div><?php }
}
