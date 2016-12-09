<!DOCTYPE html>
<html lang="en">
<head>
  <title>TTFU Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/load.js"></script>
  <script type="text/javascript" src="js/open_menu.js"></script>
  <script type="text/javascript" src="js/alt_nav.js"></script>
  <script type="text/javascript" src="js/smooth_scroll.js"></script>
  <script type="text/javascript" src="js/counter.js"></script>
</head>
<body id="myPage">

<!-- loader -->
<div id="loading_cover">
  <div id="loader">
    <span id="spinner"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i></span>
  </div>
</div>
<!-- bg video -->
  <video playsinline autoplay muted loop poster="Snapshots/a-working-man.jpg" id="bgvid">
    <source src="WEBM/a-working-man.webm" type="video/webm">
    <source src="MP4/a-working-man.mp4" type="video/mp4">
  </video>
<!-- alt navigation -->
<div id="alt-nav" class="text-center">
  <a href='#myPage' class='logo-link smooth'><img src='img/logo2.png' class='logo' ></a>
  <h1><span class='highlight'>TTFU</span> Design</h1>
</div>
<!-- back to top button -->
<div id="btt">
  <a href="#myPage" class="smooth"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</div>
<!-- Fancy navigation and splash screen -->
<div class="container-fluid text-center" id="splash">
  <div class="row">
    <nav class="main_nav">
      <ul>
        <li>
        <a href="#" id="menu_ctrl">
          <span class="pop"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span>
          Menu <span class="pop"><i class="fa fa-hand-o-left" aria-hidden="true"></i></span>
        </a>
        </li>
      </ul>
      <div id="menu_items">
      <ul >
        <li><a class="smooth" href="#Usluge">Usluge</a></li>
        <li><a class="smooth" href="#Portfolio">Portfolio</a></li>
        <li><a class="smooth" href="#Kontakt">Kontakt</a></li>
      </ul>
      </div>
    </nav>
    <div class="container-fluid title">
      <p class="fade-in">Moderan web dizajn prilagođen svim vrstama uređaja</p>
    </div>
  </div>
  <div class="row" style="clear: both;" >
  </div>
</div>

<!-- Trivia Container -->
<div class="container-fluid text-center trivia">
<div class="row">
  <div class="col-sm-4 trivia-info">
    <span class="counter c1">75%</span><br> korisnika priznaje da na osnovu <strong>dizajna web sajta</strong> ocenjuje <strong>kredibilitet</strong> kompanije.
  </div>
  <div class="col-sm-4 trivia-info">
    <span class="counter c2">85%</span><br>
    Business to Business klijenata <strong>pretražuje internet</strong> pre nego sto napravi odluku o <strong>kupovini</strong>.
  </div>
  <div class="col-sm-4 trivia-info">
    <span class="counter c3">94%</span><br> 
    <strong>prvih utisaka</strong> korisnika web sajta su u vezi sa samim <strong>dizajnom stranice.</strong>
  </div>
</div>
<div class="row">
  <div class="col-sm-4 info1 fill-bar">
    <div class="progress">
        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>
  </div>
  <div class="col-sm-4 info2 fill-bar">
    <div class="progress">
    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
    </div>
    </div>
  </div>
  <div class="col-sm-4 info3 fill-bar">  
    <div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
    </div>
    </div>
  </div>
</div>
  <p class="trivia-source">Izvor: <a href="http://www.kinesisinc.com/the-truth-about-web-design/" target="_blank">Kinesis</a> -- bazirano na <a href="http://credibility.stanford.edu/guidelines/index.html" target="_blank">istraživanju web kredibiliteta sprovedenog na Stanford Univerzitetu</a></p>
</div>
<!-- Usluge container -->
<div class="container-fluid text-center about" id="Usluge">
  <h2>
    <span class="highlight-red"><i class="fa fa-code" aria-hidden="true"></i></span> Usluge 
  </h2>
  <div class="row about-row">
    <div class="col-sm-4 about-item">
      <img src="img/rwd2.png" class="img-responsive margin slideanim" alt="Responsive web design">
      <p>
        <span class="highlight-red">Prilagodljiv dizajn web sajta</span> predstavlja pristup koji omogućava optimizovano prikazivanje, jednostavno korišćenje, čitanje, i kretanje kroz web sajt koji će biti pregledan na različitim uređajima.
      </p>
    </div>
    <div class="col-sm-4 about-item">
      <img src="img/uniquedesign.png" class="img-responsive margin slideanim" alt="Unikatan dizajn">
      <p>
        Dizajn prilagođen Vašem poslovanju je jedna od najbitnijih stavki prilikom izrade web sajta. Svakom projektu se pristupa pojedinačno kako bi se došlo do <span class="highlight-red">unikatnog dizajna</span> i najboljeg rešenja za klijenta. 
      </p>
    </div>
    <div class="col-sm-4 about-item">
      <img src="img/seo.png" class="img-responsive margin slideanim" alt="SEO optimizacija">
      <p>
        <span class="highlight-red">SEO optimalizacija</span> web sajta za pretraživače (Search engine optimization) je proces unapređenja kvaliteta i količine saobraćaja od pretraživača ka web sajtu preko prirodnih rezultata pretrage.
      </p>
    </div>
  </div>
</div>
<!-- Portfolio Container -->
<div class="container-fluid text-center portfolio" id="Portfolio">
  <h2>
    <span class="highlight-red"><i class="fa fa-briefcase" aria-hidden="true"></i></i></span>
    Portfolio
  </h2>
  <div class="portfolio-wrapper">
  <div class="row portfolio-row">
    <div class="col-sm-4 portfolio-info">
      <b>Dubinsko Pranje Krstić</b> <br>
      Prezentacioni sajt za kompaniju koja se bavi dubinskim pranjem.
    </div>
    <div class="col-sm-4 portfolio-demo" id="">
      <a class="visit" href="https://dubinskopranjekrstic.rs" target="_blank" data-toggle="tooltip" data-placement="top" title="<span class=''>Posetite sajt!</span>">
        <img src="img/dubinsko.jpg" class="img-responsive" alt="Dubinsko Pranje Krstic">
      </a>
    </div>
    <div class="col-sm-4 portfolio-tech" id="">      
      <div class="row">
        <div class="col-sm-3">
          <img src="img/tech/html5.png" class="img-responsive" alt="">
        </div>
        <div class="col-sm-3">
          <img src="img/tech/Bootstrap.png" class="img-responsive" alt="">
        </div>
        <div class="col-sm-3">
          <img src="img/tech/css3.png" class="img-responsive" alt="">
        </div>
        <div class="col-sm-3">
          <img src="img/tech/jquery.png" class="img-responsive" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <img src="img/tech/angularjs.png" class="img-responsive" alt="">
        </div>
        <div class="col-sm-3">
           <img src="img/tech/json.png" class="img-responsive" alt="">
        </div>
        <div class="col-sm-3">
          <img src="img/tech/php-mysql.png" class="img-responsive" alt="">
        </div>
        <div class="col-sm-3">
          <img src="img/tech/apache.png" class="img-responsive" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="testemonials">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
            <h5 class="quote-logo"><i class="fa fa-quote-left" aria-hidden="true"></i></h5>
            <span class="quote-text">"Pristup izradi sajta bio je krajnje profesionalan. Dobili smo sajt koji je moderan, pregledan i brz. Bilo je zadovoljstvo sarađivati sa Vama!"</span>
            <br><br>
            <span class="quote-name">Svetlana Krstić - <b>PR DUBINSKO PRANJE KRSTIĆ</b></span>     
        </div>        
        <div class="item">
            <h5 class="quote-logo"><i class="fa fa-quote-left" aria-hidden="true"></i></h5>
            <span class="quote-text">"Sve sugestije i predlozi koje smo imali pre izrade sajta su uvaženi, tako da nam krajnji proizvod odgovara u svakom pogledu!"</span>
            <br><br>
            <span class="quote-name">Vladimir Krstić - <b>PR DUBINSKO PRANJE KRSTIĆ</b></span>      
        </div>
      </div>
      <!-- Left and right controls -->
      <span class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span>
      </span>
      <span class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
      <span class="sr-only">Next</span>
      </span>
    </div>
    </div>
  </div>
  </div>
</div>
<div class="container text-center contact" id="Kontakt">
  <h2>
    <span class="highlight-red"><i class="fa fa-address-book-o" aria-hidden="true"></i></i></span>
    Kontakt
  </h2>
  <div class="contact-wrapper">
  <div class="row contact-row">
    <div class="col-sm-3 contact-phone">
      <img src="img/mobile-phone.png" class="img-responsive">
      <img src="img/viberc.png" class="img-responsive">
      <img src="img/whatsappc.png" class="img-responsive">
    </div>
    <div class="col-sm-6 contact-number">
      <a class="contact-call" href="tel:+381641964112">+381 64 1964112</a>
    </div>
    <div class="col-sm-3 contact-filler">
      <i class="fa fa-address-card" aria-hidden="true"></i>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <b style="font-size: 1.5em">8 - 20 h</b> <br><br>
      Sve informacije mozete dobiti putem poziva, SMS-a, poruke na WhatsApp ili Viber ili putem kontakt forme.
    </div>
    <div class="col-sm-6"> 
    <form method="POST" action="mailer.php">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group text-right">
          <br>
          <button class="btn btn-default" type="submit" name="send">Send</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  </div>
</div>
<!-- Footer -->
<footer class="container-fluid text-center">
  <p><span class='highlight'>TTFU</span> Design &copy; 2016</p> 
  <a href='http://www.freepik.com/' target="_blank">Icons designed by Freepik</a>
</footer>

</body>
</html>