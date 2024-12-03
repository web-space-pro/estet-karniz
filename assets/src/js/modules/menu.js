(function ($, root, undefined) {

    $(document).ready(function () {

        function btnMenu(){
            let btn = $(".btn-toggle");
            let mobileMenu = $(".menu-mobile");
            let body = $('body');
            if (btn.length > 0) {
                btn.click(function() {
                    mobileMenu.toggleClass('hidden open');
                    body.toggleClass('t-overflow');
                });
            }
        }

        function subMenu(){
            $(".menu-mobile li.menu-item-has-children").on('click', function (e) {
                $(this).toggleClass('show');
            });
            $("ul.menu li.menu-item-has-children a[href='#']").click(function (e) {
                e.preventDefault();
            });
        }
        btnMenu();
        subMenu();
    });
})(jQuery);

