@extends('siteView.app')

@section('title', 'Accueil')

@section('content')

@if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
            @if(session('volunteer'))
                <br><strong>Membre ajouté :</strong> {{ session('volunteer')->nom }}
            @endif
        </div>
    @endif
    <!-- Slider Area -->
		<section class="slider">
			<div class="hero-slider">
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('fdmf.mastagate.com/img/slider2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1 class="">Rejoignez notre <span></span>  <span>mutuelle de santé</span></h1>
									<p class="">L’association a pour mission d’améliorer dans son aire d’activité, de manière permanente la Santé Bucco–dentaire de la population et l’information sur les maladies de la bouche et des dents conformément à la mission assignée par le programme National de la Santé Bucco–dentaire.</p>
									<div class="button">
										<a href="{{ url('inscription') }}" class="btn">S'inscrire</a>
										<a href="{{ url('about') }}" class="btn primary">A propos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('fdmf.mastagate.com/img/slider.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Obtenez un carnet de santé suivi  <span>bucco-dentaire</span> <span></span></h1>
									<p>La Santé Bucco-Dentaire est notre souci quotidien qu’on se le dise
										 </p>
								<div class="button">
										<a href="{{ url('inscription') }}" class="btn">S'inscrire</a>
										<a href="{{ url('about') }}" class="btn primary">A propos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Start End Slider -->
				<!-- Start Single Slider -->
				<div class="single-slider" style="background-image:url('fdmf.mastagate.com/img/slider3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7">
								<div class="text">
									<h1>Fondation  <span>FDMF </span>  <span></span></h1>
									<p>La Fondation FDMF est une organisation à but non lucratif dédiée à l’amélioration de la santé bucco-dentaire pour tous, en particulier les populations vulnérables et marginalisées.  </p>
									<div class="button">
										<a href="{{ url('inscription') }}" class="btn">S'inscrire</a>
										<a href="{{ url('about') }}" class="btn primary">A propos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->

		<!-- Start about -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Qui sommes nous ?</h3>
							<p>La Fondation FDMF est une organisation à but non lucratif dédiée à l’amélioration de la santé bucco-dentaire pour tous,
								 en particulier les populations vulnérables et marginalisées. Depuis notre création, nous œuvrons sans relâche 
								 pour faire de l’accès aux soins dentaires une réalité universelle, car nous croyons qu’un sourire sain est
								  un droit fondamental dentaire pour tous, en particulier les populations vulnérables et marginalisées. Depuis 
								  notre création en [année], nous œuvrons sans relâche pour faire de l’accès aux soins dentaires une réalité universelle, 
								  car nous croyons qu’un sourire sain est un droit fondamental.</p>
								  
							<a href="{{ url('about') }}" class="btn-primary btn">En savoir plus</a>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							
							
								<!--/ End Video Animation -->
								
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End about -->
		
		<!-- Start Schedule Area 
		<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 ">
							 single-schedule 
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span>SLOGAN</span>
										<h4>Soyons unis pour vivre ensemble, pour vivre mieux </h4>
										<a href="#">EN SAVOIR PLUS<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							single-schedule 
							<div class="single-schedule middle">
								<div class="inner">
									<div class="icon">
										<i class="icofont-prescription"></i>
									</div>
									<div class="single-content">
										<span>DEVISE</span>
										<h4>Amour – Justice – Travail</h4>
										
										<a href="#">EN SAVOIR PLUS<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12">
							 single-schedule 
							<div class="single-schedule last">
								<div class="inner">
									<div class="icon">
										<i class="icofont-ui-clock"></i>
									</div>
									<div class="single-content">
										<span>OBJET</span>
										<h4>Opening Hours</h4>
										<ul class="time-sidual">
											<li class="day">-	Créer des cabinets médicaux dentaires </li>
											<li class="day">-	Construction des écoles médicales pour les assistants </li>
											<li class="day">-	Assurer l’éducation sanitaire et encourager les bonnes habitudes alimentaires  </li>
											<li class="day">-	Encadrement et prise en charge des enfants abandonnés, les orphelins, les personnes vulnérables etc.</li>
											<li class="day">-	Promouvoir les différentes techniques de brossage des dents  </li>
											
										</ul>
										<a href="#">EN SAVOIR PLUS<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		/End Start schedule Area -->

		<!-- Start Feautes -->



		<section class="Feautes section mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2> FDMF</h2>
							<img src="fdmf.mastagate.com/img/section-img.png" alt="#">
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-ambulance-cross"></i>
							</div>
							<h3>NOTRE MISSION</h3>
							<p>L'association a pour mission d'améliorer dans son aire d'activité, de manière permanente la Santé Bucco-dentaire de la population et l'information sur les maladies de la bouche et des dents conformément à la mission assignée par le programme National de la Santé Bucco-dentaire.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="icofont icofont-medical-sign-alt"></i>
							</div>
							<h3>POURQUOI NOUS SOUTENIR ?</h3>
							<p>Les maladies bucco-dentaires touchent 3,5 milliards de personnes (OMS), souvent par manque d’accès aux soins. Votre soutien—par un don, un partenariat ou du bénévolat—change des vies.</p>
						</div>
						<!-- End Single features -->
					</div>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features last">
							<div class="signle-icon">
								<i class="icofont icofont-eye-alt"></i>
							</div>
							<h3>NOTRE VISION</h3>
							<p>Nous croyons en un monde où la santé bucco-dentaire est un droit fondamental, accessible à tous, sans distinction de revenu, d’âge ou de localisation. Un monde où les maladies dentaires ne sont plus un frein à la santé globale, à la confiance en soi ou à l’insertion sociale.</p>
						</div>
						<!-- End Single features -->
					</div>

					
				</div>
			</div>
		</section>
		<!--/ End Feautes -->
		
		<!-- Start Fun-facts -->
		<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-home"></i>
							<div class="content">
								<span class="counter">150</span>
								<p>Projets lancés</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-user-alt-3"></i>
							<div class="content">
								<span class="counter">5</span>
								<p>Centres actifs</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont-simple-smile"></i>
							<div class="content">
								<span class="counter">4379</span>
								<p>Membres satisfaits</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="icofont icofont-table"></i>
							<div class="content">
								<span class="counter">15 </span>
								<p>D'expérience</p>
							</div>
						</div>
						<!-- End Single Fun -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Fun-facts -->


		
		<!-- Start about -->
		<section class="why-choose section" >
			<div class="container">
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Objet</h3>
							<p>-Créer des cabinets médicaux dentaires de proximité </p>
							<p>-Construction des écoles médicales pour les assistants </p>
							<p>-Assurer l’éducation sanitaire et encourager les bonnes habitudes alimentaires  </p>
							<p>-Encadrement et prise en charge des enfants abandonnés, les orphelins, les personnes vulnérables etc. </p>
							<p>-Promouvoir les différentes techniques de brossage des dents </p>



							<a href="{{ url('inscription') }}" class="btn-primary btn">Nous rejoindre</a>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-rights">
							
							
								<!--/ End Video Animation -->
								<img src="fdmf.mastagate.com/img/docta.jpg" alt="" class="img-fluid">
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End about -->
		


		
		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Besoin d'une consultation dentaire de toute urgence ?</h2>
							<p>Contactez - nous sans rien attendre car nous savons comment vous prendre en charge de manière efficiente</p>
							<div class="button">
								<a href="{{ url('contact') }}" class="btn">Contacter</a>
								<a href="{{ url('services') }}" class="btn second">EN savoir plus<i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->

		<!-- Services -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Nos  services</h2>
							<img src="fdmf.mastagate.com/img/section-img.png" alt="#">
							<p>Nous mettons notre expertise à votre disposition</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news h-100">
							<div class="news-head">
								<img src="fdmf.mastagate.com/img/dents5.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									
									<h2><a href="#"> <strong>SOINS PRÉVENTIFS & HYGIÈNE DENTAIRE</strong></a></h2>
									<p class="text">•	Bilans dentaires (examen complet, dépistage des caries, détartrage)</p>
									<p class="text">•	Scellement de sillons pour protéger les dents des enfants</p>
									<p class="text">•	Fluoruration pour renforcer l’émail</p>
									<p class="text">•	Conseils personnalisés en hygiène bucco-dentaire</p>
									
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news  h-100">
							<div class="news-head">
								<img src="fdmf.mastagate.com/img/dents4.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									
									<h2><a href="#"><strong>SOINS CONSERVATEURS & RESTAURATEURS</strong></a></h2>
									<p class="text">•	Traitement des caries (composites, inlays/onlays)</p>
									<p class="text">•	Dévitalisation (traitement endodontique)</p>
									<p class="text">•	Pose de couronnes et bridges</p>
									<p class="text">•	Facettes dentaires pour un sourire esthétique</p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news  h-100">
							<div class="news-head">
								<img src="fdmf.mastagate.com/img/dents2.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
								
									<h2><a href="#"><strong>PARODONTOLOGIE & SOINS DES GENCIVES</strong></a></h2>
									<p class="text">•	Détartrage profond (surfaçage radiculaire)</p>
									<p class="text">•	Traitement des gingivites et parodontites</p>
									<p class="text">•	Greffe de gencive (si nécessaire)</p>
									
								</div>
							</div>
						</div>
					</div>
						<div class="col-lg-4 col-md-6 col-12 mt-5">
							<!-- Single Blog -->
							<div class="single-news  h-100">
								<div class="news-head">
									<img src="fdmf.mastagate.com/img/dents1.jpg" alt="#">
								</div>
								<div class="news-body">
									<div class="news-content">
									
										<h2><a href="#"><strong>ORTHODONTIE & ALIGNEMENT DENTAIRE</strong></a></h2>
										<p class="text">•	Traitements orthodontiques (appareils fixes, invisalign, gouttières)</p>
										<p class="text">•	Correction des malocclusions pour adultes et enfants</p>
										
									</div>
								</div>
							</div>
						</div>
							<div class="col-lg-4 col-md-6 col-12 mt-5">
								<!-- Single Blog -->
								<div class="single-news  h-100">
									<div class="news-head">
										<img src="fdmf.mastagate.com/img/dents6.jpg" alt="#">
									</div>
									<div class="news-body">
										<div class="news-content">
										
											<h2><a href="#"><strong>IMPLANTOLOGIE & PROTHÈSES DENTAIRES</strong></a></h2>
											<p class="text">•	Pose d’implants dentaires (remplacement de dents manquantes)</p>
											<p class="text">•	Prothèses fixes et amovibles (dentiers, bridges)</p>
											
										</div>
									</div>
								</div>
							</div>
								<div class="col-lg-4 col-md-6 col-12 mt-5">
									<!-- Single Blog -->
									<div class="single-news  h-100">
										<div class="news-head">
											<img src="fdmf.mastagate.com/img/dents3.jpg" alt="#">
										</div>
										<div class="news-body">
											<div class="news-content">
											
												<h2><a href="#"><strong>DENTISTERIE ESTHÉTIQUE</strong></a></h2>
												<p class="text">•	Blanchiment dentaire (séance en cabinet ou à domicile)</p>
												<p class="text">•	Facettes céramiques pour un sourire harmonieux</p>
												<P class="text">•	Éclaircissement des dents tâchées</P>
												
											</div>
										</div>
									</div>
								</div>
						<!-- End Single Blog -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Services -->

			<!-- Start Réalisations -->
			<section class="why-choose section" >
			<div class="container">
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3>Nos réalisations </h3>
							<p>•	CSR Zola Nsiaku / Mpozo</p>
							<p>•	HGR KIAMVU</p>
								<p>•	CS OEBK</p>
							<p>•	CLINIQUE MÉDICALE BUCCO DENTAIRE MUTUALISTE (CMBDM)</p>
	  
							
						</div>

						
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-rights">
							
							
								<!--/ End Video Animation -->
								<img src="fdmf.mastagate.com/img/realisations.jpg" alt="" class="img-fluid">
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Réalisations -->

		
		<!-- Devise -->
		<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Amour – Justice – Travail</h2>
							<img src="fdmf.mastagate.com/img/section-img.png" alt="#">
							<p>Soyons unis pour vivre ensemble, pour vivre mieux</p>
						</div>
					</div>
				</div>
				
			</div>
		</section>
		<!-- End Devise -->

		
		<!-- Start Call to action -->
		<section class="call-action overlay" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="content">
							<h2>Mention légale</h2>
							<p>Arrêté Ministériel n°220/CAB/ME/MIN/J&GS/2025 du 10 Mars 2025 accordent la personnalité juridique à l'Association Sans But Lucratif non Confessionnelle dénommée</p>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		

		<!-- Equipements -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Nos Equipements</h2>
							<img src="fdmf.mastagate.com/img/section-img.png" alt="#">
							<p>Des équipements ultra sophistiqués</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news h-100">
							<div class="news-head">
								<img src="fdmf.mastagate.com/img/do.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									
									<h2><a href="#"> <strong>	Boîtes de chirurgie, DO et Endo</strong></a></h2>
									
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news  h-100">
							<div class="news-head">
								<img src="fdmf.mastagate.com/img/Micromoteur.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									
									<h2><a href="#"><strong>	Micro Moteurs </strong></a></h2>
									
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news  h-100">
							<div class="news-head">
								<img src="fdmf.mastagate.com/img/Lampe.jpg" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
								
									<h2><a href="#"><strong>	Lampe photo</strong></a></h2>
								 
									
								</div>
							</div>
						</div>
					</div>


						<div class="col-lg-4 col-md-6 col-12 mt-5">
							<!-- Single Blog -->
							<div class="single-news  h-100">
								<div class="news-head">
									<img src="fdmf.mastagate.com/img/Radiographie.jpg" alt="#">
								</div>
								<div class="news-body">
									<div class="news-content">
									
										<h2><a href="#"><strong>Radiographie dentaire</strong></a></h2>
										
									</div>
								</div>
							</div>
						</div>
							<div class="col-lg-4 col-md-6 col-12 mt-5">
								<!-- Single Blog -->
								<div class="single-news  h-100">
									<div class="news-head">
										<img src="fdmf.mastagate.com/img/Detrarteur.jpg" alt="#">
									</div>
									<div class="news-body">
										<div class="news-content">
										
											<h2><a href="#"><strong>Détartreur ultrasonique</strong></a></h2>
											
											
										</div>
									</div>
								</div>
							</div>
								<div class="col-lg-4 col-md-6 col-12 mt-5">
									<!-- Single Blog -->
									<div class="single-news  h-100">
										<div class="news-head">
											<img src="fdmf.mastagate.com/img/Fauteuils.jpg" alt="#">
										</div>
										<div class="news-body">
											<div class="news-content">
											
												<h2><a href="#"><strong>Fauteuil classique</strong></a></h2>
												
												
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-12 mt-5">
									<!-- Single Blog -->
									<div class="single-news  h-100">
										<div class="news-head">
											<img src="fdmf.mastagate.com/img/hospi1.jpg" alt="#">
										</div>
										<div class="news-body">
											<div class="news-content">
											
												
												
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-12 mt-5">
									<!-- Single Blog -->
									<div class="single-news  h-100">
										<div class="news-head">
											<img src="fdmf.mastagate.com/img/hospi2.jpg" alt="#">
										</div>
										<div class="news-body">
											<div class="news-content">
											
												
												
												
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-12 mt-5">
									<!-- Single Blog -->
									<div class="single-news  h-100">
										<div class="news-head">
											<img src="fdmf.mastagate.com/img/hospi3.jpg" alt="#">
										</div>
										<div class="news-body">
											<div class="news-content">
											
												
												
												
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-12 mt-5">
									<!-- Single Blog -->
									<div class="single-news  h-100">
										<div class="news-head">
											<img src="fdmf.mastagate.com/img/hospi4.jpg" alt="#">
										</div>
										<div class="news-body">
											<div class="news-content">
											
												
												
												
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-12 mt-5">
									<!-- Single Blog -->
									<div class="single-news  h-100">
										<div class="news-head">
											<img src="fdmf.mastagate.com/img/hospi5.jpg" alt="#">
										</div>
										<div class="news-body">
											<div class="news-content">
											
												
												
												
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-12 mt-5">
									<!-- Single Blog -->
									<div class="single-news  h-100">
										<div class="news-head">
											<img src="fdmf.mastagate.com/img/hospi6.jpg" alt="#">
										</div>
										<div class="news-body">
											<div class="news-content">
											
												
												
												
											</div>
										</div>
									</div>
								</div>


								
						<!-- End Single Blog -->


					
					</div>
				</div>
			</div>
		</section>
		<!-- End Equipements -->

		<!-- Actualité -->
		<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Actualités</h2>
							<img src="fdmf.mastagate.com/img/section-img.png" alt="#">
							<p>Nos articles les plus récents</p>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($recentPosts as $recentPost)
					<a href="{{route('blogD.show', $recentPost->id)}}">
						<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news h-100">
							<div class="news-head">
								<img src="{{ asset('images/' . $recentPost->image) }}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									
									<h2><a href="{{route('blogD.show', $recentPost->id)}}"> <strong>{{ $recentPost->titre }}</strong></a></h2>
									<p class="text">{{ Str::limit($recentPost->contenu, 100, '...') }}</p>
									
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
					</a>
					@endforeach
				</div>
			</div>
		</section>
		<!-- End Actualité -->

        @endsection

        @push('scripts')
<script>
    // Disparition automatique de l'alerte après 4 secondes
    setTimeout(function() {
        let alert = document.getElementById('success-alert');
        if (alert) {
            alert.style.transition = "opacity 0.5s ease-out";
            alert.style.opacity = 0;
            setTimeout(() => alert.remove(), 500);
        }
    }, 4000);
</script>
@endpush