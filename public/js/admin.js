/**
 * Created by bao on 06/04/2018.
 */
(function($) {
    "use strict";
    $("#inputCast3").tokenInput(tokenCelebsUri);
    $("#inputDirector3").tokenInput(tokenCelebsUri);
    $('#addSubmitChange').click(function () {
        var tokenDir = $('#director3').find("ul").text();
        var directors = tokenDir.split('×');
        var tokenCast = $('#cast3').find("ul").text();
        var casts = tokenCast.split('×');
        var name = document.getElementById("inputName3").value;
        var released_date = document.getElementById("inputReleased3").value;
        var description = document.getElementById("inputDescription3").value;
        var img = document.getElementById("inputImage3").value;
        var trailer = document.getElementById("inputTrailer3").value;
        var length = document.getElementById("inputLength3").value;
        var rate = document.getElementById("inputRate3").value;
        var mat = document.getElementById("inputMat3").value;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: ajaxAddUri,
            datatType : 'json',
            type: 'POST',
            data: {
                'id' : 'film',
                'name': name,
                'released_date' : released_date,
                'description' : description,
                'img' : img,
                'trailer' : trailer,
                'length' : length,
                'rate' : rate,
                'mat' : mat,
                'directors' : directors,
                'casts' : casts
            },
            cache: false,
            contentType: false,
            processData: false,

            success:function(response) {
                alert("Film "+name+" was successfully added to database!");
                window.location.href = dashboardUri;
            },
            error:function(){
                alert("Error!!!!");
            }
        });
    });
})(jQuery);