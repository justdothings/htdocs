<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 13:37:41
         compiled from "/opt/lampp/htdocs/Templates/FreedomCore/shop/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135384915557500c75de4241-68911748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe1a608c9513b8ae6e247dd3ab44f5f8ce274707' => 
    array (
      0 => '/opt/lampp/htdocs/Templates/FreedomCore/shop/item.tpl',
      1 => 1464860669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135384915557500c75de4241-68911748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ItemData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57500c75e41e05_78627422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57500c75e41e05_78627422')) {function content_57500c75e41e05_78627422($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('shop/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="body-content">
    <div class="product-container" id="pageTop">
        <div class="grid-container">
            <div class="grid-50 app-grid-100 buybox no-logo">
                <div  class="product-badge-and-title">
                    <div class="product-badge-container">
                        <i class="product-badge wow-product-badge"></i>
                    </div>
                    <div class="product-title-and-type">
                        <h1 class="product-title"> <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_name'];?>
 </h1>
                        <h2 class="heading-6 product-type"><?php echo str_replace(':','',$_smarty_tpl->tpl_vars['ItemData']->value['category_desc']);?>
</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="product-single">
                        <span class="heading-1 product-priceline">
                            <span class="product-price ">
                                <?php echo $_smarty_tpl->tpl_vars['ItemData']->value['price'];?>
,00 <span class="currency-code">RUB</span>
                            </span>
                        </span>
                    <div class="product-actions" data-bnet-shop="product-action-holder">
                        <a class="btn btn-large btn-primary" href="/shop/buy-<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['short_code'];?>
" tabindex="1" data-gtm-product-name="EU World of Warcraft® In-Game Mount:<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_name'];?>
">
                            <?php echo $_smarty_tpl->getConfigVariable('Shop_Buy_Now');?>

                        </a>
                    </div>
                </div>
                <div class="product-requirements" id="product-requirements">
                    <ul>
                        <li>
                            <?php echo $_smarty_tpl->getConfigVariable('Shop_Requires');?>
 World of Warcraft
                        </li>
                        <li>
                            <a href="/account/management/redeem-code" data-external="sso">
                                <?php echo $_smarty_tpl->getConfigVariable('Shop_Redeem_Code');?>

                                <i class="icon-blue icon-external-link"></i>
                            </a>
                        </li>
                        <li><?php echo $_smarty_tpl->getConfigVariable('Shop_All_Tax_Included');?>
</li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        //<![CDATA[
        var Msg = Msg || {},
                disablePurchaseAndMedia = false;
        Msg.productSlug = "mount-<?php echo $_smarty_tpl->tpl_vars['ItemData']->value['item_name'];?>
";
        $(function() {
            $("#featureMediaLightbox").mediaLightbox();
        });
        (function() {
            var tag = document.createElement("script");
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName("script")[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        })();
        //]]>
    <?php echo '</script'; ?>
>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('shop/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
