<?php
/* Smarty version 4.3.0, created on 2023-03-14 22:26:24
  from 'W:\domains\techzavd\views\default\cabinet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6410ca60d28c05_36806256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '464c747fe7d8ed943f5d380081b52ad61f9c7813' => 
    array (
      0 => 'W:\\domains\\techzavd\\views\\default\\cabinet.tpl',
      1 => 1678821982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6410ca60d28c05_36806256 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    body {
        font-family: Arial, sans-serif;
    }

    .card {
        margin-bottom: 30px;
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: none;
    }

    .card-title {
        margin-bottom: 0;
    }

    .table thead th {
        border-top: none;
    }

    .table tbody td {
        vertical-align: middle;
    }

</style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Ваш профіль: </h5>
                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <div class="card-body">
                        <p>Логін: <?php echo $_smarty_tpl->tpl_vars['item']->value["login"];?>
</p>
                        <p>Ім'я: <?php echo $_smarty_tpl->tpl_vars['item']->value["name"];?>
</p>
                        <p>Email: <?php echo $_smarty_tpl->tpl_vars['item']->value["email"];?>
</p>
                        <p>Телефон: <?php echo $_smarty_tpl->tpl_vars['item']->value["phone"];?>
</p>
                        <p>Тип користувача: <?php echo $_smarty_tpl->tpl_vars['item']->value["type"];?>
</p>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Замовлення | Тестові</h5>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Номер замовлення</th>
                            <th>Дата</th>
                            <th>Сума</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>12345</td>
                            <td>01.03.2023</td>
                            <td>1000 ₴</td>
                        </tr>
                        <tr>
                            <td>54321</td>
                            <td>02.03.2023</td>
                            <td>2000 ₴</td>
                        </tr>
                        <tr>
                            <td>98765</td>
                            <td>03.03.2023
                            <td>3000 ₴</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Подключаем jQuery и Popper.js для работы Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS3U6d" crossorigin="anonymous"><?php echo '</script'; ?>
>
<!-- Подключаем Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php }
}
