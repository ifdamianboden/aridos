function myFunction() {
    var x = document.getElementById("myTopnav");
    console.log("Clase actual:", x.className);
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
    console.log("Nueva clase:", x.className);
}