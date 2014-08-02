jQuery(function($) {
	var validation_holder;
	
	$("form#register_form input[name='submit']").click(function() {
	
	var validation_holder = 0;
	
		var fname 			= $("form#register_form input[name='fname']").val();
		var mname 			= $("form#register_form input[name='mname']").val();
		var lname 			= $("form#register_form input[name='lname']").val();
		var email 			= $("form#register_form input[name='email']").val();
		var email_regex 	= /^[\w%_\-.\d]+@[\w.\-]+.[A-Za-z]{2,6}$/; // reg ex email check
		var mphone 			= $("form#register_form input[name='mphone']").val();
		var hphone 			= $("form#register_form input[name='hphone']").val();
		var wphone 			= $("form#register_form input[name='wphone']").val();
		var phone_regex		= /^[0-9]{4,20}$/; // reg ex phone check	
		var ssn 			= $("form#register_form input[name='ssn']").val();
		var ssn_regex		= /^(?!219-09-9999|078-05-1120)(?!666|000|9\d{2})\d{3}-(?!00)\d{2}-(?!0{4})\d{4}$/; // reg ex ssn check	
		var month 			= $("form#register_form select[name='month']").val(); // month
		var day 			= $("form#register_form select[name='day']").val(); // day
		var year 			= $("form#register_form select[name='year']").val(); // year
		var gender 			= $("form#register_form input[name='gender']");
		
		/* validation start */	
		if(fname == "") {
			$("span.val_fname").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_fname").html("");
			}
		if(lname == "") {
			$("span.val_lname").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			$("span.val_lname").html("");
			}
		if(email == "") {
			$("span.val_email").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			if(!email_regex.test(email)){ // if invalid email
				$("span.val_email").html("Invalid Email!").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_email").html("");
			}
		}
		if(mphone == "") {
			$("span.val_mphone").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			if(!phone_regex.test(mphone)){ // if invalid phone
				$("span.val_mphone").html("Invalid Phone Number!").addClass('validate');
				validation_holder = 1;
			
			} else {
				$("span.val_mphone").html("");
			}
		}
		if(hphone == "") {
			$("span.val_hphone").html("");
		} else {
			if(!phone_regex.test(hphone)){ // if invalid phone
				$("span.val_hphone").html("Invalid Phone Number!").addClass('validate');
				validation_holder = 1;
			
			} else {
				$("span.val_hphone").html("");
			}
		}
		if(wphone == "") {
			$("span.val_wphone").html("");
		} else {
			if(!phone_regex.test(wphone)){ // if invalid phone
				$("span.val_wphone").html("Invalid Phone Number!").addClass('validate');
				validation_holder = 1;
			
			} else {
				$("span.val_wphone").html("");
			}
		}
		if(ssn == "") {
			$("span.val_ssn").html("");
		} else{
			if(!ssn_regex.test(ssn)){ // if invalid ssn
				$("span.val_ssn").html("Invalid SSN!").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_ssn").html("");
			}
		}

		if((month == "") || (day == "") || (year == "")) {
			$("span.val_bday").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_bday").html("");
			}
		
		if(gender.is(':checked') == false) {
			$("span.val_gen").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_gen").html("");
			}
		if(validation_holder == 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	
	}); // click end 

}); // jQuery End