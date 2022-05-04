
function scb(e) {
    if (window.pageYOffset > 1000) {
        document.getElementById("scrb").style.display = "block";
        document.getElementById("scrb").style.transitionProperty = "all";
        document.getElementById("scrb").style.transitionDuration = "1s";
    }
    else {
        if (window.pageYOffset < 1000) {
            document.getElementById("scrb").style.display = "none";
        }
    }
}






