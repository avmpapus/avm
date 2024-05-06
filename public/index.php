<?php
/*проверка устройства с которого пользователь зашел на сайт*/
$tablet_browser = 0;
$mobile_browser = 0;
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
  
 
?>



<!DOCTYPE html>
<html lang="en-US"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <link rel="alternate" hreflang="en" href="https://itdynamics.com.ua/" />
  <link rel="alternate" hreflang="uk" href="https://itdynamics.com.ua/" />
  <link rel="alternate" hreflang="x-default" href="https://itdynamics.com.ua/" />
<title>ItDynamics</title>
    <meta name="description" content="Transparent engineering for you" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="ItDynamics" />
  <meta property="og:description" content="Transparent engineering for you" />
  <meta property="og:site_name" content="itdynamics" />
  <meta property="article:modified_time" content="2023-03-04T12:38:19+00:00" />
  <link href="/public/css/bootstrap.min.css" rel="stylesheet">
  <link href="/public/css/animate.min.css" rel="stylesheet"> 
  <link href="/public/css/font-awesome.min.css" rel="stylesheet">
  <link href="/public/css/lightbox.css" rel="stylesheet">
  <link href="/public/css/main.css" rel="stylesheet">
  <link id="css-preset" href="public/css/presets/preset1.css" rel="stylesheet">
  <link href="public/css/responsive.css" rel="stylesheet">





  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <script src="/public/js/jquery-3.6.0.js"></script>
  <script src="/public/js/lang.js"></script>
  <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'> -->
  <link rel="shortcut icon" href="/public/images/ico.png">
</head><!--/head-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  /******geolocation*****/
/* $.ajax({
  url: "https://get.geojs.io/v1/ip/geo.js",
  dataType: "jsonp",
  jsonpCallback:"geoip",
  success: function(data) {
    document.getElementById("loc").innerHTML="IP: "+data.ip+"<br>Country: "+data.country+"<br>Country Code: "+data.country_code;
  }
}); */



var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbarbrand").style.top = "-10px";
    document.getElementById("navbarbrand").style.display="block";
    document.getElementById("navbarbrand").style.left = "230px";
  } else {
    document.getElementById("navbarbrand").style.top = "10px";
    document.getElementById("navbarbrand").style.display="none";
  }
  prevScrollpos = currentScrollPos;
}
</script>



<style type="text/css">
/* #navbarbrand{
    position: relative;
    left:1000px;
} */


img {
      margin: auto;
      display: block;
      width: 100%;
    }

.rounded-img{
width:100%;
padding:0.6em;
}



.card{
background-size:100%;
background:#ffffff;
height:370px;
display:block;
overflow: hidden;
}

.card:hover{

   overflow: visible;
   text-overflow: ellipsis;
    }

/**************/



#navbarbrand {
  /*background-color: #333; /* Черный цвет фона */
  position: fixed; /* Сделайте его липким/фиксированным */
  top: 10px; /* Оставайтесь на вершине */
  width: 16%; /* Полная ширина */
  transition: top 0.3s; /* Эффект перехода при скольжении вниз (и вверх) */
  left:450px;
  /*left:695px;*/
}

#navbarbrand_mob {
  /*background-color: #333; /* Черный цвет фона */
  position: fixed; /* Сделайте его липким/фиксированным */
  top: 150px; /* Оставайтесь на вершине */
  width: 26%; /* Полная ширина */
  transition: top 0.3s; /* Эффект перехода при скольжении вниз (и вверх) */
  left:50px;
  display: none;
  /*left:695px;*/
}


/* Стиль ссылок навигационной панели */
#navbarbrand a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 15px;
  text-decoration: none;
}

#navbarbrand a:hover {
  background-color: #ddd;
  color: black;
  
}


/* #itdlogo{
  width: 6em;
  height: 1.5em;
  font: 900 500%/1.2 'Arial Black', sans-serif;
} */


/* #img-responsive{
  position: relative;
  left:200px;
  top:10px;
} */
 </style>



<body>



  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(/public/images/slider/1.jpg)">
          <div class="caption"><div style="position:relative;left:300px;top:-170px;font-size:30px;" id="lang">uk</div>
            <h1 class="animated fadeInLeftBig" id="fadeInLeftBig">Welcome to <span>Itdynamics</span></h1>
            <p class="animated fadeInRightBig" id="fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" id="fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(/public/images/slider/2.jpg)">
          <div class="caption"><div style="position:relative;left:300px;top:-170px;font-size:30px;" id="lang">uk</div>
            <h1 class="animated fadeInLeftBig" id="fadeInLeftBig2">Development websites <span>Itdynamics</span></h1>
            <p class="animated fadeInRightBig" id="fadeInRightBig2">Computer, mobile and web applications of any complexity</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" id="fadeInUpBig2" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(/public/images/slider/3.jpg)">
          <div class="caption"><div style="position:relative;left:300px;top:-170px;font-size:30px;" id="lang">uk</div>
            <h1 class="animated fadeInLeftBig" id="fadeInLeftBig3">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig" id="fadeInRightBig3">Web design - Web programming - Computer programming - Web development</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" id="fadeInUpBig3" href="#services">Start now</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
      
    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php if(!$mobile_browser > 0){?>
          <div id="responsive">
          <a class="navbar-brand" id="navbarbrand" href="#">
              <img class="img-responsive" src="/public/images/ico.png" id="itdlogo" alt="logo">
          </a>                    
        </div>
          <?php
        }else{
            ?>
        <div id="responsive">
          <a class="navbar-brand" id="navbarbrand_mob" href="#">
              <img class="img-responsive" src="/public/images/ico.png" id="itdlogo" alt="logo">
          </a>                    
        </div>
        <?php
    }
    ?>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <!-- <li class="scroll"><a href="#contact">Contact</a></li> -->       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp"  id="service" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <br>
            <font size="30" color="black">Why Choose Us</font>
            <font color="black">
            <p>Since 2016, we’ve been developing client-driven solutions use new IT technology.</p>
            <p>We have expertise in Blockchain, eCommerce, social networks and search system.</p>
            <p>We work with startups, clients wich just whish website and contribute to the website 
              development process. Our goal is to ensure the successful launch and ongoing success of the product.</p>
          </font>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-flask"></i>
            </div>
            <div class="service-info" id="service-info">
              <h3>Brand Identity</h3><!-----Фирменный стиль----->
              <p>
                We are a Ukrainian company with more than a 10-year history managed by founders with a differens technical background.
              <!--------Ми українська компанія з більш ніж 10-річною історією, якою керують засновники з різним технічним досвідом.--------->
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="service-icon">
              <i class="fa fa-umbrella"></i>
            </div>
            <div class="service-info" id="service-info2">
              <h3>Creative Idea</h3><!-----Креативная идея----->
              <p>We can to make unique design for you. If you do not know what do you like, we can to help you choose.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-cloud"></i>
            </div>
            <div class="service-info" id="service-info3">
              <h3>Awesome Support</h3><!-----Потрясающая поддержка----->
              <p>After complete a project we support the clients. We give consultation and technical support to clients. 
                One hour of our time is worth $10.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="service-icon">
              <i class="fa fa-coffee"></i>
            </div>
            <div class="service-info" id="service-info4">
              <h3>Professional Design</h3><!-----Профессиональный дизайн----->
              <p>We make professional design - make quickly and efficiently, using the latest solutions.</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="service-icon">
              <i class="fa fa-bitbucket"></i>
            </div>
            <div class="service-info" id="service-info5">
              <h3>App Development</h3><!-----Разработка приложений----->
              <p>From idea validation to product maintaining, we offer full cycle software development, 
                interaction between developers and information technology service specialists</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="service-icon">
              <i class="fa fa-gift"></i>
            </div>
            <div class="service-info" id="service-info6">
              <h3>Mobile App Development</h3><!-----Разработка мобильных приложений----->
              <p>From idea validation to product maintaining, we offer full cycle software development</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>About us</h2>
            <p>We are a Ukrainian company with more than a 10-year history managed by founders with a differens technical background.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead">User Experiances</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="95">95%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead">Web Design</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="85">85%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Programming</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="80">80%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead">Web-programming</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="80">80%</div>
              </div>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
              <p class="lead">Fun</p>
              <div class="progress">
                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar"  aria-valuetransitiongoal="85">85%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Our blanks</h2>
          <p>We working do not only with clients, but and have our own products, which use myself</p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="/public/images/portfolio/asbook.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Asbook</h3>
                    <p>Information retrieval system for research publications</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="/asbook" data-single_url="asbook" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/public/images/portfolio/asbook.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="/public/images/portfolio/commerce.JPG" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Commerce</h3>
                    <p>Commerce software</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="/commerce" data-single_url="commerce" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/public/images/portfolio/commerce.JPG" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="/public/images/portfolio/frontend.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Frondend developer</h3>
                    <p>Frondend developer personal website</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="/frontend" data-single_url="frontend" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/public/images/portfolio/frontend.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="/public/images/portfolio/technics.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Technics</h3>
                    <p>Search system for technics</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="/technics" data-single_url="portfolio-single.html" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/public/images/portfolio/technics.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="/public/images/portfolio/mobileapp.JPG" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                  <h3>Mobiapp</h3>
                    <p>Mobile app</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="/mobileapp" data-single_url="mobileapp" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/public/images/portfolio/mobileapp.JPG" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="/public/images/portfolio/psycology.png" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Psycology</h3>
                    <p>Information psychology websites</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="psycol" data-single_url="psycol" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/public/images/portfolio/psycology.png" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="/public/images/portfolio/justice.JPG" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Justice</h3>
                    <p>The Greatest Firm You Can Trust</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="/justic" data-single_url="justic" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/public/images/portfolio/justice.JPG" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="/public/images/portfolio/eshopper.JPG" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Eshopper</h3>
                    <p>Eshopper</p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="/eshop" data-single_url="eshop" ><i class="fa fa-link"></i></a></span>
                    <span class="folio-expand"><a href="/public/images/portfolio/eshopper.JPG" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->

  <section>
    <div class="container">
      <div class="row" id="team">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" id="team" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>The Team</h2>
          <p>ItDynamics was founded in 2017 by two web software — Aleksandr Martynenko and Valeriya Orlova.
          Aleksandr and Valeriya worked on complex web applications, so it was easy to decide what the company would do. 
          From day one, the goal was to create a company that helps its customers to build scalable and feature-rich software 
          solutions in the most efficient way using a modern technology stack.</p>
        </div>
      </div>
      <div class="team-members">
        <div class="row" id="member">
          <!--
           <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="/public/images/team/1.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Marian Dixon</h3>
                <h4>CEO &amp; Founder</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        -->
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="/public/images/team/Designer.JPG" alt="">
              </div>
              <div class="member-info" id="member">
                <h3>Vladimir Martynenko</h3>
                <h4>UI/UX Designer</h4>
                <!-- <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="/public/images/team/developer.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Valeriya Olegovna</h3>
                <h4>Developer</h4>
                <!-- <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="/public/images/team/developer2.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Aleksandr Martynenko</h3>
                <h4>Developer</h4>
                <!-- <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p> -->
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-4 col-xs-6 wow fadeInLeft">
          <!-- <i class="fa fa-user"></i> -->
          <h3>50+</h3>
          <p>Projects</p>
        </div>
        <div class="col-sm-4 col-xs-6 wow fadeInLeft">
          <!-- <i class="fa fa-desktop"></i> -->
          <h3 class="timer">70</h3>                    
          <p>Modern Websites</p>
        </div> 
        <!-- <div class="col-sm-3 col-xs-6 wow fadeInLeft">
          <i class="fa fa-trophy"></i>
           <h3 class="timer">10</h3>                    
          <p>WINNING AWARDS</p>
        </div> --> 
        <div class="col-sm-4 col-xs-6 wow fadeInLeft">
          <!-- <i class="fa fa-comment-o"></i>  -->                   
          <h3>24/7</h3>
          <p>Fast Support</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->





  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2 id="our_dev">Our Development Tech Stack</h2>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p> -->
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <a href="techstackopencart">
              <div class="single-table wow flipInY" style="background: url('/public/images/opencart.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="300ms">
            <br><br><br><br><br><br>
            <h3>OpenCart</h3>
            </div>
          </a>
          </div>
          <div class="col-sm-3">
          <a href="techstacknodejs">
            <div class="single-table wow flipInY" style="background: url('/public/images/node.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="500ms">
            <br><br><br><br><br><br>
            <h3>Node.JS</h3>
            </div>
            </a>
          </div>
          <div class="col-sm-3">
          <a href="techstackwp">
            <div class="single-table wow flipInY" style="background: url('/public/images/WordPress.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="800ms">
            <br><br><br><br><br><br>
            <h3>WordPress</h3>
            </div>
            </a>
          </div>
          <div class="col-sm-3">
          <a href="techstacklaravel">
            <div class="single-table wow flipInY" style="background: url('/public/images/Laravel.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="1100ms">
            <br><br><br><br><br><br>
            <h3>Laravel</h3>
            </div>
            </a>
          </div>
        </div>

<br>

        <div class="col-sm-3">
        <a href="techstackphp">
            <div class="single-table wow flipInY" style="background: url('/public/images/PHP.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="300ms">
            <br><br><br><br><br><br>
            <h3>PHP</h3>
            </div>
            </a>
          </div>
          <div class="col-sm-3">
          <a href="techstackjs">
            <div class="single-table wow flipInY" style="background: url('/public/images/js.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="500ms">
            <br><br><br><br><br><br>
            <h3>JS</h3>
            </div>
            </a>
          </div>
          <div class="col-sm-3">
          <a href="techstackhtml">
            <div class="single-table wow flipInY" style="background: url('/public/images/html2.jpg') no-repeat;" data-wow-duration="1000ms" data-wow-delay="800ms">
            <br><br><br><br><br><br>
            <h3>HTML</h3>
            </div>
            </a>
          </div>
          <div class="col-sm-3">
          <a href="techstackcss">
            <div class="single-table wow flipInY" style="background: url('/public/images/css.png') no-repeat;" data-wow-duration="1000ms" data-wow-delay="1100ms">
            <br><br><br><br><br><br>
            <h3>CSS</h3>
            </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fa fa-twitter"></i>
              <h4>Case studies</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <p>5 Things to include in your psychologist or therapist website design<a href="#">
                    <img src="/public/images/psycology.webp">
                    <span></span></a></p>
                </div>
                <div class="item">
                  <p>App CRM Open Source<a href="#">
                    <img src="/public/images/odoo-crm-ventas-openinnova.png">
                    <span></span></a></p>
                </div>
                <div class="item">                                
                <p>Commerce platform PayPal<a href="#">
                    <img src="/public/images/paypal.jpeg">
                    <span></span></a></p>
                </div>
                <div class="item">                                
                <p>Wallet system<a href="#">
                    <img src="/public/images/wallet.jpg">
                    <span></span></a></p>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a> 
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-pencil"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3 id="building_apps"><a href="#">Building Apps in 2023: Technologies, Costs, Tips</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Development</strong></span>
            </div>
            <div class="entry-content">
              <p>Discover the basics of app development and how to launch your custom solution with maximum efficiency by reading a guide by Itdynamic</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="1"></li>
                  <li data-target="#post-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <a href="#"><img class="img-responsive" src="images/blog/2.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="images/blog/1.jpg" alt=""></a>
                  </div>
                  <div class="item">
                    <a href="#"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
                  </div>
                </div>                               
                <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
              </div>                            
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-picture-o"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3 id="wearable_trends"><a href="#">Wearable Trends: Personal and Business Use in 2023</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Development</strong></span>
            </div>
            <div class="entry-content">
              <p>Wearable Trends: Personal and Business Use in 2022 Wearable devices remain one of the most popular trends, which in turn is also…</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/3.jpg" alt=""></a>
              <div class="post-meta">
                <span><i class="fa fa-comments-o"></i> 3 Comments</span>
                <span><i class="fa fa-heart"></i> 0 Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-video-camera"></i>
              </div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Ecommerce Website Development: What You Need to Know</a></h3>
              <span class="date">June 26, 2014</span>
              <span class="cetagory">in <strong>Development</strong></span>
            </div>
            <div class="entry-content">
              <p>With an estimated 12 million to 24 million active ecommerce sites around the world, it’s easy for an online store to get lost in the crowd...</p>
            </div>
          </div>                    
        </div>
        <div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore" style="pointer-events: none;"><i class="fa fa-repeat"></i> Load More</a>
        </div>                
      </div>
    </div>
  </section><!--/#blog-->
<!--
  <section id="contact">
    <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
          </div>
        </div>
         <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> Kosmonavtov street 18, fl. 105, 14034<br>Chernihiv, Ukraine </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +38 (095) 280 28 28  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:almp@i.ua"> almp@i.ua</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="/">www.itdynamics.com.ua</a></li>
                </ul>
              </div>                            
            </div>
          </div>
        </div> 
      </div>
    </div>        
  </section>
  --->
  <!---
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        
      <div class="footer-logo">
          <a href="/"><img class="img-responsive" src="/public/images/logo.png" alt=""></a>
        </div>
        
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
       
      </div>
    </div>
    --->
    <div class="footer-bottom" style="background-color:skyblue;">
      <div class="container">
        <div class="row">
          <?php if(!$mobile_browser > 0){?>
        <div class="col-sm-6" style="position:relative;top:20px;left:0px;">
            <!-- <p>&copy; 2023 Itdynamics.</p> -->
            
            <br>
            <a href="/"><img src="/public/images/logo.png" alt="" style="position:relative;top:18px;left:-100px;width:110px;"></a>
          </div>
          <?php
        }
        ?>

          <!-- <div class="col-sm-6">
            <p class="pull-right" style="position:relative;top:-10px;left:0px;">Designed by <a href="/">Itdynamics</a></p>
          </div> -->
          <br>
          <div class="col-sm-6" id="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> Kosmonavtov street 18, fl. 105, 14034<br>Chernihiv, Ukraine </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +38 (095) 280 28 28  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:almp@i.ua"> almp@i.ua</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="/">www.itdynamics.com.ua</a></li>
                </ul>
              </div>                            
            </div>


        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="/public/js/jquery.js"></script>
  <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
  <script type="text/javascript" src="/public/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="/public/js/wow.min.js"></script>
  <script type="text/javascript" src="/public/js/mousescroll.js"></script>
  <script type="text/javascript" src="/public/js/smoothscroll.js"></script>
  <script type="text/javascript" src="/public/js/jquery.countTo.js"></script>
  <!-- <script type="text/javascript" src="js/lightbox.min.js"></script> -->
  <script type="text/javascript" src="/public/js/main.js"></script>

</body>
</html>