<?php
include("api.php");
$banners = gethome();
$bannerimages = $banners['items'][0]['pictures'];
?>
<!DOCTYPE html>
<html class=" js cssanimations csstransitions" hola_ext_inject="disabled">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>Home - Chelra</title>
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
      <section>
         <div id="carousel-home" class="carousel slide text-center" data-ride="carousel">
            <ol class="carousel-indicators">
               <?php
                  $ok = 0;
                  foreach($bannerimages as $key=>$val){
               ?>               
               <li data-target="#carousel-home" data-slide-to="0" class="<?php if($ok==0){ echo "active"; $ok++; }?>"></li>
               <?php
               }
               ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               <?php
                  $ok = 0;
                  foreach($bannerimages as $key=>$val){
               ?>
               <div class="item <?php if($ok==0){ echo "active"; $ok++; }?>">
                  <a href="#">
                  <img src="<?php echo $val;?>" alt="">
                  </a>
               </div>
               <?php
                  }
               ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-home" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-home" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
         </div>
         <!-- /carousel-home --> 
      </section>
      <footer>
		 <?php include("inc/mainfooter.php"); ?>
         <!--	appointment popup form   -->
		<?php include("forms/appoint-form.php"); ?>
         <!--	sign up popup form   -->
		 <?php include("forms/info-contact-form.php"); ?>
				
      </footer>
      <!--  /wrapper  -->
      <!-- JavaScript -->
	  <?php include("jssets/homejs.php");?>
  
   </body>
</html>