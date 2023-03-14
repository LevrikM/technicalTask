<?php
/* Smarty version 4.3.0, created on 2023-03-14 21:38:14
  from 'W:\domains\techzavd\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6410bf16a77946_28802218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9611d242ca39a3e42f2ef9c19fb66273504a48a3' => 
    array (
      0 => 'W:\\domains\\techzavd\\views\\default\\header.tpl',
      1 => 1678819089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6410bf16a77946_28802218 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="../js/main.js" type="application/javascript" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 scr="../js/jquery-3.6.3.js" type="application/javascript"><?php echo '</script'; ?>
>
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['namePage']->value;?>
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://techzavd/">Вихід</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav><?php }
}
