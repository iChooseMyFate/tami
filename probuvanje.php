<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $number = strip_tags(trim($_POST["number"]));
    $subject = strip_tags(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    if (empty($name) || empty($number)|| empty($subject)|| empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please fill out all required fields and enter a valid email address.";
        exit;
    }

    $recipient = "davidjanakievski69@gmail.com";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Number:\n$number\n";
    $email_content .= "Subject:\n$subject\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $headers)) {
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        http_response_code(500);
      echo "Oops! Something went wrong and we couldn't send your message.";
}
} else {
http_response_code(403);
echo "There was a problem with your submission, please try again.";
}
?>
       


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Tamara Taskova</title>
</head>
<body>
    
    <!--header-->
    <header class="header">
        <a href="#" class="logo"><span>Port</span>folio</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#films">Films</a>
                <a href="#projects">Projects</a>
                <a href="#artworks">Artworks</a>
                <a href="#contact">Contact</a>
                    <select id="lang" onchange="(this.options[this.selectedIndex].value?  window.open(this.options[this.selectedIndex].value,'_blank'):'')">
                        <option value="index.html" selected>English</option>
                        <option value="sl.html">Slovenščina</option>
                        <option value="mk.html">Македонски</option>
                    </select>
                </a>
        </nav>
    </header>

    <!--Home Section-->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, I'm</h3>
            <h1>Tamara Taskova</h1>
            <h3>And I'm an <span>Artist</span></h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Alias tempore voluptatum maxime cupiditate atque tenetur ex cum!</p>
            <div class="social-media">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>

        <div class="home-img">
            <img src="portret.jpg" alt="">
        </div>
    </section>

    <!-- about section -->

    <section class="about" id="about">
        <div class="about-img">
            <img src="plan.jpg" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Artist</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                 Adipisci error ab, laboriosam perspiciatis sit accusantium. 
                 Sapiente eius sint commodi dolorum saepe dolor eveniet alias dolores deserunt quam quia,
                  odio, quo repudiandae error nisi in beatae. Cum dolores animi eveniet veniam perferendis consectetur amet 
                  porro facilis repellendus?</p>
                <a href="readmore.html" class="btn">Read More</a>
        </div>
    </section>

    <!--- films section --->
    <section class="films" id="films">
        <h2 class="heading">My <span>Films</span></h2>

        <div class="video-container">
            <button id = "1" class="active">1.Film Name</button>
            <button id = "2">2.Film Name</button>
            <button id = "3">3.Film Name</button>
            <button id = "4">4.Film Name</button>
            <button id = "5">5.Film Name</button>
        </div>
        <div class="aboutf">
            <p id="filmabout">This is a movie that would have benefitted from being a whole lot stupider. The big-budget sci-fi flick—which reportedly cost $91 million to make and was featured in a Super Bowl ad—should have embraced its inherent B-movie roots.</p>
        </div>
        <div class="player">
            <center>
                <iframe id="video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/qKoe69-xy4M?start=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </center>
        </div>
    </section>

    <!-- projects section -->
    <section class="projects" id="projects">
        <h2 class="heading">Current <span>Projects</span></h2>
        <div class="projects-container">
            <div class="projects-box">
                <img src="project1.jpg" alt="">
                <div class="projects-layer">
                    <h4>Project Name</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, distinctio adipisci ad excepturi et debitis neque quod officiis assumenda magni sed perspiciatis.</p>
                    <a href="/projects/projetct1.html"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="project2.jpg" alt="">
                <div class="projects-layer">
                    <h4>Project Name</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, distinctio adipisci ad excepturi et debitis neque quod officiis assumenda magni sed perspiciatis.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="project3.jpg" alt="">
                <div class="projects-layer">
                    <h4>Project Name</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, distinctio adipisci ad excepturi et debitis neque quod officiis assumenda magni sed perspiciatis.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="project4.jpg" alt="">
                <div class="projects-layer">
                    <h4>Project Name</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, distinctio adipisci ad excepturi et debitis neque quod officiis assumenda magni sed perspiciatis.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="project5.jpg" alt="">
                <div class="projects-layer">
                    <h4>Project Name</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, distinctio adipisci ad excepturi et debitis neque quod officiis assumenda magni sed perspiciatis.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="project6.jpg" alt="">
                <div class="projects-layer">
                    <h4>Project Name</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, distinctio adipisci ad excepturi et debitis neque quod officiis assumenda magni sed perspiciatis.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- artworks section -->
    <section class="artworks" id="artworks">
        <h2 class="heading">My <span>Artworks</span></h2>
        <div class="artworks-container">
            <div class="artworks-box">
                <img src="img2.jpg" alt="">
                <div class="artworks-layer">
                    <a href="img2.jpg">
                        <h4>Artwork Name</h4>
                    </a>
                </div>
            </div>
            <div class="artworks-box">
                <img src="img2.jpg" alt="">
                <div class="artworks-layer">
                    <a href="img2.jpg">
                        <h4>Artwork Name</h4>
                    </a>
                </div>
            </div>
            <div class="artworks-box">
                <img src="img2.jpg" alt="">
                <div class="artworks-layer">
                    <a href="img2.jpg">
                        <h4>Artwork Name</h4>
                    </a>
                </div>
            </div>
            <div class="artworks-box">
                <img src="img2.jpg" alt="">
                <div class="artworks-layer">
                    <a href="img2.jpg">
                        <h4>Artwork Name</h4>
                    </a>
                </div>
            </div>
            <div class="artworks-box">
                <img src="img2.jpg" alt="">
                <div class="artworks-layer">
                    <a href="img2.jpg">
                        <h4>Artwork Name</h4>
                    </a>
                </div>
            </div>
            <div class="artworks-box">
                <img src="img2.jpg" alt="">
                <div class="artworks-layer">
                    <a href="img2.jpg">
                        <h4>Artwork Name</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form id = "contact-form" onsubmit="" method="POST">
            <div class="input-box">
                <input id="name" type="text" name="name" placeholder="Full Name" required>
                <input id="email" type="email" name="email" placeholder="Email Adress" required>
            </div>
            <div class="input-box">
                <input id="number" type="number" name = "number" placeholder="Phone Number">
                <input id="subject" type="text" name="subject" placeholder="Email Subject">
            </div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <input type="submit" value="Send Message" class="btn" id = "submit-btn">
        </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Designed by <span>D. Janakievski</span></p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>

    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    

    <script src="script.js"></script>
</body>
</html>
