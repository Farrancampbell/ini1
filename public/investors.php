<?php
use phpformbuilder\Form;
use phpformbuilder\Validator\Validator;
session_start();
include_once rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . '/Invest-in-Innovation/phpformbuilder/Form.php';

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
$form = new Form('contact-form-1-modal', 'horizontal', 'novalidate');
// $form->setMode('development');
$form->startFieldset('Please fill in this form to contact us');
$form->addHtml('<p class="text-warning">All fields are required</p>');
$form->setCols(0, 12);
$form->addIcon('company-name', '<i class="fa fa-university" aria-hidden="true"></i>', 'before');
$form->addInput('text', 'company-name', '', '', 'placeholder=Name of Investment Firm, required');
$form->groupInputs('user-name', 'user-first-name');
$form->setCols(0, 6);
$form->addIcon('user-name', '<i class="fa fa-user" aria-hidden="true"></i>', 'before');
$form->addInput('text', 'user-name', '', '', 'placeholder=Name, required');
$form->addIcon('user-first-name', '<i class="fa fa-user" aria-hidden="true"></i>', 'before');
$form->addInput('text', 'user-first-name', '', '', 'placeholder=First Name, required');
$form->setCols(0, 12);
$form->addIcon('user-email', '<i class="fa fa-envelope" aria-hidden="true"></i>', 'before');
$form->addInput('email', 'user-email', '', '', 'placeholder=Company Email, required');
$form->setCols(0, 12);
$form->addIcon('linkd-in', '<i class="fab fa-linkedin-in"></i>', 'before');
$form->addInput('text', 'linkd-in', '', '', 'placeholder=Linkedin URL, required');
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
                    <source src="videos/investors.mp4">
                </video>
            </div>
            <div class="container">
                <div class="ini-logo"> <img src="images/ini_logo.svg" alt="Invest In Innovation Logo" width="330"
                        height="122"></div>
                <img src="images/investor-logo.svg" alt="Explore New Opportunities" width="654" height="177" style="
                            margin-bottom: 75px;">
                <section class="explore" style="margin-bottom: 75px;">
                    <p style=" width: 597px; height: 107px;">Join the most impactful investors to meet the most vibrant start-ups reinventing our health</p>
                </section>
                <div class="d-flex justify-content-center">
                    <?php
                if (isset($sent_message)) {
                    echo $sent_message;
                }
                ?>
                <a data-remodal-target="modal-target" class="btn btn-primary text-white btn-lg">Qualify as an Investor</a>
                <?php
                $form->render();
                ?>
            </div>
                </div>
        </header>
        <section class="section-about" style=" margin-top: 50px; margin-bottom: 50px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 img-what-is">
                        <img src="images/invest.svg" alt="What Is Innovation Forum" width="177" height="60.6">
                    </div>
                    <div class="col-lg-8" style="
                        padding-left: 80px;
                        padding-right: 0px;
                    ">
                        <p class="whatis-if">We carefully select the most promising founders of pre-seed to Series A start-ups to match our calibre influential VCs, angel investors, HNW, family offices participants.<br>

                            <br>From 1-on-1 partnering, roundtables and practical insights into emerging trends and opportunities emerging in the Barcelona ecosystem; our concise 2 day virtual programme will foster valued relationships and inform future decision making.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <img src="images/border.svg" alt="border" width="2000" height="66">
        </section>
        <section>
            <div class="container"style="
            margin-top: 50px;
            margin-bottom: 50px;
        ">
                    <div class="row">
                            <div class="col-lg-3">
                                <img src="images/dealflow.svg" alt="Dealflow" width="242" height="72" style="
                                margin-left: -30;
                            ">
                                <br>
                                <br>
                                <p>We gather and validate the most promising start-ups in the health-tech, med-tech and biotech space. Match with relevant ventures which match your investment thesis.
                                </p>
                            </div>
                            <div class="col-lg-3" style="
                    margin-right: 75px;
                ">
                                <img src="images/partnering.svg" alt="Partnering" width="242" height="72">
                                <br>
                                <br>
                                <p>We offer exclusive opportunities to network with other VCs, angel investors, high net worths and family offices to share ideas and potential co-investing opportunities.
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <img src="images/stayinformed.svg" alt="Stay Informed" width="242" height="72">
                                <br>
                                <br>
                                <p>Keep up to date with up and coming trends across the life science and health tech sectors from the early inventors to industry influencers. 
                                </p>
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
                    <div class="container">
                        <div class="row">
                            <div class="ini-footer">
                                <div class="col-md-12">
                                    <img src="images/ini-logo_blk.svg" alt="Invest in Innovation Logo">
                                    <div class="container">
                                        <div class="col-md-6"></div>
                                        <div class="row">
                                            <div>
                                                <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                                                    Innovation Forum.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                        <ul class="social-icons">
                                            <li><a class="twitter" href="https://twitter.com/Innovation_F"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="dribbble" href="https://www.instagram.com/innovation_forum/"><i class="fa fa-instagram"></i></a></li>
                                            <li><a class="linkedin" href="https://www.linkedin.com/company/innovation-forum"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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