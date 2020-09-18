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
<title>APP Web Hotel  Hotel.jsp</title>
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
	  
	  
	  <form action="Hotel.Ca" method="post" id="Ajouter"
		class="form-style-9">


		<ul>
			<h1 class="titel">Ajoute Hotel</h1>
			<br>
			<li>
				<div>
					<input type="text" name="nom"
						class="field-style field-split align-left" placeholder="Nom"
						size="22" required /> <label for="nom"><span>*</span></label>
				</div>

			</li>

			<li>
				<div>
					<input type="text" name="adress"
						class="field-style field-split align-left" placeholder="Adress"
						size="22" required /> <label for="adress"><span>*</span></label>
				</div>

			</li>
	<li class="span1_of_1">
									<h5>Paye</h5> <!----------start section_room----------->
									<div class="section_room">

										<select name="paye" id="country"
											onchange="change_country(this.value)"
											class="field-style field-split align-left">
											<option value="Algerie">Algérie</option>
											<option value="Maroc">Maroc</option>
											<option value="France">France</option>
											<option value="Italie">Italie</option>
											<option value="America">America</option>

										</select>
									</div>
								</li>
								
									<li class="span1_of_1">
									<h5>Etoil</h5> <!----------start section_room----------->
									<div class="section_room" >

										<select name="etoil" id="etoil"
											onchange="change_country(this.value)"
											class="field-style field-split align-left">
											<option value="*****">*****</option>
											<option value="****">****</option>
											<option value="***">***</option>
											<option value="**">**</option>
 
										</select>
									</div>
								</li>
			<li>
				<div>

					<input type="text" name="codepostal"
						class="field-style field-split align-left" placeholder="Code Postal"
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

 
			<li><input type="submit" name="action" value="Ajouter" /></li>
		</ul>
	</form>
	  
	  
	  <br>
	  			<h1 class="titel">La liste des  Hotels</h1>
	  			  <br>
	  
<form action="Hotel.Ca" method="post"  id="table">	  
 <table class="table" >
 
<tr>
<th>H_CODE</th><th>CODE Postel</th><th>ADRESS</th>
<th>ETOIL</th><th>Nom</th><th>Paye</th> 
<th>Tlephon</th> 
<c:forEach items="${Listhotel}" var="h">

<tr>
<td>${h.h_code}</td>
<td>${h.codePostal}</td>
<td>${h.h_Adress}</td>
<td>${h.etoil}</td>
<td>${h.h_Nom}</td> 
<td>${h.paye}</td>
 <td>${h.h_tlphon}</td>

 

<td> <a class="btn small"  onclick="return confirm('Etes vous sûre de supprimer Hotel   ?')"  name="operation" href="Hotel.Ca?operation=supprimer&h_code=${h.h_code}">Supprimer</a></td>
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