<?php
/**
 * Created by PhpStorm.
 * User: emile
 * Date: 10/15/2018
 * Time: 2:31 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Emile Vos - Portfolio</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../fontawesome-pro/css/all.css">
    <script src="../../fontawesome-pro/js/all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <nav>
        <div class="container" id="nav">
            <div class="nav-item show-mobile">EMILE VOS</div>
            <a href="/" class="nav-item">Home</a>
            <a href="/v0.1/portfoliofolio" class="nav-item">Portfolio</a>
            <a href="/contact" class="nav-item">Contact</a>
            <a href="/ssh" class="nav-item"><i class="far fa-terminal"></i></a>
            <a class="nav-item mobile" onclick="document.getElementById('nav').classList.toggle('show-mobile')"><i class="far fa-bars"></i></a>
        </div>
    </nav>
</header>
<div class="body container">
    <?php
    /*
     * Load this with javascript
     */
    ?>
    <h1>My work</h1>
    <div class="work-wrapper">
        <a class="work-item" href="https://mousepat.com/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/mousepat.png"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <div class="work-icons">
                        <i class="fab fa-github fa-3x"></i>
                        <i class="far fa-paper-plane fa-3x"></i>
                    </div>
                    MousPat is one of my most recent projects,
                </div>
            </div>
        </a>
        <a class="work-item" href="https://emilevos.com/" target="_blank">
            <div class="work-image-wrapper"><h2 class="work-image" style="font-family: Montserrat, Robot, Verdana, sans-serif;">EmileVos.com v0.1</h2></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://ikwilradio.nl/" target="_blank">
            <div class="work-image-wrapper"><h2 class="work-image" style="font-family: Montserrat, Robot, Verdana, sans-serif;">Ik Wil Radio</h2></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://nuberino.com/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/nuberiono.png" style="filter: invert(100%)"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://mithera.net/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/mithera.png"></div>
            <span class="work-badge">Multiple</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://businesses.foxiko.com/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/foxiko_businesses.png"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://shops.foxiko.com/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/foxiko_shops.png"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://services.foxiko.com/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/foxiko_web_services.png"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://pay.foxiko.com/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/foxiko_pay.png"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://foxiko.com/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/foxiko.png"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://mxdev.nl/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="https://mxdev.nl/img/logo_standalone.svg"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://github.com/Foxiko/FoxikoGridFramework" target="_blank">
            <div class="work-image-wrapper"><h2 class="work-image">Foxiko Grid Framework</h2></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span></span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://github.com/Foxiko/OnePageCache" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/onepagecache.png"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://justinfox.foxiko.com/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="https://justinfox.foxiko.com/assets/img/Justin%20Fox.png"></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>This is one of the challenges I do, create a program or website within a amount of time, this one was without one day. </span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://github.com/JustinFox404/Mediacollege-Snake" target="_blank">
            <div class="work-image-wrapper"><h2 class="work-image">Snake assignment</h2></div>
            <span class="work-badge">Web</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://www.spigotmc.org/resources/communitychest.45797/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/communitychest.png"></div>
            <span class="work-badge">Java</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://www.spigotmc.org/resources/holycarpet.45710/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/holycarpet.png"></div>
            <span class="work-badge">Java</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://www.spigotmc.org/resources/namecolors.45701/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/namecolors.png"></div>
            <span class="work-badge">Java</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
        <a class="work-item" href="https://www.spigotmc.org/resources/chatcolors.45687/" target="_blank">
            <div class="work-image-wrapper"><img class="work-image" src="../../img/chatcolors.png"></div>
            <span class="work-badge">Java</span>
            <div class="work-content-wrapper">
                <div class="work-content">
                    <span>content</span>
                </div>
            </div>
        </a>
    </div>
</div>
<footer>
    <div class="container">
        <div class="footer-item">
            <span class="footer-title">Who am I?</span>
            <div class="footer-content">
                <img src="../../img/mijzelf.png">
                Hey, I'm Emile Vos, an entrepreneur. Currently I own the company named <a href="https://foxiko.com/">Foxiko</a>. I also work at <a href="https://hmshost.net">HMSHost</a> on Schiphol Airport.
            </div>
        </div>
        <div class="footer-item">
            <span class="footer-title">Social links</span>
            <div class="footer-content">
                <div class="social-wrapper">
                    <a class="social" target="_blank" href="https://www.facebook.com/profile.php?id=100015182525869"><i class="fab fa-facebook-f fa-3x"></i></a>
                    <a class="social" target="_blank" href="https://twitter.com/_emilev_"><i class="fab fa-twitter fa-3x"></i></a>
                    <a class="social" target="_blank" href="https://www.linkedin.com/in/emile-vos-844364172/"><i class="fab fa-linkedin-in fa-3x"></i></a>
                    <a class="social" target="_blank" href=""><i class="fab fa-snapchat-ghost fa-3x"></i></a>
                    <a class="social" target="_blank" href="https://github.com/JustinFox404"><i class="fab fa-github fa-3x"></i></a>
                    <a class="social" target="_blank" href="https://instagram.com/_emilev_"><i class="fab fa-instagram fa-3x"></i></a>
                    <a class="social" target="_blank" href="https://foxiko.com/"><i class="fal fa-building fa-3x"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-item">

        </div>
        <div class="footer-item">

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <span class="bold">Copyright</span> &copy; <a href="https://foxiko.com">FOXIKO B.V. i.o.</a>, ALL RIGHTS RESERVED
        </div>
    </div>
</footer>
<script>
    // document.getElementById("nav").classList.toggle("show-mobile");
</script>
</body>
</html>
