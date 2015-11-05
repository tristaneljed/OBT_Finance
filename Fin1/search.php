<!DOCTYPE HTML>


<html>
	<head>
		<title>R&eacute;sultat de recherche | Emprunt OBL</title>
		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
        <script type="text/javascript" src="js/ajouterEmprunt.js"></script>
		
		<!-- prefix free to deal with vendor prefixes -->
		<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js"></script>

		<!-- jQuery -->
		<script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js"></script>
		<script  src="js/script1.js"></script>	
         
       <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
        <script src="js/jquery.bootstrap-growl.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
            <link type="text/css" href="css/jquery.toastmessage-min.css" rel="stylesheet"/>
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
              <script type="text/javascript"> 
function imprimer(){
document.getElementById("print").style.visibility="hidden";
window.print();
document.getElementById("print").style.visibility="visible";
} 

</script> 
	</head>
	<body class="left-sidebar">
    
		 <!-- Header -->
      <div id="header">

            <!-- Inner -->
      <div class="inner">
                <header>
                    <h1>R�sultat de recherche | Emprunt OBL</h1>
                </header>
            </div>
        </div>

			
		<!-- Main -->
			
			<div class="wrapper style2">
				<div class="container">
					<div class="row">
						<div class="4u" id="sidebar">
							<section>
								<div class="byline"><a href="index.php#start">Accueil</a>
                             </div>
							</section>
						</div>

						<div class="8u skel-cell-mainContent" id="content">
							<!--<form action='save.php' method='post' target="_blank">-->
								<article id="main">
									
										<h2>
										</h2>
									<br>							
								<?php 
include 'DAO/ConnexionBD.php';
include 'DAO/GestionBD.php';
include 'DAO/EmpruntDAO.php';
include 'Metier/Emprunt.php';
$_recherche =$_POST['recherche'];
$_Connexion=new ConnexionBD();
$_Connexion->connect();
$_GestionBD = new GestionBD($_Connexion);
$_empruntDAO=new EmpruntDAO($_GestionBD);
$_emprunt=$_empruntDAO->recherche($_recherche);
?>	
<table width="50%" border="0" cellspacing="0">
  <tr>
    <td><a onClick="imprimer()" id="print"><img src="images/PNG-24/Print.png"></a>
    <img src="images/PNG-24/Save.png"></td>
    <td></td>
  </tr>
</table>

	
  			
                                    
							  </article>
						<!--	</form>-->
						</div>
					</div>		
				</div>
			</div>
		
	</body>
</html>