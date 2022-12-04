jQuery(function ($) {
    $(document).ready(function () {
        $(document).onClick('#select-price-block', function() {
            $('.select-block-container').hide();
            $('.select-price').show();
        })
    });
});
