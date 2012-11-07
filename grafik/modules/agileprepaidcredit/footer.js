$(document).ready(function() {
    if (hideImages) $('div#pb-right-column').hide();
    if (hideShortDesc) $('div#short_description_block').hide();
    if (hideColorPicker) $('div#hideColorPicker').hide();
    if (hideBuyBlock) $('form#buy_block').hide();
    if (hideQuantityDiscount) $('div#quantityDiscount').hide();
    if (hideMoreInfo) $('div#more_info_block').hide();

    if (ispaid && !repurchase) $('p#add_to_cart').hide();
    else if (!istoken) {
        //for product page 'add' button...
        $('body#product p#add_to_cart input').unbind('click').click(function() {
            return confirm(cfmmsg);
        });
    }


    //always hide "add to cart" in product list pages
    $('.ajax_add_to_cart_button').hide();
});

