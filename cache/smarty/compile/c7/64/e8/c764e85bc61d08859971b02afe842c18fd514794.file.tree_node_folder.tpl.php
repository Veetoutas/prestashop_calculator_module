<?php /* Smarty version Smarty-3.1.19, created on 2020-10-05 11:47:15
         compiled from "C:\wamp64\www\mijora\admin\themes\default\template\helpers\tree\tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3389588695f7b07c3267ec9-17076798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c764e85bc61d08859971b02afe842c18fd514794' => 
    array (
      0 => 'C:\\wamp64\\www\\mijora\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder.tpl',
      1 => 1478510744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3389588695f7b07c3267ec9-17076798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7b07c3288c81_28351301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b07c3288c81_28351301')) {function content_5f7b07c3288c81_28351301($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp64\\www\\mijora\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
