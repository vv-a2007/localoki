<div id="content_variations">
    <div class="btn-toolbar clearfix">
        <div class="pull-left">
            <form action="{""|fn_url}" class="form-inline form-toolbar" name="manage_default_product_variations_form" method="get">
                <label for="variations_default_variation">{__("product_variations.selected_default")}{include file="common/tooltip.tpl" tooltip=__("product_variations.selected_default_tooltip")}:</label>
                <select class="span5" name="product[is_default_variation]" id="variations_default_variation" onchange="Tygh.$('[id^=default_variation_]').val('N');Tygh.$('#default_variation_' + this.value).val('Y');">
                    {foreach from=$products item=product}
                        <option value="{$product.product_id}" {if $product.is_default_variation == "Y"}selected="selected"{/if}>{$product.product|truncate:140 nofilter}</option>
                    {/foreach}
                </select>
            </form>
        </div>
        <div class="pull-right">
            {include
                file="buttons/button.tpl"
                but_id="add_product_variation"
                but_meta="btn cm-dialog-opener"
                but_href="product_variations.generate&product_id=`$product_id`"|fn_url
                but_text=__("product_variations.add_variations")
                title=__("product_variations.add_variations")
                but_icon="icon-plus"
                but_role="general"
            }
        </div>
    </div>

    {assign var="rev" value=$smarty.request.content_id|default:"content_variations"}
    {assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
    {assign var="c_icon" value="<i class=\"icon-`$search.sort_order_rev`\"></i>"}
    {assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}
    {assign var="redirect_url" value="products.update?product_id=`$product_id`&selected_section=variations"}

    {if $products}
    <form action="{""|fn_url}" method="post" name="manage_product_variations_form" id="manage_product_variations_form">
        <input type="hidden" value="{$redirect_url|fn_url}" name="redirect_url">
        <div class="right">

        </div>
        <table width="100%" class="table table-middle">
            <thead>
                <tr>
                    <th width="5%"><span>{__("image")}</span></th>
                    <th width="45%"><span>{__("name")} / {__("sku")}</span></th>
                    <th width="15%">
                        <a class="cm-ajax" href="{"`$c_url`&sort_by=price&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("price")} ({$currencies.$primary_currency.symbol nofilter}){if $search.sort_by == "price"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                    </th>
                    <th width="15%">
                        <a class="cm-ajax" href="{"`$c_url`&sort_by=list_price&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("list_price")} ({$currencies.$primary_currency.symbol nofilter}){if $search.sort_by == "list_price"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                    </th>
                    <th width="5%" class="nowrap">
                        <a class="cm-ajax" href="{"`$c_url`&sort_by=amount&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("quantity")}{if $search.sort_by == "amount"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                    </th>
                    <th width="5%">&nbsp;</th>
                    <th width="10%" class="right">
                        <a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a>
                    </th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$products item=product}
                <tr class="cm-row-status-{$product.status|lower}">
                    <input type="hidden" value="{$product.is_default_variation}" name="products_data[{$product.product_id}][is_default_variation]" id="default_variation_{$product.product_id}">
                    <td>
                        {include file="common/image.tpl" image=$product.main_pair.icon|default:$product.main_pair.detailed image_id=$product.main_pair.image_id image_width=$settings.Thumbnails.product_admin_mini_icon_width image_height=$settings.Thumbnails.product_admin_mini_icon_height href="products.update?product_id=`$product.product_id`"|fn_url}
                    </td>
                    <td>
                        <input type="hidden" name="products_data[{$product.product_id}][product]" value="{$product.product}" />
                        <a class="row-status" title="{$product.product|strip_tags}" href="{"products.update?product_id=`$product.product_id`"|fn_url}">{$product.product|truncate:140 nofilter}</a>
                        <div class="product-code">
                            <span class="product-code__label">{$product.product_code}</span>
                        </div>
                        {include file="views/companies/components/company_name.tpl" object=$product}
                    </td>
                    <td>
                        <input type="text" name="products_data[{$product.product_id}][price]" size="6" value="{$product.price|fn_format_price:$primary_currency:null:false}" class="input-mini input-hidden"/>
                    </td>
                    <td>
                        <input type="text" name="products_data[{$product.product_id}][list_price]" size="6" value="{$product.list_price}" class="input-mini input-hidden" />
                    </td>
                    <td>
                        <input type="text" name="products_data[{$product.product_id}][amount]" size="6" value="{$product.amount}" class="input-micro input-hidden" />
                    </td>
                    <td class="nowrap">
                        <div class="hidden-tools">
                            {capture name="tools_list"}
                                <li>{btn type="list" text=__("edit") href="products.update?product_id=`$product.product_id`"}</li>
                                <li>{btn type="list" text=__("delete") class="cm-confirm" href="products.delete?product_id=`$product.product_id`&redirect_url=`$redirect_url|escape:url`" method="POST"}</li>
                            {/capture}
                            {dropdown content=$smarty.capture.tools_list}
                        </div>
                    </td>
                    <td class="right nowrap">
                        {include file="common/select_popup.tpl" popup_additional_class="dropleft" id=$product.product_id status=$product.status hidden=true object_id_name="product_id" table="products"}
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </form>
    {else}
        <p class="no-items">{__("no_data")}</p>
    {/if}
<!--content_variations--></div>