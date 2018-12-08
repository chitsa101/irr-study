<?php
/* Smarty version 3.1.33, created on 2018-12-05 12:50:59
  from 'C:\Server\data\htdocs\irk-tour.ru\views\default\transfer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c07c9b3d866e5_05305447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eac239771b0c863c50363a52f3db242af06aa45' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\irk-tour.ru\\views\\default\\transfer.tpl',
      1 => 1544014255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5c07c9b3d866e5_05305447 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
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
                <form action="../transferform/">
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> Ваше имя</label>
                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Иван"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Телефон</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" pattern="\7\[0-9]10"
                            placeholder=" 7xxxxxxxxxx" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Сообщение</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn order" type="button">Отправить</button>
            </div>
        </div>
    </div>
</div> -->

<div class="container header d-none d-md-block">
    <header class="row justify-content-end">
        <a href="tel:+7 (3952) 624-515" class="usphone"><i class="fas fa-phone"></i>+7 (3952) 624-515</a><br>
    </header>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col-md-9 car_park container">
    <div class="row headline">
        <h1>Трансфер</h1>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsBuses']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<div class="modal fade" id="exampleModalCenter<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5> Напишите нам или позвоните по номеру: <br> <a href="tel:+7 (3952) 624-515" class="usphone "><i class="fas fa-phone"></i>
                    +7 (3952) 624-515</a>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../transferform/">
                    <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
                    <div class="form-group">
                        <input type="hidden" name="bus" class="form-control" id="bus" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1"> Ваше имя</label>
                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Имя"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Телефон</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" pattern="\7\[0-9]10"
                            placeholder=" 7xxxxxxxxxx" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Сообщение</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn order" type="button">Отправить</button>
            </div>
        </div>
    </div>
</div>
    <div class="row cars  justify-content-around">
        <div class="col-md-3 img">
            <img src="/img/buses/<?php echo $_smarty_tpl->tpl_vars['item']->value['main_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="image pictures btn"  data-toggle="modal"
            data-target="#example<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
        </div>
        <div class="col-md-7 col-lg-8 col-xl-9">
            <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h3>
            <p class="car_info"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</p>
        </div>
        <div class="container">
            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">Трансфер</th>
                        <th scope="col">Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsTransfer']->value, 'itemTrans');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['itemTrans']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['itemTrans']->value['parent_id'] == $_smarty_tpl->tpl_vars['item']->value['id']) {?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['itemTrans']->value['route'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['itemTrans']->value['trans_price'];?>
</td>
                    </tr>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
            <button class="btn order" type="button" data-toggle="modal" data-target="#exampleModalCenter<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Заказать</button>
        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsBuses']->value, 'item');
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
                                <img src="/img/buses/<?php echo $_smarty_tpl->tpl_vars['item']->value['main_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="d-block w-100 product_modal">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/buses/<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="d-block w-100 product_modal">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/buses/<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
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

</div>

</div>
</div>
</div><?php }
}
