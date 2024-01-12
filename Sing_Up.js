
//scroll to the second page 

function togglePages() {
    var page1 = document.getElementById('page1');
    var page2 = document.getElementById('page2');

    page1.classList.toggle('visible');
    page2.classList.toggle('visible');
}
function myMenuFunction() {
    var i = document.getElementById("navMenu");
    if (i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
}

var a = document.getElementById("LoginBtn");
var b = document.getElementById("registerBtn");
var x = document.getElementById("login");
var y = document.getElementById("register");
function login() {
    x.style.left = "2px";
    y.style.right = "-500px";
    a.className += " white-btn";
    b.className = "btn";
    x.style.opacity = 1;
    y.style.opacity = 0;
}
function register() {
    x.style.left = "-510px";
    y.style.right = "2px";
    a.className = "btn";
    b.className += " white-btn";
    x.style.opacity = 0;
    y.style.opacity = 1;
}


document.addEventListener("DOMContentLoaded", function () {
    // Check if the user is logged in
    const isLoggedIn = localStorage.getItem("isLoggedIn");

    // Get the Sign Up and Logout buttons
    const signupButton = document.getElementById("signupButton");

    // Determine whether to display "Sign Up" or "Logout"
    if (isLoggedIn) {
        // User is logged in
        signupButton.innerHTML = '<button class="boton_princp" id="logoutButton">Logout</button>';
        const logoutButton = document.getElementById("logoutButton");
        logoutButton.addEventListener("click", handleLogout);
    } else {
        // User is not logged in
        signupButton.innerHTML = '<button class="boton_princp" id="signupButton">Sign Up</button>';
    }
});

function handleLogout() {
    // Implement your Logout logic here
    // For simplicity, we'll just remove the "isLoggedIn" flag
    localStorage.removeItem("isLoggedIn");
    // Reload the page to reflect the changes
    location.reload();
}