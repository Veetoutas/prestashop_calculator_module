<?php /* Smarty version Smarty-3.1.19, created on 2020-10-06 05:35:01
         compiled from "C:\wamp64\www\mijora\modules\vytautas\views\templates\hook\testinam2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30855f7c3a45c351c1-74026167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fb6fab8b0eabe40cb98b735e954f9afd1f54ab1' => 
    array (
      0 => 'C:\\wamp64\\www\\mijora\\modules\\vytautas\\views\\templates\\hook\\testinam2.tpl',
      1 => 1601976856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30855f7c3a45c351c1-74026167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'price_recent1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5f7c3a45ca8543_94451038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f7c3a45ca8543_94451038')) {function content_5f7c3a45ca8543_94451038($_smarty_tpl) {?>{ extends file = 'product.tpl' }



    <h1><?php echo smartyTranslate(array('s'=>'Recent Prices','mod'=>'sleed'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['price_recent1']->value;?>
</h1>

<?php }} ?>
