<?php /* Smarty version Smarty-3.1.19, created on 2020-10-05 11:47:12
         compiled from "C:\wamp64\www\mijora\admin\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10306826005f7b07c0c048a6-29192346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b763f336e2c77e6d9e57c874efab5870c33ac07c' => 
    array (
      0 => 'C:\\wamp64\\www\\mijora\\admin\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1478510744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10306826005f7b07c0c048a6-29192346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7b07c0c25d08_27518347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b07c0c25d08_27518347')) {function content_5f7b07c0c25d08_27518347($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
