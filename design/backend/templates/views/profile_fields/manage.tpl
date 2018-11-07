
{capture name="mainbox"}

{assign var="update_link_text" value=__("edit")}
{if ""|fn_check_form_permissions}
    {assign var="update_link_text" value=__("view")}
    {assign var="hide_inputs" value="cm-hide-inputs"}
{/if}

<form action="{""|fn_url}" method="post" name="fields_form"  class="{$hide_inputs}">
    <input type="hidden" name="profile_type" value="{$profile_type}"/>
    {math equation = "x + 5" assign="_colspan" x=$profile_fields_areas|sizeof}

{if $profile_fields}
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table-responsive">
    <thead>
    <tr>
        <th class="mobile-hide">
            {include file="common/check_items.tpl"}</th>
        <th>{__("position_short")}</th>
        <th>{__("description")}</th>
        <th>{__("type")}</th>
        {foreach $profile_types[$profile_type]["allowed_areas"] as $area}
            <th class="center">
                {__($area)}<br />{__("show")}&nbsp;/&nbsp;{__("required")}
            </th>
        {/foreach}
        <th class="mobile-hide">&nbsp;</th>
    </tr>
    </thead>
    {foreach from=$profile_fields key=section item=fields name="profile_fields"}
        {if $section != "E"}
        <tr>
            <td colspan="{$_colspan}" class="row-header">
                {if $section == "C"}{assign var="s_title" value=__("contact_information")}
                {elseif $section == "B"}{assign var="s_title" value=__("billing_address")}
                {elseif $section == "S"}{assign var="s_title" value=__("shipping_address")}
                {/if}
                <h5>{$s_title}</h5>
            </td>
        </tr>
        {foreach from=$fields item=field}
        <tr>
            <td class="center mobile-hide">
            {if $section != "B" && $field.is_default != "Y"}
                {assign var="extra_fields" value=true}
                {assign var="custom_fields" value=true}
                {if $field.matching_id}
                    <input type="hidden" name="matches[{$field.matching_id}]" value="{$field.field_id}" />
                {/if}
                <input type="checkbox" name="field_ids[]" value="{$field.field_id}" class="cm-item" />
            {/if}
            </td>
            <td data-th="{__("position_short")}"><input class="input-micro input-hidden" type="text" size="3" name="fields_data[{$field.field_id}][position]" value="{$field.position}" /></td>
            <td data-th="{__("description")}">
                <a href="{"profile_fields.update?field_id=`$field.field_id`"|fn_url}"  data-ct-field-section="{$section}">{$field.description}</a>
            </td>
            <td class="nowrap" data-th="{__("type")}">
                {hook name="profile_fields:field_type_description"}
                {if $field.field_type == "{"ProfileFieldTypes::CHECKBOX"|enum}"}{__("checkbox")}
                {elseif $field.field_type == "{"ProfileFieldTypes::INPUT"|enum}"}{__("input_field")}
                {elseif $field.field_type == "{"ProfileFieldTypes::RADIO"|enum}"}{__("radiogroup")}
                {elseif $field.field_type == "{"ProfileFieldTypes::SELECT_BOX"|enum}"}{__("selectbox")}
                {elseif $field.field_type == "{"ProfileFieldTypes::TEXT_AREA"|enum}"}{__("textarea")}
                {elseif $field.field_type == "{"ProfileFieldTypes::DATE"|enum}"}{__("date")}
                {elseif $field.field_type == "{"ProfileFieldTypes::EMAIL"|enum}"}{__("email")}
                {elseif $field.field_type == "{"ProfileFieldTypes::POSTAL_CODE"|enum}"}{__("zip_postal_code")}
                {elseif $field.field_type == "{"ProfileFieldTypes::PHONE"|enum}"}{__("phone")}
                {elseif $field.field_type == "{"ProfileFieldTypes::COUNTRY"|enum}"}<a href="{"countries.manage"|fn_url}" class="underlined">{__("country")}&nbsp;&rsaquo;&rsaquo;</a>
                {elseif $field.field_type == "{"ProfileFieldTypes::STATE"|enum}"}<a href="{"states.manage"|fn_url}" class="underlined">{__("state")}&nbsp;&rsaquo;&rsaquo;</a>
                {elseif $field.field_type == "{"ProfileFieldTypes::ADDRESS_TYPE"|enum}"}{__("address_type")}
                {elseif $field.field_type == "{"ProfileFieldTypes::VENDOR_TERMS"|enum}"}{__("vendor_terms")}
                {/if}
                {/hook}
                <input type="hidden" name="fields_data[{$field.field_id}][field_id]" value="{$field.field_id}" />
                <input type="hidden" name="fields_data[{$field.field_id}][field_name]" value="{$field.field_name}" />
                <input type="hidden" name="fields_data[{$field.field_id}][section]" value="{$section}" />
                <input type="hidden" name="fields_data[{$field.field_id}][matching_id]" value="{$field.matching_id}" />
                <input type="hidden" name="fields_data[{$field.field_id}][field_type]" value="{$field.field_type}" />
            </td>

            {foreach $profile_types[$profile_type]["allowed_areas"] as $area}
                {$_show = "`$area`_show"}
                {$_required = "`$area`_required"}
                <td class="center" data-th="{__($area)} ({__("show")} / {__("required")})">
                    <input type="hidden" name="fields_data[{$field.field_id}][{$_show}]" value="N" />
                    {if $field.field_name == "email"}
                        <input type="radio" name="fields_data[email][{$_show}]" value="{$field.field_id}" {if $field.$_show == "Y"}checked="checked"{/if} id="sw_req_{$area}_{$field.field_id}" class="cm-switch-availability" />
                    {elseif $field.field_name == "company" && $field.profile_type == "ProfileTypes::CODE_SELLER"|enum}
                        <input type="radio" name="fields_data[{$field.field_id}][{$_show}]" value="Y" {if $field.$_show == "Y"}checked="checked"{/if} id="sw_req_{$area}_{$field.field_id}" class="cm-switch-availability" />
                    {else}
                        <input type="checkbox" name="fields_data[{$field.field_id}][{$_show}]" value="Y" {if $field.$_show == "Y"}checked="checked"{/if} id="sw_req_{$area}_{$field.field_id}" class="cm-switch-availability" />
                    {/if}
                    <input type="hidden" name="fields_data[{$field.field_id}][{$_required}]" value="{if $field.field_name == "email" || $field.field_name == "company" && $field.profile_type == "ProfileTypes::CODE_SELLER"|enum}Y{else}N{/if}" />
                    <span id="req_{$area}_{$field.field_id}{if $field.field_name == "email"}_email{/if}">
                        <input type="checkbox" name="fields_data[{$field.field_id}][{$_required}]" value="Y" {if $field.$_required == "Y" || $field.field_name == "email"}checked="checked"{/if} {if $field.$_show == "N" || $field.field_name == "email" || ($field.field_name == "company" && $field.profile_type == "ProfileTypes::CODE_SELLER"|enum)}disabled="disabled"{/if} />
                    </span>
                </td>
            {/foreach}
            <td class="nowrap mobile-hide">
                {capture name="tools_list"}
                    {if $custom_fields}
                        <li>{btn type="list" text=__("delete") class="cm-confirm" href="profile_fields.delete?field_id=`$field.field_id`&profile_type={$profile_type}" method="POST"}</li>
                    {/if}
                    <li>{btn type="list" text=$update_link_text href="profile_fields.update?field_id=`$field.field_id`"|fn_url}</li>
                {/capture}
                <div class="hidden-tools">
                    {dropdown content=$smarty.capture.tools_list}
                </div>
            </td>
        </tr>
        
        {assign var="custom_fields" value=false}
        {/foreach}
        {/if}
    {/foreach}
    {else}
        <p class="no-items">{__("no_items")}</p>
    {/if}
    </table>
</div>
</form>

{capture name="adv_buttons"}
    {include file="common/tools.tpl" tool_href="profile_fields.add{if $profile_type}?profile_type={$profile_type}{/if}" prefix="top" title=__("add_field") hide_tools=true icon="icon-plus"}
{/capture}

{capture name="buttons"}
    {if $extra_fields}
        {capture name="tools_list"}
            <li>{btn type="delete_selected" dispatch="dispatch[profile_fields.m_delete]" form="fields_form"}</li>
        {/capture}
        {dropdown content=$smarty.capture.tools_list}
    {/if}
    {if $profile_fields}
        {include file="buttons/save.tpl" but_name="dispatch[profile_fields.m_update]" but_role="action" but_target_form="fields_form" but_meta="cm-submit"}
    {/if}
{/capture}
{/capture}

{include file="common/mainbox.tpl" title=__("profile_fields") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons select_languages=true}