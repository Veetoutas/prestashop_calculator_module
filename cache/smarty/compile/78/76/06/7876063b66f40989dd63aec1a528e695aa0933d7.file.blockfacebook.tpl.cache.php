<?php /* Smarty version Smarty-3.1.19, created on 2020-10-05 08:11:23
         compiled from "C:\wamp64\www\mijora\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122775f7b0d6b3f5d87-77291447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7876063b66f40989dd63aec1a528e695aa0933d7' => 
    array (
      0 => 'C:\\wamp64\\www\\mijora\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1478510750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122775f7b0d6b3f5d87-77291447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7b0d6b4295f7_79125766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7b0d6b4295f7_79125766')) {function content_5f7b0d6b4295f7_79125766($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
