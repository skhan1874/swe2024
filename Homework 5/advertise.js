"use strict";
window.onload = pageLoad;

function pageLoad() {
    document.getElementById("submit").onclick = advertiseSubmit;
}

function advertiseSubmit() {
    var username = document.getElementById("Username").value;
    var street = document.getElementById("Street").value;
    var city = document.getElementById("City").value;
    var state = document.getElementById("State").value;
    var email = document.getElementById("Email").value;
    var phone = document.getElementById("Phone").value;

    if (username === "") {
        alert("The username field is empty. Please go back and fill it in.");
        return false;
    }

    if (street === "") {
        alert("The street field is empty. Please go back and fill it in.");
        return false;
    }

    if (city === "") {
        alert("The city field is empty. Please go back and fill it in.");
        return false;
    }

    if (state === "") {
        alert("The state field is empty. Please go back and fill it in.");
        return false;
    }

    if (email === "") {
        alert("The email field is empty. Please go back and fill it in.");
        return false;
    }

    if (phone === "") {
        alert("The phone field is empty. Please go back and fill it in.");
        return false;
    }

    // Validation checks for state, email, phone, and city
    var twoletterstates = /(MD|NJ|NY|DC|PA)/;
    if (!twoletterstates.test(state)) {
        alert("State field is not in the correct form. Please enter in MD, NJ, NY, DC, or PA");
        return false;
    }

    var emailchecking = /^[A-Za-z0-9_]+@[a-zA-Z]+\.com$/;
    if (!emailchecking.test(email)) {
        alert("Email field is not in the correct form. Please go back");
        return false;
    }

    var phonechecking = /\d{3}-\d{3}-\d{4}/;
    if (!phonechecking.test(phone)) {
        alert("Phone field is not in the correct form. Please go back");
        return false;
    }

    var citychecking = /[A-Za-z]/;
    if (!citychecking.test(city)) {
        alert("City field is not in the correct form. Please go back");
        return false;
    }

    // If the code reaches this point, all fields are filled and validated
    return true;
}



