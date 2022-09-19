(function($) {
    'use strict';
    if ($("#summernoteExample").length) {
        $('#summernoteExample').summernote({
            height:650,                 // set editor height
            minHeight: 650,             // set minimum height of editor
            maxHeight: 650,       
            disableResizeEditor: true,
        });
    }
})(jQuery);