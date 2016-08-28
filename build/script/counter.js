//Trois possibilité pour intéger l'évènement
//onkeyup sur DOM

//addEventListener
//var pressonkey;
//function count_chars(){
//     var text, display_nbchar, last_nbchar, counter;
//     text = document.getElementById("text_email").value;
//     counter = 500 -(text.length);
//
//    display_nbchar = document.getElementById("lastchars");
//    display_nbchar.textContent = "Il vous reste: " + counter;
//    if (counter <= 2s0){
//        alert('Warning');
//    }
// }
////pressonkey = document.getElementById("text_email");
//pressonkey.addEventListener('keyup',count_chars, false);

//onkeyup Js

document.getElementById("text_email").onkeyup = function count_chars(){
     var text, display_nbchar, counter;
     text = document.getElementById("text_email").value;
     counter = 500 -(text.length);
    display_nbchar = document.getElementById("lastchars");
    display_nbchar.textContent = "Il vous reste: " + counter;
    if (counter < 0){
        alert('Warning');
    }
 }
