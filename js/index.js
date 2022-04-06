
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

// var bad_words = new Array ("fuck","shit","stupid","fool");
// var bad_words = new Array;
// var bad_words_count = 0;
// function reset_count() {
//     bad_words_count = 0;
// }
// function validate_text() {
//     reset_count();
//     var compare_text = document.form.comment.value;
//     for(var i = 0; i < bad_words.length; i++)
//     {
//         for(var j = 0; j<(compare_text.length); j++){
//             if(bad_words[i] == compare_text.substring(j,(j+bad_words[i].length)).toLowerCase()){
//                 bad_words[bad_words_count] = compare_text.substring(j,(j+bad_words[i].length));
//                 bad_words_count++;
//             }
//         }
//     }
//     var alert_text = "";
//     for(var k = 1; k <= bad_words_count; k++){
//         alert_text += "\n" + "(" + k + ") " + bad_words[k-1]; 
//     }
//     if(bad_words_count > 0){
//         alert("The message will not be sent!!!\nThe following illegal words were found:\n____________________\n" + alert_text + "\n______________");
//         document.form.comment.select();
//     } else {
//         document.form.submit();
//     }
// }
// function select_area() {
//     document.form.comment.select();
// }
// window.onload = reset_count;
// var click = document.querySelector(".link1");
// click.addEventListener("onClick", validate_text());





