var par =document.querySelector("p");
// var img = document.querySelector("img");

// img.onmouseover = function() {
//     img.src = "";
//     par.innerHTML = "Now The Image Is Changed Along With The Text";
// }

// img.onmouseleave = function() {
//     img.src = "";
//     par.innerHTML ="This Is An Image Hover Over The Image";
// }

function after(image) {
    image.src = "pexels-eberhard-grossgasteiger-572897.jpg";
    par.innerHTML ="This Is An Image Hover Over The Image";
    document.body.style.background = "linear-gradient(180deg, rgba(80,16,68,1) 10%, rgba(246,246,246,1) 100%)"
}

function before(image) {
    image.src = "pexels-stein-egil-liland-3408744.jpg";
    par.innerHTML = "Now The Image Is Changed Along With The Text";
    document.body.style.background = "linear-gradient(180deg, rgba(2,0,36,1) 4%, rgba(9,9,121,1) 53%, rgba(200,212,255,1) 100%)" 
}