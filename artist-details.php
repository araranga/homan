<?php
include("api.php");
$_GET['artistdata'] = loadartist($_GET['artistId']);
$_GET['artistdata'] = $_GET['artistdata']['artists'][0];
$_GET['itemdata'] = loaditem($_GET['artistdata']['itemId']);
$_GET['itemdata']  = $_GET['itemdata']['items'][0];
?>
<!DOCTYPE html>
<html class=" js cssanimations csstransitions" hola_ext_inject="disabled">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title><?php echo $_GET['itemdata']['title'];?> by <?php echo $_GET['itemdata']['firstName'];?> <?php echo $_GET['itemdata']['lastName'];?> </title>
      <meta name="description" content="Fine Art at HOHMANN">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <?php include("inc/head.php"); ?>
<link type="text/css" rel="stylesheet" href="css/jquery.qtip.css" />
<link href="css/artist-item.css" rel="stylesheet">
	  
   </head>

   <body>
      <div class="wrapper">
         <!-- Top Header -->
         <div class="top">
            <div class="container">
               <span class="aux-text hidden-xs">
                  <!--Another responsive website template from Masterpiece Solutions-->                
               </span>
               <!--  nada -->
            </div>
         </div>
      </div>
	 <?php include("inc/header.php");?>
	 <?php include("inc/artistdetails.php");?>
      <footer>
		 <?php include("inc/mainfooter.php"); ?>
         <!--	appointment popup form   -->
		<?php include("forms/appoint-form.php"); ?>
         <!--	sign up popup form   -->
		 <?php include("forms/info-contact-form.php"); ?>
				
      </footer>
      <!--  /wrapper  -->
      <!-- JavaScript -->
	  <?php include("jssets/artistdetjs.php");?>
   </body>
</html>