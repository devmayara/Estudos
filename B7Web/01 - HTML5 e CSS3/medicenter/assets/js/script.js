window.onload = function() {
    document.querySelector('.menu_mobile').addEventListener("click", function() {
        if(document.querySelector('.menu nav ul').style.display == "flex") {
            document.querySelector('.menu nav ul').style.display = "none";
        }else {
            document.querySelector('.menu nav ul').style.display = "flex";
        }
    });
};
