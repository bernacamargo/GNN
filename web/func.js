/**
 * Created by Bernardo on 15/02/2016.
 */

$(document).ready(function () {

    // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // ADD SLIDEUP ANIMATION TO DROPDOWN //
    $('.dropdown').on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    $("#top").click(function(){
        $("html, body").animate({scrollTop: 0}, 200);
        return false;
    });

    $(".contato1").click(function () {
        $("html, body").animate({scrollTop: $(document).height()}, 200);
        return false;
    });




});
