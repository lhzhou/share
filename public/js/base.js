



(function($){



    // $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);
    $(document).ajaxStart().ajaxStop($.unblockUI);


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

                    toast({
                        'title' : '',
                        'msg':'登录成功',
                        'icon':'success'
                    });

                    window.location.href=data.url;
                }else{
                    toast({
                        'title' : '错误提示',
                        'msg':data.msg,
                        'icon':'error'
                    });

                }
            } else {


                toast({
                    'title' : '系统错误',
                    'msg':'系统错误请于管理员联系',
                    'icon':'error'
                });
            }
        },
        error: function(data){
            toast({
                'title' : '系统错误',
                'msg':'系统错误请于管理员联系',
                'icon':'error'
            });
        }
    });

    function toast(data) {
        $.toast({

            heading: data.title,
            icon: data.icon,
            text: data.msg, // Text that is to be shown in the toast
            showHideTransition: 'fade', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'mid-center', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
            textAlign: 'center',
            loader: true,

        });


    }



})(jQuery);


