// alert(screen.width);

window.addEventListener('load', function () {
    var loader = document.getElementById('loader');
    loader.style.display = 'none';
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
});