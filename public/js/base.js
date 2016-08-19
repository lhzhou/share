
(function($){
    $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);

    if (typeof pagination !== 'undefined') {

        pagination.options.pageUrl = function(type, page, current) {
            if (page == current) {
                return '#';
            } else {
                var query = window.location.search.substring(1);
                query = $.deparam(query);

                query.page = page;
                // console.log(query);
                // console.log($.param(query));
                return window.location.href.split('?')[0] + '?' + $.param(query);
            }
        };
        $('.pagination').bootstrapPaginator(pagination.options);
    }

    

    $(".ajaxForm").ajaxForm({
        dataType: 'json',
        success: function(data) {
            if (typeof data == 'object') {
                console.log(data);

                if (data.method == 'redirect') {
                    window.location.href=data.url;
                }else{
                    sweetAlert(
                        '错误',
                        data.msg,
                        'error'
                    );
                }
            } else {
                alert('未知错误');
            }
        },
        error: function(data){
            console.log("error->");
            swal(data.msg);
        }
    });






})(jQuery);
