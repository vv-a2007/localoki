{if $product_data.is_vendor_product && !$product_type->isFieldAvailableForVendorProduct("product_code")}
    <!-- Overridden by the Common Products for Vendors add-on -->

    {$select2_disabled = true scope = parent}
{/if}
