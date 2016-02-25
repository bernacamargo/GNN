/**
 * Created by Bernardo on 15/02/2016.
 */

$(document).ready(function () {

        $("#top").click(function(){
            $("html, body").animate({scrollTop: 0}, 200);
            return false;
        });

        $('#corpo').scrollspy({
            target: '#navbar-lateral',
            offset: '200'
        });

        $("#contato").click(function () {
            $("html, body").animate({scrollTop: $(document).height()}, 200);
            return false;
        });
});
