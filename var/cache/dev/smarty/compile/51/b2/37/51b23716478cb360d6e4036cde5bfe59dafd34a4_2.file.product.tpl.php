<?php
/* Smarty version 3.1.33, created on 2019-06-22 23:22:52
  from '/var/www/artex/themes/artex/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0e8e1cea7950_74659620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51b23716478cb360d6e4036cde5bfe59dafd34a4' => 
    array (
      0 => '/var/www/artex/themes/artex/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1561073363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_5d0e8e1cea7950_74659620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9960302575d0e8e1ce4b342_96403540', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_17606538195d0e8e1ce52fc8_87015143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" >
        <img
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"
          alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
          data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          class="img-fluid"
          alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          >
      </a>
    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_20799103205d0e8e1ce60936_06594641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1 class="h2" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h1>
    <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_description_short'} */
class Block_7360982965d0e8e1ce650c5_47406206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_list_actions'} */
class Block_11432294205d0e8e1ce684b9_12317130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-list-actions">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
            <a
              class = "add-to-cart"
              href  = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
              rel   = "nofollow"
              data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
              data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
              data-link-action="add-to-cart"
            ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'product_list_actions'} */
/* {block 'product_quick_view'} */
class Block_13780579555d0e8e1ce73ae4_15699321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
}
}
/* {/block 'product_quick_view'} */
/* {block 'product_variants'} */
class Block_21457640815d0e8e1ce75b99_56046615 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
    <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_price_and_shipping'} */
class Block_8679853105d0e8e1ce7a317_44746860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
        <div class="product-price-and-shipping">
          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


            <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="discount-percentage discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
              <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
          <?php }?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


          <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>


          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl ) );?>

        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_flags'} */
class Block_15556671895d0e8e1ce955b9_89730513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
          <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_availability'} */
class Block_21422869285d0e8e1ce9e762_67768178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability']) {?>
                <span class='product-availability <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability'], ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php }?>
    <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_miniature_item'} */
class Block_9960302575d0e8e1ce4b342_96403540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_9960302575d0e8e1ce4b342_96403540',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_17606538195d0e8e1ce52fc8_87015143',
  ),
  'product_name' => 
  array (
    0 => 'Block_20799103205d0e8e1ce60936_06594641',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_7360982965d0e8e1ce650c5_47406206',
  ),
  'product_list_actions' => 
  array (
    0 => 'Block_11432294205d0e8e1ce684b9_12317130',
  ),
  'product_quick_view' => 
  array (
    0 => 'Block_13780579555d0e8e1ce73ae4_15699321',
  ),
  'product_variants' => 
  array (
    0 => 'Block_21457640815d0e8e1ce75b99_56046615',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_8679853105d0e8e1ce7a317_44746860',
  ),
  'product_flags' => 
  array (
    0 => 'Block_15556671895d0e8e1ce955b9_89730513',
  ),
  'product_availability' => 
  array (
    0 => 'Block_21422869285d0e8e1ce9e762_67768178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="col brdr no-gutters" >
<!--    <div class="container no-gutters">  
      <div class="row align-items-start"> -->
        <div class="col hover-block">
            <p>Top shit</p>
        </div>
<!--      </div> -->
 <!--     <div class="row align-items-end"> -->
    <div class="col bottom-name">
          <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
<br>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
        <div class="col bottom-color">
          <p>Такой-то цвет<br>
          Такие-то размеры</p>
        </div>
<!--      </div> -->

<!--  <article class="product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
-->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17606538195d0e8e1ce52fc8_87015143', 'product_thumbnail', $this->tplIndex);
?>

<!--
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20799103205d0e8e1ce60936_06594641', 'product_name', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7360982965d0e8e1ce650c5_47406206', 'product_description_short', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11432294205d0e8e1ce684b9_12317130', 'product_list_actions', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13780579555d0e8e1ce73ae4_15699321', 'product_quick_view', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21457640815d0e8e1ce75b99_56046615', 'product_variants', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8679853105d0e8e1ce7a317_44746860', 'product_price_and_shipping', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15556671895d0e8e1ce955b9_89730513', 'product_flags', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21422869285d0e8e1ce9e762_67768178', 'product_availability', $this->tplIndex);
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


  </article> -->
  </div> 
<!--  </div>  -->  
<?php
}
}
/* {/block 'product_miniature_item'} */
}
