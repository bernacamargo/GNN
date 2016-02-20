/**
 * Created by Bernardo on 15/02/2016.
 */

$(document).ready(function () {

        $("#top").click(function(){
            $("html, body").animate({scrollTop: 0}, 200)
        });

       /* //jQuery for page scrolling feature - requires jQuery Easing plugin
        $(function() {
            $('a.page-scroll').bind('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });
    */

        $('#corpo').scrollspy({
            target: '#navbar-lateral',
            offset: '200'
        });

        $("#contato").click(function () {
            $("html, body").animate({scrollTop: $(document).height()}, 200)
           // $("html, body").scrollTop($(document).height());
            return false;
        });



});
