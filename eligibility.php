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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.css"
    integrity="sha512-PYSQaQBKTu066xiq+XES4zNfKps3Za9xFsPH97MuEaP53a4kNFed/Q7lW539jALMETHApKj7/CZ1ac9d0NBzZA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="css/mmenu.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/main.css" />
  
  <script src="https://www.google.com/recaptcha/api.js?render=6LcQIscZAAAAAGLytR5dCMklULVOUfxXZ6mRmDnc"></script>
    <script>
        grecaptcha.ready(function() {
        //onload
        grecaptcha.execute('6LcQIscZAAAAAGLytR5dCMklULVOUfxXZ6mRmDnc').then(function(token) {
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
            grecaptcha.execute('6LcQIscZAAAAAGLytR5dCMklULVOUfxXZ6mRmDnc').then(function(token) {
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
  <main class="sponser">
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
                                                        <li><a href="eligibility.php">Eligibility Criteria</a></li>
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
                                            <li class="list__item"><a href="eligibility.php">Eligibility Criteria</a>
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
        <section class="innerBanner">
      <div class="block__inner">
        <img src="./webImages/innerBanners/Eligibility_Criteria.png" alt="" />
        <h1>Eligibility <span> Criteria </span></h1>
      </div>
    </section>
    <section class="commonSection grid grid-col80 block">
      <div class="block__inner productDetails">
        <div class="inner_heading">
          <h3>Eligibility Criteria</h3>
        </div>
        <div class="inner_main">
          <ul class="list">
            <li class="list__item">
              <b>1. Pakistani, overseas Pakistani and AJK citizens</b>
            </li>
            <li class="list__item"><b>2. Valid CNIC/ NICOP</b></li>
            <li class="list__item">
              <b>3. Salaried Individuals</b>
              <ul class="list">
                <li class="list__item">a. Age 25 to 59 years</li>
                <li class="list__item">
                  b. Permanent employees / minimum 02 years of job experience
                </li>
                <li class="list__item">
                  c. Minimum gross salary of Rs. 100,000/- per month
                </li>
              </ul>
            </li>
            <li class="list__item">
              <b>4. Self Employed Professionals / Businessmen</b>
              <ul class="list">
                <li class="list__item">a. Age 25 to 59 years</li>
                <li class="list__item">
                  b. Minimum 03 years in current business / Profession
                </li>
                <li class="list__item">
                  c. Minimum monthly income Rs. 150,000/-
                </li>
              </ul>
            </li>
            <li class="list__item"><b>5. Clean ECIB/ CCIB/ Data Check</b></li>
            <li class="list__item">
              <b>6. Property to have valid title and approved building
                plans</b>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="commonSection grid grid-col70 block">
      <div class="block__inner">
        <div class="inner_heading">
          <h3>Get Contacted by an Easy Home Representative</h3>
          <p>
            Fill out the form below and you will be contacted by a PHFC
            representative.
          </p>
        </div>
        <div class="inner_main">
            
            <?php
$pMmsg = '';
// $contactAllow = true;
if(isset($_POST) && !empty($_POST) ){ ?>
        <?php
        $token = $_POST['token'];
        $secretKey = '6LcQIscZAAAAAIZtvX0F2x2SxjUdqi9JBNQZgoBm';
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
                 $headers  = "From: Pakistan Housing Finance Company <mail@phfcl.com>\n";
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
            
          <form action="" method="POST" class="form">
            <div class="input">
              <label>Name*</label>
              <input type="text" name="form[Name]" placeholder="Enter name here" />
            </div>
            <div class="input_">
              <div class="input">
                <label>Email</label>
                <input type="email" name="form[Email]" placeholder="Enter email here" />
              </div>
              <div class="input">
                <label>Phone Number*</label>
                <input type="text" name="form[PhoneNumber]" placeholder="Enter number here" />
              </div>
            </div>
            <div class="input">
              <label>City</label>
              <input type="text" name="form[CityName]" placeholder="Enter city here" />
            </div>
            <div class="input">
              <label for=""></label>
              <input type="text" name="form[information]" placeholder="What kind of information are you looking for?" />
            </div>
            <div class="input">
                        <input type="hidden" placeholder="" name="token" class="token" id="token">
                    </div>
            <div class="button">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
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