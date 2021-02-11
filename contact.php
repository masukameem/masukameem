<?php

function _e ( $string ) {
    return htmlentities ( $string, ENT_QUOTES, 'UTF-8', false );
}

$form_data = array( 'name', 'email', 'project' );

$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];

//Recipient email address
$to = 'mashukameem@gmail.com';

//Email subject 
$subject = 'New Contact Form Data';

$formcontent=" From: $name \n\n Project: \n $project";

$mailheader = "From: $email \r\n";

$error_msg = array();
$fields = array();

if ( ! empty( $_POST ) ) { 
    //Email address validation
    if ( ! empty( $email ) && ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $error_msg[] = 'This is not a valid email address';
    }

    foreach ( $form_data as $key ) {
        $fields[$key] = $_POST[$key];
    }
    
    //Input data validation
    foreach ( $fields as $field => $data ) {
        if ( empty( $data ) ) {
            $error_msg[] = 'Please enter ' . $field;
        }
    }

    //Check error and send email
    if ( empty( $error_msg) ) {
        $sent = mail( $to, $subject, $formcontent, $mailheader );
    }
}
?>
<!-- Form Submission PHP Ends -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- displays site properly based on user's device -->
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="apple-touch-icon" href="./images/favicon-32x32.png" />
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Sacramento&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Title -->
    <title>Masuka Meem | Software Developer</title>
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="d-lg-none">
                    <a class="nav-link logo" href="index.html">Masuka Meem</a>
                </div>
                <button class="navbar-toggler ms-auto" id="toggle" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#banner">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link logo d-none d-lg-block" href="index.html">Masuka Meem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">SKILLS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Banner Section Starts -->
    <section class="banner-section" id="banner">
        <div class="overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md">
                        <div class="section-header">
                            <p class="pre-header">HI!! THIS IS...</p>
                            <h1>Masuka Akther Meem</h1>
                            <h3>Software Developer</h3>
                            <a href="#portfolio" class="btn">MY PORTFOLIO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section Ends -->
    <!-- Service Section Starts -->
    <section class="service-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="section-header">
                        <p class="pre-header yellow">MY SERVICES</p>
                        <h2 class="orange">Services</h2>
                        <!-- <p>This are the services I provide to my clients</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md col-sm-11 col-12 mb-4">
                    <div class="service">
                        <span class="service-icon"><i class="fas fa-laptop-code"></i></span>
                        <h4>Software Development</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sed a nesciunt earum</p>
                    </div>
                </div>
                <div class="col-md col-sm-11 col-12 mb-4">
                    <div class="service">
                        <span class="service-icon"><i class="fab fa-mailchimp"></i></span>
                        <h4>Email Template Design</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sed a nesciunt earum</p>
                    </div>
                </div>
                <div class="col-md col-sm-11 col-12 mb-4">
                    <div class="service">
                        <span class="service-icon"><i class="fab fa-wordpress-simple"></i></span>
                        <h4>WordPress Customization</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sed a nesciunt earum</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section Ends -->
    <!-- Portfolio Section Starts -->
    <section class="portfolio-section bg-color text-center" id="portfolio">
        <div class="container" data-js="filtering-demo">
            <div class="row">
                <div class="col-md">
                    <div class="section-header">
                        <p class="pre-header">MY PORTFOLIO</p>
                        <h2>Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="contact-form">
                        <h2 class="bigCaslonFB desktop-tab"><br>&nbsp;&nbsp;I look forward to hearing about your
                            project.</h2><br>
                        <!-- Show Message Starts -->
                        <?php
                                if ( ! empty( $error_msg ) ) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p><?php echo implode( '</p><p>', $error_msg ); ?></p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                aria-hidden="true">&times;</button>
                        </div>

                        <?php elseif ( $sent ) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>Successfully Submitted!!</p>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                aria-hidden="true">&times;</button>
                        </div>

                        <?php endif; ?>
                        <!-- Show Message Ends -->

                        <!-- Form Starts -->
                        <form action="contact.php" method="post">
                            <div class="form-group">
                                <input type="text" name="name"
                                    value="<?php echo isset( $fields['name'] ) ? _e( $fields['name'] ) : '' ?>"
                                    class="form-control" placeholder="NAME" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email"
                                    value="<?php echo isset( $fields['email'] ) ? _e( $fields['email'] ) : '' ?>"
                                    class="form-control" placeholder="YOUR EMAIL ADDRESS" required>
                            </div>

                            <div class="form-group">
                                <textarea name="project" class="form-control" rows="10" placeholder="ABOUT YOUR PROJECT"
                                    required><?php echo isset( $fields['project'] ) ? _e( $fields['project'] ) : '' ?></textarea>
                            </div>

                            <h1 class="bigCaslonFB mobile-block">I look forward to<br>hearing from you!</h1>

                            <button class="sarahScript btn" type="submit">Send Now</button>
                        </form>
                        <!-- Form Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section Ends -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h5>Masuka Meem</h5>
                    <ul class="nav justify-content-center">
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href=""><i class="fab fa-github"></i></a></li>
                    </ul>
                    <small>Copyright &copy; Masuka Meem, 2021.
                        <a href='https://www.freepik.com/vectors/business'>Business vector created by pch.vector -
                            www.freepik.com</a>
                    </small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/45bbe32335.js" crossorigin="anonymous"></script>

    <script>
        $(function () {
            // nav icon
            $('#toggle').click(function () {
                $(this).toggleClass('active');
            });

            // navbar scroll
            $(document).scroll(function () {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>
</body>

</html>