{capture name="mainbox"}

{"ШАБЛОН СУЩНОСТЕЙ"|fn_print_r}

<form action="{""|fn_url}" method="post" target="_self" name="enities_list_form">

{include file="common/pagination.tpl" save_current_page=true save_current_url=true div_id=$smarty.request.content_id}

{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_enity_rev"}
{assign var="c_icon" value="<i class=\"icon-`$search.sort_enity_rev`\"></i>"}
{assign var="c_dummy" value="<i class=\"icon-dummy\"></i>"}

{assign var="rev" value=$smarty.request.content_id|default:"pagination_contents"}

{assign var="page_title" value=__("enities")}

{if $enities}
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table-responsive">
    <thead>
    <tr>
        <th  class="left mobile-hide">{include file="common/check_items.tpl" check_statuses=$enity_status_descr}</th>
        <th width="17%"><a class="cm-ajax" href="{"`$c_url`&sort_by=enity_id&sort_enity=`$search.sort_enity_rev`"|fn_url}" data-ca-target-id={$rev}>{__("id")}{if $search.sort_by == "enity_id"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th width="17%"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_enity=`$search.sort_enity_rev`"|fn_url}" data-ca-target-id={$rev}>{__("status")}{if $search.sort_by == "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th width="15%"><a class="cm-ajax" href="{"`$c_url`&sort_by=description&sort_enity=`$search.sort_enity_rev`"|fn_url}" data-ca-target-id={$rev}>{__("description")}{if $search.sort_by == "description"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        <th width="35%"><a class="cm-ajax" href="{"`$c_url`&sort_by=full_description&sort_enity=`$search.sort_enity_rev`"|fn_url}" data-ca-target-id={$rev}>{__("full_description")}{if $search.sort_by == "full_description"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
        {hook name="enities:manage_header"}{/hook}

    </tr>
    </thead>
    {foreach from=$enities item="o"}
    {hook name="enities:enity_row"}
    <tr>
        <td class="left mobile-hide">
            <input type="checkbox" name="enities_ids[]" value="{$o.enity_id}" class="cm-item cm-item-status-{$o.status|lower}" /></td>
        <td data-th="{__("id")}">
            <a href="" class="underlined">{__("enity")} <bdi>#{$o.enity_id}</bdi></a>
        </td>
        <td data-th="{__("description")}">
            <p class="muted">{$o.description}</p>
        </td>
        <td data-th="{__("full_description")}">
            <p class="muted">{$o.full_description}</p>
        </td>

        {hook name="enities:manage_data"}{/hook}

    </tr>
    {/hook}
    {/foreach}
    </table>
</div>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}


{include file="common/pagination.tpl" div_id=$smarty.request.content_id}


</form>

{/capture}


{include file="common/mainbox.tpl" title=$page_title content=$smarty.capture.mainbox content_id="manage_enities"}
