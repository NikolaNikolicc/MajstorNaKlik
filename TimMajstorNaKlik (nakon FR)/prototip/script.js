$(document).ready(function() {
    $("#logo").on({
        mouseenter : function() {
            $(this).css("border-color", "yellow");
        },

        mouseleave : function() {
            $(this).css("border-color", "black");
        }
    });

    $("button").on({
        mouseenter : function() {
            $(this).css("border", "4px solid yellow");
        },

        mouseleave : function() {
            $(this).css("border", "none");
        }
    });
});
