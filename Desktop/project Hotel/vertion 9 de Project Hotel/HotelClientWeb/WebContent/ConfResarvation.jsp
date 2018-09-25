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
<title>APP Web Hotel  ConfResarvation.jsp</title>
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
	 
 	 <%@include file="HeadMinu.jsp" %>  
	 	  <br/><br/><br/><br/>
  </div>
	  <br/><br/>



	<!-- ################################################################################################ -->
			<!-- ################################################################################################ -->
			<!-- ################################################################################################ -->
			<!-- ################################################################################################ -->

	<form action="controleur.do#ConfermerReservation" method="post" id="Reservation"
		class="form-style-9">


		<ul>
		
			 
			 <li>
				<div>
				   <label for="reservation"><span>${errMsg.msg}</span></label>
				</div>

			</li>
			<h1 class="titel">La Reservation Bien Reçu</h1>
		
			<li>
				<div>
					Code de Reservation :  <label for="reservation"><span>${reservation.r_code}</span></label>
				</div>

			</li>
			<li>
				<div>
					Code de Chambre :  <label for="reservation"> ${reservation.c_code } </label>
				</div>

			</li>
			<li>
				<div>
					Code de Hotel :  <label for="Hotel"> ${reservation.h_hotel } </label>
				</div>

			</li>
			<li>
				<div>
					Nom :  <label for="nom"> <span>${client.nom }</span></label>
				</div>

			</li>

			<li>
				<div>
					Prénom :  <label for="Prénom"> ${client.prenom } </label>
				</div>

			</li>

			<li>
			<div>
					Email :  <label for="Email"> <span>${client.email }</span></label>
				</div>
			</li>
			<li>
			<div>
					Tléphon :  <label for="Tléphon"> ${client.tlephon } </label>
				</div>
			</li>
 
			<li>
				<div>
					Date de arrevi :  <label for="dateA"> ${reservation.dateA } </label>
				</div>

			</li>
			<li>
				<div>
					Date de Dépare :  <label for="dateD"> ${reservation.dateD }</label>
				</div>

			</li>

			<li><a
				 class="btn" href="controleur.do">Accueil</a></li>

 
		</ul>
	</form>

<!-- ################################################################################################ -->
				<!-- ################################################################################################ -->
				<!-- ################################################################################################ -->
				<!-- ################################################################################################ -->
	
	
	




	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	<!-- IE9 Placeholder Support -->
	<script src="layout/scripts/jquery.placeholder.min.js"></script>
	<!-- / IE9 Placeholder Support -->
</body>
</html>