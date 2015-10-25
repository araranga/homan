<!DOCTYPE html>
<html class=" js cssanimations csstransitions" hola_ext_inject="disabled">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>Chelra - Info Update</title>
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





<div class="container">
   <div class="row">
      <div class="col-md-5">
         <div class="row">
            <div class="col-sm-12">
               <!--<h4>UPDATE YOUR CONTACT INFO</h4>-->
               <p style="text-align:start">UPDATE YOUR CONTACT INFORMATION</p>
               <p>Please fill out this form to update your address, add a second home or add phone or e-mail to your contact information.</p>
               <p>Please note that we mail catalogs and invitations only to patrons of the gallery. If you have not acquired art from the gallery you can sign up for the e-mail newsletter.</p>
               <p>&nbsp;</p>
            </div>
         </div>
      </div>
      <!-- /col-md-5  -->
      <div class="col-md-7">
         <!--<h3 class="section-title">Send us a message</h3>-->
         <form class="form-light mt-20" role="form" method='POST' action='form.php' id="feedbackFormx">
            <input type='hidden' name='formsname' value='feedbackForm'> 
            <div class="form-group">
               <label>Name</label>
               <input id="name" name="name" type="text" class="form-control" placeholder="Your name" required>
               <span class="help-block" style="display: none;">Please enter your name.</span>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Email</label>
                     <input id="email" name="email" type="email" class="form-control" placeholder="Email address" required>
                     <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Phone</label>
                     <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone number" required>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label>Address</label>
               <input id="address" name="address" type="text" class="form-control" placeholder="Address" required>
               <span class="help-block" style="display: none;">Please enter address.</span>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>City</label>
                     <input id="city" name="city" type="text" class="form-control" placeholder="City" required>
                     <span class="help-block" style="display: none;">Please enter city.</span>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>State/Province</label>
                     <input id="state" name="state" type="text" class="form-control" placeholder="State/Province" required>
                     <span class="help-block" style="display: none;">Please enter state/province.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Postal Code</label>
                     <input id="zip" name="zip" type="text" class="form-control" placeholder="Postal Code" required>
                     <span class="help-block" style="display: none;">Please enter postal code.</span>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Country</label>
                     <input id="country" name="country" type="text" class="form-control" placeholder="Country" required>
                     <span class="help-block" style="display: none;">Please enter country.</span>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label>Comments</label>
               <textarea id="message" name="message" class="form-control" placeholder="Comments..." style="height:50px;" required></textarea>
            </div>
            <button id="feedbackSubmitxx" type="submit" class="btn btn-primary">Send</button>
         </form>
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