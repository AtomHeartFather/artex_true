{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{*<div id="js-product-list container-fluid">
  <div class="row no-gutters">  *}
{*<div class="no-gutters">
    <ul id='lightSlider'>
  {foreach from=$listing.products item="product" name="product_list"}
    {block name='product_miniature'}
      {include file='catalog/_partials/miniatures/product_featured.tpl' product=$product}
    {/block}
{*    {if $smarty.foreach.product_list.iteration is div by 3}
       <div class="w-100"></div> 
    {/if}*}{*
  {/foreach}
  </ul>
  </div>
  *}
  <div class="no-gutters">
	<ul id='lightSlider2'>
                {foreach from=$listing.products item="product" name="product_list"}
                        <li>
                        {*   <img src="{$image.medium.url}" alt="{$image.legend}" title="{$image.legend}" width="{$product.cover.bySize.medium_default.width}" itemprop="image"> 
                        *}<!--    <img src="{$image.large.url}" alt="{$image.legend}">  -->
                        <a href="{$product.url}" >
                            <img
                              src = "{$product.cover.medium.url}"
                              alt = "{$product.cover.legend}"
                              data-full-size-image-url = "{$product.cover.large.url}"
                              class="img-fluid"
                              alt="{$product.name}"
                              >
                        </a>
                        </li>
                {/foreach}
                </ul>
                </div>
                              
{*      </a>
                        </li>
                {/foreach}	
	</ul>		
  </div>
{*  {block name='pagination'}
    {include file='_partials/pagination.tpl' pagination=$listing.pagination}
  {/block}*}

  {block name='back_to_top'}
    <div><a href="#header">{l s='Back to top' d='Shop.Theme.Actions'}</a></div>
  {/block}
</div>
