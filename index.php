<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Here are meta tag's -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="script-src 'none'">

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
                    <img src="assets/profile.jpg" alt="" width="100%" loading="lazy">
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
                    <img src="assets/trofta.png" alt="Trofta" width="100%" height="100%" loading="lazy">
                   
                </div>
            </div>
            
            <div class="container" id="project-vesuvio">
                <div class="col" >
                    <h1 class="project-title" >
                    Pizzeria Al Vesuvio
                    </h1>
                    <br>
                    <p class="project-info">Pizzeria "Al Vesuvio" is a pizzeria which operates in the state of Italy. This website solves the problem of digitalization of the menu of this pizzeria. Making it more readable as well as more communicative with the person looking at the menu.  </p>
                    <a href=""><button class="demo-of-project">See live</button></a>
                    <button class="code-of-project">Source code</button>
                    
                </div>
                <div class="col">
                    <img src="assets/al-vesuvio.png" alt="Pizzeria Al Vesuvio" width="100%" height="100%" loading="lazy">
                   
                </div>
            </div>

            <div class="container" id="project-HIB">
                <div class="col" >
                    <h1 class="project-title" >
                    HIB
                    </h1>
                    <br>
                    <p class="project-info">HIB Petrol' is a company that deals with the transportation and sale of petroleum products throughout the territory of the Republic of Kosovo. But this project is part of the restaurants managed by this company and below is the explanation.</p>
                    <button class="demo-of-project">See live</button>
                    <button class="code-of-project">Source code</button>
                    
                </div>
                <div class="col">
                    <img src="assets/hib.png" alt="HIB" width="100%" height="100%" loading="lazy">
                   
                </div>
            </div>
            <div class="container" id="project-Sursee">
                <div class="col" >
                    <h1 class="project-title" >
                    Taxizentrale Sursee
                    </h1>
                    <br>
                    <p class="project-info">HIB Petrol' is a company that deals with the transportation and sale of petroleum products throughout the territory of the Republic of Kosovo. But this project is part of the restaurants managed by this company and below is the explanation.</p>
                    <button class="demo-of-project">See live</button>
                    <button class="code-of-project">Source code</button>
                    
                </div>
                <div class="col">
                    <img src="assets/taxi.png" alt="Sursee" width="100%" height="100%" loading="lazy">
                   
                </div>
            </div>

            <div class="container" id="project-BMI">
                <div class="col" >
                    <h1 class="project-title" >
                    BMI
                    </h1>
                    <br>
                    <p class="project-info">Body mass index (BMI) is a measure of body fat based on height and weight that applies to adult men and women. The BMI application for a particular calculation of it look the same weight and weight person. The formula is BMI = kg / m2 where kg is the weight of a person in kilograms and m2 is his weight in meters squared. A BMI of 25.0 or more is overweight, while the healthy range is from 18.5 to 24.9. </p>
                    <button class="demo-of-project">Download</button>
                    <button class="code-of-project">Source code</button>
                    
                </div>
                <div class="col">
                    <img src="assets/bmi.png" alt="BMI" width="100%" height="100%" loading="lazy">
                   
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