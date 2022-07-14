<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Here are meta tag's -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fav Icon of webpage -->
    <link rel="icon" type="image/png" href="assets/favicon.ico">

    <!-- Title of webpage -->
    <title>Home</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">



    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Including navbar(topbar) using statement called include -->
    <?php include("partials/navbar.php"); ?>

    <br>

    <main class="main">
        <section id="home">
            <div class="container">
                <div class="col">
                    <p class="personal-info">I’m Arnau Ros, a graphic designer & content creator based in Barcelona.
                        Available for freelance &
                        collaborations. </p>
                </div>
                <div class="col">
                    <img src="assets/profile.jpg" alt="" width="100%">
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <div class="col">

                    <p class="about-me">I'm a product designer working on various projects on a wide range of clients.
                        My
                        skillset lies on creating branding packages & websites to deliver the full online experience for
                        new
                        and also veteran businesses.</p>
                    <p class="about-me"> You can often find me creating videos about design over on YouTube, or sharing
                        my
                        thoughts on my podcast, Dialogue With Designers . I'm passionate about giving back and teaching
                        what
                        I know to the next generation of designers.‍</p>
                </div>
                <div class="col">
                    <button class="accordion">Branding/Logo</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Packaging</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Websites</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                </div>
            </div>
        </section>

        <section id="projects">
            <div class="container" id="project-trofta">
                <div class="col">
                    <h1 class="project-title">
                    Trofta
                    </h1>
                    <br>
                    <p class="project-info">The "Trofta" website serves for the simplest display of things found in the media various social media (facebook,instagram,etc.) </p>
                    <button class="demo-of-project">See live</button>
                    <button class="code-of-project">Source code</button>
                    
                </div>
                <div class="col">
                    <img src="assets/trofta.png" alt="Trofta" width="100%">
                   
                </div>
            </div>
            
            <div class="container" id="project-vesuvio">
                <div class="col" >
                    <h1 class="project-title" >
                    Pizzeria Al Vesuvio
                    </h1>
                    <br>
                    <p class="project-info">Pizzeria "Al Vesuvio" is a pizzeria which operates in the state of Italy. This website solves the problem of digitalization of the menu of this pizzeria. Making it more readable as well as more communicative with the person looking at the menu.  </p>
                    <button class="demo-of-project">See live</button>
                    <button class="code-of-project">Source code</button>
                    
                </div>
                <div class="col">
                    <img src="assets/al-vesuvio.png" alt="Trofta" width="100%">
                   
                </div>
            </div>
           
        </section>

        <section id="contact">

        </section>
    </main>




    <!-- External Javascript -->
    <script src="app.js"></script>
</body>

</html>