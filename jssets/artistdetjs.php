      <script src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/modernizr.custom.js"></script>
      <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
      <script type="text/javascript" src="js/jquery.cookie.js"></script>
      <script type="text/javascript" src="js/jquery.easing.js"></script>
      <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
      <script type="text/javascript" src="js/masonry.js"></script>
	  <script src="js/ekko-lightbox.min.js"></script>
	  <script type="text/javascript" src="js/jquery.qtip.js"></script>
	  <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>

<script>
$( document ).ready(function() {
	// delegate calls to data-toggle="lightbox"
	$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			onShown: function() {
				if (window.console) {
					return console.log('Checking our the events huh?');
				}
			}
		});
	});
	
	// image as tooltip on hover
	$('[data-tooltip!=""]').qtip({ // Grab all elements with a non-blank data-tooltip attr.
		content: {
			attr: 'data-tooltip' // Tell qTip2 to look inside this attr for its content
		},
		
		position: {
			my: 'bottom left',  // Position my top left...
			at: 'top right', // at the bottom right of...
		  //  target: $('.selector') // my target
			},
		
//		style: { 
//			classes: 'qtip-bootstrap qtip-shadow',
//			def: false
//			}
	});
					
	// Handle click on thumbs.
	$(".thumb").bind('click', function() {
		// Change page image visual.
		$("#page-image").attr('src', $(this).attr('href') );
		// Change zoom image.
		$("#image-link").attr('href', $(this).attr('data-zoom-image') );
		
		return false;
	});

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
    	// Inquire
	var inquireModal = $("#inquire").on('shown.bs.modal', function () {
		$('#inquireStatus').hide();
		// Get the first HTML element by passing 0 to .get()
		$("#inquire-form")[0].reset(); // clear all fields

//		clearTimeout(myModal.data('hideInterval'))
//		var id = setTimeout(function(){
//			myModal.modal('hide');
//		});
//		myModal.data('hideInterval', id);
	});
	
	// variable to hold request
	var inquireRequest;
	// bind to the submit event of our form
	$("#inquire-form").submit(function(event){
		// abort any pending request
		if (inquireRequest) {
			inquireRequest.abort();
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
		
		$('#inquire_btn').hide();
		
		// loading...
			$('#inquireStatus').html("<img src='images/loading.gif' />");
			$('#inquireStatus').show();
	
		// fire off the request to /form.php
		inquireRequest = $.ajax({
			url: "include/send-inquire.php",
			type: "post",
			data: serializedData
		});
	
		// callback handler that will be called on success
		inquireRequest.done(function (response, textStatus, jqXHR){
			// log a message to the console
			console.log("Hooray, it worked!");
			$('#inquireStatus').html(response);
			$('#inquireStatus').show();
			$inputs.prop("disabled", false);
			$('#inquire_btn').show();
		});
	
		// callback handler that will be called on failure
		inquireRequest.fail(function (jqXHR, textStatus, errorThrown){
			// log the error to the console
			console.error(
				"The following error occured: "+
				textStatus, errorThrown
			);
		});
	
		// callback handler that will be called regardless
		// if the request failed or succeeded
		inquireRequest.always(function () {
			// reenable the inputs
		   // $inputs.prop("disabled", false);
		});
	
		// prevent default posting of form
		event.preventDefault();
	});	
    	// email to friend
	var emailToFriendModal = $("#email-to-friend").on('shown.bs.modal', function () {
		$('#emailToFriendStatus').hide();
		// Get the first HTML element by passing 0 to .get()
		$("#email-to-friend-form")[0].reset(); // clear all fields

//		clearTimeout(myModal.data('hideInterval'))
//		var id = setTimeout(function(){
//			myModal.modal('hide');
//		});
//		myModal.data('hideInterval', id);
	});
	
	// variable to hold request
	var emailToFriendRequest;
	// bind to the submit event of our form
	$("#email-to-friend-form").submit(function(event){
		// abort any pending request
		if (emailToFriendRequest) {
			emailToFriendRequest.abort();
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
		
		$('#emailToFriend_btn').hide();
		// loading...
			$('#emailToFriendStatus').html("<img src='images/loading.gif' />");
			$('#emailToFriendStatus').show();
	
		// fire off the request to /form.php
		emailToFriendRequest = $.ajax({
			url: "include/send-email-to-friend.php",
			type: "post",
			data: serializedData
		});
	
		// callback handler that will be called on success
		emailToFriendRequest.done(function (response, textStatus, jqXHR){
			// log a message to the console
			console.log("Hooray, it worked!");
			$('#emailToFriendStatus').html(response);
			$('#emailToFriendStatus').show();
			$inputs.prop("disabled", false);
			$('#emailToFriend_btn').show();
		});
	
		// callback handler that will be called on failure
		emailToFriendRequest.fail(function (jqXHR, textStatus, errorThrown){
			// log the error to the console
			console.error(
				"The following error occured: "+
				textStatus, errorThrown
			);
		});
	
		// callback handler that will be called regardless
		// if the request failed or succeeded
		emailToFriendRequest.always(function () {
			// reenable the inputs
		   // $inputs.prop("disabled", false);
		});
	
		// prevent default posting of form
		event.preventDefault();
	});	
	
});	
</script>

