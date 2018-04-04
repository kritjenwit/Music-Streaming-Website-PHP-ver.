$(document).ready(function () {

    fadeFunction();

});

function fadeFunction() {
    window.sr = ScrollReveal();
    sr.reveal(".navbar", {
        duration: 2000,
        origin: "bottom",
    });

    sr.reveal(".header-text", {
        duration: 2000,
        origin: "top",
        distance: "300px"
    });

    sr.reveal("#header-part .btn", {
        duration: 2000,
        origin: "center",
        delay: "2000"
    });

    sr.reveal("#neon-title", {
        duration: 2000,
        origin: "top",
        distance: "300px",
        viweFactor: 0.2
    });

    sr.reveal(".win-left", {
        duration: 2000,
        origin: "left",
        distance: "300px",
        viweFactor: 0.2
    });

    sr.reveal(".win-right", {
        duration: 2000,
        origin: "right",
        distance: "300px",
        viweFactor: 0.2
    });

    sr.reveal(".win-middle", {
        duration: 2000,
        origin: "bottom",
        distance: "300px",
        viweFactor: 0.2
    });

    sr.reveal(".display-2", {
        duration: 2000,
        origin: "top",
        viweFactor: 0.2
    });


}
