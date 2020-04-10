//../dashboard/index.php
var username = document.getElementById("inputusername");
var userValue = username.value;
var res = userValue;

document.getElementById("submitBtn").addEventListener('click', function (e) {
    var password = document.getElementById("inputpassword");
    var passValue = password.value;
    username = document.getElementById("inputusername");
    userValue = username.value;
    if ((userValue == 'uba') && (passValue == 'uba')) {
        document.getElementById("lg-form").action = "../dashboard/index.php";
    } else if ((userValue == res) && (passValue != "")) { 
        document.getElementById("lg-form").action = "../dashboard/index.php";
    } else {
        document.getElementById("alert").classList.remove("alert1");
        document.getElementById("lg-form").classList.remove("bd-form");
        document.getElementById("alert").classList.add("show");
        document.getElementById("alert").classList.add("alert");
        e.preventDefault();
    }
});