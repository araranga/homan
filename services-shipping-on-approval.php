<?php
include("api.php");
$banners = getshippingapproval();
$bannerimages = $banners['items'][0]['pictures'];
?>
<!DOCTYPE html>
<html class=" js cssanimations csstransitions" hola_ext_inject="disabled">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>Chelra - Shipping on Approval</title>
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

<div class="container">
   <div class="row text-block">
      <div class="col-md-6 col-sm-12 text-style">
         <p>
            SHIPPING ON APPROVAL
         </p>
         <p style="text-align:justify">Acquiring a work of art sight unseen is intimidating and Hohmann Fine Art has sold thousands of works of art to clients all over the US and many to international collectors as far as Australia and Saudi Arabia.</p>
         <p style="text-align:justify">The gallery offers a “no questions asked” return policy for a full refund, as well as trade-in privileges after the initial purchase for complete peace of mind.</p>
         <p style="text-align:justify">We pride ourselves in helping art collectors build their collection and to make the process as easy and simple as possible.</p>
         <p>&nbsp;</p>
      </div>
      <div class="col-md-6 col-sm-12 text-style">
         <p class="visible-lg visible-md">&nbsp;</p>
         <p style="text-align: justify;">Every item can be shipped on approval, so you can experience it in person before finalizing your decision.</p>
         <p style="text-align: justify;">Few restrictions apply for oversized items or extremely valuable works. Please contact the gallery if you are interested learning more about shipping on approval.</p>
         <p style="text-align: justify;">*Shipping &amp; crating costs are non-refundable. Custom work, like custom framing, glass upgrades and alike are non-refundable.</p>
      </div>
   </div>
   <!-- /row  -->
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