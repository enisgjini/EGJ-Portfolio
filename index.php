<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Here are meta tag's -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enis Gjini,StarLabs,Intern,Kosovo">

    <!-- Simple line icons CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/a1927a49ea.js" crossorigin="anonymous"></script>

    <!-- Fav Icon of webpage -->
    <link rel="icon" type="image/png" href="assets/favicon.ico">

    <!-- Title of webpage -->
    <title>Home</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Including navbar(topbar) using statement called include -->
    <?php include("partials/navbar.php"); ?>
    <!-- The main HTML -->
    <main class="main">
        <!-- Section Home ~ Start -->
        <section id="home">
            <div class="container">
                <div class="row">
                    <div class="column-1 box">
                        <p class="personal-info">
                            Hi, my name is Enis Gjini
                            I'm the Full Stack Developer based in Kosovo.
                            Available for freelance &
                            collaborations.
                        </p>
                    </div>
                    <div class="column-1 box">
                        <img src="assets/profile.webp" alt="" width="100%" height="100%" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Home ~ End -->

        <!-- Section About ~ Start -->
        <section id="about">
            <h1 class="project-title">About</h1>
            <div class="row">
                <div class="column-1 box">
                    <p class="about-me">
                        Enis is a Full Stack Developer who is extremely passionate about web development. He loves
                        creating website , webpage and others with unique functionalities. Focused on usable and
                        intuitive UI/UX while committing to clean code, agile development, and appropriate design
                        patterns.
                    </p>
                    <br>
                    <p class="about-me"> Working with Enis starts with a productive flow of discussions that aim to
                        create an website or something else that targets user’s needs while exceeding client’s
                        expectations. Enis is a complete stack developer that manages frontline (client) development and
                        backend (server) development
                    </p>
                </div>
                <div class="column-1 box">
                    <button class="accordion">Development</button>
                    <div class="panel">
                        <p class="
                        accordion-text">Enis has developed design skills that are employed to offer a pleasurable user
                            experience
                            inside their app journey. This is done by creating clean user interfaces and stunning
                            animations based on the app's nature. Enis always makes sure that the delivered code is
                            clean, scalable, and tested. He has implemented various website's and web-app's for his
                            clients.</p>
                    </div>

                    <button class="accordion">Design</button>
                    <div class="panel">
                        <p class="
                        accordion-text">Enis also has a very sharp eye in designing web pages, web applications and
                            software.
                            He has achieved this thanks to courses and consistency, using the so-called tools: Figma,
                            Adobe XD, etc.</p>
                    </div>

                    <button class="accordion">CV</button>
                    <div class="panel">
                        <a href="#"
                            onclick="window.open('assets/Enis Gjini - CV.pdf', '_blank', 'fullscreen=yes'); return false;"><button
                                class="code-of-project">View CV</button> </a>

                    </div>
                </div>
            </div>
        </section>
        <!-- Section About ~ End -->

        <!-- Section Projects ~ Start -->
        <section id="projects">
            <h1 class="project-title">Projects</h1>
            <div class="row" id="project-trofta">
                <div class="column-1 box">
                    <h1 class="project-subtitle">
                        Trofta
                    </h1>
                    <br>
                    <p class="project-info">The "Trofta" website serves for the simplest display of things found in the
                        media various social media (facebook,instagram,etc.) </p>
                    <a href="https://trofta.netlify.app/index.html" target="_blank"><button class="demo-of-project">See
                            live</button></a>
                    <a href="https://github.com/enisgjini/trofta-website" target="_blank"> <button
                            class="code-of-project">Source code</button></a>
                </div>
                <div class="column-1 box">
                    <img src="assets/trofta.webp" alt="Trofta" width="100%" height="100%" loading="lazy">
                </div>
            </div>
            <div class="row" id="project-vesuvio">
                <div class="column-1 box">
                    <h1 class="project-subtitle">
                        Pizzeria Al Vesuvio
                    </h1>
                    <br>
                    <p class="project-info">Pizzeria "Al Vesuvio" is a pizzeria which operates in the state of Italy.
                        This website solves the problem of digitalization of the menu of this pizzeria. Making it more
                        readable as well as more communicative with the person looking at the menu. </p>
                    <a href="http://enisgj-11.epizy.com/?i=1" target="_blank"><button class="demo-of-project">See
                            live</button></a>
                    <a href="https://github.com/enisgjini/pizzeria-al-vesuvio" target="_blank"> <button
                            class="code-of-project">Source code</button></a>
                </div>
                <div class="column-1 box">
                    <img src="assets/al-vesuvio.webp" alt="Pizzeria Al Vesuvio" width="100%" height="100%"
                        loading="lazy">
                </div>
            </div>
            <div class="row" id="project-HIB">
                <div class="column-1 box">
                    <h1 class="project-subtitle">
                        HIB
                    </h1>
                    <br>
                    <p class="project-info">HIB Petrol' is a company that deals with the transportation and sale of
                        petroleum products throughout the territory of the Republic of Kosovo. But this project is part
                        of the restaurants managed by this company and below is the explanation.</p>
                    <a href="http://enisgj-10.epizy.com/?i=1" target="_blank"><button class="demo-of-project">See
                            live</button></a>
                    <a href="https://github.com/enisgjini/hibpetrol-web-application" target="_blank"> <button
                            class="code-of-project">Source code</button></a>
                </div>
                <div class="column-1 box">
                    <img src="assets/hib.webp" alt="HIB" width="100%" height="100%" loading="lazy">
                </div>
            </div>
            <div class="row" id="project-Sursee">
                <div class="column-1 box">
                    <h1 class="project-subtitle">
                        Taxizentrale Sursee
                    </h1>
                    <br>
                    <p class="project-info">Taxi Website Content is a vital component of effective Taxi Website Design.
                        While content includes graphics, photo galleries and images, what Search Engines such as Google
                        and Yahoo are especially fond of is a website that is rich in text.</p>
                    <a href="https://taxizentrale-sursee.netlify.app/" target="_blank"><button
                            class="demo-of-project">See live</button></a>
                    <a href="https://github.com/enisgjini/taxizentrale-sursee" target="_blank"> <button
                            class="code-of-project">Source code</button></a>
                </div>
                <div class="column-1 box">
                    <img src="assets/taxi.webp" alt="Sursee" width="100%" height="100%" loading="lazy">
                </div>
            </div>
            <div class="row" id="project-BMI">
                <div class="column-1 box">
                    <h1 class="project-subtitle">
                        BMI
                    </h1>
                    <br>
                    <p class="project-info">Body mass index (BMI) is a measure of body fat based on height and weight
                        that applies to adult men and women. The BMI application for a particular calculation of it look
                        the same weight and weight person. The formula is BMI = kg / m2 where kg is the weight of a
                        person in kilograms and m2 is his weight in meters squared. A BMI of 25.0 or more is overweight,
                        while the healthy range is from 18.5 to 24.9. </p>
                    <a href="https://github.com/enisgjini/bmi/releases/download/v1.0.0/app-release.apk"
                        target="_blank"><button class="demo-of-project">Download <img
                                src="https://img.icons8.com/fluency/25/000000/android-os.png" /></button></a>
                    <a href="https://github.com/enisgjini/bmi" target="_blank"> <button class="code-of-project">Source
                            code</button></a>
                </div>
                <div class="column-1 box">
                    <img src="assets/bmi.webp" alt="BMI" width="100%" height="100%" loading="lazy">
                </div>
            </div>
        </section>
        <!-- Section Projects ~ End -->

        <!-- Including mailer(PHPMailer) using statement called include   -->
        <?php include("partials/mailer.php") ?>

        <!-- Section Contact ~ Start -->
        <section id="contact">
            <h1 class="project-title">Contact</h1>
            <div class="contact-div">
                <p class="project-info">
                    Looking to start a new project or just want to say hi? Send me an email and I’ll do my best to
                    reply within 24 hrs!
                </p>
                <p class="project-info">
                    If contact forms aren’t your thing... send me an email at hello@arnau.design
                </p>
                <div>
                    <form id="contact-form" action="" method="post">
                        <p class="input-label">Subject</p>
                        <input type="text" name="subject" id="input-subject" value="">
                        <p class="input-label">Message </p><textarea name="message" id="textarea-message"
                            value=""> </textarea>
                        <br>
                        <button type="submit" class="slide" name="send">
                            <div id="send-message">Send</div>
                            <i class="icon-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- Section Contact ~ End -->

        <?php include("partials/footer.php") ?>
    </main>
    <!-- External Javascript -->
    <script src="app.js"></script>
</body>

</html>