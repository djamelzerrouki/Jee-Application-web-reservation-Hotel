<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<!--
Template Name: Escarine-Med
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>APP Web Hotel </title>
<!-- Créer par ZERROUKI Djamel-->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css"
	media="all">
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700'
	rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery.min.js"></script>
</head>
<body id="top">

	<%@include file="HeadMinu.jsp"%>



	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<div id="pageintro" class="hoc clear">
		<!-- ################################################################################################ -->
		<article class="introtxt">
		<h2 class="heading">L'hôtel de vos rêves au meilleur prix.</h2>
		<p>Bienvenue chez nous...</p>
		<footer> <a class="btn" href="#">Actualiser</a></footer> </article>
		<!-- ################################################################################################ -->
		<div class="clear"></div>
	</div>
	<!-- ################################################################################################ -->
	</div>
	<!-- End Top Background Image Wrapper -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<div class="wrapper row3">
		<section id="introblocks" class="hoc clear"> <!-- ################################################################################################ -->
		<h4 class="heading">Hotel Information</h4>
		<div class="table nospace clear">
			<div class="cell">
				<!-- ################################################################################################ -->
				<h4 class="heading">
					<i class="fa fa-medkit"></i> Services d'administration

				</h4>
				<ul>
					<li><i class="fa fa-external-link"></i> <a href="Administration.Ca">Gestion des Hotels</a></li>
					<li><i class="fa fa-external-link"></i> <a href="Administration.Ca">Gestion des Chambres</a></li>
					<li><i class="fa fa-external-link"></i> <a href="Administration.Ca"> Consulter Tous les Réservations</a></li>
				</ul>
				<!-- ################################################################################################ -->
			</div>
			<div class="cell">
				<!-- ################################################################################################ -->
				<h4 class="heading">
					<i class="fa fa-bookmark-o"></i> Services en ligne aux Client
				</h4>
				<ul>
					<li><i class="fa fa-external-link"></i> <a href="#Rechercher">Rechercher
							Un Hôtel</a></li>
					<li><i class="fa fa-external-link"></i> <a href="#Reservation">Reservation</a></li>
					<li><i class="fa fa-external-link"></i> <a href="#Comment">Commentaire
							en ligne du Client</a></li>

				</ul>
				<!-- ################################################################################################ -->
			</div>
			<div class="cell">
				<!-- ################################################################################################ -->
				<h4 class="heading">
					<i class="fa fa-clock-o"></i> Heures de visite à l'hôtel
				</h4>
				<ul>
					<li><span>lundi - vendredi</span> <span>24 h/24</span></li>
					<li><span>Samedi </span> <span>7.00 - 00.00 </span></li>
					<li><span>Dimanche</span> <span>7.00 - 7.00</span></li>
				</ul>
				<!-- ################################################################################################ -->
			</div>
		</div>
		<!-- ################################################################################################ -->
		<div class="clear"></div>
		</section>
	</div>
	


	<div class="banner">
		<div class="banner-info text-center">
			<h3>
				<label>Bonjour,</label> Vous avez atteint
			</h3>
			<h1>Rechercher Hôtel</h1>
			<span></span>
			<ul>
				<li><a href="#">Remplissez toutes les informations pour
						obtenir le bon hôtel pour vous</a>
			</ul>
		</div>
	</div>

	<form action="controleur.do#listHotel" method="post">

		<div class="online_reservation">
			<form id="Rechercher" name="formRechrch" method="post">
				<div class="b_room">
					<div class="booking_room">
						<div class="reservation">
							<ul>
								<li class="span1_of_1 left">
									<h5>Arrival</h5>
									<div class="book_date">
										<input class="date" name="dateA" id="datepicker" type="date"
								 	size="22" required />
									</div>
								</li>
								<li class="span1_of_1 left">
									<h5>Depature</h5>
									<div class="book_date">
										<input class="date" id="datepicker1" type="date" name="dateD"
											size="22" required />

									</div> <script type="text/javascript">
										document.querySelector("#datepicker").valueAsDate = new Date();
										document.querySelector("#datepicker1").valueAsDate = new Date();
									</script>
								</li>
								<li class="span1_of_1">
									<h5>Type de chambre</h5> <!----------start section_room----------->
									<div class="section_room">
										<select name="type" id="country"
											onchange="change_country(this.value)"
											class="frm-field required">
											<option value="Simple Standard">Simple Standard</option>
											<option value="Suite chambre">Suite chambre</option>
											<option value="Chambre individuelle">Chambre
												individuelle</option>
											<option value="Chambre double">Chambre double</option>
										</select>
									</div>
								</li>
								<li class="span1_of_1">
									<h5>Paye</h5> <!----------start section_room----------->
									<div class="section_room">

										<select name="paye" id="country"
											onchange="change_country(this.value)"
											class="frm-field required">
											<option value="Algerie">Algérie</option>
											<option value="Maroc">Maroc</option>
											<option value="France">France</option>
											<option value="Italie">Italie</option>
											<option value="America">America</option>

										</select>
									</div>
								</li>
								<li class="span1_of_3">
									<div class="date_btn">
										<form>
											<input type="submit" class="btn" value="Rechercher"
												name="action" />


										</form>
									</div>
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</form>
		</div>


	</form>

	<br />
	<br />
	<br />
	<br />
	<br />
	<br />


	<div class="wrapper row5">
		<!-- ################################################################################################ -->
		<div class="banner-info text-center">
			<h1>Etoiles</h1>

			<h3>
				<label>Etoiles,</label>tu peux filtrer les hôtels par rapport le
				nombre des étoiles.
			</h3>

		</div>
		<br /> <br />

		<nav class="sdb_holder">

		<table width="80%">
			<tr>
				<th><a class="Etoiles"
					href="controleur.do?action=etoilaction&nmber=*****#listHotel">*
						* * * *</a></th>
				<th><a class="Etoiles"
					href="controleur.do?action=etoilaction&nmber=****#listHotel">*
						* * *</a></th>
				<th><a class="Etoiles"
					href="controleur.do?action=etoilaction&nmber=***#listHotel">* *
						*</a></th>
				<th><a class="Etoiles"
					href="controleur.do?action=etoilaction&nmber=**#listHotel">* *</a>
				</th>
			</tr>
		</table>


		</nav>


		<!-- ################################################################################################ -->
	</div>
	<!-- ################################################################################################ -->


	<div class="wrapper row3" id="listHotel">
		<div class="hoc left clear">
			<!-- ################################################################################################ -->
			<h2 class="titel">Liste Des Hôtels</h2>
			<p class="btmspace-50">liste des hôtels disponible, après la
				recherche...</p>
			<div class="group element">
				<form action="controleur.do" method="get">


					<c:forEach items="${Listhotel}" var="h">


						</article>
						<article class="one_quarter"> <img
							src="images/demo/${h.h_code}.jpg" alt="">
						<div class="txtwrap">
							<h5 class="heading">${h.h_Nom}</h5>

							<h6 class="heading">Etoiles:${h.etoil}</h6>
							<em>Paye : ${h.paye},<br> Adresse : ${h.h_Adress} ,<br>
								Téléphone : ${h.h_tlphon}
							</em>
							<h5 class="Etoile">${h.etoil}</h5>



							<footer> <a class="btn small"
								href="controleur.do?action=voir&h_code=${h.h_code}#listChambres">Voir</a></footer>

						</div>
						</article>


					</c:forEach>
				</form>

			</div>
			<!-- ################################################################################################ -->
		</div>
	</div>




	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->


	<div class="wrapper row5" id="listChambres">
		<div class="hoc container clear">
			<!-- ################################################################################################ -->
			<h2 class="btmspace-50">Liste Des Chambres</h2>
			<p class="btmspace-50">liste des Chambres disponible, après la
				recherche...</p>
			<div class="group element">


				<c:forEach items="${listChambres}" var="c">
					</article>
					<article class="one_quarter"> <img
						src="images/demo/${c.c_imag}.jpg" alt="">
					<div class="txtwrap">
						<h5 class="heading">${c.etat}</h5>

						<h6 class="heading">Hotel:${c.h_hotel}</h6>
						<em>Type : ${c.type},<br> Number lit : ${c.number_Lit}
						</em>
						<h5 class="Prix">Prix: ${c.prix} DA</h5>
						<footer> <a class="btn small"
				 
							href="Resarvation.do?action=LoginClient&c_code=${c.c_code}#Reservation">Reservation</a></footer>
					</div>
			 
					</article>
				</c:forEach>


			</div>
			<!-- ################################################################################################ -->
		</div>
	</div>
				

			<!-- ################################################################################################ -->
			<!-- ################################################################################################ -->
			<!-- ################################################################################################ -->
			<!-- ################################################################################################ -->

	<!-- <form action="controleur.do#ConsulterReservation" method="post" id="Reservation"
		class="form-style-9">


		<ul>
			<h1 class="titel">Reservation</h1>
			<li>
				<div>
					<input type="text" name="nom"
						class="field-style field-split align-left" placeholder="Nom"
						size="22" required /> <label for="nom"><span>*</span></label>
				</div>

			</li>

			<li>
				<div>
					<input type="text" name="prenom"
						class="field-style field-split align-left" placeholder="Prénom"
						size="22" required /> <label for="nom"><span>*</span></label>
				</div>

			</li>

			<li>
				<div>

					<input type="email" name="email"
						class="field-style field-split align-left" placeholder="Email"
						size="22" required /> <label for="email"><span>*</span></label>
				</div>
			</li>
			<li>
				<div>

					<input type="text" name="tlephon"
						class="field-style field-split align-left" placeholder="Téléphone"
						size="22" required /> <label for="tlephon"><span>*</span></label>
				</div>

			</li>


			<li><textarea name="Description" class="field-style"
					placeholder="Description"></textarea></li>
			<li><input type="submit" name="action"  value="Reserver" /></li>
		</ul>
	</form> -->

<div class="wrapper row3">
		<div id="comments">

			<h2>Comments</h2>
			<ul>
				<c:forEach items="${listCommentaires}" var="n">

					<li><article> <header> <figure
							class="avatar"> <img src="images/demo/avatar.png" alt=""></figure>
						<address>
							By <a class="Name_Comment"
								href="https://mail.google.com/mail/u/0/#inbox?compose=new">
								${n.nom}</a>
						</address>
						<em>${n.email} <br>
						</em> <time datetime="2045-04-06T08:15+00:00"> Date : ${n.date}</time>
						</header>
						<div class="comcont">
							<p>${n.comment}</p>
						</div>
						</article></li>
				</c:forEach>
			</ul>


			<ul>
				<li>

					<h2 class="titel">Ajouter Un Commentaire</h2>

					<form action="controleur.do#comments" method="post" id="Comment">

						<div class="one_third first">
							<label for="name">Nom <span>*</span></label> <input type="text"
								name="name" id="name" value="" size="22" required>
						</div>
						<div class="one_third">
							<label for="email">Email <span>*</span></label> <input
								type="email" name="email" id="email" value="" size="22" required>
						</div>
						<div class="one_third">
							<label for="url">Site web</label> <input type="url" name="url"
								id="url" value="" size="22">
						</div>
						<div class="block clear">
							<label for="comment">Votre Commentaire</label>
							<textarea name="comment" id="comment" cols="25" rows="10"></textarea>
						</div>
						<div>
							<input type="submit" name="action" value="Comment">
							&nbsp; <input type="reset" name="action" value="Reset Form">
						</div>

					</form>
				</li>
			</ul>
		</div>
	</div>


	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->

 <!-- 				################################################################################################ -->
<!-- 				################################################################################################ -->
<!-- 				################################################################################################ -->
	
	
	

	
	<div id="ConsulterReservation" class="wrapper row5">
		<div id="newsletter" class="hoc clear">
			<!-- ################################################################################################ -->
			<div class="one_quarter first">
				<h6 class="heading">
					<i class="fa fa-newspaper-o"></i>Consulter Réservation</h6>
			</div>
						<!-- ################################################################################################ -->
			
			<form class="three_quarter" method="post"
				action="ConsulterReservation.do">
				<div class="clear">
					<input class="one_third first" type="text" value=""
						placeholder="Nom d'utilisateur" required name="nom"> <input
						class="one_third" type="email" value="" name="email"
						placeholder="Email" required>
					<button class="one_third" type="submit" title="Sign Up">
						Consulter</button>
				</div>
			</form>
			<!-- ################################################################################################ -->
		</div>
	</div>

	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	




	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<div class="wrapper row6">
		<div id="copyright" class="hoc clear">
			<!-- ################################################################################################ -->
			<p class="fl_left">
				Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain
					Name</a>
			</p>
			<p class="fl_right">
				Template by <a target="_blank" href="http://www.os-templates.com/"
					title="Free Website Templates">OS Templates</a>
			</p>
			<p class="fl_right">
				Créate by <a target="_blank"
					href="https://www.facebook.com/djamel.jimmi.3" title="my  facebook">djamel
					jimmi</a>
			</p>
			<!-- ################################################################################################ -->
		</div>
	</div>
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	
	
	
	
 	<!-- JAVASCRIPTS -->
	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	<!-- IE9 Placeholder Support -->
	<script src="layout/scripts/jquery.placeholder.min.js"></script>
	<!-- / IE9 Placeholder Support -->
</body>
</html>