/**
 * Created by bao on 06/04/2018.
 */
(function($) {
    "use strict";
    var i = 3;
    $("#inputCast3").tokenInput(tokenCelebsUri);

    $("#inputDirector3").tokenInput(tokenCelebsUri);
    $("#inputGenre3").tokenInput(tokenGenreUri);
    $('#cast3').find("ul").addClass("cast");

    // $("#cast3").on('DOMNodeInserted', function(e) {
    //     $("#inputCast3").tokenInput(tokenCelebsUri);
    //     $('#cast3').find("ul").addClass("cast");
    //
    // });
    $('#addFilmSubmitChange').click(function () {
        var tokenDir = $('#director3').find("ul").text();
        var directors = tokenDir.split('×');
        var tokenCast = $('#cast-form').find("ul").text();
        var casts = tokenCast.split('×');
        var tokenGenre = $('#genre3').find("ul").text();
        var genre = tokenGenre.split('×');
        var j;
        var roles = [];
        for (j = 3; j < casts.length + 2; j++)
        {
            var role = document.getElementsByClassName("role" + j)[0].value;
            roles.push(role);
        }
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
                id : 'film',
                name: name,
                released_date : released_date,
                genre : genre,
                description : description,
                img : img,
                trailer : trailer,
                length : length,
                rate : rate,
                mat : mat,
                directors : directors,
                casts : casts,
                roles: roles
            },
            contentType: "application/x-www-form-urlencoded",

            success:function() {
                alert("Film "+name+" was successfully added to database!");
                window.location.href = dashboardUri;
            },
            error:function(){
                alert("Error!!!!");
            }
        });
    });
    $('#cast3').find("button").click(function () {
        i++;
        var str =   "<label for='inputCast"+i+"' class='col-sm-2 control-label'></label>"+
                    "<div class='col-sm-10' id='cast"+i+"' style='align-content: center'>" +
                    "<input type='text' class='form-control' id='inputCast"+ i +"' placeholder='Cast' name='cast'>" +
                    "<span style='display: inline-flex;margin: 10px'>AS</span>" +
                    "<input type='text' class='role"+i+"' width='300px' style='display: inline-flex'></div><br>";
        $(str).appendTo('#cast-form');
        $("#inputCast" + i).tokenInput(tokenCelebsUri);
        $('#cast' + i).find("ul").addClass("cast");

    });
    $('#addCelebSubmitChange').click(function () {
        var name = document.getElementById("inputName3").value;
        var img = document.getElementById("inputImage3").value;
        var dob = document.getElementById("inputDOB3").value;
        var pob = document.getElementById("inputPOB3").value;
        var bio = document.getElementById("inputBio3").value;
        var gender = parseInt($('#inputGender3').val(),10);
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
                id : 'celeb',
                name: name,
                dob : dob,
                pob : pob,
                bio : bio,
                img : img,
                gender: gender
            },
            contentType: "application/x-www-form-urlencoded",

            success:function() {
                alert("Profile of "+name+" was successfully added to database!");
                window.location.href = dashboardUri;
            },
            error:function(){
                alert("Error!!!!");
            }
        });
    });
})(jQuery);