$(document).ready(function () {
    audioPlayer();
    showDuration();
});

function audioPlayer(){
    var currentSong = 0;
    $("#audio-player")[0].src = $("#playlist tr td a.music")[0].href;
    $("a.music").click(function(e){
        e.preventDefault();
        $("#audio-player")[0].src=this;
        $("#audio-player")[0].play();
        currentSong = $(this).parent().index();
        // console.log(currentSong);
        
        // When Song End
        $("#audio-player")[0].addEventListener("ended", function () {
            currentSong++;
            if (currentSong == $("#playlist tr").length) {
                currentSong = 0;
            }
            
            $("#audio-player")[0].src = $("#playlist tr td a.music")[currentSong].href;
            $("#audio-player")[0].play();
        });

        // Name of music

        var title = $(this).text();
        $("#audio-title").html(title);

    });

    $("#back").click(function(e){
        e.preventDefault();
        currentSong--;
        console.log(currentSong);
        
        if (currentSong < 0) {
            currentSong = $("#playlist tr").length - 1;
            $("#audio-player")[0].src = $("#playlist tr td a.music")[currentSong].href;
            $("#audio-player")[0].play();
        } else {
            $("#audio-player")[0].src = $("#playlist tr td a.music")[currentSong].href;
            $("#audio-player")[0].play();
        }

        var title = $("#playlist tr td a.music:eq(" + currentSong + ")").text();
        $("#audio-title").html(title);

    });
   
    $("#play").click(function(e){
        e.preventDefault();
        $("#audio-player")[0].play();
        var title = $("#playlist tr td a.music:eq(" + currentSong + ")").text();
        $("#audio-title").html(title);
    });

    $("#pause").click(function(e){
        e.preventDefault();
        $("#audio-player")[0].pause();
    });

    $("#next").click(function(e){
        e.preventDefault();
        currentSong++;
        console.log(currentSong);
        
        if (currentSong == $("#playlist tr").length ) {
            currentSong = 0;
            $("#audio-player")[0].src = $("#playlist tr td a.music")[currentSong].href;
            $("#audio-player")[0].play();
        } else {
            $("#audio-player")[0].src = $("#playlist tr td a.music")[currentSong].href;
            $("#audio-player")[0].play();
        }

        var title = $("#playlist tr td a.music:eq(" + currentSong + ")").text();
        $("#audio-title").html(title);
    });

}

function showDuration(){

    var audio;

    if(!$("#audio-player")[0].currentTime){
		$('#duration').html('0.00');
	}

	$("#audio-player").bind('timeupdate', function(){
		//Get hours and minutes
		var s = parseInt($("#audio-player")[0].currentTime % 60);
		var m = parseInt(($("#audio-player")[0].currentTime / 60) % 60);
		//Add 0 if seconds less than 10
		if (s < 10) {
			s = '0' + s;
		}
		$('#duration').html(m + '.' + s);	
		var value = 0;
		if ($("#audio-player")[0].currentTime > 0) {
			value = Math.floor((100 / $("#audio-player")[0].duration) * $("#audio-player")[0].currentTime);
		}
		$('#progress').css('width',value+'%');
	});
}