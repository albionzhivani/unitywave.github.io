document.addEventListener("DOMContentLoaded", function() {
    var profileIcon = document.getElementById("profileIcon");
    var popup = document.getElementById("popup");
    var closePopup = document.getElementById("closePopup");
    var showSignUp = document.getElementById("showSignUp");
    var showLogin = document.getElementById("showLogin");
    var loginContainer = document.getElementById("loginContainer");
    var signUpContainer = document.getElementById("signUpContainer");

    profileIcon.onclick = function() {
        popup.style.display = "block";
    }

    closePopup.onclick = function() {
        popup.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }

    showSignUp.onclick = function() {
        loginContainer.style.display = "none";
        signUpContainer.style.display = "block";
    }

    showLogin.onclick = function() {
        signUpContainer.style.display = "none";
        loginContainer.style.display = "block";
    }
});
