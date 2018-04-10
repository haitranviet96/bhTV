/**
 * Created by bao on 06/04/2018.
 */
(function($) {
    "use strict";
    $("#inputCast3").tokenInput(tokenCelebsUri);
    $("#inputDirector3").tokenInput(tokenCelebsUri);
    $('#submitChange').click(function () {
        var token = $('.token-input-list-facebook').text();
        var str = token.split('×');

        console.log(str);
    });
})(jQuery);