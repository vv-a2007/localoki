{assign var="obj_id" value=$obj_id|default:$company.company_id}

{capture name="name_`$obj_id`"}
    {if $show_name}
        {if !$show_links}<strong>{else}<a href="{"companies.products?company_id=`$company.company_id`"|fn_url}" class="product-title">{/if}{$company.company nofilter}{if !$show_links}</strong>{else}</a>{/if}
    {elseif $show_trunc_name}
        {if !$show_links}<strong>{else}<a href="{"companies.products?company_id=`$company.company_id`"|fn_url}" class="product-title" title="{$company.company|strip_tags}">{/if}{$company.company|truncate:45:"...":true nofilter}{if !$show_links}</strong>{else}</a>{/if}
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="name_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="rating_`$obj_id`"}
    {hook name="companies:data_block"}
    {/hook}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="rating_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="company_descr_`$obj_id`"}
    {if $show_descr}
        {$company.company_description|strip_tags|truncate:1024 nofilter}{if $show_links && $company.company_description|strlen > 1024} <a href="{"companies.products?company_id=`$company.company_id`"|fn_url}">{__("more")}</a>{/if}
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="company_descr_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{capture name="logo_`$obj_id`"}
    {if $show_logo}
        {if $show_links}<a href="{"companies.products?company_id=`$company.company_id`"|fn_url}">{/if}
        <span>
            {include file="common/image.tpl" images=$company.logos.theme.image image_width="120"}
        </span>            
        {if $show_links}</a>{/if}
    {/if}
{/capture}
{if $no_capture}
    {assign var="capture_name" value="logo_`$obj_id`"}
    {$smarty.capture.$capture_name nofilter}
{/if}

{hook name="companies:company_data"}{/hook}