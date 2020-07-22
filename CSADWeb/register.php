<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forum</title>
        <link rel="stylesheet" href="./style.css" />
    </head>
    <body>
        <header class="header">
            <nav class="nav_bar">
                <div class="logo">
                    <a href="index.html">
                        <img
                        style="width: 6vh; height: 6vh;"
                        src="img/logo.png"
                        alt="logo"/>
                    </a>
                </div>
                <ul class="nav-links">
                <li><a href="" class="nav-link1 nav-link2">Classes</a></li>
                <li><a href="" class="nav-link1 nav-link2">FAQs</a></li>
                <li><a href="" class="nav-link1 nav-link2">Contact Us</a></li>
                <li><a href="login.php" class="nav-link1 nav-link2">Login</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <div class="titlecover">
                    <h1 class="title1">Register</h1>
                    <p>Join the wondrous community<br>behind Seniors Initialize</p>
                </div>
                <div class="form">
                    <h1 class="title2">Register</h1>
                    <form action="register.php" method="post" >
                        <div>
                            <input class="userinfo" type="email" placeholder="Email" name="email" required> <br>
                            <input class="userinfo" type="text" placeholder="Username" name="username" required> <br>
                            <input class="userinfo" type="password" placeholder="Password" name="password" required> <br>
                            <input class="userinfo" type="password" placeholder="Re-enter Password" name="confirmpassword" required> <br>
                            <input class="signup-signin" class="signup" type="submit" name="signup" value="Sing Up">
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <footer>
            <section class="footer-section">
                <div class="column">
                    <h2 class="column-title">Services</h2>
                    <ul>
                        <li><a href="#">Classes</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h2 class="column-title">Seniors Initialize</h2>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h2 class="column-title">Community</h2>
                    <ul>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h2 class="column-title">Connections</h2>
                    <ul>
                        <li><a href="#"><img src="img/instagram-logo.svg" alt="instagram" class="instagram-logo"> Instagram</a></li>
                    </ul>
                </div>
            </section>
        </footer>
    </body>
</html>
