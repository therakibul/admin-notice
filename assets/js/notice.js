; (function ($) {
    $(document).ready(function () {
        $("#notice_ninja .notice-dismiss").on("click", function () {
            setCookie("nn-close", "1", 60);
        });
    });
})(jQuery);


function setCookie(cookieName, cookieValue, cookieExp) {
    let expiry = new Date();
    expiry.setTime(expiry.getTime() + 1000 * cookieExp);
    document.cookie = cookieName + "=" + cookieValue + ";expires=" + cookieExp + "; path=/";
}