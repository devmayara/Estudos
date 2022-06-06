
// function menuToggle() {
//     let menuArea = document.getElementById("menu-area");

//     if(menuArea.classList.contains("menu-opened") == true) {
//         menuArea.classList.remove("menu-opened");
//     } else {
//         menuArea.classList.add("menu-opened");
//     }
// }


function menuToggle() {
    let menuArea = document.getElementById("menu-area");

    if(menuArea.style.width == "200px") {
        menuArea.style.width = "0";
    } else {
        menuArea.style.width = "200px";
    }
}
