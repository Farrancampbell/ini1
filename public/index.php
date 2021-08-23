<html lang="en-us">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no" />
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
                    <li class="nav-item"><a class="nav-link" href="startups.php">Start-Ups</a></li>
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
                    <source src="videos/mainpage.mp4">
                </video>
            </div>
            <div class="container">
                <div class="ini-logo"> <img src="images/ini_logo.svg" alt="Invest In Innovation Logo" width="330"
                        height="122"></div>
                <img src="images/Explore.svg" alt="Explore New Investments" width="654" height="177" style="
                            margin-bottom: 75px;">
                <section class="explore" style="margin-bottom: 75px;">
                    <p style=" width: 597px; height: 107px;">Join the Innovators Shaping the Future of Health in Our
                        Global 2-Day Virtual Conference</p>
                </section>
                <div class="d-flex justify-content-center">
                    <span class="buy-ticket-btn">
                        <a href="https://innovationforum.ticketspice.com/invest-in-innovation" target="_blank" rel="noopener noreferrer"><button class="btn btn-primary btn-lg active">Buy Tickets</button></a>
                    </span>
                </div>
        </header>
        <section class="section-about" style=" margin-top: 50px; margin-bottom: 50px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 img-what-is">
                        <img src="images/what-is.svg" alt="What Is Innovation Forum" width="374" height="117.6">
                    </div>
                    <div class="col-lg-8" style="
                        padding-left: 80px;
                        padding-right: 0px;
                    ">
                        <p class="whatis-if">Invest in Innovation brings together leading investors and founders from
                            around the health and technology space to set the agenda for the next stage in healthcare
                            innovation.
                            Meet the founders transforming health in the digital, biotech, pharma, AI and medtech space
                            and the investors and policy makers setting the stage to make them happen.<br>

                            <br>Over the past 8 years, the global Innovation Forum network has featured the most vibrant
                            health-tech ecosystems in Europe and as in proud to highlight Barcelona as one of the
                            fastest growing European ecosystems in 2021 in this 2 day virtual conference.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <img src="images/border.svg" alt="border" width="2000" height="66">
        </section>
        <section class="description_ini">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                            class="">
                                            Why Invest in Innovation ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse in collapse show" role="tabpanel"
                                    aria-labelledby="headingOne" style="">
                                    <div class="panel-body">
                                        <p>The past year has seen the largest globally coordinated efforts of
                                            scientists, policy makers and investment in history to tackle an
                                            unprecedented challenge. As we emerge on the other side, the question is:
                                            <b>where next?</b><br>

                                            <br>How do we take this momentum and combine it the maturation of gene
                                            technologies, AI, cell therapies and advanced devices to catapult the next
                                            generation of healthcare start-ups?<br>

                                            <br>Join the leading founders, investors and decision makers to scope out
                                            the next major opportunities and shape the next stage of health-related
                                            start-ups.</p>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Why Barcelona ?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse in collapse show" role="tabpanel"
                                            aria-labelledby="headingOne" style="">
                                            <div class="panel-body">
                                                <div class="">
                                                    <p>With the Catalonia ‘Bioregion’ seeing one company a week being
                                                        founded it is
                                                        clear that this ecosystem is a growing opportunity for
                                                        healthcare
                                                        investment. In recent years, it has developed to a stage of
                                                        maturity with
                                                        key infrastructure of entrepreneurial support and investment
                                                        capital
                                                        doubling over the last 2 years and a x5 increase in
                                                        international
                                                        investment. With 5+ years in the region, the Innovation Forum is
                                                        keen to
                                                        showcase this ecosystem which has positioned its health
                                                        innovation to the
                                                        top of its agenda.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="Invest In Innovation /1916-health-horizons-2019-306.png"
                            alt="Invest In Innovation Logo" width="572" height="572">
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonials">
            <div id="carouselTestimonials" class="carousel slide carousel-fade" data-ride="carousel" data-pause="true">
                <div class="carousel-inner">
                    <div class="carousel-item text-right active">
                        <div class="carousel-item-content">
                            <div class="testimonial-image">
                                <img width="240" height="361" src="images/castlett.svg"
                                    class="attachment-speakerlist size-speakerlist"
                                    alt="Invest In Innovation - Richard Castellet" loading="lazy"
                                    srcset="images/castlett.svg 240w, images/castlett.svg 150w, images/castlett.svg 300w, images/castlett.svg 768w, images/castlett.svg 900w"
                                    sizes="(max-width: 238px) 100vw, 238px" />
                            </div>
                            <div class="container text-left">
                                <div class="row justify-content-right justify-content-md-right">
                                    <div class="col-11 col-md-10 offset-lg-1 col-lg-8">
                                        <blockquote>“The Barcelona ecosystem has everything to consolidate itself as a
                                            world reference hub in #healthtech. We are entering a new phase of the
                                            ecosystem, of creation and growth, to the phase of specialization in sectors
                                            where there is excellence and international competitiveness. The Catalan
                                            health ecosystem, in the middle of the digital transformation process, at
                                            the crossroads of exponential technological disruption and new business
                                            models, is ready for this new phase of international consolidation”
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p class="author-name">Richard Castellet</p>
                                            <p class="author-position">Digital Transformation Officer at Gebro Pharma
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item text-right ">
                        <div class="carousel-item-content">
                            <div class="testimonial-image">
                                <img width="240" height="361" src="images/Dan.jpeg"
                                    class="attachment-speakerlist size-speakerlist"
                                    alt="Health Horizons Conference - Hermann Hauser" loading="lazy"
                                    srcset="images/Dan.jpeg 240w, images/Dan.jpeg 150w, images/Dan.jpeg 300w, images/Dan.jpeg 900w"
                                    sizes="(max-width: 238px) 100vw, 238px" />
                            </div>
                            <div class="container text-left">
                                <div class="row justify-content-center justify-content-md-center">
                                    <div class="col-11 col-md-10 offset-lg-1 col-lg-8">
                                        <blockquote>“During the recent decade, Barcelona has grown to be an acknowledged
                                            health innovation hub. Its thriving start-up ecosystem, together with
                                            world-leading organisations make open numerous possibilities for
                                            collaborations and investments.
                                            I believe an event like Invest in Innovation is necessary in order to build
                                            long standing partnerships and showcase how much Barcelona can offer to the
                                            world.”
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p class="author-name">Daniel Moreno Martínez, PhD, FHEA</p>
                                            <p class="author-position">Head of the Innovation Programme</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item text-right ">
                        <div class="carousel-item-content">
                            <div class="testimonial-image">
                                <img width="240" height="361" src="images/andy-richards.jpg"
                                    class="attachment-speakerlist size-speakerlist"
                                    alt="Health Horizons Conference - Hermann Hauser" loading="lazy"
                                    srcset="images/andy-richards.jpg 240w, images/andy-richards.jpg 150w, images/andy-richards.jpg 300w, images/andy-richards.jpg 900w"
                                    sizes="(max-width: 238px) 100vw, 238px" />
                            </div>
                            <div class="container text-left">
                                <div class="row justify-content-center justify-content-md-center">
                                    <div class="col-11 col-md-10 offset-lg-1 col-lg-8">
                                        <blockquote>““Exciting, really dynamic atmosphere and I look forward to be
                                            involved in these events in the future”
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p class="author-name">Dr. Andy Richards</p>
                                            <p class="author-position"> Chairman of 4 biotech companies and founder of
                                                Cambridge Angels</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item text-right ">
                        <div class="carousel-item-content">
                            <div class="testimonial-image">
                                <img width="240" height="361" src="images/Dr-Hermann-Hauser.jpg"
                                    class="attachment-speakerlist size-speakerlist"
                                    alt="Health Horizons Conference - Hermann Hauser" loading="lazy"
                                    srcset="images/Dr-Hermann-Hauser.jpg 240w, images/Dr-Hermann-Hauser.jpg 150w, images/Dr-Hermann-Hauser.jpg 300w, images/Dr-Hermann-Hauser.jpg 900w"
                                    sizes="(max-width: 238px) 100vw, 238px" />
                            </div>
                            <div class="container text-left">
                                <div class="row justify-content-center justify-content-md-center">
                                    <div class="col-11 col-md-10 offset-lg-1 col-lg-8">
                                        <blockquote>“I was blown away! I am so impressed that there are so many good
                                            companies now”
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p class="author-name">Dr. Hermann Hauser</p>
                                            <p class="author-position">Founder & Director at Amadeus Capital Partners
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="arrows">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-center">
                                <div class="col-11 col-md-10 offset-lg-1 col-lg-8">
                                    <a class="carousel-control-prev" href="#carouselTestimonials" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselTestimonials" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="schedule" class="section-with-bg">
            <div class="container-fluid">
                <div class="section-header">
                    <img src="images/event_schedule.svg" alt="Invest In Innovation Logo" width="158" height="46">
                </div>
                <!-- <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" style="
                    padding-right: 100px;
                    margin-right: 150px;
                    ">
                            <a class="nav-link" style="
                        padding-right: 100px;" data-toggle="tab"><span class="day">Day 1 :</span><br>9 November
                                2021</a>
                        </li>
                        
                    </ul>
                </div> -->
                <div class="tab-content row justify-content-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6" style="
                            padding-left: 100px">
                                <ul class="nav nav-tabs" role="tablist">
                                    <!-- <li class="nav-item" style="
                            padding-right: 100px;
                            margin-right: 150px;
                            "> -->
                                    <li class="nav-item">
                                        <a class="nav-link" style="
                                padding-left: 0;" data-toggle="tab"><span class="day">Day 1 :</span><br>09 November
                                            2021</a>
                                    </li>
                                </ul>
                                <h4 class="session">Session 1</h4>
                                <br>
                                <h2 class="session-title">Barcelona as an Innovation Hub</h2>
                                <br>
                                <p class="session-info">Hear from the leaders who have shaped Barcelona into a major
                                    European innovation hub. From high-level policy makers to successful
                                    entrepreneurs, hear the stories of how this ecosystem has planted its roots and
                                    now rapidly growing and flourishing.</p>
                                <br>
                                <h4 class="session">Break</h4>
                                <br>
                                <h3 class="session-title">Break and Networking</h3>
                                <br>
                                <h4 class="session">Session 2</h4>
                                <br>
                                <h2 class="session-title">Investment in Health-tech and Life Science</h2>
                                <br>
                                <p class="session-info">We explore the current investment vehicles and opportunities
                                    both in the Barcelona region and more broadly in the European landscape in the
                                    health tech, bio tech and med tech sectors. Discover key considerations in
                                    investing in different ecosystems, the developing regulations being introduced
                                    to address new challenges, and how these may affect your firm/company. </p>
                            </div>
                            <div class="col-md-6" style="
                                padding-left: 100px">
                                <ul class="nav nav-tabs" role="tablist">
                                    <!-- <li class="nav-item" style="
                                padding-right: 100px;
                                margin-right: 150px;
                                "> -->
                                    <li class="nav-item">
                                        <a class="nav-link" style="
                                    padding-left: 0;" data-toggle="tab"><span class="day">Day 2 :</span><br>10
                                            November
                                            2021</a>
                                    </li>
                                </ul>
                                <h4 class="session">Session 3</h4>
                                <br>
                                <h2 class="session-title">Emerging Trends in Health</h2>
                                <br>
                                <br>
                                <p class="session-info">We gather key opinion leaders in both academia, successful
                                    start-ups and leading companies to discuss the vast emergence new opportunities
                                    across biotech, health tech and med tech fueled by innovative research and
                                    visionary entrepreneurs.</p>
                                <br>
                                <h4 class="session">Break</h4>
                                <br>
                                <h3 class="session-title">Break and Networking</h3>
                                <br>
                                <h4 class="session">Session 4</h4>
                                <br>
                                <h2 class="session-title">Start-up Pitching</h2>
                                <br>
                                <br>
                                <p class="session-info">Hear from the most talented and passionate founders aspiring
                                    to transform the industry with their groundbreaking technologies. From seed to
                                    Series A, we’ll present a range of opportunities culminating in our IMAGINE IF!
                                    accelerator final where our global top 15 pitch to win non-dilutive funding
                                    having been whittled down from almost 200 global applicants through multiple
                                    stages of evaluation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="javascript/slick.js"></script>
        <section>
            <img src="images/border.svg" alt="border" width="2000" height="66">
        </section>
        <section id="advisors" class="section-with-bg">
            <div class="container-fluid">
                <div class="section-header">
                    <div class="venue">
                        <img src="images/advisors.svg" alt="Invest In Innovation Logo" width="158" height="46">
                    </div>
                </div>
            </div>
            <div class="row justify-content-between" style="margin-left: 60px;">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="images/Daniel-Oliver-Capital-Cell.jpg" alt="Daniel Oliver"
                            style="width:50%;margin-left: 100px;margin-top: 25px;">
                        <div class="advisor-caption" style="
                      padding-top: 50px">
                            <h3>Daniel Oliver</h3>
                            <h6>CEO, Capital Cell</h6>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="thumbnail">
                        <img src="images/Daniel+Moreno+Martinez.jpg" alt="Dr. Daniel Moreno Martinez"
                            class="d-flex justify-content-center"
                            style="width:50%;margin-left: 100px;margin-top: 25px;">
                        <div class="advisor-caption" style="
                      padding-top: 50px">
                            <h3>Dr. Daniel Moreno</h3>
                            <h6>Head of the innovation programme, Hospital Germans Trias i Pujol </h6>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="images/ignasi heras.jpg" alt="Ignasi Heras"
                            style="width:50%;margin-left: 100px;margin-top: 25px;">
                        <div class="advisor-caption" style="
                      padding-top: 50px">
                            <h3>Ignasi Heras</h3>
                            <h6>VC investor</h6>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </section>
        <section>
            <img src="images/border.svg" alt="border" width="2000" height="66">
        </section>
        <section class="section-default mailing-list">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-10">
                        <div class="row">
                            <div class="col-lg-6 mailing-list-description">
                                <h3 id="contactus" class="section-title">JOIN OUR MAILING LIST</h3>
                                <p>Stay up to date with news on Invest In Innovation, including an updated schedule and
                                    speaker
                                    announcements</p>
                            </div>
                            <div class="col-lg-6 pt-2">
                                <div class="form-group">
                                    <input id="subscribe_email" class="form-control" type="text" placeholder="Email">
                                    <div class="invalid-feedback"> Please complete your email.</div>
                                </div>
                                <div class="form-group">
                                    <input id="subscribe_company" class="form-control" type="text"
                                        placeholder="Company name">
                                    <div class="invalid-feedback"> Please complete your company name.</div>
                                </div>
                                <div class="form-group">
                                    <input id="subscribe_job" class="form-control" type="text" placeholder="Job title">
                                    <div class="invalid-feedback"> Please complete your Job title.</div>
                                </div>
                                <div class="text-right">
                                    <button id="subscribe_button" class="btn btn-outline-primary" href="">Sign me
                                        up</button>
                                </div>
                            </div>
                        </div>
                        <div id="subscribe_ok" class="valid-feedback"> Thanks!</div>
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
                                    <li><a class="twitter" href="https://twitter.com/Innovation_F"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li><a class="dribbble" href="https://www.instagram.com/innovation_forum/"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li><a class="linkedin" href="https://www.linkedin.com/company/innovation-forum"><i
                                                class="fa fa-linkedin"></i></a></li>
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
        
</body>

</html>