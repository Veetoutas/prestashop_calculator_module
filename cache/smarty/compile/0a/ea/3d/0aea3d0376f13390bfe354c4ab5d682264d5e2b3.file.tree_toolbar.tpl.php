<?php /* Smarty version Smarty-3.1.19, created on 2020-10-05 11:47:15
         compiled from "C:\wamp64\www\mijora\admin\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4040122885f7b07c35fb0e0-21310262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aea3d0376f13390bfe354c4ab5d682264d5e2b3' => 
    array (
      0 => 'C:\\wamp64\\www\\mijora\\admin\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1478510744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4040122885f7b07c35fb0e0-21310262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7b07c3615899_77033280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b07c3615899_77033280')) {function content_5f7b07c3615899_77033280($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
