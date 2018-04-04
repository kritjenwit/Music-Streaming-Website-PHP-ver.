$(document).ready(function () {

    audioPlayer();
    initAudio();

});

function audioPlayer() {
    var currentSong = 0;
    $("#audioPlayer")[0].src = $("#playlist li a")[0];
    $("#playlist li a")[0].addClass("current-song");
    // $("#audioPlayer")[0].play();
    $("#playlist li a").click(function (e) {
        e.preventDefault();
        $("#audioPlayer")[0].src = this;
        $("#audioPlayer")[0].play();
        $("#playlist li").removeClass("current-song");
        currentSong = $(this).parent().index();
        $(this).parent().addClass("current-song");
    });

    $("#audioPlayer")[0].addEventListener("ended", function () {
        currentSong++;
        if (currentSong == $("#playlist li a").length) {
            currentSong = 0;
        }
        $("#playlist li").removeClass("current-song");
        $("#playlist li:eq(" + currentSong + ")").addClass("current-song");
        $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
        $("#audioPlayer")[0].play();
    });

    //audio controller
    // icon play
    $("#play").click(function (e) {
        e.preventDefault();
        $("#audioPlayer")[0].play();
        var title = $("#playlist li:eq(" + currentSong + ")").text();
        $("#audio-title").html(title);

    });

    //icon pause
    $("#pause").click(function (e) {
        e.preventDefault();
        $("#audioPlayer")[0].pause();
    });
    // icon previous
    $("#back").click(function (e) {
        e.preventDefault();
        $("#playlist li").removeClass("current-song");
        currentSong--;
        if (currentSong < 0) {
            currentSong = $("#playlist li a").length - 1;
            $("#playlist li:eq(" + currentSong + ")").addClass("current-song");
            $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
            $("#audioPlayer")[0].play();

        } else {
            $("#playlist li").removeClass("current-song");
            $("#playlist li:eq(" + currentSong + ")").addClass("current-song");
            $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
            $("#audioPlayer")[0].play();
        }

        var title = $("#playlist li:eq(" + currentSong + ")").text();
        $("#audio-title").html(title);

    });
    //icon next
    $("#next").click(function (e) {
        e.preventDefault();
        $("#playlist li").removeClass("current-song");
        currentSong++;
        if (currentSong == $("#playlist li a").length) {
            currentSong = 0;
            $("#playlist li:eq(" + currentSong + ")").addClass("current-song");
            $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
            $("#audioPlayer")[0].play();
        } else {
            $("#playlist li:eq(" + currentSong + ")").addClass("current-song");
            $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
            $("#audioPlayer")[0].play();
        }

        var title = $("#playlist li:eq(" + currentSong + ")").text();
        $("#audio-title").html(title);
    });

    // Click picture and play
    $("#pic-song").click(function (e) {
        e.preventDefault();
        $("#audio-title").html("");
        // $("#audioPlayer")[0].src = this;
        var title = $("#playlist li:eq(" + currentSong + ")").text();
        $("#audio-title").html(title);
        $("#audioPlayer")[0].play();

    });
}

function initAudio() {

    $("#playlist li a").click(function () {
        var title = $(this).text();

        $("#audio-title").html(title);

    });

}