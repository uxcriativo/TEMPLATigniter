<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-01-21 05:19:03
         compiled from "..\private\themes\template\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3018156a05c37464677-77108514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d3474de63d41bc0077c6d78cf77c304961a0bfb' => 
    array (
      0 => '..\\private\\themes\\template\\header.tpl',
      1 => 1453349178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3018156a05c37464677-77108514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56a05c374ed217_20001496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a05c374ed217_20001496')) {function content_56a05c374ed217_20001496($_smarty_tpl) {?><!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>TEMPLATigniter</h1>
        <p> <?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</p>
        <p><a class="btn btn-primary btn-lg" href="https://github.com/uxcriativo/startigniter" role="button">Download</a>
        <a class="btn btn-default btn-lg" href="<?php echo '<?'; ?>
=base_url();<?php echo '?>'; ?>
admin/login" role="button">Demo Private Area</a></p>
    </div>
</div>
<?php }} ?>
