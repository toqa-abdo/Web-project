jQuery(function () {
    jQuery(".js-movieItem").click(function () {
        FilterFunction('', '', '', '');
    });
    jQuery(".js-cinemaItem").click(function () {
        FilterFunction('', '', '', '');
    });
    jQuery(".js-experienceItem").click(function () {
        FilterFunction('', '', '', '');
    });
    jQuery(".js-genreItem").click(function () {
        FilterFunction('', '', '', '');
    });
    jQuery("#select-all-movies").click(function () {
        FilterFunction('all', '', '', '');
    });
    jQuery("#select-all-locations").click(function () {
        FilterFunction('', 'all', '', '');
    });
    jQuery("#select-all-exp").click(function () {
        FilterFunction('', '', 'all', '');
    });
    jQuery("#select-all-genre").click(function () {
        FilterFunction('', '', '', 'all');
    });

    //Coming Soon
    jQuery(".js-movieItem-coming").click(function () {

        FilterFunctionCS('', '', '');
    });
    jQuery(".js-cinemaItem-coming").click(function () {

        FilterFunctionCS('', '', '');
    });

    jQuery(".js-genreItem-coming").click(function () {

        FilterFunctionCS('', '', '', '');
    });
    jQuery(".js-experienceItem-coming").click(function () {
        FilterFunctionCS('', '', '', '');
    });
    jQuery("#select-all-movies-coming").click(function () {

        FilterFunctionCS('all', '', '', '');
    });
    jQuery("#select-all-locations-coming").click(function () {

        FilterFunctionCS('', 'all', '', '');
    });

    jQuery("#select-all-genere-coming").click(function () {

        FilterFunctionCS('', '', 'all', '');
    });

    jQuery("#select-all-exp-coming").click(function () {

        FilterFunctionCS('', '', '', 'all');
    });
    //End Coming Soon

    //Classic Movies

    jQuery(".js-movieItem-classic").click(function () {

        FilterFunctionCM('', '', '');
    });
    jQuery(".js-cinemaItem-classic").click(function () {

        FilterFunctionCM('', '', '');
    });

    jQuery(".js-genreItem-classic").click(function () {

        FilterFunctionCM('', '', '', '');
    });
    jQuery(".js-experienceItem-classic").click(function () {
        FilterFunctionCM('', '', '', '');
    });
    jQuery("#select-all-movies-classic").click(function () {

        FilterFunctionCM('all', '', '', '');
    });
    jQuery("#select-all-locations-classic").click(function () {

        FilterFunctionCM('', 'all', '', '');
    });

    jQuery("#select-all-genere-classic").click(function () {

        FilterFunctionCM('', '', 'all', '');
    });

    jQuery("#select-all-exp-classic").click(function () {

        FilterFunctionCM('', '', '', 'all');
    });
});

function FilterFunction(m, c, e, g) {
    var movies = '';
    var cinemas = '';
    var experience = '';
    var genre = '';
    $("#loadmoreNS").css("display", "none");
    var Mphrases = [];
    var Mphrase = '';
    $("input:checkbox[class=js-movieItem]:checked").each(function () {
        Mphrase += $(this).attr("title") + ",";
    });
    Mphrases.push(Mphrase);
    movies = Mphrases;
    var Cphrases = [];
    var Cphrase = '';

    $("input:checkbox[class=js-cinemaItem]:checked").each(function () {
        //Commented by Abhinav for Drive In  - 11-06-2020
        //Cphrase += $(this).attr("title") + ",";

        Cphrase += $(this).attr("title") + '|' + $(this).attr("value") + ",";
    });
    Cphrases.push(Cphrase);
    cinemas = Cphrases;

    var Ephrases = [];
    var Ephrase = '';

    $("input:checkbox[class=js-experienceItem]:checked").each(function () {

        Ephrase += $(this).attr("title") + ",";
    });
    Ephrases.push(Ephrase);
    experience = Ephrases;
    var Gphrases = [];
    var Gphrase = '';

    $("input:checkbox[class=js-genreItem]:checked").each(function () {
        Gphrase += $(this).attr("title") + ",";

    });
    Gphrases.push(Gphrase);
    genre = Gphrases;
    if (m == "all") {
        movies = "";
    }
    if (c == "all") {
        cinemas = "";
    } if (e == "all") {
        experience = "";

    } if (g == "all") {
        genre = "";
    }
    $('.ajax-loader-block').fadeIn();

    $.ajax({
        url: rooturl + "/Filter/GetMoviesByFilter",
        data: "{\"cinemas\":\"" + cinemas + "\",\"experience\":\"" + experience + "\",\"movies\":\"" + movies + "\",\"genre\":\"" + genre + "\",\"filterType\":\"whatson\"}",
        dataType: "json",
        type: "POST",
        async: false,
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            if (data != "") {
                var arr = data.split("@@@");
                $("#nowshowinghtml").html(arr[0]);
                movieListSetHTML();
                movieList();

                animWrapHeight();
                countFilterSelection();
                $('.ajax-loader-block').fadeOut();
            }
            else {

                $("#nowshowinghtml").html("<li class='no-recordfound'>Currently there are no movies for your selected filter.</li>");
                $('.ajax-loader-block').fadeOut();
            }
        },
        error: function (data) {

            $("#nowshowinghtml").html("<li class='no-recordfound'>Currently there are no movies for your selected filter.</li>");
            $('.ajax-loader-block').fadeOut();
        }
    });

}

function FilterFunctionCS(m, c, g, e) {
    var movies = '';
    var cinemas = '';
    var experience = '';
    var genre = '';

    $('.ajax-loader-block').fadeIn();

    $("#loadmoreCS").css("display", "none");
    var Mphrases = [];
    var Mphrase = '';
    $("input:checkbox[class=js-movieItem-coming]:checked").each(function () {
        Mphrase += $(this).attr("title") + ",";
    });
    Mphrases.push(Mphrase);
    movies = Mphrases;
    var Cphrases = [];
    var Cphrase = '';
    $("input:checkbox[class=js-cinemaItem-coming]:checked").each(function () {
        Cphrase += $(this).attr("title") + ",";
    });
    Cphrases.push(Cphrase);
    cinemas = Cphrases;

    var Ephrases = [];
    var Ephrase = '';
    $("input:checkbox[class=js-experienceItem-coming]:checked").each(function () {
        Ephrase += $(this).attr("title") + ",";
    });
    Ephrases.push(Ephrase);
    experience = Ephrases;
    var Gphrases = [];
    var Gphrase = '';

    $("input:checkbox[class=js-genreItem-coming]:checked").each(function () {

        Gphrase += $(this).attr("title") + ",";
        Gphrases.push(Gphrase);
    });

    genre = Gphrases;
    if (m == "all") {
        movies = "";

    } if (e == "all") {
        experience = "";
    }
    if (c == "all") {
        cinemas = "";

    } if (g == "all") {
        genre = "";

    }
    $.ajax({

        url: rooturl + "/Filter/GetMoviesByFilter",
        data: "{\"cinemas\":\"" + cinemas + "\",\"movies\":\"" + movies + "\",\"genre\":\"" + genre + "\",\"experience\":\"" + experience + "\",\"filterType\":\"whatscoming\"}",
        dataType: "json",
        type: "POST",
        async: false,
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            if (data != "") {
                $("#comingsoonhtml").html(data);
                movieListSetHTML();
                movieList();

                animWrapHeight();
                countFilterSelection();
                $('.ajax-loader-block').fadeOut();
            }
            else {

                $("#comingsoonhtml").html("<li class='no-recordfound'>Currently there are no movies for your selected filter.</li>");
                $('.ajax-loader-block').fadeOut();
            }
        },
        error: function (data) {

            $("#comingsoonhtml").html("<li class='no-recordfound'>Currently there are no movies for your selected filter.</li>");
            $('.ajax-loader-block').fadeOut();
        }

    });
}

function FilterFunctionCM(m, c, g, e) {
    var movies = '';
    var cinemas = '';
    var experience = '';
    var genre = '';

    $('.ajax-loader-block').fadeIn();

    $("#loadmoreCM").css("display", "none");
    var Mphrases = [];
    var Mphrase = '';
    $("input:checkbox[class=js-movieItem-classic]:checked").each(function () {
        Mphrase += $(this).attr("title") + ",";
    });
    Mphrases.push(Mphrase);
    movies = Mphrases;
    var Cphrases = [];
    var Cphrase = '';
    $("input:checkbox[class=js-cinemaItem-classic]:checked").each(function () {
        Cphrase += $(this).attr("title") + ",";
    });
    Cphrases.push(Cphrase);
    cinemas = Cphrases;

    var Ephrases = [];
    var Ephrase = '';
    $("input:checkbox[class=js-experienceItem-classic]:checked").each(function () {
        Ephrase += $(this).attr("title") + ",";
    });
    Ephrases.push(Ephrase);
    experience = Ephrases;
    var Gphrases = [];
    var Gphrase = '';

    $("input:checkbox[class=js-genreItem-classic]:checked").each(function () {

        Gphrase += $(this).attr("title") + ",";
        Gphrases.push(Gphrase);
    });

    genre = Gphrases;
    if (m == "all") {
        movies = "";

    } if (e == "all") {
        experience = "";
    }
    if (c == "all") {
        cinemas = "";

    } if (g == "all") {
        genre = "";

    }
    $.ajax({

        url: rooturl + "/Filter/GetMoviesByFilter",
        data: "{\"cinemas\":\"" + cinemas + "\",\"movies\":\"" + movies + "\",\"genre\":\"" + genre + "\",\"experience\":\"" + experience + "\",\"filterType\":\"classic\"}",
        dataType: "json",
        type: "POST",
        async: false,
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            if (data != "") {
                $("#classicmovieshtml").html(data);
                movieListSetHTML();
                movieList();

                animWrapHeight();
                countFilterSelection();
                $('.ajax-loader-block').fadeOut();
            }
            else {

                $("#classicmovieshtml").html("<li class='no-recordfound'>Currently there are no movies for your selected filter.</li>");
                $('.ajax-loader-block').fadeOut();
            }
        },
        error: function (data) {

            $("#comingsoonhtml").html("<li class='no-recordfound'>Currently there are no movies for your selected filter.</li>");
            $('.ajax-loader-block').fadeOut();
        }

    });
}

function MovieDetailsPage(movieId, movieName) {

    var date = "";
    var timing = "";
    var cinemas = "";
    var type = "movie";
    var experience = "";

    var Cphrases = [];
    var Cphrase = '';

    $("input:checkbox[class=js-cinemaItem]:checked").each(function () {

        //Commented by Abhinav for Drive In  - 11-06-2020
        //Cphrase += $(this).attr("title") + ",";

        Cphrase += $(this).attr("title") + '|' + $(this).attr("value") + ",";
    });
    Cphrases.push(Cphrase);
    cinemas = Cphrases;
    var Ephrases = [];
    var Ephrase = '';

    $("input:checkbox[class=js-experienceItem]:checked").each(function () {

        Ephrase += $(this).attr("title") + ",";
    });
    Ephrases.push(Ephrase);
    experience = Ephrases;
    if (movieId != "" && movieName != "") {
        $.ajax({

            type: "POST",
            url: rooturl + '/Filter/MovieDetailsPage',
            contentType: "application/json; charset=utf-8",
            async: true,
            data: "{\"cinemaid\":\"" + cinemas + "\",\"date\":\"" + date + "\",\"experience\":\"" + experience + "\",\"timing\":\"" + timing + "\",\"movieid\":\"" + movieId + "\",\"type\":\"" + type + "\"}",

            dataType: "json",
            success: function (data) {
                if (data != "") {
                    window.location.href = rooturl + '/movie-details/' + movieId + "/" + movieName;
                }
                else {
                    window.location.href = rooturl + '/movie-details/' + movieId + "/" + movieName;

                }
            }
        });
    }
}
function countFilterSelection() {
    $('.js-custom-select .field input').each(function () {
        var currentVal = $(this).attr('placeholder');
        var totalChecked = $(this).closest('.js-custom-select').find('.field-dropdown .scroll input:checked').length;
        $(this).attr('placeholder', currentVal.split(' (')[0] + ' (' + totalChecked + ')');
    });
}
function loadmoreNS() {

    $(".js-play-movies-listing .movie-item").each(function () {
        if ($(this).css("display") == "none") {
            $(this).css("display", "block");
        }
    });
    $("#loadmoreNS").css("display", "none");

}
function loadmoreCS() {

    $(".js-coming-movies-listing .movie-item").each(function () {
        if ($(this).css("display") == "none") {
            $(this).css("display", "block");
        }
    });
    $("#loadmoreCS").css("display", "none");

}
function loadmoreCM() {

    $(".js-classic-movies-listing .movie-item").each(function () {
        if ($(this).css("display") == "none") {
            $(this).css("display", "block");
        }
    });
    $("#loadmoreCM").css("display", "none");

}

$('a[href="#whats-on"]').click();