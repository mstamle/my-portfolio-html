<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <a class="sr-only sr-only-focusable" href="#content">Skip to content</a>
    <header>


        <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
            <a href="#">
                <img src="/img/logo-d.png" alt="My logo" width="50">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button"
            data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-uppercase" href="#home">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase"
                        href="#skills">skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase"
                        href="#portfolio">portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="#about">about
                        me
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase"
                        href="#contact">contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="content" class="container">
        <section id="home" class="section section--light">
            <section class=" section--dark">
                <div class="jumbotron jumbotron-fluid">
                    <div id="text-field-jumbotron">
                        <h1>Hi, I am Tam</h1>
                        <p>
                            A Full-stack Web Developer
                        </p>
                    </div>
                </div>

            </section>

            <section class="section section--promo section--rose">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <article>
                            <div></div>
                            <h3>Discover</h3>
                            <p>
                                Tell me about your project and we brainstorm
                                together the features to create a plan for your
                                product to launch.
                            </p>
                            </articl>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <article>
                            <div></div>
                            <h3>Design</h3>
                            <p>
                                We design the wireframe and agree together how
                                to create the best experience for your users to
                                present your brand.
                            </p>
                            </articl>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <article>
                            <div></div>
                            <h3>Develop</h3>
                            <p>
                                We protoype and develop your product. We work
                                together intensily to incorporate your feedback.
                            </p>
                            </articl>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <article>
                            <div></div>
                            <h3>Deploy</h3>
                            <p>
                                We deploy your product and now your website is
                                ready to get the traction. Get out there and
                                grow your audience.
                            </p>
                            </articl>

                    </div>
                </div>
            </section>

            <section id="skills" class="section">
                <hr>
                <h2>MY SKILLS</h2>

                <div class="row">
                    <div class="col-3 mySkill">
                        <div class="progressLabel">HTML</div>
                        <div class="progressLabel">CSS&Sass</div>
                        <div class="progressLabel">JavaScript</div>
                        <div class="progressLabel">React</div>
                        <div class="progressLabel">jQuery</div>
                        <div class="progressLabel">PHP</div>
                        <div class="progressLabel">Laravel</div>
                        <div class="progressLabel">UX</div>
                    </div>

                    <div class="myProgress col-9 mySkill">
                        <div class="barContainer">
                            <div id="b1" class="bar">80%</div>
                        </div>
                        <div class="barContainer">
                            <div id="b2" class="bar">60%</div>
                        </div>
                        <div class="barContainer">
                            <div id="b3" class="bar">70%</div>
                        </div>
                        <div class="barContainer">
                            <div id="b4" class="bar">60%</div>
                        </div>
                        <div class="barContainer">
                            <div id="b5" class="bar">70%</div>
                        </div>
                        <div class="barContainer">
                            <div id="b6" class="bar">80%</div>
                        </div>
                        <div class="barContainer">
                            <div id="b7" class="bar">60%</div>
                        </div>
                        <div class="barContainer">
                            <div id="b8" class="bar">50%</div>
                        </div>


                    </div>
                </div>

            </section>
        </section>

        <section id="portfolio" class="section section--rose">
            <hr>
            <h2>My Portfolio</h2>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <article class="card mb-4">
                        <img class="card-img-top" src="img/hackathon1.png"
                        alt="A snippet of Generic Hipster Coffee website">
                        <div class="card-body">
                            <h3 class="card-title">Hackathon 1</h3>
                            <p class="card-text">Generic Hipster Coffee website
                            </p>
                            <h4>Tech stack:
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">HTML5</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Bootstrap 4</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">CSS</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Sass</span>
                                    </li>

                                </ul>
                            </h4>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card mb-4">
                        <img class="card-img-top" src="img/hackathon1.png"
                        alt="A snippet of Generic Hipster Coffee website">
                        <div class="card-body">
                            <h3 class="card-title">Hackathon 2</h3>
                            <p class="card-text">JavaScript Theme
                            </p>
                            <h4>Tech stack:
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">HTML5</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Bootstrap 4</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">CSS</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Sass</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">JavaScript</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">jQuery</span>
                                    </li>

                                </ul>
                            </h4>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card mb-4">
                        <img class="card-img-top" src="img/hackathon1.png"
                        alt="A snippet of Generic Hipster Coffee website">
                        <div class="card-body">
                            <h3 class="card-title">Hackathon 3</h3>
                            <p class="card-text">PHP Theme
                            </p>
                            <h4>Tech stack:
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">HTML5</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Bootstrap 4</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">CSS</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Sass</span>
                                    </li>

                                </ul>
                            </h4>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card mb-4">
                        <img class="card-img-top" src="img/hackathon1.png"
                        alt="A snippet of Generic Hipster Coffee website">
                        <div class="card-body">
                            <h3 class="card-title">Hackathon 4</h3>
                            <p class="card-text">Laravel Theme
                            </p>
                            <h4>Tech stack:
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">HTML5</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Bootstrap 4</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">CSS</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Sass</span>
                                    </li>

                                </ul>
                            </h4>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card mb-4">
                        <img class="card-img-top" src="img/hackathon1.png"
                        alt="A snippet of Generic Hipster Coffee website">
                        <div class="card-body">
                            <h3 class="card-title">Hackathon 5</h3>
                            <p class="card-text">React Theme
                            </p>
                            <h4>Tech stack:
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">HTML5</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Bootstrap 4</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">CSS</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Sass</span>
                                    </li>

                                </ul>
                            </h4>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6">
                    <article class="card mb-4">
                        <img class="card-img-top" src="img/hackathon1.png"
                        alt="A snippet of Generic Hipster Coffee website">
                        <div class="card-body">
                            <h3 class="card-title">Final Project</h3>
                            <p class="card-text">iNVENTORY
                            </p>
                            <h4>Tech stack:
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">HTML5</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Bootstrap 4</span>
                                    </li>
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">CSS</span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex flex-row">
                                    <li>
                                        <span class="badge badge-primary
                                        mr-1">Sass</span>
                                    </li>

                                </ul>
                            </h4>
                        </div>
                    </article>
                </div>
            </div>
            <hr>

        </section>

        <section id="about" class="section section--light">
            <h2>About me</h2>
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/tam.jpg" alt="A portrait of me, Tam Le"
                    class="img-fluid rounded-circle portrait" width="300px">
                </div>
                <div class="col-sm-6">
                    <h3 class="m-4">Hello!</h3>
                    <p>
                        My name is Tam Le.
                    </p>

                    <p>
                        I am a full-stack web developer and enjoy learning new
                        trends. .</p>

                    <p>I am developing user interfaces in JavaScript and React
                    and backend of my projects in PHP and Laravel</p>


                </div>
                <div class="mt-4 pl-4 pr-4">
                    <p>
                        I am open to learning new technologies and enjoy working
                        with people who are as passionate about all web-related
                        as me.
                    </p>
                    <p>
                        I have worked for clients all across the world but
                        currently I am based in Prague, Czech Republic.</p>

                    <p>
                        I like books, pole dance, and movies. If I do not
                        develop, you can also see me cooking and baking
                        sometimes.
                    </p>
                </div>
        </section>

        <section id="contact" class="section section--rose">
            <section id="findme" class="section--dark">
                <h2>FIND ME HERE</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <p>
                            <a href="https://github.com/mstamle">
                                <i class="fa fa-github fa-lg"
                                aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <a href="https://www.linkedin.com/in/lethanhtam/">
                                <i class="fa fa-linkedin fa-lg"
                                aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p>
                            <a href="https://bitbucket.org/malasikovna/">
                                <i class="fa fa-bitbucket fa-lg"
                                aria-hidden="true"> </i>
                            </a>
                        </p>
                    </div>
                </div>

            </section>

            <hr>

            <h2>CONTACT ME</h2>

            <form action=""
            method="POST" class="form-contact">

            <!-- action: http://cbp.vosk-design.cz/process-form.php -->

                <div class="row">
                    <div class="col-md">
                        <div class="form-group d-flex flex-wrap
                        align-items-center border-bottom border-white">
                            <label class="mr-2" for="firstname">First
                            Name*</label>
                            <input class="form-control bg-primary border-0 mb-1"
                            type="text" id="firstname" name="firstname">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group d-flex flex-wrap
                        align-items-center border-bottom border-white">
                            <label class="mr-2" for="lastname">Last Name*</label>
                            <input class="form-control bg-primary border-0 mb-1"
                            type="text" id="lastname" name="lastname" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group d-flex flex-wrap
                        align-items-center border-bottom border-white">
                            <label class="mr-2" for="email">E-mail*</label>
                            <input class="form-control bg-primary border-0 mb-1"
                            type="email" id="email" name="email">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group d-flex flex-wrap
                        align-items-center border-bottom border-white">
                            <label class="mr-2" for="phone">Phone</label>
                            <input class="form-control bg-primary border-0 mb-1"
                            type="tel" id="phone" name="phone">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="mr-2" for="message">Message</label>
                    <textarea class="form-control mb-2" name="message"
                    id="message" cols="30" rows="10"></textarea>
                    <button class="btn btn-dark btn-lg btn-block">Send my
                    message</button>
                </div>
            </form>
            <?php
            /**
             * Initialization
             */
            $dbh = new PDO('mysql:host=localhost;dbname=portfolio_contacts', 'root', 'rootroot');
            /**
             * Define variables and set to empty values
             * Define error variables and set to empty values
             */
            $firstName = $lastName = $email = $phone = $message = "";
            $firstNameErr = $lastNameErr = $emailErr = $phoneErr = $messageErr = "";
            /**
             * Remove unnecessary characters
             */
            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
            /**
             * Error messages for empty fields and form validation
             */
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["firstname"])) {
                $firstNameErr = "First name is required";
            } else {
                $firstName = test_input($_POST["firstname"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
                    $firstNameErr = "Please insert letters and white space";
                }
            }
            if (empty($_POST["lastname"])) {
                $lastNameErr = "Last name is required";
            } else {
                $lastName = test_input($_POST["lastname"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
                    $lastNameErr = "Please insert letters and white space";
                }
            }
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Please insert a valid email address";
                }
            }
            if (empty($_POST["phone"])) {
                $phoneNumber= "";
            } else {
                $phoneNumber = test_input($_POST["phone"]);
                if (!filter_var($phoneNumber, FILTER_VALIDATE_INT)) {
                    $phoneNumberErr = "Please insert a valid number";
                }
            }
            if (empty($_POST["message"])) {
                $messageErr = "Message is required";
            } else {
                $message = test_input($_POST["message"]);
            }
            /**
             * Send input fields to mysql server in case fields are filled in
             */
                if (!$firstName || !$lastName || !$email)
                {
                    echo 'You have not filled all the requied fields correctly.
                    Please refill the form. Thank you!';
                }
                else
                {
                    //Insert into the database
                    $statement = $dbh->prepare('INSERT INTO messages
                    (first_name,last_name,email,phone,`text`) VALUES
                    (?         ,?        ,?    ,?    ,?   )');
                    $result = $statement->execute([$firstName,$lastName,$email,$phone,$message]);
                    echo 'You have successfully sent the form.';
                }
            }
            /**
             * Template for outcome 'success'
             */
            $success = filter_input(INPUT_GET, 'success');




            // if (!isset($_SESSION)) {
            //     session_start();
            // }

            // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //     $_SESSION['postdata'] = $_POST;
            //     unset($_POST);
            //     header("Location: ".$_SERVER['PHP_SELF']);
            //     exit;
            // }

            // //Initialization part

            // $pdo= new PDO(
            // 'mysql:dbname=portfolio_contacts;host=localhost;charset=utf8', // connection information
            // 'root', // username
            // 'rootroot' // password
            // );

            // //Action part

            // if (count($_POST)>0)
            // {
            //     $first_name = filter_input(INPUT_POST,'firstname');
            //     $last_name = filter_input(INPUT_POST,'lastname');
            //     $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
            //     $phone = filter_input(INPUT_POST,'phone');
            //     $text = filter_input(INPUT_POST,'message');
            //     $_POST = [];


            //     if (!$first_name || !$last_name || !$email)
            //     {
            //         echo 'You have not filled all the requied fields correctly.
            //         Please refill the form. Thank you!';
            //     }
            //     else
            //     {
            //         //Insert into the database
            //         $statement = $pdo->prepare('INSERT INTO messages
            //         (first_name,last_name,email,phone,`text`) VALUES
            //         (?         ,?        ,?    ,?    ,?   )');
            //         $result = $statement->execute([$first_name,$last_name,$email,$phone,$text]);
            //         echo 'You have successfully sent the form.';
            //     }
            // }
            ?>
        </section>
    </main>

    <footer class="text-center">
        <hr>
        <h2>NICE TO MEET YOU!</h2>
        <p>Copyright @TL 2018</p>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/main.js"></script>
</body>

</html>