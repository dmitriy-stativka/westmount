jQuery(document).ready(function($) {
    $('.select__option').on('click', function() {
        var termId = $(this).data('term-id');

        $.ajax({
            url: my_ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_events',
                term_id: termId
            },
            success: function(response) {
                $('.events-box__list').html(response);
            }
        });
    });
});
