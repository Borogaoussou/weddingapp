<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Event</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ url('img/apple-touch-icon.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ url('img/apple-touch-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ url('img/apple-touch-icon-114x114.png') }}">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{ url('css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('fonts/font-awesome/css/font-awesome.css') }}">

<!-- Slider
    ================================================== -->
<link href="{{ url('css/owl.carousel.css') }}" rel="stylesheet" media="screen">
<link href="{{ url('css/owl.theme.css') }}" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{ url('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/nivo-lightbox/nivo-lightbox.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/nivo-lightbox/default.css') }}">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Accueil</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <form method="POST" action="{{ route('logout') }}">
      @csrf
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">Programme</a></li>
        <li><a href="#services" class="page-scroll">Participants</a></li>
        <li><a href="#portfolio" class="page-scroll">Lieu</a></li>
        <li><a href="#achievements" class="page-scroll">Résumé</a></li>
        <li><a href="#contact" class="page-scroll">Vos Contacts</a></li>
        <li><a href="route('logout')" class="page-scroll"
                onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Log Out') }}
        </a></li>
      </ul>
    </div>
  </form>

    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text"> <span>Bienvenue à l'évènement</span>
            <h1>LinuxOne</h1>
            <p>Séminaire IBM & CFAO TECHNOLOGIES <br>
              Les solutions pour relever les défis de demains.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Programme</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Programme</h2>
      <h3>Schedule</h3>
      <hr>
    </div>

     <table class="table table-bordered table-condensed table-hover ">
    <caption><b>Contrats</b></caption> <!-- tableau listant les différents utilisateurs -->
    <thead>
    <tr>
        <th>Heures / Hours</th>
        <th>Evènement / Event</th>

    </tr>
    </thead>
    <tbody>
      <tr>
          <td>08H30-09H00 </td>
          <td>Accueil des participants </td>
      </tr>
      <tr>
          <td>09H00 – 09H15 </td>
          <td>Ouverture et mot de bienvenue <br/>
Alain KOHOU 
Directeur Général CFAO TECHNOLOGIES 
 </td>
      </tr>
      <tr>
          <td>09H-15 – 09H-30  </td>
          <td>Présentation Offres CFAO Technologies 
Speaker : Mamadou Mar 
 </td>
      </tr>
      <tr>
          <td>09H30 – 10H30 </td>
          <td>Paysage Serveur en 2018 ... Quel choix faire pour votre environnement ? 
Speaker : Ibrahima Chamel & Ibrahima Cherif </td>
      </tr>
      <tr>
          <td>10H30 – 11H10 </td>
          <td>Optimisation des licenses Oracle sur des serveurs IBM : 
Oracle Tendance System .... et Comment réduire vos couts
Speaker : Ibrahima Cherif </td>
      </tr>
      <tr>
           <td>11H10 – 11H30 </td>
          <td>Pause CAFE </td>
      </tr>
      <tr>
          <td>11H30 – 12H15 </td>
          <td>Le Flash Systems :
Accélérer la performance de vos applications avec du Flash
Speaker : Jean Marie Ibrahima Ndiaye </td>
      </tr>
      <tr>
          <td>12H15 – 13H00  </td>
          <td>
  Software Defined Storage : C’est QUOI ?
Speaker : Ibrahima Chérif </td>
      </tr>
      <tr>
          <td>13H00 – 14H30 </td>
          <td>Pause Déjeuner </td>
      </tr>
      <tr>
          <td>14H30 – 15H00</td>
          <td>Comment protéger votre environnement avec IBM Spectrum Protect / IBM Spectrum Protect Plus
          Speaker : Alioune Badara Kane
           </td>
      </tr>
      <tr>
          <td>15H00- 15H30 </td>
          <td>Mettre en place un PRA

Speaker : Alioune Badara Kane </td>
      </tr>
      <tr>
          <td>15H30 – 16H00  </td>
          <td>Q & A </td>
      </tr>
      <tr>
          <td><b>Programme du DIMANCHE  </b></td>
      </tr>
      <tr>
          <td>Avant départ 12H00 </td>
          <td>Mot de clôture 
Alain KOHOU 
Directeur Général CFAO TECHNOLOGIES
</td>
      </tr>

      </tbody>
      </table>

  <!--  <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/about.png" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h3>Lorem ipsum dolor sit amet!</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
        </div>
      </div>
    </div>
-->

  </div>
</div>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title">
      <h2>Participants</h2>
        <h3>Contributors</h3>

      <hr>
      
    </div>

    <table class="table table-bordered table-condensed table-hover ">
    <thead>
    <tr>
        <td><b>#</b></td>
        <td><b>NOM / Name</b></td>

    </tr>
    </thead>
    <tbody>

<tr><td>#1 </td><td> RIBEIRO Arnando</tr>
<tr><td>#2</td> <td> DIOUF Mahécor</tr>
<tr><td>#3 </td><td> SECK  Omar</tr>
<tr><td>#4 </td><td> CISSE Birahim</tr>
<tr><td>#5 </td><td> DIONGUE Mor</tr>
<tr><td>#6 </td><td> DIAW  Abdoulaye</tr>
<tr><td>#7 </td><td> FALL  Tamsir</tr>
<tr><td>#8 </td><td> FALL  Mor SADIO</tr>
<tr><td>#9 </td><td> DIALLO  Alpha</tr>
<tr><td>#10 </td><td>DAFF  Ibrahima</tr>
<tr><td>#11 </td><td>LO  Serigne Niomré</tr>
<tr><td>#12 </td><td>WADE  Mamadou</tr>
<tr><td>#13 </td><td>BA  Coutaille </tr>
<tr><td>#14</td><td> NDIAYE  Mohamed </tr>
<tr><td>#15</td><td> KANE  Djiby</tr>
<tr><td>#16</td><td> GUEYE EL Hadj Amadou</tr>
<tr><td>#17</td><td> KOHOU Alain</tr>
<tr><td>#18</td><td> MAR Mamadou</tr>
<tr><td>#19</td><td> BOURIG  Rachid</tr>
<tr><td>#20</td><td> KANE  Alioune Badara</tr>
<tr><td>#21</td><td> DIEME Abdoulaye</tr>
<tr><td>#22</td><td> DIALLO  Fama</tr>
<tr><td>#23</td><td> DASYLVA Clara</tr>
<tr><td>#24</td><td> DIOUF Florence</tr>
<tr><td>#25</td><td> SENE  Ababacar</tr>
<tr><td>#26</td><td> DIOP  Yaye Faty</tr>
<tr><td>#27</td><td> SYLLA Armand</tr>
<tr><td>#28</td><td> DIENG Ousmane Lyssa</tr>
<tr><td>#29</td><td> BA  Assane</tr>
<tr><td>#30</td><td> LO  Moukhtar</tr>
<tr><td>#31</td><td> AKA Louis</tr>
<tr><td>#32</td><td> NDIAYE  Jean Marie</tr>
<tr><td>#33</td><td> MBAYE Ousmane Blé</tr>
<tr><td>#34</td><td> OBAMA Pedro</tr>
<tr><td>#35</td><td> CHERIF  Ibrahima</tr>
<tr><td>#36</td><td> CHAMEL  Ibrahim</tr>
<tr><td>#37</td><td> TINE   Papa Moussa</tr>
    </tbody>
    </table>


  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Lieu</h2>
      <h3>Place</h3>
      <hr>
      <p><h3><b>Royal Baobab Somone Ex Baobab Decameron.</b></h3></p>
      <p>Pour des raisons de sécurité, nous vous demandons de porter votre badge durant toute la durée du séminaire.<br/>
<b>Localisation</b><br/>
L´hôtel est situé dans le village de La Somone, sur la Petite Côte<br/>
<b>Chambre</b><br/>
Une chambre vous est réservée et prises en charge par le Club DSI
Vous avez aussi la possibilité d’inviter vos conjoint(e)s moyennant une participation symbolique de 35.000 par nuitée.<br/>
<b>Restauration</b><br/>
La restauration est comprise dans le forfait hébergement hors extra.<br/>

      </p>
    </div>
    <div class="categories">
      <ul class="cat">
        <!--<li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".lorem">Lorem Ipsum</a></li>
            <li><a href="#" data-filter=".dolor">Dolor Sit</a></li>
            <li><a href="#" data-filter=".adipiscing">Adipiscing Elit</a></li>
          </ol>
        </li>-->
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ url('img/portfolio/01-large.jpg') }}" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
              </div>
              <img src="{{url('img/portfolio/01-small.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ url('img/portfolio/02-large.jpg') }}" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
              </div>
              <img src="{{url('img/portfolio/02-small.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ url('img/portfolio/03-large.jpg') }}" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
              </div>
              <img src="{{url('img/portfolio/03-small.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{ url('img/portfolio/04-large.jpg') }}" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
              </div>
              <img src="{{url('img/portfolio/04-small.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div><!--
        <div class="col-sm-6 col-md-3 col-lg-3 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Adipiscing Elit</h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/10-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/11-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dolor Sit</h4>
              </div>
              <img src="img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/12-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Lorem Ipsum</h4>
              </div>
              <img src="img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Achievements Section -->
<div id="achievements" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="section-title center">
        <h2>Résumé</h2>
        <h2>Summary</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <div class="achievement-box"> <span class="count">37</span>
            <h4>Participants / Contributors</h4>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="achievement-box"> <span class="count">13</span>
            <h4>Evènements / Events</h4>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="achievement-box"> <span class="count">06</span>
            <h4>Intervenants / Speakers</h4>
          </div>
        </div>
        <div class="col-md-3 col-sm-3">
          <div class="achievement-box"> <span class="count">02</span>
            <h4>Jours / Days</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section --><!--
<div id="testimonials" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Testimonials</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="testimonial" class="owl-carousel owl-theme">
          <div class="item"> <img src="img/clients/01.jpg" alt=""/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam.</p>
            <p><strong>John DOE</strong>, CEO, Company.</p>
          </div>
          <div class="item"> <img src="img/clients/02.jpg" alt=""/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam.</p>
            <p><strong>Jenny DOE</strong>, CEO, Company.</p>
          </div>
          <div class="item"> <img src="img/clients/03.jpg" alt=""/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam.</p>
            <p><strong>John DOE</strong>, CEO, Company.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Vos contacts</h2>
      <h2>Your contacts</h2>
      <hr>
      <p>Pour tout besoin ou aide nécessaire, merci de vous rapprocher des personnes ci-dessous </p>
      <p>
For any need or help, please contact the following people</p>

<p><b>Club DSI :       Monsieur Birahim CISSE :      Tél : 77 XXX XX XX</b></p>
<p><b>CFAO TECHNOLOGIES :  Madame DIOP Yaye Faty :       Tél : 77 XXX XX XX </b></p>

    </div>

<!--
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
      </form>
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>-->

  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <p>Copyright &copy; 2016 Standout. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>