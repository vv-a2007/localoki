
<table width="100%" class="table table-middle">
<thead>
    <tr>
        <th class="left">
            {include file="common/check_items.tpl"}</th>
        <th width="50%">{__("product")}</th>
        <th width="20%" colspan="2">{__("price")}</th>
        {if $cart.use_discount}
        <th width="10%">{__("discount")}</th>
        {/if}
        <th class="center">{__("quantity")}</th>
        <th>&nbsp;</th>
    </tr>
</thead>

{capture name="extra_items"}
    {hook name="order_management:products_extra_items"}{/hook}
{/capture}

{foreach from=$cart_products item="cp" key="key"}
{hook name="order_management:items_list_row"}
<tr>
    <td class="left">
        <input type="checkbox" name="cart_ids[]" value="{$key}" class="cm-item" /></td>
    <td>
        {if $cp.product_options}
            <span id="on_product_options_{$key}_{$cp.product_id}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand cm-combination-options-{$id}"><span class="icon-caret-right"></span></span>
            <span id="off_product_options_{$key}_{$cp.product_id}" alt="{__("expand_collapse_list")}" title="{__("expand_collapse_list")}" class="hand hidden cm-combination-options-{$id}"><span class="icon-caret-down"></span> </span>
        {/if}
        <a href="{"products.update?product_id=`$cp.product_id`"|fn_url}">{$cp.product nofilter}</a>
        {include file="views/companies/components/company_name.tpl" object=$cp}
    </td>
    <td width="3%">
        {if $cp.exclude_from_calculate}
            {__("free")}
            {else}
            <input type="hidden" name="cart_products[{$key}][stored_price]" value="N" />
            <input class="inline" type="checkbox" name="cart_products[{$key}][stored_price]" value="Y" {if $cp.stored_price == "Y"}checked="checked"{/if} onchange="Tygh.$('#db_price_{$key},#manual_price_{$key}').toggle();"/>
        {/if}
    </td>
    <td class="left">
    {if !$cp.exclude_from_calculate}
        {if $cp.stored_price == "Y"}
            {math equation="price - modifier" price=$cp.original_price modifier=$cp.modifiers_price|default:0 assign="original_price"}
        {else}
            {assign var="original_price" value=$cp.original_price}
        {/if}
        <span class="{if $cp.stored_price == "Y"}hidden{/if}" id="db_price_{$key}">{include file="common/price.tpl" value=$original_price}</span>
        <div class="{if $cp.stored_price != "Y"}hidden{/if}" id="manual_price_{$key}">
            {include file="common/price.tpl" value=$cp.base_price view="input" input_name="cart_products[`$key`][price]" class="input-hidden input-mini" product_id=$cp.product_id}
        </div>
    {/if}
    </td>
    {if $cart.use_discount}
    <td class="no-padding nowrap">
    {if $cp.exclude_from_calculate}
        {include file="common/price.tpl" value=""}
    {else}
        {if $cart.order_id}
        <input type="hidden" name="cart_products[{$key}][stored_discount]" value="Y" />
        <input type="text" class="input-hidden input-mini cm-numeric" size="5" name="cart_products[{$key}][discount]" value="{$cp.discount}" data-a-sign="{$currencies.$primary_currency.symbol|strip_tags nofilter}" data-a-dec="," data-a-sep="." />
        {else}
        {include file="common/price.tpl" value=$cp.discount}
        {/if}
    {/if}
    </td>
    {/if}
    <td class="center">
        <input type="hidden" name="cart_products[{$key}][product_id]" value="{$cp.product_id}" />
        {if $cp.exclude_from_calculate}
        <input type="hidden" size="3" name="cart_products[{$key}][amount]" value="{$cp.amount}" />
        {/if}
        <span class="cm-reload-{$key}" id="amount_update_{$key}">
            <input class="input-hidden input-micro" type="text" size="3" name="cart_products[{$key}][amount]" value="{$cp.amount}" {if $cp.exclude_from_calculate}disabled="disabled"{/if} />
        <!--amount_update_{$key}--></span>
    </td>
    <td class="nowrap">
        <div class="hidden-tools">
            <a class="cm-confirm cm-post icon-trash" href="{"order_management.delete?cart_ids[]=`$key`"|fn_url}" title="{__("delete")}"></a>
        </div>
    </td>
</tr>
{if $cp.product_options}
<tr id="product_options_{$key}_{$cp.product_id}" class="cm-ex-op hidden row-more row-gray">
    <td>&nbsp;</td>
    <td colspan="{if $cart.use_discount}6{else}5{/if}">
        {include file="views/products/components/select_product_options.tpl" product_options=$cp.product_options name="cart_products" id=$key use_exceptions="Y" product=$cp additional_class="option-item"}
        <div id="warning_{$key}" class="pull-left notification-title-e hidden">&nbsp;&nbsp;&nbsp;{__("nocombination")}</div>
    </td>
</tr>
{/if}
{/hook}
{/foreach}

<tr>
    <td colspan="6" class="mixed-controls">
        <input type="hidden" name="product_data[]" id="product_add" value="{$selected|default:$product.product_id}"/>
        <div class="form-inline object-selector object-product-add cm-object-product-add-container">
            {include file="buttons/button.tpl" but_role="action" but_onclick="Tygh.$('.products_picker').trigger('click')" but_icon="icon-reorder"}
            <select id="product_add"
                    class="cm-object-selector cm-object-product-add"
                    {if $tabindex}
                        tabindex="{$tabindex}"
                    {/if}
                    multiple
                    name="product_data"
                    data-ca-enable-images="true"
                    data-ca-image-width="30"
                    data-ca-image-height="30"
                    data-ca-enable-search="true"
                    data-ca-load-via-ajax="true"
                    data-ca-page-size="10"
                    data-ca-data-url="{"products.get_products_list?lang_code=`$descr_sl`"|fn_url nofilter}"
                    data-ca-placeholder="{__("type_to_search_or_click_button")}"
                    data-ca-allow-clear="false"
                    data-ca-ajax-delay="250"
                    {if $autofocus == "false"}
                        data-ca-autofocus="false"
                    {else}
                        data-ca-autofocus="true"
                    {/if}>
                <option value=""></option>
            </select>
        </div>
    </td>
</tr>

    {$smarty.capture.extra_items nofilter}
</table>