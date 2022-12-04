jQuery(function ($) {
    $(document).ready(function () {
        $('#select-price-block').click(function(){
            $('.select-block-container').hide();
            $('.select-price').show();
        });

        $('#select-assignment-block').click(function() {
            $('.select-block-container').hide();
            $('.brief-step-container').show();
        })
    });
});
