<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing Up In Coding WebSchool</title>
    <link rel="stylesheet" href="Sing_Up.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="css/remixicon.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>Coding WebSchool</p>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="coding.html" class="link active">Home</a></li>
                    <li><a href="Article_selection.html" class="link">Services</a></li>
                    <li><a href="About-us.html" class="link">About Us</a></li>
                </ul>
            </div>
            <div class="nav-button">
            <button class="btn" id="LoginBtn" onclick="login()">Sing In &nbsp;<i class="fa-solid fa-right-to-bracket"></i></button>
                <button class="btn white-btn" id="registerBtn" onclick="register()">Sign Up &nbsp;<i class="fa-solid fa-user-plus"></i></button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <div class="form-box">
            <!--======================================================== Login form =============================================================== -->
            <form action="login.php" method="post" class="login-container" id="login" onSubmit="verification()">
                <div class="top">
                    <span>You Don't Have An Account? <a href="#" onclick="register()">Sign Up</a></span>
                    <header>Login</header>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="Email" id="Email" placeholder="Username or Email" autofocus>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="Password" id="Password" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" name="login" id="login" value="Sign In">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check">
                        <label for="login-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div> 
            </form>
            <!--========================================================= registration form ==============================================================-->
            <form action="register.php" method="post" class="register-container" id="register" onSubmit="verification2()">
                <div class="top">
                    <span>If You Have An Account Already Click, <a href="#" onclick="login()">Login</a></span>
                    <header>Sign Up</header>
                </div>
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="input-field" name="FirstName" id="FirstName" placeholder="First name" autofocus>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" name="SecondName" id="SecondName" placeholder="Last name">
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="Email" id="Email" placeholder="Email">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="Password" id="Password" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" name="register" value="Register">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="register-check">
                        <label for="register-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Terms & conditions</a></label>
                    </div>
                </div>
            </form>
        </div>
    </div>   

<!-- ================================ JavaScripte  =============================================== -->
<script>

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
</script>
</body>
</html>