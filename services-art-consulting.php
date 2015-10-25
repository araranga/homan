<?php
include("api.php");
$banners = getartconsulting();
$bannerimages = $banners['items'][0]['pictures'];
?>
<!DOCTYPE html>
<html class=" js cssanimations csstransitions" hola_ext_inject="disabled">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>Chelra - Service and Art Consulting</title>
      <meta name="description" content="Fine Art at HOHMANN">
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

<div class='container'>
   <div class="row text-block">
      <div class="col-md-6 col-sm-12 text-style">
         <p>
            ART CONSULTING
         </p>
         <p style="text-align:justify"><strong>Hohmann</strong> offers art consulting to private clients, businesses, designers, architects and builders. The gallery specializes in curating entire collections for multimillion dollar residences that are built, designed and furnished to be sold as a complete masterpiece of architecture, interior design and art.</p>
         <p style="text-align:justify">The taste for art is as personal as the taste for wine and it is nearly impossible to appeal to everybody, which is why it is crucial to create a harmony between house and art and to assemble an art collection instead of trying to decorate.</p>
         <p style="text-align:justify">Christian Hohmann has curated exhibitions and assisted with art collections in the U.S. and Europe for 20 years and his family for nearly 40. With access to more than 250 artists and a vast inventory of fine art, his work is site specific and creates a flow between art and architecture by curating a collection that is worth owning.</p>
      </div>
      <div class="col-md-6 col-sm-12 text-style">
         <p class="visible-lg visible-md">&nbsp;</p>
         <p style="text-align: justify;">Hohmann curates an art collection that has the look and feel of having been assembled over a long period of time with works by professional artists that have been judged and proven to be of high quality and relevance. This kind of collection harmonizes with the home and its surroundings, emphasizing the architecture without dominating it.</p>
         <p style="text-align: justify;">&nbsp;</p>
         <p style="text-align: justify;">For more examples or references please contact the gallery or view the brochure here:</p>
      </div>
   </div>
</div>



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