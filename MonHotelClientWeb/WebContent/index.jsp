<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>

<!DOCTYPE html>
<html>
<head>
<title>hotel-fortune bootstrap Design website | Home :: w3layouts</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="js/jquery.min.js"></script>
</head>
<body>
<!--header starts-->
<div class="header">
	
	
		<%@include file="MinuHome.jsp"%>
	 
	
			 <div class="clearfix"></div>
		  </div>
	  </div>
	  <div class="banner">
			<div class="banner-info text-center">
			<h3><label>Bonjour,</label> vous avez atteint</h3>
			<h1>HÔTEL FORTUNE</h1>
			<span></span>
			<ul>
			 <li><a class="scroll" href="#">UN HÔTEL</a><i class="line"></i></li>
			 <li><a class="scroll" href="#">SALON SPA</a><i class="line2"></i></li>
			 <li><a class="scroll" href="#">FINE DINING</a></li>
			 <div class="clearfix"></div>
			</ul>
			</div>
	  </div>
</div>
<!---strat-date-piker---->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="css/JFGrid.css" />
<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
<script type="text/javascript" src="js/JFCore.js"></script>
<script type="text/javascript" src="js/JFForms.js"></script>
<!-- Set here the key for your domain in order to hide the watermark on the web server -->
<script type="text/javascript">
	(function() {
		JC.init({
			domainKey: ''
		});
	})();
</script>

 			 	<form action="Chambre.Na" method="get">
<div class="online_reservation">
		   <div class="b_room">
			  <div class="booking_room">

			  
				  <div class="reservation">
					  <ul>				
						 <li  class="span1_of_1 left">
							 
									<h5>Arrival</h5>
									<div class="book_date">
										<input  name="dateA" id="dateA" type="date"
								 	size="22" required />
									</div>
								</li>
								<li class="span1_of_1 left">
									<h5>Depature</h5>
									<div class="book_date">
										<input    id="dateD" type="date" name="dateD"
											size="22" required />

									</div> <script type="text/javascript">
										document.querySelector("#dateA").valueAsDate = new Date();
										document.querySelector("#dateD").valueAsDate = new Date();
									</script>
								</li>
						 <li class="span1_of_1">
							 <h5>type Chambre</h5>
							 <!----------start section_room----------->
							 <div class="section_room">
							      
							      
							      	<select name="type" id="country" name="type"
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
						 	 <li class="span1_of_3">
								<div class="date_btn">
						 
										<input  class="btn small" type="submit" value="View Prices" />
								 
								</div>
						 </li>
					 
						 <div class="clearfix"></div>
					 </ul>
				 </div>
			
			  </div>
				<div class="clearfix"></div>
		  </div>
	  </div>
	  	
				 </form>
 
<!---->
<div class="package text-center">
	 <div class="container">
		 <h3>Réserver un forfait</h3>
		 <p>Cependant recette de salade de performance que de maquillage. Vallée Lorem comme un doux gorille, bananes football massa. Mais les développeurs de piment se suffit de la gorge. Aliquam lobortis Orci lacus, sed faucibus augue dapibus vitae. Pour sapien ma vie. Juste un bateau touristique.
La masse de Curabitur odio, tincidunt nec nibh sit amet</p>
		<!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : true,
							        navigationText :  false,
							        pagination : false,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		  <div id="owl-demo" class="owl-carousel">
			  <div class="item text-center image-grid">	
					<ul>
					 <li><img src="images/1.jpg" alt=""></li>			    
					 <li><img src="images/2.jpg" alt=""></li>				 
					 <li><img src="images/3.jpg" alt=""></li>
					 </ul>
			  </div>
			  <div class="item text-center image-grid">	
					<ul>
					<li> <img src="images/3.jpg" alt=""></li>			    
					 <li><img src="images/4.jpg" alt=""></li>				 
					 <li><img src="images/5.jpg" alt=""></li>
					 </ul>
			  </div>
			  <div class="item text-center image-grid">	
					<ul>
					<li> <img src="images/6.jpg" alt=""></li>			    
					 <li><img src="images/2.jpg" alt=""></li>				 
					 <li><img src="images/8.jpg" alt=""></li>
					 </ul>
			  </div>
		  </div> 		
	 </div>
</div>
<!---->
<!---->
<div class="rooms text-center">
	 <div class="container">
		 <h3>Nos types de chambres</h3>
		 <div class="room-grids">
			 <div class="col-md-4 room-sec">
				 <img src="images/pic1.jpg" alt=""/>
				 <h4>Chambre double standard</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus thermique présente vitæ dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="col-md-4 room-sec">
				 <img src="images/pic2.jpg" alt=""/>
				 <h4>Chambre Double suppérieur</h4>
				 <p>
116/5000
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lectus thermique présente vitæ dui sollicitudin commodo.</p>
				 <div class="items">					
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="col-md-4 room-sec">
				 <img src="images/pic3.jpg" alt=""/>
				 <h4>Chambre de famille</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="clearfix"></div>
			 <div class="col-md-4 room-sec">
				 <img src="images/pic4.jpg" alt=""/>
				 <h4>Chambre Simple Standard</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="col-md-4 room-sec">
				 <img src="images/pic5.jpg" alt=""/>
				 <h4>Chambre Simple Supérieure</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="col-md-4 room-sec">
				 <img src="images/pic6.jpg" alt=""/>
				 <h4>Salle VIP</h4>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque lectus vitae dui sollicitudin commodo.</p>
				 <div class="items">
					 <li><a href="#"><span class="img1"> </span></a></li>
					 <li><a href="#"><span class="img2"> </span></a></li>
					 <li><a href="#"><span class="img3"> </span></a></li>
					 <li><a href="#"><span class="img4"> </span></a></li>
					 <li><a href="#"><span class="img5"> </span></a></li>
					 <li><a href="#"><span class="img6"> </span></a></li>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
 
<!---->
 
    
    <!---->

</body>
</html>