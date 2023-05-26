// alert(screen.width);

// On bloque le scroll
document.getElementsByTagName("html")[0].style.setProperty("overflow", "hidden");

window.addEventListener('load', function () {
    var loader = document.getElementById('loader');
    loader.style.display = 'none';

    // On active le scroll
    document.getElementsByTagName("html")[0].style.setProperty("overflow", "visible");
});

document.addEventListener("DOMContentLoaded", function () {
    var burgerIcon = document.getElementById("header--burger-checkbox");
    var menu = document.getElementById("header--nav");
    var main = document.getElementsByTagName("main")[0];
    var menuItem = document.getElementsByClassName("header--nav-item");

    burgerIcon.onclick = function () {
        if (burgerIcon.checked) {
            menu.style.setProperty("display", "block");
            // On bloque le scroll
            document.getElementsByTagName("html")[0].style.setProperty("overflow", "hidden");

        } else {
            menu.style.setProperty("display", "none");
            // On active le scroll
            document.getElementsByTagName("html")[0].style.setProperty("overflow", "visible");
        }
    }

    // Détéction du click sur un item du menu smartphone
    for (let i = 0; i < menuItem.length; i++) {
        const element = menuItem[i];
        if (window.innerWidth < 1000) {
            element.onclick = function () {
                menu.style.setProperty("display", "none");
                main.style.setProperty("filter", "none");
                burgerIcon.checked = false;
                // On active le scroll
                document.getElementsByTagName("html")[0].style.setProperty("overflow", "visible");
            }
        }
    }


    // Affichage du numéro dans la section tarifs
    var buttons = document.getElementsByClassName("prices--card--button");
    var testPhones = document.getElementsByClassName("test-phone");
    for (let i = 0; i < buttons.length; i++) {
        const button = buttons[i];
        button.onclick = function () {
            testPhones[i].classList.toggle("open");
        }
    }

    // Gestion du carousel
    var leftArrow = document.getElementById("car--left-arrow");
    var rightArrow = document.getElementById("car--right-arrow");
    var indexTab = document.getElementsByClassName("index");
    var rowImg = document.getElementById("imgRow");
    var nbImg = 5;
    var widthImg = document.getElementById("gift-cards--car").offsetWidth;
    var positionCar = 0;
    var indexCar = 0;

    leftArrow.onclick = function () {
        indexTab[indexCar].classList.toggle("active");
        if (indexCar == 0) {
            indexCar = nbImg - 1;
        } else {
            indexCar--;
        }
        positionCar = indexCar * -widthImg;
        rowImg.style.transform = "translateX(" + positionCar + "px)";
        indexTab[indexCar].classList.toggle("active");
    }

    rightArrow.onclick = function () {
        indexTab[indexCar].classList.toggle("active");
        if (indexCar == nbImg - 1) {
            indexCar = 0;
        } else {
            indexCar++;
        }
        positionCar = indexCar * -widthImg;
        rowImg.style.transform = "translateX(" + positionCar + "px)";
        indexTab[indexCar].classList.toggle("active");
    }

    for (let i = 0; i < indexTab.length; i++) {
        const index = indexTab[i];
        index.onclick = function () {
            indexTab[indexCar].classList.toggle("active");
            indexCar = i;
            positionCar = indexCar * -widthImg;
            rowImg.style.transform = "translateX(" + positionCar + "px)";
            indexTab[indexCar].classList.toggle("active");
        }
    }
});