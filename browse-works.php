<?php
include("api.php");
?>
<!DOCTYPE html>
<html class=" js cssanimations csstransitions" hola_ext_inject="disabled">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>Chelra - Browse Works</title>
      <meta name="description" content="Fine Art at Chelra">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <?php include("inc/head.php"); ?>
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
	 <?php include("inc/browse-list.php");?>
      <footer>
		 <?php include("inc/mainfooter.php"); ?>
         <!--	appointment popup form   -->
		<?php include("forms/appoint-form.php"); ?>
         <!--	sign up popup form   -->
		 <?php include("forms/info-contact-form.php"); ?>
				
      </footer>
      <!--  /wrapper  -->
      <!-- JavaScript -->
	  <?php include("jssets/browsejs.php");?>
   </body>
</html>