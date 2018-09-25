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
<title>APP Web Hotel Créer par Chambre.jsp</title>
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

		<%@include file="MinuHome.jsp"%>


 <div class="rooms text-center">
	 <div class="container">
		 <h3>Liste des chambres disponibles</h3>
		 <div class="room-grids">
			<c:forEach items="${listchambre}" var="c">
			 <div class="col-md-4 room-sec">
				 <a href="#"><img src="images/demo/${c.imag}.jpg" alt=""/></a>
				 <div class="caption">
					<span>  ${c.prix} DA</span>
					<a href="Resarvation.Na?action=Reservation&c_code=${c.c_code}#Reservation">Reserve maintenant</a>
				 </div>
				 <h4>Type : ${c.type}</h4>
							 <em>Code : ${c.c_code} </em>
				 <p>Number lit : ${c.numbreLit}.</p>

				 <div class="items">
					 <a href="#"><span class="img1"> </span></a>
					 <a href="#"><span class="img2"> </span></a>
					 <a href="#"><span class="img3"> </span></a>
					 <a href="#"><span class="img4"> </span></a>
					 <a href="#"><span class="img5"> </span></a>
					 <a href="#"><span class="img6"> </span></a>
				 </div>
			 </div>
			 				</c:forEach>
			 
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
 
	
 	<!-- JAVASCRIPTS -->
	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	<!-- IE9 Placeholder Support -->
	<script src="layout/scripts/jquery.placeholder.min.js"></script>
	<!-- / IE9 Placeholder Support -->
</body>
</html>