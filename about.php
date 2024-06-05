<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">My portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacts</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-ligth " href="./index.html" role="button" style="color: white;">Back to Home page</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <section id="about" class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="jumbotron-heading">Hi, I am Vika Zhylkova.</h1>
                    <p class="lead text-muted"> I'm UX/UI designer from Khmelnytskyi <br> I recently became interested in web development.</p>
                    
                    <p class="lead text-muted">I'm studying at Khmelnytskyi National University, <br> majoring in "Information Systems and Technologies".</p>
                    
                    <p class="lead text-muted">I dream of further development, working <br> with interesting projects</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="img/my-photo.jpg" class="about-img rounded" alt="Ваше Фото">
                </div>
            </div>
        </div>
    </section>
<hr>
<section class="skills" id="skills">
    <div class="skills__container">
        <div class="skills__text">
            <h2>Skills</h2>
            <p class="text">I work in such programs as</p>
        </div>

        <div class="skills__img">
            <div class="row">
                <div class="col-xl-3"><img src="img/skills__one.png" alt="Photoshop"></div>
                <div class="col-xl-3"><img src="img/skills__two.png" alt="Illustrator"></div>
                <div class="col-xl-3"><img src="img/skills__three.png" alt="Adobe After Effects"></div>
                <div class="col-xl-3"><img src="img/skills__four.png" alt="Figma"></div>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="portfolio">
    <div class="container text-center">
        <h2 class="portfolio-name">Portfolio</h2>
        <div class="portfolio-work">
            <div class="col">
                <img src="img/image1.png" class="portfolio-img" alt="">
                <div class="portfolio-text">
                    <h2>Progect 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam possimus iure vero corporis doloribus rerum mollitia earum? Error commodi sint officia quia recusandae, fugiat sapiente pariatur fugit officiis dolorem veniam?</p>

                </div>
            </div>
            <div class="col">
                <img src="img/image2.png" class="portfolio-img" alt="">
                <div class="portfolio-text">
                    <h2>Progect 2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam possimus iure vero corporis doloribus rerum
                        mollitia earum? Error commodi sint officia quia recusandae, fugiat sapiente pariatur fugit officiis dolorem
                        veniam?</p>
                
                </div>
            </div>
            <div class="col">
                <img src="img/image3.png" class="portfolio-img" alt="">
                <div class="portfolio-text">
                    <h2>Progect 3</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam possimus iure vero corporis doloribus rerum
                        mollitia earum? Error commodi sint officia quia recusandae, fugiat sapiente pariatur fugit officiis dolorem
                        veniam?</p>
                
                </div>
            </div>
        </div>
    </div>

</section>

<section class="contacts" id="contact">
    <div class="contacts__container">
        <div class="title__contacts">
            <h1>Contacts</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>Phone</h2>
                    <p>+380 00 000 000</p>
                </div>
                <div class="col-sm-4">
                    <h2>Email</h2>
                    <a href="mailto:vikazhylkova@gmail.com" target="_blank">vikazhylkova@gmail.com</a>
                </div>
                <div class="col-sm-4">
                    <h2>Address</h2>
                    <p>Khmelnytskyi, Ukraine</p>
                </div>
            </div>
        </div>
        <div class="contacts__social" id="Contacts">
            <div class="section__social">
                <div class="row">
                    <div class="col-xl-3"><a href="#"><img src="img/icon__social-one.png" alt="LinkedIn" class="social__icon"
                            width="40.2px" height="40.1px"></a></div>
                    <div class="col-xl-3"><a href="https://www.instagram.com/vika_zhylkova?igsh=MWFzOGFtOGRjbDN4ZA==" target="_blank"><img src="img/icon__social-two.png" alt="Instagram" class="social__icon"
                            width="40.2px" height="40.1px"></a></div>
                    <div class="col-xl-3"><a href="#"><img src="img/icon__social-three.png" alt="Behance" class="social__icon"
                            width="40.2px" height="40.1px"></a></div>
                    <div class="col-xl-3"><a href="#"><img src="img/icon__social-four.png" alt="Dribble" class="social__icon"
                            width="40.2px" height="40.1px"></a></div>
                </div>
            </div>

        </div>
        <div class="title__socaial">
            <p class="paragraph__socials">Like me on<br>LinkedIn, Instagram, Behance, Dribble</p>
        </div>
    </div>
</section>
          
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+5tD0f1zzU1Q6WxEoyVLCkfoYY0sg"
    crossorigin="anonymous"></script>

</body>
</html>