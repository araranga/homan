      <!--  /wrapper  -->
      <!-- JavaScript -->
      <script src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/modernizr.custom.js"></script>
      <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
      <script type="text/javascript" src="js/jquery.cookie.js"></script>
      <script type="text/javascript" src="js/jquery.easing.js"></script>
      <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
      <script type="text/javascript" src="js/masonry.js"></script>
      <script type="text/javascript" src="js/jquery.ui.totop.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script> 
      <script src="js/imagesloaded.js"></script> 
      <script src="js/jquery.infinitescroll.min.js"></script>
      <script>
         $( document ).ready(function() {
         //
         // infinite scroll with masonry
         //
             var $container = $('.infinite-container');
             // initialize Masonry after all images have loaded  
             $container.imagesLoaded( function() {
               $container.masonry({
                      itemSelector: '.infinite-item',
                      transitionDuration: 0,
                      "isFitWidth": true
                      //columnWidth: 200
                 });
             }); 
             $container.infinitescroll({
               navSelector  : '#page-nav',    // selector for the paged navigation 
               nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
               itemSelector : '.infinite-item',     // selector for all items you'll retrieve
               loading: {
                   finishedMsg: 'No more pages to load.',
                   msgText: '<em>loading...</em>',
                   img: 'images/loading.gif'
                 }
               },
               // trigger Masonry as a callback
               function( newElements ) {
                 // hide new items while they are loading
                 var $newElems = $( newElements ).css({ opacity: 0 });
                 // ensure that images load before adding to masonry layout
                 $newElems.imagesLoaded(function(){
                   // show elems now they're ready
                   $newElems.animate({ opacity: 1 });
                   $container.masonry( 'appended', $newElems, true ); 
                 });
               }
             );
         
         // Back To Top
         // Only enable if the document has a long scroll bar
         // Note the window height + offset
         //		if ( ($(window).height() + 100) < $(document).height() ) {
         $('#top-link-block').removeClass('hidden').affix({
         // how far to scroll down before link "slides" into view
         offset: {top:100}
         });
         //	
         // common js for doc readys
         
         // make dropdown parents clickable
         //$('.navbar .dropdown').hover(function() {
         //$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
         //
         //}, function() {
         //$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
         //
         //});
         
         //$('.navbar .dropdown > a').click(function(){
         //location.href = this.href;
         //});
         
         // sign-up form
         var myModal = $("#signup").on('shown.bs.modal', function () {
         $('#ajaxStatus').hide();
         // Get the first HTML element by passing 0 to .get()
         $("#signupform")[0].reset(); // clear all fields
         
         //		clearTimeout(myModal.data('hideInterval'))
         //		var id = setTimeout(function(){
         //			myModal.modal('hide');
         //		});
         //		myModal.data('hideInterval', id);
         });
         
         // variable to hold request
         var request;
         // bind to the submit event of our form
         $("#signupform").submit(function(event){
         // abort any pending request
         if (request) {
         request.abort();
         }
         // setup some local variables
         var $form = $(this);
         // let's select and cache all the fields
         var $inputs = $form.find("input, textarea");
         // serialize the data in the form
         var serializedData = $form.serialize();
         
         // let's disable the inputs for the duration of the ajax request
         // Note: we disable elements AFTER the form data has been serialized.
         // Disabled form elements will not be serialized.
         $inputs.prop("disabled", true);
         
         $('#send_btn').hide();
         // loading...
         $('#ajaxStatus').html("<img src='images/loading.gif' />");
         $('#ajaxStatus').show();
         
         // fire off the request to /form.php
         request = $.ajax({
         url: "include/send-sign-up.php",
         type: "post",
         data: serializedData
         });
         
         // callback handler that will be called on success
         request.done(function (response, textStatus, jqXHR){
         // log a message to the console
         console.log("Hooray, it worked!");
         $('#ajaxStatus').html(response);
         $('#ajaxStatus').show();
         $inputs.prop("disabled", false);
         $('#send_btn').show();
         });
         
         // callback handler that will be called on failure
         request.fail(function (jqXHR, textStatus, errorThrown){
         // log the error to the console
         console.error(
         "The following error occured: "+
         textStatus, errorThrown
         );
         });
         
         // callback handler that will be called regardless
         // if the request failed or succeeded
         request.always(function () {
         // reenable the inputs
          // $inputs.prop("disabled", false);
         });
         
         // prevent default posting of form
         event.preventDefault();
         });	
         
         // magnific popups
         $('.footer-popup-link').magnificPopup({ 
         type: 'inline',
         midClick: true
         });
         
         // appointment form
         var myModal2 = $("#appointment").on('shown.bs.modal', function () {
         $('#appointmentStatus').hide();
         // Get the first HTML element by passing 0 to .get()
         $("#appointment-form")[0].reset(); // clear all fields
         
         //		clearTimeout(myModal.data('hideInterval'))
         //		var id = setTimeout(function(){
         //			myModal.modal('hide');
         //		});
         //		myModal.data('hideInterval', id);
         });
         
         // variable to hold request
         var request;
         // bind to the submit event of our form
         $("#appointment-form").submit(function(event){
         // abort any pending request
         if (request) {
         request.abort();
         }
         // setup some local variables
         var $form = $(this);
         // let's select and cache all the fields
         var $inputs = $form.find("input, textarea");
         // serialize the data in the form
         var serializedData = $form.serialize();
         
         // let's disable the inputs for the duration of the ajax request
         // Note: we disable elements AFTER the form data has been serialized.
         // Disabled form elements will not be serialized.
         $inputs.prop("disabled", true);
         
         $('#appointment_btn').hide();
         // loading...
         $('#appointmentStatus').html("<img src='images/loading.gif' />");
         $('#appointmentStatus').show();
         
         // fire off the request to /form.php
         request = $.ajax({
         url: "include/send-appointment.php",
         type: "post",
         data: serializedData
         });
         
         // callback handler that will be called on success
         request.done(function (response, textStatus, jqXHR){
         // log a message to the console
         console.log("Hooray, it worked!");
         $('#appointmentStatus').html(response);
         $('#appointmentStatus').show();
         $inputs.prop("disabled", false);
         $('#appointment_btn').show();
         });
         
         // callback handler that will be called on failure
         request.fail(function (jqXHR, textStatus, errorThrown){
         // log the error to the console
         console.error(
         "The following error occured: "+
         textStatus, errorThrown
         );
         });
         
         // callback handler that will be called regardless
         // if the request failed or succeeded
         request.always(function () {
         // reenable the inputs
          // $inputs.prop("disabled", false);
         });
         
         // prevent default posting of form
         event.preventDefault();
         });	
         
         var myModal3 = $("#info-contact").on('shown.bs.modal', function () {
         $('#infoContactStatus').hide();
         // Get the first HTML element by passing 0 to .get()
         $("#info-contact-form")[0].reset(); // clear all fields
         
         });
         
         // variable to hold request
         var request;
         // bind to the submit event of our form
         $("#info-contact-form").submit(function(event){
         // abort any pending request
         if (request) {
         request.abort();
         }
         // setup some local variables
         var $form = $(this);
         // let's select and cache all the fields
         var $inputs = $form.find("input, textarea");
         // serialize the data in the form
         var serializedData = $form.serialize();
         
         // let's disable the inputs for the duration of the ajax request
         // Note: we disable elements AFTER the form data has been serialized.
         // Disabled form elements will not be serialized.
         $inputs.prop("disabled", true);
         
         $('#infoContact_btn').hide();
         
         // fire off the request to /form.php
         request = $.ajax({
         url: "include/send-info-contact.php",
         type: "post",
         data: serializedData
         });
         
         // callback handler that will be called on success
         request.done(function (response, textStatus, jqXHR){
         // log a message to the console
         console.log("Hooray, it worked!");
         $('#infoContactStatus').html(response);
         $('#infoContactStatus').show();
         $inputs.prop("disabled", false);
         $('#infoContact_btn').show();
         });
         
         // callback handler that will be called on failure
         request.fail(function (jqXHR, textStatus, errorThrown){
         // log the error to the console
         console.error(
         "The following error occured: "+
         textStatus, errorThrown
         );
         });
         
         // callback handler that will be called regardless
         // if the request failed or succeeded
         request.always(function () {
         // reenable the inputs
          // $inputs.prop("disabled", false);
         });
         
         // prevent default posting of form
         event.preventDefault();
         });	
             
         });	
      </script>