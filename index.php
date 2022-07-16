<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Here are meta tag's -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="Content-Security-Policy" content="script-src-elem 'none'"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enis Gjini,StarLabs,Intern,Kosovo">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />

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
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <main class="main">
        <section id="home">
            <div class="container">
                <div class="col">
                    <p class="personal-info">I’m Arnau Ros, a graphic designer & content creator based in Barcelona.
                        Available for freelance &
                        collaborations. </p>
                </div>
                <div class="col">
                    <img src="assets/profile.webp" alt="" width="100%" height="100%" loading="lazy">
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
            <h1 class="project-title">Projects</h1>
            <div class="container" id="project-trofta">
                <div class="col">
                    <h1 class="project-title">
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
                <div class="col">
                    <img src="assets/trofta.webp" alt="Trofta" width="100%" height="100%" loading="lazy">

                </div>
            </div>

            <div class="container" id="project-vesuvio">
                <div class="col">
                    <h1 class="project-title">
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
                <div class="col">
                    <img src="assets/al-vesuvio.webp" alt="Pizzeria Al Vesuvio" width="100%" height="100%"
                        loading="lazy">

                </div>
            </div>

            <div class="container" id="project-HIB">
                <div class="col">
                    <h1 class="project-title">
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
                <div class="col">
                    <img src="assets/hib.webp" alt="HIB" width="100%" height="100%" loading="lazy">
                </div>
            </div>
            <div class="container" id="project-Sursee">
                <div class="col">
                    <h1 class="project-title">
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
                <div class="col">
                    <img src="assets/taxi.webp" alt="Sursee" width="100%" height="100%" loading="lazy">
                </div>
            </div>

            <div class="container" id="project-BMI">
                <div class="col">
                    <h1 class="project-title">
                        BMI
                    </h1>
                    <br>
                    <p class="project-info">Body mass index (BMI) is a measure of body fat based on height and weight
                        that applies to adult men and women. The BMI application for a particular calculation of it look
                        the same weight and weight person. The formula is BMI = kg / m2 where kg is the weight of a
                        person in kilograms and m2 is his weight in meters squared. A BMI of 25.0 or more is overweight,
                        while the healthy range is from 18.5 to 24.9. </p>
                    <a href="https://github.com/enisgjini/bmi/releases/download/v1.0.0/app-release.apk"
                        target="_blank"><button class="demo-of-project">Download <img alt="svgImg"
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iMjYiIGhlaWdodD0iMjYiCnZpZXdCb3g9IjAgMCA0OCA0OCIKc3R5bGU9IiBmaWxsOiMwMDAwMDA7Ij48cGF0aCBmaWxsPSIjMzBkYzgwIiBkPSJNMjQsMTQuMDg4QzExLjQyNywxNC4wODgsMS4xMDgsMjMuNzE2LDAsMzZoNDhDNDYuODkyLDIzLjcxNiwzNi41NzMsMTQuMDg4LDI0LDE0LjA4OHogTTMzLjE3OSwyNy4wNzljMC0xLjEwNCwwLjg5NS0xLjk5OSwxLjk5OS0xLjk5OWMxLjEwNCwwLDEuOTk5LDAuODk1LDEuOTk5LDEuOTk5YzAsMS4xMDQtMC44OTUsMS45OTktMS45OTksMS45OTkJQzM0LjA3NCwyOS4wNzgsMzMuMTc5LDI4LjE4MywzMy4xNzksMjcuMDc5eiBNMTIuODIyLDI5LjA3OGMtMS4xMDQsMC0xLjk5OS0wLjg5NS0xLjk5OS0xLjk5OWMwLTEuMTA0LDAuODk1LTEuOTk5LDEuOTk5LTEuOTk5CXMxLjk5OSwwLjg5NSwxLjk5OSwxLjk5OUMxNC44MjEsMjguMTgzLDEzLjkyNiwyOS4wNzgsMTIuODIyLDI5LjA3OHoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMzBkYzgwIiBkPSJNMzQuMDM4LDE5LjMxM2MtMC4xNCwwLTAuMjgxLTAuMDM1LTAuNDEtMC4xMWMtMC4zOTMtMC4yMjctMC41MjctMC43MjktMC4zMDEtMS4xMjJsNS4xOTctOS4wMDgJYzAuMjI3LTAuMzk0LDAuNzI5LTAuNTI5LDEuMTIyLTAuMzAxYzAuMzkzLDAuMjI3LDAuNTI3LDAuNzI5LDAuMzAxLDEuMTIybC01LjE5Nyw5LjAwOEMzNC41OTgsMTkuMTY2LDM0LjMyMiwxOS4zMTMsMzQuMDM4LDE5LjMxMwl6Ij48L3BhdGg+PHBhdGggZmlsbD0iIzMwZGM4MCIgZD0iTTEzLjk2MiwxOS4zMTNjLTAuMjg0LDAtMC41Ni0wLjE0OC0wLjcxMi0wLjQxMUw4LjA1NCw5Ljg5NEM3LjgyNyw5LjUwMSw3Ljk2Miw4Ljk5OSw4LjM1NCw4Ljc3MgljMC4zOTItMC4yMjgsMC44OTUtMC4wOTMsMS4xMjIsMC4zMDFsNS4xOTcsOS4wMDhjMC4yMjcsMC4zOTQsMC4wOTIsMC44OTYtMC4zMDEsMS4xMjJDMTQuMjQzLDE5LjI3OCwxNC4xMDIsMTkuMzEzLDEzLjk2MiwxOS4zMTN6Ij48L3BhdGg+PC9zdmc+" /></button></a>
                    <a href="https://github.com/enisgjini/bmi" target="_blank"> <button class="code-of-project">Source
                            code</button></a>
                </div>
                <div class="col">
                    <img src="assets/bmi.webp" alt="BMI" width="100%" height="100%" loading="lazy">
                </div>
            </div>
        </section>

        <?php include("partials/mailer.php") ?>

        <section id="contact">
            <h1 class="project-title">Contact</h1>

            <div id="contact">

                <div class="row">

                    <p class="project-info">
                        Looking to start a new project or just want to say hi? Send me an email and I’ll do my best to
                        reply within 24 hrs!
                    </p>
                    <p class="project-info">
                        If contact forms aren’t your thing... send me an email at hello@arnau.design
                    </p>
                    <form id="contact-form" action="" method="post">
                        <p class="input-label">Subject</p>
                        <input type="text" name="subject" id="input-subject" value="">
                        <p class="input-label">Message </p><textarea name="message" id="textarea-message"
                            value=""> </textarea>
                        <br>
                        <button type="submit" class="slide" name="send">
                            <div>Submit</div>
                            <i class="icon-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>




    <!-- External Javascript -->
    <script src="app.js"></script>
</body>

</html>