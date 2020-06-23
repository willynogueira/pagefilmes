

<?php 
include "conf.php"
;?>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Filmes Top</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css"> 
   <link rel="stylesheet" href="css/vendor.css"> 
   <link rel="stylesheet" href="css/main.css">    

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>
	<script src="scriptchat.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">
	
	<!-- header 
   ================================================== -->
   <header class="main-header">
   	
   	<div class="logo">
	      <a href="index.php">Filmes Top</a>
	   </div> 

	   <a class="menu-toggle" href="#"><span>Menu</span></a>   	

   </header>

   <!-- main navigation 
   ================================================== -->
   <nav id="menu-nav-wrap">

   	<h3>Navegação</h3>   	
		<ul class="nav-list">
			<li><a class="smoothscroll" href="#intro" title="">Home</a></li>
			<a href="index.php" >Filmes</a>
						
		</ul>

		</div>

	</nav> <!-- /menu-nav-wrap -->




















	<!-- main content wrap
   ================================================== -->
   <div id="main-content-wrap">


		<!-- main content wrap
   	================================================== -->
   

		   							



		<!-- features
   	================================================== -->
		
<section  id="features">

		   <!-- <div class="shadow-overlay"></div> -->
		   
		   <div class="row intro-content">
		   	<div class="col-twelve">

		   		<h3 class="animate-intro">CHAT ALL</h3>
					     		
				<div class="thumbnails">
<hr>
				<div class="buttons">
				  <label>coloque seu nick e clique em conectar </label><br>
				  
				  <input class="button stroke smoothscroll animate-intro" id="nick" type="text" placeholder="Seu nick"/>
				  
				  <button class="button stroke smoothscroll animate-intro" id="btnConectar" onclick="conectar();" >CONECTAR</button>
				</div>
				
				<div class="buttons">
				  <input class="button stroke smoothscroll animate-intro" id="msg" type="text" placeholder="Enviar msg" />
				  
				  <button class="button stroke smoothscroll animate-intro" id="btnEnviar" onclick="enviar();"  disabled>ENVIAR</button>
				</div>
				<hr>
				<div id="chat">
				  <h3> CHAT </h3>
				</div>
<hr>
				</div> <!-- /features-list --> 	
			  	</div> <!-- /twelve --> 		   			
		   </div> <!-- /row -->   

		</section> <!-- /intro -->



	</div>
   <!-- footer
	================================================== -->
	<footer id="main-footer">

   	<div class="footer-social-wrap">  
   		<div class="row">
					
	         <ul class="footer-social-list">
	            <li><a href="#">
	             	<i class="fa fa-facebook-square"></i>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-twitter"></i>
	            </a></li>
              <li><a href="#">
	              	<i class="fa fa-google-plus"></i>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-pinterest"></i>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-instagram"></i>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-dribbble"></i>
	            </a></li>
	         </ul>
		         
			</div> 
			
   	</div> <!-- /footer-social-wrap -->

	   	
	   <div class="footer-bottom"> 

	   	<div class="copyright">
		     	<span>© Copyright FilmesTop 2020.</span> 
		              	
		   </div>  		
   	</div>
	   	
   </footer>   

   <div id="go-top">
		<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
	</div>

   <!-- preloader
   ================================================== -->
   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>