<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.css"
        integrity="sha512-PYSQaQBKTu066xiq+XES4zNfKps3Za9xFsPH97MuEaP53a4kNFed/Q7lW539jALMETHApKj7/CZ1ac9d0NBzZA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/mmenu.css">
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="https://www.google.com/recaptcha/api.js?render=6Le7UhYcAAAAAEOuG9Vtp_zFl16jM6phZDRMYYn0"></script>
    <script>
        grecaptcha.ready(function() {
        //onload
        grecaptcha.execute('6Le7UhYcAAAAAEOuG9Vtp_zFl16jM6phZDRMYYn0').then(function(token) {
              console.log(token);
                // document.getElementById('token').value = token;
               var list = document.querySelectorAll('.token');
                var n;
                for (n = 0; n < list.length; ++n) {
                    list[n].value= token;
                } 

        });
    });
    setInterval(function() {
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le7UhYcAAAAAEOuG9Vtp_zFl16jM6phZDRMYYn0').then(function(token) {
                // console.log(token);
                // document.getElementById('token').value = token;
                var list = document.querySelectorAll('.token');
                var n;
                for (n = 0; n < list.length; ++n) {
                    list[n].value = token;
                }

            });
        });
    }, 120 * 1000);
    </script>

    <title>Pakistan Housing Finance Company</title>
</head>

<body>

    <body>
        <main>

            <header class="header">
                <div class="header__top grid grid-col90 block">
                    <div class="block__inner">
                        <ul class="list list-inline">
                            <li class="list__item"><a href="./contact.php">contact us</a></li>
                            <li class="list__item"><a href="#">complaint</a></li>
                            <li class="list__item"><a href="./faq.html">FAQ</a></li>
                            <li class="list__item"><a href="#">sitemap</a></li>
                            <li class="list__item"><a href="#"><b>EN</b></a></li>
                            <li class="list__item"><a href="#"><b>اردو</b></a></li>
                        </ul>
                    </div>
                </div>
                <div class="header__bottom grid grid-col90 block">
                    <div class="block__inner block1x2">
                        <div class="logo">
                             <a href="./index.php"><img src="./webImages/PHFC-1.png" alt=""></a>
                        </div>
                        <nav>
                            <div class="main_mmenu">
                                <div id="page">
                                    <nav id="menu">
                                        <ul>
                                            <li><a href="./index.php">Home</a></li>
                                            <li><a href="./about.html">About Us</a>
                                                <div>
                                                    <ul>
                                                        <li><a href="./about.html">Mission </a></li>
                                                        <li><a href="./about.html">Vision</a></li>
                                                        <li><a href="./about.html">Core Value</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Product
                                                </a>
                                                <div>
                                                    <ul>
                                                        <li><a href="./islamicFinance.html">Islamic Finance </a>
                                                        </li>
                                                        <li><a href="./features.html"> Features</a></li>
                                                        <li><a href="./concept.html"> Concept</a></li>
                                                        <li><a href="./home_purchase.html">Home Purchase</a></li>
                                                        <li><a href="./home_construction.html">Home Construction</a>
                                                        </li>
                                                        <li><a href="./home_renovation.html">Home Renovation</a></li>
                                                        <li><a href="./eligibility.php">Eligibility Criteria</a></li>
                                                        <li><a href="./index.html">Application Process <br>
                                                                Documentation</a></li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list__item"><a href="./MGMP.html">MGMP</a>
                                                <div class="subMenu">
                                                    <ul class="list">
                                                        <li class="list__item"><a href="./MGMP.html">Mera Ghar Mera
                                                                Pakistan </a>
                                                        </li>
                                                        <li class="list__item"><a href="./products.html">Product
                                                                Features</a></li>
                                                        <li class="list__item"><a href="./basic.html">Basic
                                                                Eligibility</a></li>
                                                        <li class="list__item"><a href="./loan.html">Instalment
                                                                Calculator</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list__item"><a href="./investor.php"> Investor Relations</a>
                                            </li>
                                            <li class="list__item"><a href="./career.php">careers</a></li>

                                            <li class="list__item"><a href="./media_center.html">Media Center</a></li>
                                        </ul>
                                    </nav>
                                    <div class="menu_icn">
                                        <a href="#menu" class="menu_icn_">
                                            <img src="webImages/menu.png" alt="" title="menu">
                                        </a>
                                    </div>
                                    <!--menu_icn end here-->
                                </div>
                                <!-- page close -->
                            </div>
                            <ul class="list list-inline">
                                <li class="list__item active"><a href="./index.php">Home</a></li>
                                <li class="list__item"><a href="./about.html">About Us</a>
                                    <div class="subMenu">
                                        <ul class="list">
                                            <li class="list__item"><a href="./about.html">Mission </a></li>
                                            <li class="list__item"><a href="./about.html">Vision</a></li>
                                            <li class="list__item"><a href="./about.html">Core Value</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list__item"><a href="#">Product
                                    </a>
                                    <div class="subMenu">
                                        <ul class="list">
                                            <li class="list__item"><a href="./islamicFinance.html">Islamic Finance </a>
                                            </li>
                                            <li class="list__item"><a href="./features.html"> Features</a></li>
                                            <li class="list__item"><a href="./concept.html"> Concept</a></li>
                                            <li class="list__item"><a href="./home_purchase.html">Home Purchase</a></li>
                                            <li class="list__item"><a href="./home_construction.html">Home
                                                    Construction</a></li>
                                            <li class="list__item"><a href="./home_renovation.html">Home Renovation</a>
                                            </li>
                                            <li class="list__item"><a href="./eligibility.php">Eligibility Criteria</a>
                                            </li>
                                            <li class="list__item"><a href="./documentation.html">Application Process
                                                    <br> Documentation</a></li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="list__item"><a href="./MGMP.html">MGMP</a>
                                    <div class="subMenu">
                                        <ul class="list">
                                            <li class="list__item"><a href="./MGMP.html">Mera Ghar Mera Pakistan </a>
                                            </li>
                                            <li class="list__item"><a href="./products.html">Product Features</a></li>
                                            <li class="list__item"><a href="./basic.html">Basic Eligibility</a></li>
                                            <li class="list__item"><a href="./loan.html">Instalment Calculator</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="list__item"><a href="./investor.php"> Investor Relations</a></li>
                                <li class="list__item"><a href="./career.php">careers</a></li>

                                <li class="list__item"><a href="./media_center.html">Media Center</a></li>
                                <li class="list__item"> <a href="#" class="btn btn-primary">Account Opening </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <section class="banner">
                <div class="left">
                    <div class="left__inner">
                        <div class="swiper mySwiper">

                            <div class="swiper-wrapper">

                                <div class="banner__text swiper-slide">
                                    <h1>Your <span>Dream House</span>
                                        with our <span>Partnership</span></h1>
                                    <p>PHFC is offering Islamic housing finance facilities to the allotment holders of
                                        The
                                        Lake
                                        City
                                        Holdings, and that the PHFC’s housing finance products are Sharia Compliant.</p>
                                    <a href="./products.html" class="btn btn-primary">View our products</a>

                                </div>
                                <!-- <div class="banner__text swiper-slide">

                                <h1>Mera <span>Ghar,
                                    </span>
                                    Mera <span>Pakistan</span></h1>
                                <p>An initative of the Government of Pakistan. PHFC extends
                                    full support to this Affordable & Low Cost Housing Scheme
                                    for thepeople of Pakistan.</p>
                                <div class="btn btn-primary">View our products</div>
                            </div> -->
                                <div class="banner__text swiper-slide">


                                    <h1> <span>Islamic</span>
                                        mode of <span>Financing</span></h1>
                                    <p>PHFC’s housing finance products are Sharia Compliant and are vetted by Al Hilal
                                        Shariah Advisors for Shariah Compliance. </p>
                                    <a href="./products.html" class="btn btn-primary">View our products</a>
                                </div>
                                <div class="banner__text swiper-slide">


                                    <h1> <span> Easy selection</span>
                                        of
                                        financing tenure </h1>
                                    <p>The Customer will set an undivided share of the property (Asset)
                                        of financing Tenure from 3 years to 10 years. The aggregate Finance Burden
                                        should
                                        not be more than 50% of net income.</p>
                                    <a href="./products.html" class="btn btn-primary">View our products</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="right">
                    <div class="right__inner">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <img src="./webImages/banner-1.png" alt="">
                                </div>
                                <!-- <div class="swiper-slide">


                                <img src="./webImages/banner-2.png" alt="">
                            </div> -->
                                <div class="swiper-slide">


                                    <img src="./webImages/banner-3.png" alt="">
                                </div>
                                <div class="swiper-slide">


                                    <img src="./webImages/banner-4.png" alt="">
                                </div>
                                <!-- <div class="slider__btn">
                                <a href="#" class="left"><i class="fa fa-arrow-left"></i></a>
                                <a href="#" class="right"><i class="fa fa-arrow-right"></i></a>
                            </div> -->
                            </div>
                        </div>
                        <img src="./webImages/123a.png" alt="">
                    </div>

            </section>
            <section class="commonSection grid grid-col80 block">
                <div class="block__inner block1x2">
                    <img src="./webImages/shape2.png" alt="">
                    <div class="left" data-aos="fade-right">
                        <h6>HOME FINANCE LOANS</h6>
                        <h2>Islamic mode
                            of Financing</h2>
                        <p>
                            PHFC’s housing finance products are Sharia Compliant and are vetted by Al Hilal Shariah
                            Advisors
                            for Shariah Compliance. The Shariah Council of Al Hilal is headed by Mufti Irshad Ahmad
                            Aijaz
                            Sahab. Housing finance can be utilized for the purposes of Purchase, Construction and
                            Renovation
                            of your Home.
                        </p>

                        <a href="#" class="btn btn-primary">read more</a>
                    </div>
                    <div class="right" data-aos="fade-left">
                        <div class="round">
                            <img src="./webImages/islamiicFinance.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="block__inner block1x2">
                    <img src="./webImages/shape3.png" alt="">
                    <div class="left" data-aos="fade-right">
                        <h6>LOW COST HOUSING FINANCE</h6>
                        <h2>Mera Ghar
                            Mera Pakistan </h2>
                        <p>Easy Home - Low Cost Housing Finance Scheme offers convenient and affordable options to
                            fulfill
                            your needs in a completely Shariah-compliant way using Diminishing Musharakah mode of
                            financing.
                        </p>
                        <a href="#" class="btn btn-primary">read more</a>
                    </div>
                    <div class="right" data-aos="fade-left">
                        <div class="round">
                            <img src="./webImages/3f066d91765b7702b8464ef42c144987.jpg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="callout">
                <div class="callout__inner grid grid-col90 block">
                    <video id="myVideo" poster="" loop="true" autoplay="true" muted="true">
                        <source src="./webImages/Pexels Videos 2282013.mp4" type="video/mp4">
                    </video>
                    <div class="block__inner block1x2">
                        <div class="left" data-aos="fade-right">
                            <h2><b>Naya Pakistan Housing Program</b>
                                Rs 30 billion subsidy for the
                                Naya Pakistan Housing Project
                                for first <b>100,000 houses</b></h2>
                            <div class="btn btn-primary"> get more details</div>
                        </div>
                        <div class="right">
                            <img src="./webImages/nayaPakistan.png" alt="">
                        </div>
                    </div>
                </div>

            </section>
            <section class="process grid grid-col80 ">
                <div class="block__inner">
                    <h2>Quick & Easy Loan Process</h2>
                    <p>Our focus is Middle Income and Lower Middle Income Group</p>
                    <div class="cards">
                        <div class="card" data-aos-delay="300" data-aos="fade-right">
                            <img src="./webImages/processIcon1.png" alt="">
                            <h4>apply</h4>
                        </div>
                        <div class="card" data-aos-delay="400" data-aos="fade-right">
                            <img src="./webImages/processIcon2.png" alt="">
                            <h4>Review</h4>
                        </div>
                        <div class="card" data-aos-delay="500" data-aos="fade-right">
                            <img src="./webImages/processIcon3.png" alt="">
                            <h4>Process</h4>
                        </div>
                        <div class="card" data-aos-delay="600" data-aos="fade-right">
                            <img src="./webImages/processIcon4.png" alt="">
                            <h4>Sign</h4>
                        </div>
                        <div class="card" data-aos-delay="700" data-aos="fade-right">
                            <img src="./webImages/processIcon5.png" alt="">
                            <h4>Funds</h4>
                        </div>

                    </div>
                </div>
            </section>
            <section class="faq grid grid-col70 block">
                <img src="./webImages/shape4.png" alt="">
                <img src="./webImages/shape5.png" alt="">
                <div class="block__inner">
                    <h4>Frequently Asked Questions</h4>
                    <p>mark up Subsidy Scheme for Housing Finance </p>
                    <div class="faq__inner">
                        <div class="question" data-aos-delay="300" data-aos="fade-up">
                            <div class="left">
                                <p>Can financing under the facility be utilized for the purchase of plot?</p>
                            </div>
                            <div class="right">
                                <p>A plot of land can only be purchased under the facility if a house into be
                                    constructed on
                                    the plot and financing is meant both for purchase of land and construction thereon
                                    provided all other terms and conditions of the facility including maximum price of
                                    house
                                    and maximum loan under the relevant tier are complied with.</p>
                            </div>
                        </div>

                    </div>
                    <a href="./faq.html" class="btn btn-primary w-100">Read more FAQs</a>
                </div>
            </section>
            <section class="reports grid grid-col90 block">
                <div class="block__inner block1x2">
                    <div class="left">
                        <h6> FINANCIAL REPORTS</h6>
                        <h2>Investor Relations</h2>
                        <p>Read and subscribe to our latest industry
                            news and updates. Click below for More</p>
                        <a href="./investor.html" class="btn btn-primary">View All Reports</a>
                    </div>
                    <div class="right grid block1x3">
                        <div class="card" data-aos-duration="2000" data-aos="fade-left">
                            <div class="card__img">
                                <img src="./webImages//report1.png" alt="">
                            </div>
                            <div class="card__body">
                                <a href="#" class="btn btn-primary">download</a>
                            </div>
                        </div>
                        <div class="card" data-aos-duration="2000" data-aos="fade-left">
                            <div class="card__img">
                                <img src="./webImages//report2.png" alt="">
                            </div>
                            <div class="card__body">
                                <a href="#" class="btn btn-primary">download</a>
                            </div>
                        </div>
                        <div class="card" data-aos-duration="2000" data-aos="fade-left">
                            <div class="card__img">
                                <img src="./webImages//report3.png" alt="">
                            </div>
                            <div class="card__body">
                                <a href="#" class="btn btn-primary">download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="news grid grid-col80 block">
                <div class="block__inner">
                    <h2>In the News</h2>
                    <div class="cards grid block1x3">
                        <div class="card" data-aos-delay="300" data-aos-duration="1000" data-aos="fade-up">
                            <div class="card__img">
                                <img src="./webImages/new1.png" alt="">
                            </div>
                            <div class="card__body">
                                <p>We are committed to ensuring financial inclusion to all the people. Developing the
                                    housing sector is our main objective and at the same time.</p>
                                <a href="#" class="newsBtn"><i class="fas fa-plus"></i> readmore </a>
                            </div>
                        </div>
                        <div class="card" data-aos-delay="400" data-aos-duration="1000" data-aos="fade-up">
                            <div class="card__img">
                                <img src="./webImages/news2.png" alt="">
                            </div>
                            <div class="card__body">
                                <p>We are committed to ensuring financial inclusion to all the people. Developing the
                                    housing sector is our main objective and at the same time.</p>
                                <a href="#" class="newsBtn"><i class="fas fa-plus"></i> readmore </a>
                            </div>
                        </div>
                        <div class="card" data-aos-delay="500" data-aos-duration="1000" data-aos="fade-up">
                            <div class="card__img">
                                <img src="./webImages/news3.png" alt="">
                            </div>
                            <div class="card__body">
                                <p>We are committed to ensuring financial inclusion to all the people. Developing the
                                    housing sector is our main objective and at the same time.</p>
                                <a href="#" class="newsBtn"><i class="fas fa-plus"></i> readmore </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <section class="support grid grid-col80 block">
                    <div class="block__inner">
                        <h2>Customer Support</h2>
                        <p>We are devoted to solving your queries and concerns, quickly and to your satisfaction.</p>
                        <div class="mediaBlock grid block1x4">
                            <div class="media" data-aos-duration="1000" data-aos-delay="200" data-aos="fade-up">
                                <div class="media__img">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="media__body">
                                    <p>On Call Support</p>
                                    <h5>+92-42-35325855</h5>
                                </div>
                            </div>
                            <div class="media" data-aos-duration="1000" data-aos-delay="250" data-aos="fade-up">
                                <div class="media__img">
                                    <i class="fas fa-at"></i>
                                </div>
                                <div class="media__body">
                                    <p>Email</p>
                                    
                                    <h5><a href="mailto:info@phfcl.com">info@phfcl.com</a></h5>
                                </div>
                            </div>
                            <div class="media" data-aos-duration="1000" data-aos-delay="300" data-aos="fade-up">
                                <div class="media__img">
                                    <i class="fas fa-comment-dots"></i>
                                </div>
                                <div class="media__body">
                                    <p>For Any Query</p>
                                    <h5><a href="./contact.php"> Click Here </a></h5>
                                </div>
                            </div>
                            <div class="media" data-aos-duration="1000" data-aos-delay="350" data-aos="fade-up">
                                <div class="media__img">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="media__body">
                                    <p>Office Location</p>
                                    <h5><a href="#"> Locate Us </a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <footer class="footer">
                <div class="footer__top grid grid-col90 block">
                    <div class="block__inner block1x2">
                        <div class="left" data-aos="fade-right">
                            <div class=""><a href="#"> <img src="./webImages/securitiesLogo.png" alt=""></a></div>
                            <div class=""><a href="#"> <img src="./webImages/jamapPunji.png" alt=""></a></div>
                            <div class=""><a href="#" target="_blank">
                                    <img src="./webImages/nayaPakistanFooter.png" alt=""></a></div>

                        </div>
                        <div class="right" data-aos="fade-left">
                            <ul class="list list-inline">
                                <li class="list__item"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list__item"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li class="list__item"><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__middle grid grid-col90 block">
                    <div class="block__inner block1x2">
                        <div class="left" data-aos="fade-right">

                            <ul class="list list-inline">
                                <li class="list__item"><a href="./index.php">Home</a></li>
                                <li class="list__item"><a href="./about.html">about us</a></li>
                                <li class="list__item"><a href="./products.html">products</a></li>
                                <li class="list__item"><a href="./MGMP.html">MGMP</a></li>
                                <li class="list__item"><a href="investor.html">Investor Relations</a></li>
                                <li class="list__item"><a href="./career.php">careers</a></li>
                                <li class="list__item"><a href="media_center.html">media center</a></li>
                                <li class="list__item"><a href="./contact.php">contact us</a></li>
                            </ul>
                        </div>
                        <div class="right" data-aos="fade-left">
                            <a href="#" class="btn btn-primary">Account Opening</a>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom grid grid-col90 block">
                    <div class="block__inner">
                        <div class="footer__bottom--inner">
                            <div class="footer__logo">
                                <img src="./webImages/footerLogo.png" alt="">
                            </div>
                            <nav>
                                <ul class="list list-inline">
                                    <li class="list__item"><a href="./contact.php">Feedback</a></li>
                                    <li class="list__item"><a href="#">site map</a></li>
                                    <li class="list__item"><a href="#">privacy policy</a></li>
                                    <li class="list__item"><a href="#">copyright policy</a></li>
                                    <li class="list__item"><a href="#">disclaimer</a></li>
                                </ul>
                                <p>Copyright © 2022 Pakistan Housing Finance Company. All Rights Reserved. | </p>
                                <p>Website Last Updated: <span>12-01-2022</span></p>
                            </nav>
                        </div>

                        <div class="imedia">
                            <a href="http://imedia.com.pk/" target="_blank" title="Karachi Web Designing Company"
                                class="design_develop">Design &amp; Developed by:</a>
                            <a href="http://imedia.com.pk/" target="_blank" title="Web Designing Company Pakistan"><img
                                    src="webImages/imedia.png" alt="">
                            </a>
                            <div class="m_text">
                                <a href="http://imedia.com.pk/" target="_blank"
                                    title="Website Design by Interactive Media">Interactive Media</a>
                                <a href="http://imediaintl.com/" target="_blank"
                                    title="International Web Development Company" class="digital_media">DIGITAL MEDIA ON
                                    DEMAND Globally</a>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>

            <div class="cb-buttonLeft">
                <a href="#" id="cb-img">
                    <div class="cb-circle-img">
                        <img src="./webImages/phone.png" alt="">
                    </div>
                </a>
            </div>
             <div class="cb-buttonRight">
                <a href="#">
                <div class="cb-circle-img">
                    <img src="./webImages/watsapp.png" alt="">
                    </a>
                </div>
            </div>

            <div class="requestt">
                <div class="request" id="form">
                    <div class="grid grid-col70">
                        <div class="block__inner">
                            <div class="inner_heading txt-center">
                                <h5>Contact Us</h5>
                                <a href="#" class="contact-btn" id="cb-form"><i class="fa-solid fa-xmark"></i></a>
                            </div>
                            <div class="inner_main">
                                
                                <?php
$pMmsg = '';
// $contactAllow = true;
if(isset($_POST) && !empty($_POST) ){ ?>
        <?php
        $token = $_POST['token'];
        $secretKey = '6Le7UhYcAAAAAC0BEyyO3TJKK9ZB0HcP4a3tRgFB';
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        
        if(intval($responseKeys["success"]) !== 1) {
                // echo var_dump($responseKeys);
                echo "<div style='text-align: center;
                padding: 20px; margin-bottom: 20px; border: 1px solid transparent;
                border-radius: 4px; background-color: #d9edf7; border-color: #bce8f1;'>Your form hasn't been submit.</div>";
        }
        else{
        // if($token->getToken("CV")){
                 $msg='<table border="1">';
                 foreach($_POST['form'] as $key=>$val){
                     $msg.= '
                         <tr>
                             <td>'.ucwords(str_replace("_"," ",$key)).'</td>
                             <td>'.$val.'</td>
                         </tr>
                     ';
                 }
                 $headers  = "From: Pakistan Housing Finance Company <mail@phfc.com>\n";
                 $headers .= "MIME-Version: 1.0\r\n";
                 $headers .= "Content-Type: text/html; charset=utf-8\n";
 
                 $subject = "Contact Information";

                 $msg.='<tr>	<td>Date Time</td>	<td>'.date("D j M Y g:i a").'</td> </tr>';
                 $msg.='</table>';
 
                 $to = "careers@phfcl.com";
                 if(mail($to,$subject.' Contact Form ',$msg, $headers)){
                     $nameUser =   $_POST['form']['name'];
                     $to =   $_POST['form']['email'];
     
                     $thankT = "Thanks for your interest. Our representative will get in touch with you.";
                     $message2="Hello ".ucwords($nameUser).",<br><br>
                     $thankT.<br><br>";
     
                     if(mail($to,'Employer Information',$thankT)){
                         $pMmsg = "$thankT";
                     } else {
                         $errorT = "An Error occured while sending your mail. Please Try Later";
                         $pMmsg = "$errorT";
                     }
                     echo "<div style='text-align: center;
                    padding: 20px; margin-bottom: 20px; border: 1px solid transparent;
                    border-radius: 4px; background-color: #d9edf7; border-color: #bce8f1;'>Your form has been submit successfully.</div>";
                 }
        // }
        }
}
?>
                                
                                <form action="" class="form" method="POST">
                                    <div class="grid block_1x2">
                                        <div class="input">
                                            <i class="fa fa-user"></i>
                                            <input type="text" name="form[FullName]" placeholder="Full Name*">
                                            <label>Full Name*</label>
                                        </div>
                                        <div class="input">
                                            <i class="fa fa-phone"></i>
                                            <input type="text" name="form[PhoneNumber]" placeholder="Phone Number*">
                                            <label>Phone Number*</label>
                                        </div>
                                        <div class="input">
                                            <i class="fa fa-envelope"></i>
                                            <input type="email" name="form[Email]" placeholder="Email*">
                                            <label>Email*</label>
                                        </div>
                                        <div class="input">
                                            <i class="fas fa-id-card"></i>
                                            <input type="text" name="form[CNICNumber]" placeholder="CNIC Number*">
                                            <label>CNIC Number*</label>
                                        </div>
                                    </div>
                                    <div class="input_">
                                        <i class="fas fa-envelope-open-text"></i>
                                        <textarea name="form[Message]" rows="2" placeholder="Message"></textarea>
                                        <label>Message</label>
                                    </div>
                                    <div class="input_">
                                        <input type="hidden" placeholder="" name="token" class="token" id="token">
                                    </div>
                                    <div class="button">
                                        <button type="submit" class="btn btn-primary">Submit Information</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js"
        integrity="sha512-pY1t/ADgTwbfGbw0+mRGd33EroA5YgRUWhQNFpPIAdBzyoSb38FsFrf4wBTcS3GFPdTfgtpRrbGCkdl2C2OXYA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/mmenu.min.all.js"></script>
    <script src="js/main.js"></script>

</html>