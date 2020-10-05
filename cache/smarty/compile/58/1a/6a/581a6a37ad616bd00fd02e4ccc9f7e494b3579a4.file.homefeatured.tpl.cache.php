<?php /* Smarty version Smarty-3.1.19, created on 2020-10-05 08:11:24
         compiled from "C:\wamp64\www\mijora\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267975f7b0d6cb11ad8-66735366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '581a6a37ad616bd00fd02e4ccc9f7e494b3579a4' => 
    array (
      0 => 'C:\\wamp64\\www\\mijora\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1478510748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267975f7b0d6cb11ad8-66735366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7b0d6cb4ed28_90484804',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b0d6cb4ed28_90484804')) {function content_5f7b0d6cb4ed28_90484804($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
