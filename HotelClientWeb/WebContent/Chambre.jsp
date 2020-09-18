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
<title>APP Web Hotel Chambre.jsp</title>
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
	 
 	 <%@include file="HeadMinuAdministration.jsp" %>  
	 	  <br/><br/><br/><br/>
  </div>
	  <br/><br/>
	  
	  
	  <form action="Chambre.Ca" method="post" id="Ajouter"
		class="form-style-9">


		<ul>
			<h1 class="titel">Ajoute Chambre</h1>
			<br>
			
			<li>
				<div>

					<input type="text" name="H_code"
						class="field-style field-split align-left" placeholder="Code Hotel"
						size="22" required /> <label for="h_code"><span>*</span></label>
				</div>
			</li>
									<li class="span1_of_1">
									<h5>Type de chambre</h5> <!----------start section_room----------->
									<div class="section_room">
										<select name="type" id="country"
											onchange="change_country(this.value)"
											class="field-style field-split align-left">
											<option value="Simple Standard">Simple Standard</option>
											<option value="Suite chambre">Suite chambre</option>
											<option value="Chambre individuelle">Chambre
												individuelle</option>
											<option value="Chambre double">Chambre double</option>
										</select>
									</div>
								</li>
			<li>
				<div>
					<input type="namber" name="prix"
						class="field-style field-split align-left" placeholder="Prix"
						size="22" required /> <label for="prix"><span>*</span></label>
				</div>

			</li>
	<li class="span1_of_1">
									<h5>Etat</h5> <!----------start section_room----------->
									<div class="section_room">

										<select name="etat" id="etat"
											onchange="change_country(this.value)"
											class="field-style field-split align-left">
											<option value="true">Libre</option>
											<option value="false">Occupé</option>
										 

										</select>
									</div>
								</li>
								
									<li class="span1_of_1">
									<h5>Number Lit</h5> <!----------start section_room----------->
									<div class="section_room" >

										<select name="numberLit" id="numberLit"
											onchange="change_country(this.value)"
											class="field-style field-split align-left">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
 
										</select>
									</div>
								</li>
			
			 
 
			<li><input type="submit" name="action" value="Ajouter" /></li>
		</ul>
	</form>
	  
	  
	  <br>
	  			<h1 class="titel">La liste des  Chambres</h1>
	  			  <br>
	  
<form action="Hotel.Ca" method="post"  id="table">	  
 <table class="table"   >
 
<tr>
<th>C_CODE</th><th>Type</th><th>Image</th>
<th>Code Hotel</th><th>Etat</th><th>Numbre Lit</th> 
<th>Prix</th> 
<c:forEach items="${Listchambres}" var="c">

<tr>
<td>${c.c_code}</td>
 <td>${c.type}</td>
<td>${c.c_imag}</td>
<td>${c.h_hotel}</td>
<td>${c.etat}</td>
<td>${c.number_Lit}</td> 
<td>${c.prix} DA</td>

 

<td> <a class="btn small"  onclick="return confirm('Etes vous sûre de supprimer La Chambre N° ${c.c_code}   ?')"  name="operation" href="Chambre.Ca?operation=supprimer&c_code=${c.c_code}">Supprimer</a></td>
<%-- <td> <a class="btn small"   name="operation" href="Hotel.Ca?operation=modifie&r_code=${h.h_code}">Modifie</a></td> --%>

 </tr>

</c:forEach>

</tr>
</table>
	   </form>
	<script src="layout/scripts/jquery.min.js"></script>
	<script src="layout/scripts/jquery.backtotop.js"></script>
	<script src="layout/scripts/jquery.mobilemenu.js"></script>
	<!-- IE9 Placeholder Support -->
	<script src="layout/scripts/jquery.placeholder.min.js"></script>
	<!-- / IE9 Placeholder Support -->
</body>
</html>