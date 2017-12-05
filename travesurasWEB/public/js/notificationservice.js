$(function() {
    window.notify = function(){
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        function notify(type, title, text) {
            toastr[type](text, title);
        }
        function success(title, text) {
            notify('success', title, text);
        }
        function info(title, text) {
            notify('info', title, text);
        }
        function warning(title, text) {
            notify('warning', title, text);
        }
        function error(title, text) {
            notify('error', title, text);
        }
        return {
            manual: notify,
            success: success,
            info: info,
            warning: warning,
            error: error
        }
    }();
});