(function($){

    function fixYithFilterUrls() {
        var currentUrl = window.location.origin + window.location.pathname;
        var shopUrl = (typeof yith_wcan_frontend !== 'undefined') ? yith_wcan_frontend.params.base_url : '/shop/';

        $('.yith-woocommerce-ajax-product-filter a').each(function(){
            var href = $(this).attr('href');
            if (!href) return;

            if (href.indexOf(shopUrl) !== -1) {
                var parts = href.split('?');
                if (parts.length === 2) {
                    $(this).attr('href', currentUrl + '?' + parts[1]);
                } else {
                    $(this).attr('href', currentUrl);
                }
            }
        });

        $('.yith-wcan-selected-filters a').each(function(){
            var href = $(this).attr('href');
            if (!href) return;

            if (href.indexOf(shopUrl) !== -1) {
                var parts = href.split('?');
                if (parts.length === 2) {
                    $(this).attr('href', currentUrl + '?' + parts[1]);
                } else {
                    $(this).attr('href', currentUrl);
                }
            }
        });

        if (typeof yith_wcan_frontend !== 'undefined') {
            yith_wcan_frontend.params.base_url = currentUrl;
        }
    }

    $(document).ready(function(){
        fixYithFilterUrls();
    });

    $(document).on('yith-wcan-ajax-filtered', function(){
        fixYithFilterUrls();
    });

})(jQuery);
