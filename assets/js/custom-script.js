(function($) {
   $('.menu-item-has-children').addClass('has-droupdown has-menu-child-item');
   $('.sub-menu').addClass('submenu');


   // Form Validation
		/* contact form */ 
		if ($("#contact-form").length > 0) {
			$("#contact-form").validate({
				rules: {
					conName: "required",
					conSubject: "required",
					conPhone: "required",
					conEmail: {
						required: true,
						email: true,
					},
				},

				messages: {
					conName: "Enter your name.",
					conEmail: "Enter a valid email.",
					conSubject: "Enter a valid subject.",
				},

				submitHandler: function () {
					// start ajax request
					var conName = $('#conName').val();
					var conEmail = $('#conEmail').val();
					var conPhone = $('#conPhone').val();
					var conSubject = $('#conSubject').val();
					var conMessage = $('#conMessage').val();
					$.ajax({
						type: "POST",
						url: frontAjax.ajaxurl,
						data:{
							action:    'home_contact_form_submit',
							conName:    conName,
							conEmail:   conEmail,
							conPhone:   conPhone,
							conSubject: conSubject,
							conMessage: conMessage,
						},
						cache: false,
						success: function (data) {
							if (data == "success") {
								var success_msg = '<span id="conFormSuccess">Your message successfully sent! <button id="msg-dismiss">Dismiss</button> </span>';
								var fail_msg = '<span id="ConFormFail">Message not sent. Please try again later <button id="msg-dismiss">Dismiss</button> </span>';
								$('#from-message').append(success_msg);
								$("#contact-form").trigger("reset");
								$('#msg-dismiss').click(function() { 
									$('#from-message').text('');
								});
							} else {
								$('#from-message').text(fail_msg);
							}
						},
					});
				},
				
			});
		} 
      //COntact End


})(jQuery);

/* Testimonial popup */
function coder_akash_testimonial_popup(id){
	(function($) {
		var testimonialID = id;
		$.ajax({
			type: "POST",
			url: frontAjax.ajaxurl,
			data:{
				action:    'testimonial_data_fetch_popup',
				testimonialID:    testimonialID,
			},
			cache: false,
			success: function (data) {
				if ((data != "notFound") && (data != " ") ) {
					var testiData = JSON.parse(data);
					$('.testimonial-popup-title').text(testiData.test_title);
					$('.testimonial-content').text(testiData.test_content);
					$('.designation-title').text(testiData.test_cdesignation);
					$('.clients-project-details a').text(testiData.test_cwebsite);
					$('.testimonial-thumbnail-popup img').attr('src',testiData.test_image);
					$('.clients-project-details a').attr('href',testiData.test_cwebsite_link);
					$('.hidden-testmonial-area').removeClass('popup-visibility');
					$('html').addClass('popup-disable-scrool');
					$('body').addClass('popup-overlay');
				}
			},
		});
		$('.test-popup-close-button i').click(function(){
			$('.hidden-testmonial-area').addClass('popup-visibility');
			$('html').removeClass('popup-disable-scrool');
			$('body').removeClass('popup-overlay');
		})
	})(jQuery);
}

/* Review Form Data Collection */
(function($){

	// Form Validation
	   /* Review Form */ 

	   if ($("#review-form").length > 0) {
		   $("#review-form").validate({
			   rules: {
				   testiName: "required",
				   testiWebName: "required",
				   testiWeburl: "required",
				   reviewMessage: "required",
				   testiDesignation: {
						required: true,
				   },
				   testiEmail: {
					   required: true,
					   email: true,
				   },
			   },

			   messages: {
				   testiName: "Enter your name.",
				   testiWebName: "Enter your website name.",
				   testiEmail: "Enter a valid email.",
				   testiWeburl: "Enter your website url.",
				   reviewMessage: "Enter your opinion.",
				   testiDesignation: "Please select your Designation.",
			   },

			   submitHandler: function (form) {
				   var $form = $(form);
				   var file_data = $form.find('input[type="file"]').prop('files')[0];
				   var form_data = new FormData($form[0]);
				   form_data.append('file', file_data);
				   form_data.append('action', 'review_form_data_collect');
				   // start ajax request
				   $.ajax({
					   type: "POST",
					   url: frontAjax.ajaxurl,
					   data: form_data,
					   cache: false,
					   contentType: false,
					   processData: false,
					   success: function (data) {
						   var $messageContainer = $('#from-message');
						   if (data === "success") {
							   var success_msg = '<span id="conFormSuccess">Review successfully submitted! <button id="msg-dismiss">Dismiss</button> </span>';
							   $messageContainer.append(success_msg);
							   $form.trigger("reset");
						   } else {
							   var fail_msg = '<span id="ConFormFail">There was an error. Please try again later. <button id="msg-dismiss">Dismiss</button> </span>';
							   $messageContainer.append(fail_msg);
						   }
						   $('#msg-dismiss').click(function() { 
							   $messageContainer.text('');
						   });
					   },
				   });
			   },
		   });
	   } 
	 //Review Form End

})(jQuery);

