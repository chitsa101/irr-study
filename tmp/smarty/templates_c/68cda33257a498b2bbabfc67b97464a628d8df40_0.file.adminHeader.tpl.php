<?php
/* Smarty version 3.1.33, created on 2018-11-26 11:45:44
  from 'C:\Server\data\htdocs\irk-tour.ru\views\admin\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfbdce809d312_77712826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68cda33257a498b2bbabfc67b97464a628d8df40' => 
    array (
      0 => 'C:\\Server\\data\\htdocs\\irk-tour.ru\\views\\admin\\adminHeader.tpl',
      1 => 1543232504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfbdce809d312_77712826 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <meta charset="UTF-8">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tepmlateWebPath']->value;?>
css/style.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <meta name="description" content="краткое описание страницы">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>

<body>
    <div class="container-fluid first">
            <nav class="navbar navbar-expand-md navbar-dark">
                    <a class="navbar-brand d-md-none d-sm-block" href="#">
                        <h4>ir-tour.ru</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav  flex-column ">
                            <li class="nav-item active">
                                <a href="/admin/buses/" class="nav-link">Управление автопарком</a>
                            </li>
                            <li class="nav-item active">
                                <a href="/admin/transfer/" class="nav-link">Управление трансфером</a>
                            </li>
                            <li class="nav-item active">
                                <a href="/admin/vip/" class="nav-link">Управление VIP</a>
                            </li>
                            <li class="nav-item active">
                                <a href="/admin/contacts/" class="nav-link">Посмотреть контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav>
        <div class="row">

<?php }
}
