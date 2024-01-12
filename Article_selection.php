<?php
session_start();

if(isset($_SESSION['FirstName'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Article-selection.css">
    <link rel="stylesheet" href="css/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <title>Article of anguages</title>
</head>
<body>
    <nav>
        <div class="nav-logo">
            <a href="coding.html">
                <img src="logo-site-web.png" alt="this is logo">
            </a>
        </div>
        <a href="coding.html" >
            <button class="home-boton">
                <i id="icon-home" class="fa-solid fa-house"></i>Go Home</button>    
        </a>
    </nav>
    <header class="container">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <span class="blur"></span>
        <h1>Welcom  <span><?php echo $_SESSION['FirstName']; ?></span>!. 
        Here, you can choose which language you want to learn.</h1>
        </div>
        <div class="image">
            <img src="programmer-computer-fronts-end-my-page2.png" alt="this is a logo">
        </div>
    </header>
    <section class="categories">
        <div class="description-categories">
            <h1>Categories For <span>Front-End</span></h1>
            <p>
                Excellent! Exploring HTML, CSS, and JavaScript provides a solid foundation for web development. 
                These languages are crucial in crafting websites that are not only dynamic but also visually engaging.
                <a href="url" class="btn">Learn More<i id="more-icon" class="fa-regular fa-circle-right"></i></a>
            </p>
        </div>

        <div class="front-end">
            <div class="lang-catgo">
                <article class="category">
                    <span class="icon"><i class="fa-brands fa-html5"></i></span>
                    <h5>HTML</h5>
                    <p>
                        HTML, or HyperText Markup Language, is the standard language for creating web pages.
                        Using tags and attributes, it structures content by enabling the hierarchical organization
                        of elements such as headings,paragraphs, and images.
                    </p>
                    <a class="span-link" href="Html_cours_detaille.html">Let's Go <i class="fa-solid fa-arrow-right"></i></a>
                </article>

                <article class="category">
                    <span class="icon"><i class="fa-brands fa-css3-alt"></i></span>
                    <h5>CSS</h5>
                    <p>
                        CSS, or Cascading Style Sheets is a styling language paired with HTML to delineate the 
                        visual aesthetics of web pages. It empowers developers to manage the arrangement, 
                        design, and outlook of elements, guaranteeing a unified...
                    </p>
                    <a class="span-link" href="Css-article.html">Let's Go <i class="fa-solid fa-arrow-right"></i></a>
                </article>

                <article class="category">
                    <span class="icon"><i class="fa-brands fa-js"></i></span>
                    <h5>JavaScript</h5>
                    <p>
                        JavaScript is a dynamic scripting language widely used to enhance the interactivity and 
                        responsiveness of web pages. It enables manipulation of the DOM, facilitating real-time 
                        updates to content and allowing for the creation of interactive features
                    </p>
                    <a class="span-link" href="Javascript-article.html">Let's Go <i class="fa-solid fa-arrow-right"></i></a>
                </article>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="description-categories">
            <span class="blur"></span>
            <span class="blur"></span>
            <h1>Categories For <span>Back-End</span></h1>
            <p>
                Fantastic! Immersing yourself in Laravel, PHP, and Node.js lays down a solid foundation for web development. 
                These languages are pivotal in sculpting websites that boast both dynamism and visual allure.
                <a href="url" class="btn">Learn More<i id="more-icon" class="fa-regular fa-circle-right"></i></a>
            </p>
        </div>
        <div class="back-end">
            <div class="lang-catgo">
                <article class="category">
                    <span class="icon"><i class="fa-brands fa-php"></i></span>
                    <h5>PHP</h5>
                    <p>
                        PHP, which stands for Hypertext Preprocessor, is a server-side scripting language commonly 
                        used in web development. It is embedded within HTML code and executed on the server, 
                        generating dynamic content that is then sent to the user's web browser.
                    </p>
                    <a class="span-link" href="Php-article.html">Let's Go <i class="fa-solid fa-arrow-right"></i></a>
                </article>

                <article class="category">
                    <span class="icon"><i class="fa-brands fa-laravel"></i></span>
                    <h5>Laravel</h5>
                    <p>
                        Laravel is an advanced PHP web application framework, celebrated for its elegance and 
                        developer-friendly features. It streamlines web development tasks, offering expressive syntax 
                        and adhering to the Model-View-Controller (MVC) architecture.
                    </p>
                    <a class="span-link" href="Laravel-article.html">Let's Go <i class="fa-solid fa-arrow-right"></i></a>
                </article>

                <article class="category">
                    <span class="icon"><i class="fa-brands fa-node-js"></i></span>
                    <h5>Node.js</h5>
                    <p>
                        Node.js is a server-side JavaScript runtime environment designed for executing JavaScript code 
                        outside of the web browser. Leveraging the V8 JavaScript engine, it enables the development of 
                        scalable and high-performance network applications.
                    </p>
                    <a class="span-link" href="Node.js-Article.html">Let's Go <i class="fa-solid fa-arrow-right"></i></a>
                </article>
            </div>
        </div>
    </section>
    
    <footer class="container">
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="column">
            <div class="logo">
                <img src="logo-site-web.png" alt="this is a our logo">
            </div>
            <p>
                Visit us on social media if you need help.
            </p>
            <div class="socials">
                <a href="https://www.facebook.com/ProgZHC/" target="_blank" id="facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/zouhair_choufa/" target="_blank" id="instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/zouhair-choufa-86ab5626a/" target="_blank" id="linkdin"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <div class="column">
            <h4>Company</h4>
            <a href="#">Business</a>
            <a href="#">Partnership</a>
            <a href="#">Network</a>
        </div>
        <div class="column">
            <h4>About Us</h4>
            <a href="About-us.html">Blogs</a>
            <a href="https://www.facebook.com/ProgZHC/">Channels</a>
            <a href="#">Sponsors</a>
        </div>
        <div class="column">
            <h4>Contact</h4>
            <a href="Contacte_us.html">Contact Us</a>
            <a href="#">Privicy Policy</a>
            <a href="#">Terms & Conditions</a>
        </div>
    </footer>
    <div class="copyright">
        Copyright &copy; 2023 CODDING WEBSCHOOL. All Rights Reserved.
    </div>

    <script href="Article-selection.js"></script>
</body>
</html>
<?php
}
else{
    header("Location: Sing_Up.php");
    exit();
}
?>