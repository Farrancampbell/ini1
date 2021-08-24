<?php
include_once 'phpformbuilder/Form.php';
use phpformbuilder\Validator\Validator;

/* =============================================
    start session and include form class
============================================= */

session_start();
include_once rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . '/Invest-in-Innovation/phpformbuilder/Form.php';

/* =============================================
    validation if posted
============================================= */

if ($_SERVER["REQUEST_METHOD"] == "POST" && Form::testToken('contact-form-1-modal') === true) {
    // create validator & auto-validate required fields
    $validator = Form::validate('contact-form-1-modal');

    // additional validation
    $validator->maxLength(100)->validate('message');
    $validator->email()->validate('user-email');

    // recaptcha validation
    $validator->recaptcha('6LeNWaQUAAAAAOnei_86FAp7aRZCOhNwK3e2o2x2', 'Recaptcha Error')->validate('g-recaptcha-response');

    // check for errors
    if ($validator->hasErrors()) {
        $_SESSION['errors']['contact-form-1-modal'] = $validator->getAllErrors();
    } else {
        $_POST['message'] = nl2br($_POST['message']);
        $email_config = array(
            'sender_email'    => 'contact@phpformbuilder.pro',
            'sender_name'     => 'Php Form Builder',
            'recipient_email' => addslashes($_POST['user-email']),
            'subject'         => 'Contact from Php Form Builder',
            'filter_values'   => 'contact-form-1-modal'
        );
        $sent_message = Form::sendMail($email_config);
        Form::clear('contact-form-1-modal');
    }
}
/* ==================================================
    The Form
================================================== */

$form = new Form('contact-form-1-modal', 'horizontal', 'novalidate');
// $form->setMode('development');
$form->startFieldset('Please fill in this form to Register to Pitch');
$form->addHtml('<p class="text-warning">All fields are required</p>');
$form->setCols(0, 12);
$form->addIcon('company-name', '<i class="fa fa-university" aria-hidden="true"></i>', 'before');
$form->addInput('text', 'user-name', '', '', 'placeholder=Start-Up Name, required');
$form->groupInputs('user-name', 'user-first-name');
$form->setCols(0, 6);
$form->addIcon('user-name', '<i class="fa fa-user" aria-hidden="true"></i>', 'before');
$form->addInput('text', 'user-name', '', '', 'placeholder=Name, required');
$form->addIcon('user-first-name', '<i class="fa fa-user" aria-hidden="true"></i>', 'before');
$form->addInput('text', 'user-first-name', '', '', 'placeholder=First Name, required');
$form->setCols(0, 12);
$form->addIcon('user-email', '<i class="fa fa-envelope" aria-hidden="true"></i>', 'before');
$form->addInput('email', 'user-email', '', '', 'placeholder=Email, required');
// $form->addIcon('user-phone', '<i class="fa fa-phone" aria-hidden="true"></i>', 'before');
// $form->addInput('tel', 'user-phone', '', '', 'data-intphone=true, data-fv-intphonenumber=true, required');
$form->addTextarea('message', '', '', 'cols=30, rows=4, placeholder=Brief Description of Startup, required');
$form->setCols(6, 6);
$form->addCheckbox('newsletter', '', '1', 'class=lcswitch, data-ontext=Yes, data-offtext=No, data-theme=yellow, checked');
$form->printCheckboxGroup('newsletter', 'Suscribe to Newsletter');
$form->setCols(0, 12);
$form->addRecaptchaV3('6LeNWaQUAAAAAGO_c1ORq2wla-PEFlJruMzyH5L6', 'bs4-contact-form-1-modal');
$form->centerButtons(true);
$form->addBtn('button', 'cancel-btn', 1, 'Cancel <i class="fa fa-ban ml-2"></i>', 'class=btn btn-secondary, data-modal-close=modal-target', 'submit-group');
$form->addBtn('submit', 'submit-btn', 1, 'Send <i class="fa fa-envelope ml-2"></i>', 'class=btn btn-success ladda-button, data-style=zoom-in', 'submit-group');
$form->printBtnGroup('submit-group');
$form->endFieldset();

// word-character-count plugin
$form->addPlugin('word-character-count', '#message', 'default', array('%maxAuthorized%' => 100));

// modal
$form->modal('#modal-target');

// jQuery validation
$form->addPlugin('formvalidation', '#contact-form-1-modal');
?>
<html lang="en-us">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="theme-color" content="#" />
    <title>Invest In Innovation Forum</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,300i,400,600,800" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/shame.css" rel="stylesheet" />
    <link href="schedule.css" rel="stylesheet" />
    <link href="Fontawesome/js/fontawesome.min.js" rel="stylesheet" />
    <link href="Fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="Fontawesome/css/brands.min.css" rel="stylesheet" />
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/venobox/venobox.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link rel="canonical" href="https://www.phpformbuilder.pro/templates/bootstrap-4-forms/contact-form-1-modal.php" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Invest in Innovation Forum</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="robots" content="max-image-preview:large" />
    <meta name="description"
        content="Innovation Forum is proud to present Invest In Innovation, a high caliber, two-day conference displaying the future of the healthcare industry in the next big Innovation Hub, Barcelona, Spain. Get an early-bird ticket now!" />
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Invest in Innovation Forum - Get Your Tickets Now !!" />
    <meta property="og:description"
        content="Innovation Forum is proud to present Invest In Innovation, a high caliber, two-day conference displaying the future of the healthcare industry in the next big Innovation Hub, Barcelona, Spain. Get an early-bird ticket now!" />
    <!-- <meta property="og:url" content="" />  -->
    <meta property="og:site_name" content="Invest In Innovation Conference" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description"
        content="Innovation Forum is proud to present Invest In Innovation, a high caliber, two-day conference displaying the future of the healthcare industry in the next big Innovation Hub, Barcelona, Spain. Get an early-bird ticket now!" />
    <meta name="twitter:title" content="Invest in Innovation Forum - Get Your Tickets Now !!" />
    <meta name="twitter:site" content="@Innovation_F" />
    <meta name="twitter:creator" content="@Innovation_F" />
    <meta name="msvalidate.01" content="D6557E4B5E5DD53DD208AFF318657C1C" />
    <meta name="google-site-verification" content="PuX6EXnyDmk45ChRIzCTh4MF5u4_9XWu0lNHl1YGXoU" />
    <meta name="yandex-verification" content="078df958e13ba313" />
    <?php $form->printIncludes('css'); ?>
</head>

<body>
    <script type="text/javascript">
        // _linkedin_partner_id = "956956";

        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];

        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
        (function () {
            var s = document.getElementsByTagName("script")[0];

            var b = document.createElement("script");

            b.type = "text/javascript";
            b.async = true;

            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";

            s.parentNode.insertBefore(b, s);
        })();
    </script>
    <nav class="main-navbar navbar navbar-expand-xl fixed-top justify-content-between navbar-dark">
        <div class="container">
            <div class="navbar-brand"> <a href="#index"> <img class="logo-dark" src="images/logo_innoforum.svg"
                        alt="Innovation Forum" width="160" height="60"> <img class="logo-light"
                        src="images/logo_innoforum.svg" alt="Innovation Forum" width="160" height="60"> </a></div>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"> <span class="icon-bar"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    </li>
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="startup.php">Start-Ups</a></li>
                    <li class="nav-item"><a class="nav-link" href="investors.php">Investors</a></li>
                    <li class="nav-item"><a class="nav-link" href="partners.html">Partners</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="https://innovationforum.ticketspice.com/invest-in-innovation" target="_blank" rel="noopener noreferrer" role="button">Buy Tickets</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        $(document).ready(function () {
            $(".main-navbar .navbar-toggler").on("click", function () {
                $('.main-navbar').toggleClass('opened');
            });

            if ($('body').hasClass('faq-article')) {
                $('.main-navbar	').addClass('navbar-light bg-light').removeClass('navbar-dark');
            } else {
                $(".main-navbar .navbar-toggler").on("click", function () {
                    if ($(window).scrollTop() < 1 && $('.navbar-collapse.collapse').hasClass('show')) {
                        $('.main-navbar').removeClass('navbar-light bg-light').addClass('navbar-dark');
                    } else {
                        $('.main-navbar	').addClass('navbar-light bg-light').removeClass('navbar-dark');
                    }
                });
                $(window).on('scroll', function () {
                    if ($(window).scrollTop() >= 1) {
                        $('.main-navbar').addClass('navbar-light bg-light').removeClass('navbar-dark');
                    } else if ($(window).scrollTop() < 1 && $('.navbar-collapse.collapse').hasClass(
                            'show')) {
                        $('.main-navbar').addClass('navbar-light bg-light').removeClass('navbar-dark');
                    } else {
                        $('.main-navbar').removeClass('navbar-light bg-light').addClass('navbar-dark');
                    }
                });
            }

            $(document).keyup(function (e) {
                if (e.keyCode == 27) {
                    if ($('.navbar-collapse.collapse').hasClass('show')) {
                        $(".navbar-toggler").click();
                    }
                }
            });
        });
    </script>
    <main id="index">
        <header class="default home-header video-header">
            <div class="home-header-bg"
                style="background-image:url('https://www.horizons.health/wp-content/themes/hh-moka/media/home-header-bg.jpg')">
            </div>
            <div class="video-container">
                <video webkit-playsinline="" autoplay="" loop="" muted="">
                    <source src="videos/startup.mp4">
                </video>
            </div>
            <div class="container">
                <div class="ini-logo"> <img src="images/ini_logo.svg" alt="Invest In Innovation Logo" width="330"
                        height="122"></div>
                <img src="images/startup_logos/statup-tagline.svg" alt="Explore New Investments" width="654"
                    height="177" style="
                            margin-bottom: 75px;">
                <section class="explore" style="margin-bottom: 75px;">
                    <p style=" height: 107px;">Exploring the Next Steps in Your Start-Up Journey</p>
                </section>
                <div class="d-flex justify-content-center">
                <div class="col-md-11 col-lg-10">
                <?php
                if (isset($sent_message)) {
                    echo $sent_message;
                }
                ?>
                <a data-remodal-target="modal-target" class="btn btn-primary text-white btn-lg">Register to Pitch</a>
                <?php
                $form->render();
                ?>
            </div>
                </div>
        </header>
        <script src="javascript/slick.js"></script>
        <section class="section-startup" style="
margin-top: 110px;
margin-left: 100px;
margin-right: 50px;
margin-bottom: 50px;
">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="startup-image">
                            <img src="images/startup.svg" alt="Showcase Your Startup" width="374" height="117.6" >
                        </div>
                    </div>
                    <div class="showcase col-lg-8">
                        <div>
                            <p class="whatis-if">We’re gathering the top investors and industry decision makers who want
                                to
                                meet the next big start-ups in health. We’re looking for the distrupters, trailblazers
                                founding the future leaders of this industry. <b>Are you up to the challenge?</b><br>

                                <br>The Innovation Forum has evaluated 600+ health-related start-ups who have gone on to
                                raise $150M+ in private equity. So we know how to support scientists and entrepreneurs
                                take
                                their venture to the next level.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <span class="buy-ticket-btn">
                <a href="#"><button class="orange-button">Register to Pitch</button></a>
            </span>
        </section>

        <section>
            <img src="images/border.svg" alt="border" width="100%" height="66">
        </section>
        <section>
            <div class="container">
                <div class="funding">
                    <div class="row flex-nowrap">
                        <div class="col-lg-4 col-xs-12 funding-text" style="
                  margin-right: 75px;
              ">
                            <img src="images/funding.svg" alt="Funding" width="242" height="72">
                            <br>
                            <br>
                            <p>We gather and validate the best start-ups from around the world to pitch in front of
                                influential investors. Follow these up with direct meetings to take discussions to
                                the next level.
                            </p>
                        </div>
                        <div class="col-lg-4 col-xs-12 funding-text" style="
                    margin-right: 75px;
                ">
                            <img src="images/networking.svg" alt="Networking" width="334" height="72">
                            <br>
                            <br>
                            <p>Our smart 1-on-1 networking platform will enable you to find and connect with the
                                most relevant potential mentors, investors and collaborators to help you get ahead.
                            </p>
                        </div>
                        <div class="col-lg-4 col-xs-12 funding-text">
                            <img src="images/awareness.svg" alt="Awareness" width="334" height="72">
                            <br>
                            <br>
                            <p>Get your message heard with a platform to showcase your value to a global audience.
                                Get known as among your founder peers and investment community as one to watch.
                            </p>
                        </div>
                        <!-- </a> -->
                    </div>
                </div>
            </div>

        </section>
        <section>
            <img src="images/border.svg" alt="border" width="100%" height="66">
        </section>
        <section>
            <section id="schedule" class="section-with-bg">
                <div class="container-fluid card-container">
                    <div class="section-header">
                        <img src="images/startup-logo.svg" alt="Start Ups" width="158" height="46">
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card new-card" >
                                <div class="img-header">
                                    <img class="card-img-top" src="images/startup_logos/INIABiosciences-DraganaSavic.png"
                                        alt="Card image cap" style="
                                        width: 180px;
                                        height: 124px;
                                    ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">INA Biosciences</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">INIA Biosciences is a noninvasive, closed-loop, home use
                                        monitoring system that integrates biomarker monitoring with an ultrasound
                                        stimulator to reduce inflammation and dependence on immunosuppressant drugs.
                                        INIA envisions a future where medicine is more than a pill. We are building the
                                        future of bioelectronic medicine.
                                        Screen reader support enabled.</p>
                                    <a href="https://www.iniabiosciences.com/" class="card-link">Website</a>
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">
                                    <img class="card-img-top"
                                        src="images/startup_logos/200x50px-Senior-Deli-Logo_Blue-01 1.png"
                                        alt="Card image cap"
                                        style="position: absolute; top: 25%;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Senior Deli</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">Transforming every meal for the dysphagic with the latest
                                        science and highest quality. We provide texture-modified food solutions to those
                                        with swallowing or chewing difficulties. Our flagship ready-to-eat soft meals
                                        are made using proprietary ultrasound-assisted enzyme technology which softens
                                        food without affecting its form or nutrition.
                                        Screen reader support enabled.</p>
                                    <a href="https://www.seniordeli.com/en/" class="card-link">Website</a>
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header" id="oxyjet-header">
                                <img class="card-img-top" src="images/startup_logos/147465455.png" id="oxyjet" alt="Card image cap"
                                    style="
                    height: 196px;
                    width: 134px;
                ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">OXYJET</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">Due to COVID-19, about 14% of patients require respiratory
                                        assistance. But high price and lack of availability of respiratory assistive
                                        devices are causing unexpected deaths. We have developed a low-cost venturi CPAP
                                        that can be used with existing infrastructure in hospitals in a low-resource
                                        setting. We aim to provide early CPAP intervention in treatment with the device.
                                        To enable screen reader support, press ⌘+Option+Z To learn about keyboard
                                        shortcuts, press ⌘slash</p>
                                    <a href="https://mhealth.buet.ac.bd/oxyjet/" class="card-link">Website</a>
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">

                                <img class="card-img-top" src="images/startup_logos/Baby-FM 1.png" alt="Card image cap"
                                    style="
                    width: 180px;
                    height: 124px;
                ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Baby FM</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content. Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Natus eveniet sequi optio qui. Commodi sed fuga ex quos in deleniti
                                        voluptate.
                                        Voluptatibus quasi ducimus saepe voluptatum libero maiores amet necessitatibus?
                                    </p>
                                    <!-- <a href="#" class="card-link">Card link</a> -->
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">
                                    
                                    <img class="card-img-top"
                                        src="images/startup_logos/bright biotech-6 - Mohammad El Hajj 1 1.png"
                                        alt="Card image cap"
                                        style="
                    width: 180px;
                    height: 124px;
                "
                                        >
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Bright Biotech</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">Bright Biotech is a Contract Manufacturing and Development
                                        Organisation specialising in plant-based production of high-quality and
                                        affordable recombinant proteins for R&D, therapeutic, cosmeceutical, agri-food
                                        and industrial applications. Our method challenges the inherent disadvantages of
                                        the traditional expression systems. It is sustainable, highly scalable and is
                                        animal- and endotoxin-free.
                                        Screen reader support enabled.
                                    </p>
                                    <!-- <a href="#" class="card-link">Card link</a> -->
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">
                                    
                                    <img class="card-img-top" src="images/startup_logos/ImmtuneTherapies 1.png"
                                        alt="Card image cap"
                                        style="
                    width: 180px;
                    height: 124px;
                ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">ImmTune Therapies</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">ImmTune therapies is developing an off-the-shelf injectable
                                        cell therapy platform that re-engineers patient’s immune cells inside their
                                        bodies to treat disease. Our in vivo process produces more potent, scalable and
                                        cheaper cell therapies, accessible to a wider patient population. Our first
                                        product is designed to cater to the needs of cancer patients.
                                        Screen reader support enabled.</p>
                                    <a href="https://www.immtunetherapies.com/" class="card-link">Website</a>
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">
                                    
                                    <img class="card-img-top" src="images/startup_logos/koshkey final - Tanay Bhatt 1 1.png"
                                        alt="Card image cap" style="
                                        width: 180px;
                                        height: 124px;
                                    ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">KoshKey</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">The spread of Antimicrobial Resistance (AMR) infection is
                                        common in hospital setups, and in patients with weak immunity or comorbidities
                                        like diabetes. We have discovered a novel approach of inducing the cocktail of
                                        antimicrobial peptides from patients' own skin cells to fight off infections and
                                        promote wound healing.
                                        Screen reader support enabled.</p>
                                    <!-- <a href="#" class="card-link">Card link</a> -->
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">
                                    
                                    <img class="card-img-top" src="images/startup_logos/Limula_logo_vertical 1.png"
                                    alt="Card image cap" style="height: 124px;width: 232px;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Limula</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">Limula provides an enabling technology to biotech companies
                                        developing CAR T cells and other cell and gene therapies (CGT). Our patented
                                        solution is a robust and scalable manufacturing platform, facilitating the
                                        transition from pre-clinical development of these highly personalized cancer
                                        treatments to their routine use in the hospital
                                    </p>
                                    <a href="https://limula-biotech.com/" class="card-link">Lmula</a>
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">
                                    
                                    <img class="card-img-top"
                                        src="images/startup_logos/mirai-logo-color-fonsblanc - Kevin Schädler 1.png"
                                        alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">INA Biosciences</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">Mirai’s purpose is to make the invisible visible using patented
                                        technology (TRL 7), which enables smartphones to see light invisible to the
                                        human eye. Our first product (launch 2021) improves sun protection by
                                        visualising sunscreen coverage, providing superior but cheaper insight compared
                                        to existing solutions, with a target market of over 100M users in the EU.
                                        </pirai’s purpose is t>
                                        <a href="https://miraiskin.com/" class="card-link">Website</a>
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">
                                    
                                <img class="card-img-top" src="images/startup_logos/MYLEG_logo 3 1.png"
                                    alt="Card image cap" style="
                                    width: 132px;
                                    height: 124px;
                                ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">MyLeg</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">MYLEG improves walking in amputees by a wearable, non-invasive
                                        sensory feedback for their prosthesis</p>
                                    <a href="https://www.my-leg.com/" class="card-link">Website</a>
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">
                                    
                                    <img class="card-img-top" src="images/startup_logos/Neobe 2 1.png" alt="Card image cap" style="
                                    width: 180px;
                                    height: 124px;
                                ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Neobe Therapeutics</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">At Neobe Therapeutics we are engineering bacterial strains that
                                        can colonize the inner tumour core, allowing for the localized delivery of
                                        therapeutic agents that disrupt barriers to immune cell infiltration. By
                                        providing a safe and innovative way to remodel the local environment, our
                                        product will enable the success of immunotherapeutic strategies in current
                                        non-responders.</p>
                                    <!-- <a href="#" class="card-link">Card link</a> -->
                                </div>
                            </div>
                            <div class="card new-card" >
                                <div class="img-header">
                                    
                                    <img class="card-img-top" src="images/startup_logos/oysmobilityPNG 1 1.png"
                                        alt="Card image cap" style="
                                        width: 180px;
                                        height: 124px;
                                    ">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">OYS Mobility</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Cambridge, UK</h6>
                                    <p class="card-text">We are developing innovative technology and a healthcare
                                        delivery model to improve global access and affordability of custom prosthetic
                                        devices for people with limb loss. Our solution upends the status-quo and
                                        enables generalists to provide a similar quality of care currently limited to
                                        specialists. Success for us is improving the functionality and participation in
                                        society for people with limb loss.</p>
                                    <a href="https://www.oysmobility.com/" class="card-link">Website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <footer class="site-footer">
                    <div class="container">
                        <div class="row" style="
                        margin-left: 35px;
                    ">
                            <div class="col-xs-6 col-md-3">
                                <!-- Partners -->
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="container-fluid">
                        
                            <div class="ini-footer">
                                <div class="">
                                    <img src="images/ini-logo_blk.svg" alt="Invest in Innovation Logo">
                                    <div class="container">
                                        <!-- <div class="col-md-6"></div> -->
                                        <div class="row">
                                            <div>
                                                <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                                                    Innovation Forum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="social">
                                    <ul class="social-icons">
                                        <li><a class="twitter" href="https://twitter.com/Innovation_F"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a class="dribbble" href="https://www.instagram.com/innovation_forum/"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li><a class="linkedin" href="https://www.linkedin.com/company/innovation-forum"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
    
                                <div class="">
                                    <img src="./images/logo_innoforum.svg"/>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    </div>
    
                </footer>
            </section>


            </script>
            <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
            <script src="javascript/popper.js"></script>
            <script type="text/javascript"></script>
            <script src="Fontawesome/js/v4-shims.min.js"></script>
            <script src="Fontawesome/js/all.min.js"></script>
            <script src="Fontawesome/js/brands.min.js"></script>
            <script src="Fontawesome/js/conflict-detection.min.js"></script>
            <script src="Fontawesome/js/fontawesome.min.js"></script>
            <script src="lib/jquery/jquery-migrate.min.js"></script>
            <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/superfish/hoverIntent.js"></script>
            <script src="lib/superfish/superfish.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/venobox/venobox.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script type="text/javascript" src='schedule.js' id='schedule.js'></script>
            <script defer type='text/javascript' src='javascript/lazysizes.min.js'
                id='siteground-optimizer-lazy-sizes-js-js'>
            </script>
            <script defer type='text/javascript' src='javascript/priorityMenu.min.js' id='priority-menu-js'></script>
            <script type='text/javascript' src='javascript/wp-embed.min.js' id='wp-embed-js'>
            </script>
            <script type='text/javascript' src='javascript/countdown.js' id='countdown.js'></script>
            <script type='text/javascript' src='javascript/init.js' id='init.js'></script>
            <script>
                /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener &&
                    window
                    .addEventListener("hashchange", function () {
                        var t,
                            e = location.hash.substring(1);
                        /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (
                            /^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t
                            .focus())
                    }, !1);
            </script>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php
        $form->printIncludes('js');
        $form->printJsCode();
    ?>
</body>
</html>