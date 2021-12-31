<!DOCTYPE html>
<html lang="fr"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Mariama & Elvis</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="ouatinkabo" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/mini3.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/mini3.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/pogo-slider.min.css')}}">
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
    <div id="preloader">
		<div class="preloader pulse">
			<h3>Mariama & Elvis</h3>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="{{url('/mariage')}}"><img src="images/logo3.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <form method="POST" action="{{ route('logout') }}">
					@csrf
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Accueil</a></li>
                        <li><a class="nav-link" href="#about">Les Mariés</a></li>
                        <li><a class="nav-link" href="#story">Programme</a></li>
                        <!-- <li><a class="nav-link" href="#family">Family</a></li> -->
                        <!-- <li><a class="nav-link" href="#gallery">Gallery</a></li> -->
						<li><a class="nav-link" href="#weddinginfo">Vos Informations</a></li>
                        <!-- <li><a class="nav-link" href="#events">Events</a></li> -->
						<li><a class="nav-link" href="#contact">Nous Contacter</a></li>
						<li><a class="nav-link" href="route('logout')"
							onclick="event.preventDefault(); this.closest('form').submit();">Déconnexion</a></li>
                    </ul>
                </div>
			</form>
            </div>
        </nav>
	</header>
	<!-- End header -->

	<!-- Start Banner -->
	<div class="home-slider">
		<ul class="rslides">
			<li><img src="images/img_slide1.jpg" alt=""></li>
			<li><img src="images/img_slide2.png" alt=""></li>
			<li><img src="images/slider-03.jpg" alt=""></li>
		</ul>
		<div class="lbox-details">
			<h1>Mariama  & Elvis</h1>
			<h4>Nous allons nous marier !</h4>
			<div class="countdown main-time clearfix">
				<div id="timer">
					<h3> Samedi 8 Janvier 2022</h3>
					<div id="days"></div>
					<div id="hours"></div>
					<div id="minutes"></div>
					<div id="seconds"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Banner -->

	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="title-box">
							<h2>Mariama BOUKARI <span>&</span> Elvis TIENDREBEOGO</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-m">
									<div class="about-img">
										<img class="img-fluid" src="{{url('images/img_mariama1.jpg')}}" alt="" />
									</div>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="mailto:mariama@gmail.com"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h2> <i class="fa fa-heart-o" aria-hidden="true"></i> <span>Mariama BOUKARI</span> <i class="fa fa-heart-o" aria-hidden="true"></i></h2>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
							</div>
						</div>
						<div class="row align-items-center about-main-info">
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-m">
									<div class="about-img">
										<img class="img-fluid" src="{{url('images/img_elvis1.jpg')}}" alt="" />
									</div>
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="mailto:elvis@gmail.com"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h2> <i class="fa fa-heart-o" aria-hidden="true"></i> <span>Elvis TIENDREBEOGO </span> <i class="fa fa-heart-o" aria-hidden="true"></i></h2>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->


	<!-- Start Story -->
	<!-- <div id="story" class="story-box main-timeline-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Our Story</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>

			<div class="timeLine">
				<div class="row">
					<div class="lineHeader hidden-sm hidden-xs"></div>
					<div class="lineFooter hidden-sm hidden-xs"></div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item" >
							<div class="caption">
								<div class="star center-block">
									<span class="h3">01</span>
									<span>March </span>
									<span>2017</span>
								</div>
								<div class="image">
									<img src="images/time-01.jpg" alt="" />
									<div class="title">
										<h2>First Meet <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">We met at the wedding of our close friends and immediately found a common language, so a year later our first date happened.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">03</span>
									<span>April</span>
									<span>2017</span>
								</div>
								<div class="image">
									<img src="images/time-02.jpg" alt="" />
									<div class="title">
										<h2>First date <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">We met at the wedding of our close friends and immediately found a common language, so a year later our first date happened.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">03</span>
									<span>May</span>
									<span>2017</span>
								</div>
								<div class="image">
									<img src="images/time-03.jpg" alt="" />
									<div class="title">
										<h2>Proposal <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">We met at the wedding of our close friends and immediately found a common language, so a year later our first date happened.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">04</span>
									<span>June</span>
									<span>2017</span>
								</div>
								<div class="image">
									<img src="images/time-04.jpg" alt="" />
									<div class="title">
										<h2>Engagement <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">For 2 years of work as support engineer responsible about installing and maintenance SWIFT packages for banks. I gain a lot from it before i leave country.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
							<div class="caption">
								<div class="star center-block">
									<span class="h3">04</span>
									<span>July</span>
									<span>2017</span>
								</div>
								<div class="image">
									<img src="images/time-05.jpg" alt="" />
									<div class="title">
										<h2>My Wedding <i class="fa fa-angle-right" aria-hidden="true"></i></h2>
									</div>
								</div>
								<div class="textContent">
									<p class="lead">Since then i came to Austria as refugee far from my lovers and friends far a way escaping from wars and threats searching a new life that i didn't find until yet.</p>
								</div>
							</div>
						</div>

				</div>
			</div>

		</div>
	</div> -->
	<!-- End Story -->

	<!-- Start Programme -->

	<div id="story" class="story-box main-timeline-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Au programme</h2>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p> -->
					</div>
				</div>
			</div>
			<div class="row timeline-element separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            9h00
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-left">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">A la Mairie</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						   Le mariage civil débute à 9h à la mairie de Bogodogo.
						</p>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
							<a href="#" target="_blank">Cliquer ici pour voir l'emplacement sur Google Maps</a>
						</p>
					 </div>
				</div>
			</div>
			<div class="row timeline-element reverse separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            11h00
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-right">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">A l'église</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						   Rdv à l'église St Camille au 1200 logements pour le mariage réligieux.
						</p>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
							<a href="#" target="_blank">Cliquer ici pour voir l'emplacement sur Google Maps</a>
						</p>
					 </div>
				</div>
			</div>
			<div class="row timeline-element separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            14h00
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-left">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Lunch</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						   Le Lunch se déroulera à l'espace Bon Berger à partir de 14h.
						</p>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
							<a href="#" target="_blank">Cliquer ici pour voir l'emplacement sur Google Maps</a>
						</p>
					 </div>
				</div>
			</div>
			<div class="row timeline-element reverse separline">
				<div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            16h00
                        </p>
                    </div>
				</div>
				<span class="iconBackground"></span>
				<div class="col-xs-12 col-md-6 align-right">
					<div class="timeline-text-content">
						<h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Réception à domicile</h4>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
						   Une réception est organisée au domicile du marié à 16h00.
						</p>
						<p class="mbr-timeline-text mbr-fonts-style display-7">
							<a href="#"	data-toggle="modal" data-target="#popup-domicile">Voir l'emplacement</a>
						</p>
					 </div>
				</div>
			</div>

		</div>
	</div>

<!--
	<div id="family" class="family-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Au programme</h2>
						<p>Le déroulé de la journée:</p>
					</div>
				</div>
			</div>
			<div class="row"></div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-01.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Alonso Wiles </h4>
							<p>{ Leida’s Father }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-02.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Evon Wiles </h4>
							<p>{ Leida’s Mother }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-03.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Chris Wiles </h4>
							<p>{ Leida’s Brother }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-04.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Adina Wiles </h4>
							<p>{ Leida’s Sister }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-05.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Annetta Wiles </h4>
							<p>{ Leida’s Sister }</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="single-team-member">
						<div class="family-img">
							<img class="img-fluid" src="images/family-06.jpg" alt="" />
						</div>
						<div class="family-info">
							<h4>Mr. Ladonna Wiles </h4>
							<p>{ Leida’s Sister }</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Programme -->

	<!-- Start Gallery -->
	<!-- <div id="gallery" class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="popup-gallery clearfix">
					<li>
						<a href="images/gallery-01.jpg">
							<img class="img-fluid" src="images/gallery-01.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-02.jpg">
							<img class="img-fluid" src="images/gallery-02.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-03.jpg">
							<img class="img-fluid" src="images/gallery-03.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-04.jpg">
							<img class="img-fluid" src="images/gallery-04.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-05.jpg">
							<img class="img-fluid" src="images/gallery-05.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-06.jpg">
							<img class="img-fluid" src="images/gallery-06.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-07.jpg">
							<img class="img-fluid" src="images/gallery-07.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
					<li>
						<a href="images/gallery-08.jpg">
							<img class="img-fluid" src="images/gallery-08.jpg" alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div> -->
	<!-- End Gallery -->


	<!-- Start Modal -->
	<div class="modal fade" id="popup-domicile" tabindex="-1" role="dialog"
	style="z-index: 1050; display: none;" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header justify-content-center">
					<h2 class="modal-title">Domicile</h2>
					<button type="button" class="close" data-dismiss="modal" arial-label="Fermer">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
					<p style="margin: 0 auto;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1929.5112075905108!2d-17.46964747851757!3d14.711324498104513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173eb7e755579%3A0x84bc1adc0f98386e!2sCabinet%20DPM%20CONSULTING!5e0!3m2!1sfr!2sng!4v1639704387751!5m2!1sfr!2sng"
						width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->

	<!-- Start Wedding -->

	<div id="weddinginfo" class="wedding-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Vos Informations</h2>
						<p>Vos informations de la cérémonie</p>
					</div>
				</div>
			</div>

			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="serviceBox">
						<!-- <h4 style="text-decoration: underline">Identité</h4> -->
                        <div class="service-icon"><i class="flaticon-bachelorette-party"></i></div>
                        <h3 class="title">{{Auth::user()->name}}</h3>

						@if (Auth::user()->telephone !== null)
						<h4>{{Auth::user()->telephone}}</h4>
						@else
						<h4>Pas de contact enregistré</h4>
						@endif
                        <!-- <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                        </p> -->
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="serviceBox">
						<!-- <h4 style="text-decoration: underline">Votre Table</h4> -->
                        <div class="service-icon"><i class="flaticon-wedding"></i></div>
						@if (Auth::user()->numtable !== null)
                        <h3 class="title">TABLE {{Auth::user()->numtable}}</h3>
						@else
						<h4>Nom de table indisponible</h4>
						@endif

						@if (Auth::user()->numchaise !== null)
                        <h4>Chaise {{Auth::user()->numchaise}}</h4>
						@else
						<h4>Nom de chaise indisponible</h4>
						@endif
						{{-- <h4>{{Auth::user()->numchaise}}</h4> --}}

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="serviceBox">
						<!-- <h4 style="text-decoration: underline">Code QR</h4> -->
                        <div class="service-icon"><i class="flaticon-reception-bell"></i></div>
                        <h3 class="title">Mon Code QR</h3>
						@if (Auth::user()->qrcode !== null)
						<a href="{{url('/qrcodeDown?option='.Auth::user()->qrcode)}}" target="_blank">Télécharger mon code<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
						@else
						<h4>Générer un nouveau code QR</h4>
						@endif
						<!-- <h4>06 July 2017 at 10:30 pm</h4>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur, deleniti eaque excepturi.
                        </p> -->
                    </div>
                </div>
            </div>
		</div>
	</div>

	<!-- End Wedding -->

	<!-- Start Events -->
	<!-- <div id="events" class="events-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Events</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="images/event-img-01.jpg" alt="" />
						</div>
						<h2>2 June 2018 Engagement</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="#">See location <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="images/event-img-02.jpg" alt="" />
						</div>
						<h2>3 June 2018 Main Ceremony </h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="#">See location <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="event-inner">
						<div class="event-img">
							<img class="img-fluid" src="images/event-img-03.jpg" alt="" />
						</div>
						<h2>4 June 2018 Wedding party </h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
						<a href="#">See location <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- End Events -->

	<!-- Start Contact -->

	<div id="contact">
		<div class="row">
			<div id="fh5co-event" class="fh5co-bg" style="background-color: #890025;">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="title-box">
								<h2 style="color: #ffffff;">Contactez-nous</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p> -->
							</div>
						</div>
					</div>
					<div class="row">
						<div class="display-t">
							<div class="display-tc">
								<div class="col-md-10 col-md-offset-1" style="display: flex; margin: auto;">
									<div class="col-md-6 col-sm-6 text-center">
										<div class="event-wrap animate-box">
											<h3>POUR LA CEREMONIE</h3>
											<p>Pour toute information relative à la cérémonie, vous pouvez contacter:</p>
											<div class="event-col">
												<i class="icon-clock"></i>
												<span><a class="btn" style="color:#ffffff;" href="mailto:elvis@gmail.com">Elvis Tiendrebeogo</a></span>
												<span><a class="btn" style="color:#ffffff;" href="mailto:elvis@gmail.com">Mexan Kaba</a></span>
												<span><a class="btn" style="color:#ffffff;" href="mailto:elvis@gmail.com">Rosane Tiendrebeogo</a></span>
												<span></span>
											</div>
											<div class="event-col">
												<i class="icon-calendar"></i>
												<span><a class="btn" style="color:#ffffff;" href="tel:+22670123456">+226 70 12 34 56</a></span>
												<span><a class="btn" style="color:#ffffff;" href="tel:+22670123456">+226 70 12 34 56</a></span>
												<span><a class="btn" style="color:#ffffff;" href="tel:+22670123456">+226 70 12 34 56</a></span>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 text-center">
										<div class="event-wrap animate-box">
											<h3>BESOIN D'UN SITE PAREIL</h3>
											<p>Vous souhaitez avoir un site pareil pour un de vos évévenements, contactez-nous:</p>
											<div class="event-col">
												<i class="icon-clock"></i>
												<span><a class="btn" style="color:#ffffff;" href="mailto:elvis@gmail.com">Elvis Tiendrebeogo</a></span>
												<span><a class="btn" style="color:#ffffff;" href="mailto:elvis@gmail.com">Mexan Kaba</a></span>
												<span><a class="btn" style="color:#ffffff;" href="mailto:elvis@gmail.com"></a></span>
											</div>
											<div class="event-col">
												<i class="icon-calendar"></i>
												<span><a class="btn" style="color:#ffffff;" href="tel:+22670123456">+226 70 12 34 56</a></span>
												<span><a class="btn" style="color:#ffffff;" href="tel:+22670123456">+226 70 12 34 56</a></span>
												<span><a class="btn" style="color:#ffffff;" href="tel:+22670123456"></a></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<select class="custom-select d-block form-control" id="guest" required data-error="Please select an item in the list.">
								  <option disabled selected>Number Of Guest*</option>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<select class="custom-select d-block form-control" id="event" required data-error="Please select an item in the list.">
								  <option disabled selected>I Am Attending*</option>
								  <option value="1">All events</option>
								  <option value="2">Wedding ceremony</option>
								  <option value="3">Reception party</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					  </div>
					</form>
				  </div>
				</div>
			</div>
		</div> -->
	</div>


	<!-- End Contact -->

	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">Tous droits réservés. &copy; 2021</p>
					<p class="footer-company-name">Elvis Tiendrebeogo</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/responsiveslides.min.js"></script>
    <script src="js/timeLine.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
