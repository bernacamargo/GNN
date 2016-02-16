/**
 * Created by Bernardo on 15/02/2016.
 */

$(function(){
    var nav = $('.navbar-menu');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 150) {
            nav.addClass("navbar-menu-fixo");
        } else {
            nav.removeClass("navbar-menu-fixo");
        }
    });
});