<div class="control-group" style="width:calc(100% - 180px)">
    <label class="control-label">{__("information")}:</label>
    <div class="controls">
        {__('csc.general_info_about_full_page_cache')}
    </div>
</div>

<div class="control-group" style="width:calc(100% - 180px)">
    <label class="control-label">{__("csc.cron_setup")}:</label>
    <div class="controls">
        {__('csc.general_info_cron_setup')}
        {assign var=controllers value=""|fn_csc_full_page_cache_get_cache_controllers}
        {assign var=controllers_string value = "=Y&"|implode:$controllers}<p style="word-wrap: break-word;"><b>
        {"full_page_cache.clear?cron_key=`$addons.csc_full_page_cache.cron_key`&`$controllers_string`=Y&expired=Y"|fn_url:"C"}</b></p>        
    </div>
</div>