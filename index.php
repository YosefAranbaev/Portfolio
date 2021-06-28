<?php
 //create a mySQL DB connection:
 $dbhost = "182.50.133.173";
 $dbuser = "studDB21a";
 $dbpass = "stud21DB1!";
 $dbname = "studDB21a";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 // testing connection success
 if(mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" );
    }
?>
<?php
 $query = "SELECT *
 FROM  protfolio_yossefaranbayev";

 $result = mysqli_query($connection, $query);
 if(!$result) {
    die("DB query failed.");
 }
?>

<?php
 $queryPopUp = "SELECT *
 FROM  protfolio_yossefaranbayev";

 $resultPopUp = mysqli_query($connection, $query);
 if(!$resultPopUp) {
    die("DB query failed.");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Yossef Aranbayev</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="icon" href="logo.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">YA </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#service" class="nav-item nav-link">Projects</a>
                    <a href="#experience" class="nav-item nav-link">Experience</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1>Yossef Aranbayev</h1>
                            <h2></h2>
                            <div class="typed-text">Software Engineer, Web Developer, Student, Motivated</div>
                        </div>
                        <!-- <div class="hero-btn">
                                <a class="btn" href="">Hire Me</a>
                                <a class="btn" href="">Contact Me</a>
                            </div> -->
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <!-- <img src="img/hero.png" alt="Hero Image"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/profile_picture.jpeg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p>Learn About Me</p>
                            <h2>A little about me</h2>
                        </div>
                        <div class="about-text">
                            <p>
                            I am a software engineering student at Shenkar.<br>An assertive software engineering student with a strong desire to learn and advance my
                                skills,
                                with excellent teamwork skills. Quickly integrates into the workspace and meets great
                                goals and
                                challenges.<br>
                                Contact details: Yosef Aranbayev, Email Address: aranbaev00@gmail.com, Link to LinkedIn:<a  href="https://www.linkedin.com/in/yosef-aranbaev-7491841ab/"><span style="color: blue;" > Click here</span></a>
                                <br>Programming languages: C ++, C, SQL, JavaScript, PHP, CSS.
                            </p>
                        </div>
                        <!-- <a class="btn" href="">Learn More</a> -->
                        <a class="btn" href="Yossef_Aranbayev_CV.pdf" target="_blank">Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service" id="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>What I do</p>
                <h2>My projects</h2>
            </div>
            <div class="row">
            <?php
            while($row = mysqli_fetch_assoc($result)) { //results are in associative array. keys are cols names
                                        $project_id = $row["project_id"];
                                        $project_name = $row["project_name"];
                                        $project_description = $row["project_description"];
                                        $programming_language = $row["prof_language"];
                                        $github = $row["github"];
                                        $project_pic = $row["project_pic"];
                                        echo  '<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s" >';
                                        echo '<a class="description" href="'.$github.'">';
                                        echo  '<div class="service-item">';
                                        echo  '    <div class="service-icon">';
                                        echo  '        <i class='.$project_pic.'></i>';
                                        echo '    </div>';
                                        echo '    <div class="service-text">';
                                        echo  '       <h3>'.$project_name.'</h3>';
                                       echo  '       <p>'.$project_description.'</p>';
                                        echo    '</div>';
                                        echo '</div>';
                                        echo '</a></div>';
            }
            ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Experience Start -->
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p>My Resume</p>
                <h2>Working Experience and Volunteering</h2>
            </header>
            <div class="timeline">
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2018-2019</div>
                        <h2>Service representative</h2>
                        <h4>Migdal, an insurance company.</h4>
                        <p>
                        Working in an agent service center, working continuously with company agents, working under pressure, work that requires a great deal of responsibility, working with multiple systems in parallel.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2019 - 2020</div>
                        <h2>Member of Google DSC</h2>
                        <h4>Google, Israel</h4>
                        <p>
                        Member of Google DSC, the goal of the program is to find technological solutions for non-profit organizations that work for the public good.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">2020 - 2021</div>
                        <h2>Teaching Support</h2>
                        <h4>Petah Tikva Municipality, Israel</h4>
                        <p>
                        I volunteered for the Petah Tikva Municipality as a teaching supporter. Due to the corona virus the number of teachers is small and teaching supporters were needed for the summer period. Work that requires responsibility with seriousness and assertiveness.
                        </p>
                    </div>
            </div>
        </div>
    </div>


    <!-- Portfolio Start -->
    <footer>
    <section><span>
        &copy; Yossef Aranbayev &nbsp;&nbsp;
                        <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department"><span class="linkshenkar">תואר ראשון בהנדסת תוכנה בשנקר</span></a>
                    </span>
    </section>
    </footer>
    <!-- Footer End -->


    <!-- Back to top button -->
    <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
 //close DB connection
 mysqli_close($connection);
?>
