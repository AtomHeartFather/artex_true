<?php
/* Smarty version 3.1.33, created on 2019-06-28 01:50:04
  from '/var/www/artex/themes/artex/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d15481c5f5b99_20769576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '421f6cc50988f42e6ee1aba9d1d13d3312e37096' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/products.tpl',
      1 => 1561072486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5d15481c5f5b99_20769576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list container-fluid">
  <div class="row no-gutters">  
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product', false, NULL, 'product_list', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']++;
?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10704787175d15481c5e7ad3_99603529', 'product_miniature');
?>

    <?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_product_list']->value['iteration'] : null) % 3)) {?>
       <div class="w-100"></div> 
    <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3395379405d15481c5eea03_95207425', 'pagination');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10454287125d15481c5f23a8_07590742', 'back_to_top');
?>

</div>
<?php }
/* {block 'product_miniature'} */
class Block_10704787175d15481c5e7ad3_99603529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_10704787175d15481c5e7ad3_99603529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_3395379405d15481c5eea03_95207425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_3395379405d15481c5eea03_95207425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
  <?php
}
}
/* {/block 'pagination'} */
/* {block 'back_to_top'} */
class Block_10454287125d15481c5f23a8_07590742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'back_to_top' => 
  array (
    0 => 'Block_10454287125d15481c5f23a8_07590742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div><a href="#header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a></div>
  <?php
}
}
/* {/block 'back_to_top'} */
}
