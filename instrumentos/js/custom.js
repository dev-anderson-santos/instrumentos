function openTab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

let divBarra = document.getElementById("change");

function changeRed(cor) {
    divBarra.style.backgroundColor = "rgb("+ cor +", 0, 0)";  
}

function changeGreen(cor) {
    divBarra.style.backgroundColor = "rgb(0, "+ cor +", 0)";
}

function changeBlue(cor) {
    divBarra.style.backgroundColor = "rgb(0, 0, "+ cor +")";  
}


