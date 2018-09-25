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
<title>APP Web Hotel Créer par ZERROUKI Djamel</title>
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
	 
<%--  	 <%@include file="HeadMinu.jsp" %>   --%>
	 	  <br/><br/><br/><br/>
  </div>
	  <br/><br/>



	<!-- ################################################################################################ -->
			<!-- ################################################################################################ -->
			<!-- ################################################################################################ -->
			<!-- ################################################################################################ -->

	<form action="Resarvation.Na" method="post" id="Reservation"
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