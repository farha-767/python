<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Python Bull - Contact</title>

    <link href="assets/img/favicon/fav.png" rel="apple-touch-icon" sizes="144x144">
    <link href="assets/img/favicon/fav.png" rel="apple-touch-icon" sizes="114x114">
    <link href="assets/img/favicon/fav.png" rel="apple-touch-icon" sizes="72x72">
    <link href="assets/img/favicon/fav.png" rel="apple-touch-icon">
    <link href="assets/img/favicon/fav.png" rel="shortcut icon">

    <link rel="stylesheet" href="assets/css/plugin.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<?php
// Check if the form is submitted
if (isset($_POST['send'])) {
    // Get form data
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $phone = $_POST["userPhone"];
    $message = $_POST["userMessage"];

    // Validate form data (you can add your own validation logic here)

    // Set up the recipient email address
    $recipient = "pythonbullae@gmail.com";

    // Set up the email headers
    $headers = "From: PYTHONBULL.COM <$recipient>\r\n";
    $headers .= "Reply-To: $recipient\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Compose the email body
    $body = "
        <html>
        <head>
        <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        </style>
        </head>
        <body>
        <h2>Contact Form</h2>
        <table>
            <tr>
                <th>Name</th>
                <td>$name</td>
            </tr>

            <tr>
                <th>Contact Number</th>
                <td>$email</td>
            </tr>
            <tr>
                <th>Contact Number</th>
                <td>$phone</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>$message</td>
            </tr>
        </table>
        </body>
      </html>
    ";

    // Attempt to send the email
    if (mail($recipient, "New Contact Form Submission", $body, $headers)) {
        echo '<script>alert("Thanks for your inquiry. We will contact you shortly.");</script>';
    } else {
        echo '<script>alert("Email sending failed, Try again");</script>';
    }
}
?>





    <!-- Start Preload -->
    <!-- <div class="preloader">
    </div>
    <div class="block-1"></div>
    <div class="block-2"></div>
    <div class="logo-load">
        <img src="assets/img/" alt="">
    </div>
    <div class="logo-load spinning"></div>
    <div class="over-all"></div> -->
    <!-- End Preload -->
    <!-- Start Header -->
    <header>

        <nav>
            <!-- Logo -->
            <div class="logo hover-target">
                <a class="load-spiral" href="/"><img src="assets/img/logo.png" alt="logo"></a>
            </div>
            <!-- Menu bar -->
            <div class="toggle-btn magnetic hover-target">
                <div class="burger-menu">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="tre"></span>
                </div>
            </div>




            <div class="bg-nav"></div>

            <!-- menu -->
            <div class="manu-container">
                <div class="menu">
                    <div class="data">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="links text-center text-lg-left">
                                        <ul>
                                            <li>
                                                <p>01</p><a class="menu-link hover-target load-spiral" href="/">Home</a>
                                            </li>
                                            <li>
                                                <p>02</p><a class="menu-link hover-target load-spiral"
                                                    href="about">About us</a>
                                            </li>
                                            <li>
                                                <p>03</p><a class="menu-link hover-target load-spiral"
                                                    href="service">Services</a>
                                            </li>
                                            <li>
                                                <p>04</p><a class="menu-link hover-target load-spiral"
                                                    href="work">Work</a>
                                            </li>
                                            <li>
                                                <p>05</p><a class="menu-link hover-target load-spiral"
                                                    href="blog">Blog</a>
                                            </li>
                                            <li>
                                                <p>06</p><a class="menu-link hover-target load-spiral"
                                                    href="contact">Contact</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <div class="col-md-4 offset-md-2 centered text-right">
                                    <div class="address-menu">

                                        <h3>PYTHON BULL</h3>
                                        <h4>PRIME TOWER, 20TH FLOOR,<br> BUSINESS BAY, DUBAI, UAE <br> +971 585883928
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>


    </header>
    <!-- End Header -->


    <!-- Start Content -->
    <div id="spiral">



        <div id="headmove">

        </div>




        <section class="contact-page">
            <div class="container">


                <div class="row">
                    <div class="col-md-12 contact-page-head">
                        <div class=" main-title text-center">

                            <h2>Get In <span>TOUCH</span></h2>
                        </div>
                    </div>
                    <div class="col-md-6 contact-form">
                        <form  method="POST" class="fade-in">
                            <div class="form-group input-group">
                                <input type="text" name="userName" class="form-control input" id="userName" required>
                                <label for="userName" class="user-label">Name:</label>
                            </div>
                            <div class="form-group input-group">
                                <input type="email" class="form-control input" id="userEmail" name="userEmail">
                                <label for="userEmail" class="user-label">Email:</label>
                            </div>
                            <div class="form-group input-group">
                                <input type="tel" class="form-control input" id="userPhone" name="userPhone" required>
                                <label for="userPhone" class="user-label">Phone:</label>
                            </div>
                            <div class="form-group input-group">
                                <textarea class="form-control input" id="message" name="userMessage" rows="5"
                                    required></textarea>
                                <label for="message" class="user-label">Message:</label>
                            </div>
                            <button type="submit" name="send" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6 contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14455.497934588788!2d55.1448677!3d25.072243!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6dd1fe92a27b%3A0x574a07631c73c4ed!2sPythonBull!5e0!3m2!1sen!2sin!4v1689661609785!5m2!1sen!2sin"
                            width="100%" height="230" frameborder="0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                        <div class="contact-details">
                            <p><span><img src="assets/img/home/location.svg" alt="location"></span> Prime Tower 3, 20th
                                Floor, Business Bay, Dubai, UAE</p>
                            <p><span><img src="assets/img/home/telephone.svg" alt="location"></span> <span><a
                                        href="">+971 585883928</a></span></p>
                            <p><span><img src="assets/img/home/mail.svg" alt="location"></span> <span><a
                                        href="">pythonbullae@gmail.com</a></span></p>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center text-md-left mt-30">
                        <div class="mail hover-target">
                            <a href="mailto:pythonbullae@gmail.com">pythonbullae@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center mt-30">
                        <div class="logo-foot">
                            <img src="assets/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-right mt-30">
                        <div class="sosmed">
                            <ul>
                                <li class="hover-target"><a href="#">Instagram.</a></li>
                                <li class="hover-target"><a href="#">Facebook.</a></li>
                                <li class="hover-target"><a href="#">Twitter.</a></li>
                                <li class="hover-target"><a href="#">WhatsApp.</a></li>
                            </ul>
                        </div>
                        <div class="copyright">
                            <p>&copy;2023 PYTHON BULL. All Rights Reserved</p>
                            <p>Powered by DO Studio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Content -->


    <!-- Cursor -->
    <div class="cursor1" id="cursor1"></div>
    <div class="cursor" id="cursor"></div>

    <script type='text/javascript' src="assets/js/plugin.js"></script>
    <script type='text/javascript' src="assets/js/wow.min.js"></script>
    <script type='text/javascript' src="assets/js/main.js"></script>
</body>

</html>