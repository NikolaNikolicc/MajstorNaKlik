$(document).ready(function () {
    $("#logo").on({
        mouseenter: function () {
            $(this).css("border-color", "#444444");
        },

        mouseleave: function () {
            $(this).css("border-color", "black");
        }
    });
});

function registrujSe() {
    window.location.href = "logovanje.html";
}

function prijavi() {
    if (confirm("Da li zelite da prijavite da majstora nasem adminu?")) {
        window.location.href = "index.html";

    } else {
        return;
    }
}