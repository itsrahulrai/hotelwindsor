<script>

function validateMiniClubForm() {

 
 // Get the input fields
  let fdata = document.forms["miniClubForm"];

  let name = fdata["name"].value.trim();
  let phone = fdata["phone"].value.trim();
  let adults = fdata["adults"].value.trim();
  let childrens = fdata["childrens"].value.trim();
  let rooms = fdata["rooms"].value.trim();
  let checkin_date = fdata["checkin_date"].value.trim();
  let checkout_date = fdata["checkout_date"].value.trim();

  // Get the error fields
    let nameErr = document.getElementById("nameErr");
    let phoneErr = document.getElementById("phoneErr");
    let adultsErr = document.getElementById("adultsErr");
    let childrensErr = document.getElementById("childrensErr");
    let roomsErr = document.getElementById("roomsErr");
    let checkinErr = document.getElementById("checkinErr");
	let checkoutErr = document.getElementById("checkoutErr");

	// Validate name field
	if (name == "") {
		nameErr.innerHTML = "Please enter your name.";
		nameErr.style.color = "white";
		fdata["name"].focus();
		return false;
	} else {
		// Regular expression for name validation
		let nameRegex = /^[a-zA-Z\s]+$/;
		if (!nameRegex.test(name)) {
			nameErr.innerHTML = "Please enter a valid name.";
			nameErr.style.color = "white";
			fdata["name"].focus();
			return false;
		} else {
			nameErr.innerHTML = "";
		}
	}

  // Validate phone field
  if (phone == "") {
    phoneErr.innerHTML = "Please enter your phone number.";
    phoneErr.style.color = "white";
    fdata["phone"].focus();
    return false;
  } else {
    // Regular expression for phone number validation
    let phoneRegex = /^[0-9]{10}$/;
    if (!phoneRegex.test(phone)) {
      phoneErr.innerHTML = "Please enter a valid phone number.";
      phoneErr.style.color = "white";
      fdata["phone"].focus();
      return false;
    } else {
      phoneErr.innerHTML = "";
    }
  }
 
  	// Validate adults field
	if (adults === "") {
		adultsErr.innerHTML = "Please select number of adults.";
		adultsErr.style.color = "white";
		return false;
	} else {
		adultsErr.innerHTML = "";
	}

    	// Validate children field
	if (childrens === "") {
		childrensErr.innerHTML = "Please select number of childrens.";
		childrensErr.style.color = "white";
		return false;
	} else {
		childrensErr.innerHTML = "";
	}

    		// Validate rooms field
	if (rooms === "") {
		roomsErr.innerHTML = "Please select rooms types.";
		roomsErr.style.color = "white";
		return false;
	} else {
		roomsErr.innerHTML = "";
	}

    // Validate check in date field
	if (checkin_date === "") {
		checkinErr.innerHTML = "Please enter your check-in date.";
		checkinErr.style.color = "white";
		fdata["checkin_date"].focus();
		return false;
	} else {
		checkinErr.innerHTML = "";
	}
	
	// Validate check out date field
	if (checkout_date === "") {
		checkoutErr.innerHTML = "Please enter your check-out date.";
		checkoutErr.style.color = "white";
		fdata["checkout_date"].focus();
		return false;
	} else {
		checkoutErr.innerHTML = "";
	}
    

  // If all validations pass, return true
	return true;
}



</script>






<script> 
function validateContactForm() {
	// Get the input fields
	let fdata = document.forms["contactForm"];

	let fname = fdata["fname"].value.trim();
	let lname = fdata["lname"].value.trim();
	let email = fdata["email"].value.trim();
	let phone = fdata["phone"].value.trim();
  	let rooms = fdata["rooms"].value.trim();
	let message = fdata["message"].value.trim();

	// Get the error fields
	let fnameErr = document.getElementById("fnameErr");
	let lnameErr = document.getElementById("lnameErr");
	let emailErr = document.getElementById("emailErr");
	let phoneErr = document.getElementById("phoneErr");
	let roomsErr = document.getElementById("roomsErr");
	let messageErr = document.getElementById("messageErr");

	// Validate fname field
	if (fname  == "") {
		fnameErr.innerHTML = "Please enter your first name.";
		fnameErr.style.color = "red";
		fdata["fname"].focus();
		return false;
	} else {
		// Regular expression for name validation
		let fnameRegex = /^[a-zA-Z\s]+$/;
		if (!fnameRegex.test(fname)) {
			fnameErr.innerHTML = "Please enter a valid name.";
			fnameErr.style.color = "red";
			fdata["fname"].focus();
			return false;
		} else {
			fnameErr.innerHTML = "";
		}
	}

		// Validate lname field
	if (lname  == "") {
		lnameErr.innerHTML = "Please enter your last name.";
		lnameErr.style.color = "red";
		fdata["lname"].focus();
		return false;
	} else {
		// Regular expression for name validation
		let lnameRegex = /^[a-zA-Z\s]+$/;
		if (!lnameRegex.test(fname)) {
			lnameErr.innerHTML = "Please enter a valid name.";
			lnameErr.style.color = "red";
			fdata["lname"].focus();
			return false;
		} else {
			lnameErr.innerHTML = "";
		}
	}

	
	// Validate phone field
	if (phone == "") {
		phoneErr.innerHTML = "Please enter your phone number.";
		phoneErr.style.color = "red";
		fdata["phone"].focus();
		return false;
	} else {
		// Regular expression for phone number validation
		let phoneRegex = /^[0-9]{10}$/;
		if (!phoneRegex.test(phone)) {
			phoneErr.innerHTML = "Please enter a valid phone number.";
			phoneErr.style.color = "red";
			fdata["phone"].focus();
			return false;
		} else {
			phoneErr.innerHTML = "";
		}
	}

	// Validate email field
	if (email == "") {
		emailErr.innerHTML = "Please enter your email.";
		emailErr.style.color = "red";
		fdata["email"].focus();
		return false;
	} else {
		// Regular expression for email validation
		let emailRegex = /^\S+@\S+\.\S+$/;
		if (!emailRegex.test(email)) {
			emailErr.innerHTML = "Please enter a valid email.";
			emailErr.style.color = "red";
			fdata["email"].focus();
			return false;
		} else {
			emailErr.innerHTML = "";
		}
	}

	
	// Validate rooms field
	if (rooms === "") {
		roomsErr.innerHTML = "Please select rooms types.";
		roomsErr.style.color = "red";
		return false;
	} else {
		roomsErr.innerHTML = "";
	}
	
	// Validate Message field
	
if (message == "") {
	messageErr.innerHTML = "Please enter your message.";
	messageErr.style.color = "red";
	fdata["message"].focus();
	return false;
} else if (message.length > 120) {
	messageErr.innerHTML = "Your message exceeds the maximum length of 120 characters.";
	messageErr.style.color = "red";
	fdata["message"].focus();
	return false;
} else if (message.length < 10) {
	messageErr.innerHTML = "Your message should be at least 10 characters long.";
	messageErr.style.color = "red";
	fdata["message"].focus();
	return false;
}


}





</script>







<script> 
function validateFeedbackForm() {
	// Get the input fields
	let fdata = document.forms["FeedbackForm"];

	let fname = fdata["fname"].value.trim();
	let lname = fdata["lname"].value.trim();
	let email = fdata["email"].value.trim();
	let phone = fdata["phone"].value.trim();
	let message = fdata["message"].value.trim();

	// Get the error fields
	let fnameErr = document.getElementById("fnameErr");
	let lnameErr = document.getElementById("lnameErr");
	let emailErr = document.getElementById("emailErr");
	let phoneErr = document.getElementById("phoneErr");
	let messageErr = document.getElementById("messageErr");

	// Validate fname field
	if (fname  == "") {
		fnameErr.innerHTML = "Please enter your first name.";
		fnameErr.style.color = "red";
		fdata["fname"].focus();
		return false;
	} else {
		// Regular expression for name validation
		let fnameRegex = /^[a-zA-Z\s]+$/;
		if (!fnameRegex.test(fname)) {
			fnameErr.innerHTML = "Please enter a valid name.";
			fnameErr.style.color = "red";
			fdata["fname"].focus();
			return false;
		} else {
			fnameErr.innerHTML = "";
		}
	}

		// Validate lname field
	if (lname  == "") {
		lnameErr.innerHTML = "Please enter your last name.";
		lnameErr.style.color = "red";
		fdata["lname"].focus();
		return false;
	} else {
		// Regular expression for name validation
		let lnameRegex = /^[a-zA-Z\s]+$/;
		if (!lnameRegex.test(fname)) {
			lnameErr.innerHTML = "Please enter a valid name.";
			lnameErr.style.color = "red";
			fdata["lname"].focus();
			return false;
		} else {
			lnameErr.innerHTML = "";
		}
	}

	
	// Validate phone field
	if (phone == "") {
		phoneErr.innerHTML = "Please enter your phone number.";
		phoneErr.style.color = "red";
		fdata["phone"].focus();
		return false;
	} else {
		// Regular expression for phone number validation
		let phoneRegex = /^[0-9]{10}$/;
		if (!phoneRegex.test(phone)) {
			phoneErr.innerHTML = "Please enter a valid phone number.";
			phoneErr.style.color = "red";
			fdata["phone"].focus();
			return false;
		} else {
			phoneErr.innerHTML = "";
		}
	}

	// Validate email field
	if (email == "") {
		emailErr.innerHTML = "Please enter your email.";
		emailErr.style.color = "red";
		fdata["email"].focus();
		return false;
	} else {
		// Regular expression for email validation
		let emailRegex = /^\S+@\S+\.\S+$/;
		if (!emailRegex.test(email)) {
			emailErr.innerHTML = "Please enter a valid email.";
			emailErr.style.color = "red";
			fdata["email"].focus();
			return false;
		} else {
			emailErr.innerHTML = "";
		}
	}

	
	// Validate Message field
	if (message == "") {
		messageErr.innerHTML = "Please enter your message.";
		messageErr.style.color = "red";
		fdata["message"].focus();
		return false;
	}
}





</script>






<script> 
function validateBooknowForm() {
	// Get the input fields
	let fdata = document.forms["BookNowForm"];

	let fname = fdata["fname"].value.trim();
	let lname = fdata["lname"].value.trim();
	let email = fdata["email"].value.trim();
	let phone = fdata["phone"].value.trim();
	let adults = fdata["adults"].value.trim();
	let childrens = fdata["childrens"].value.trim();
    let roomsno = fdata["numbersofroom"].value.trim();
    let rooms = fdata["rooms"].value.trim();
    let checkin_date = fdata["checkin_date"].value.trim();
    let checkout_date = fdata["checkout_date"].value.trim();
	let message = fdata["message"].value.trim();

	// Get the error fields
	let fnameErr = document.getElementById("fnameErr");
	let lnameErr = document.getElementById("lnameErr");
	let emailErr = document.getElementById("emailErr");
	let phoneErr = document.getElementById("phoneErr");
	let adultsErr = document.getElementById("adultsErr");
    let childrensErr = document.getElementById("childrensErr");
    let roomsnoErr = document.getElementById("roomsnoErr");
    let roomsErr = document.getElementById("roomsErr");
    let checkinErr = document.getElementById("checkinErr");
	let checkoutErr = document.getElementById("checkoutErr");
	let messageErr = document.getElementById("messageErr");

	// Validate fname field
	if (fname  == "") {
		fnameErr.innerHTML = "Please enter your first name.";
		fnameErr.style.color = "red";
		fdata["fname"].focus();
		return false;
	} else {
		// Regular expression for name validation
		let fnameRegex = /^[a-zA-Z\s]+$/;
		if (!fnameRegex.test(fname)) {
			fnameErr.innerHTML = "Please enter a valid name.";
			fnameErr.style.color = "red";
			fdata["fname"].focus();
			return false;
		} else {
			fnameErr.innerHTML = "";
		}
	}

		// Validate lname field
	if (lname  == "") {
		lnameErr.innerHTML = "Please enter your last name.";
		lnameErr.style.color = "red";
		fdata["lname"].focus();
		return false;
	} else {
		// Regular expression for name validation
		let lnameRegex = /^[a-zA-Z\s]+$/;
		if (!lnameRegex.test(fname)) {
			lnameErr.innerHTML = "Please enter a valid name.";
			lnameErr.style.color = "red";
			fdata["lname"].focus();
			return false;
		} else {
			lnameErr.innerHTML = "";
		}
	}

		// Validate email field
	if (email == "") {
		emailErr.innerHTML = "Please enter your email.";
		emailErr.style.color = "red";
		fdata["email"].focus();
		return false;
	} else {
		// Regular expression for email validation
		let emailRegex = /^\S+@\S+\.\S+$/;
		if (!emailRegex.test(email)) {
			emailErr.innerHTML = "Please enter a valid email.";
			emailErr.style.color = "red";
			fdata["email"].focus();
			return false;
		} else {
			emailErr.innerHTML = "";
		}
	}

	// Validate phone field
	if (phone == "") {
		phoneErr.innerHTML = "Please enter your phone number.";
		phoneErr.style.color = "red";
		fdata["phone"].focus();
		return false;
	} else {
		// Regular expression for phone number validation
		let phoneRegex = /^[0-9]{10}$/;
		if (!phoneRegex.test(phone)) {
			phoneErr.innerHTML = "Please enter a valid phone number.";
			phoneErr.style.color = "red";
			fdata["phone"].focus();
			return false;
		} else {
			phoneErr.innerHTML = "";
		}
	}

	// Validate adults field
	if (adults === "") {
		adultsErr.innerHTML = "Please select number of adults.";
		adultsErr.style.color = "red";
		return false;
	} else {
		adultsErr.innerHTML = "";
	}

    	// Validate children field
	if (childrens === "") {
		childrensErr.innerHTML = "Please select number of childrens.";
		childrensErr.style.color = "red";
		return false;
	} else {
		childrensErr.innerHTML = "";
	}

	 		// Validate rooms field
	if (roomsno === "") {
		roomsnoErr.innerHTML = "Please select no of rooms.";
		roomsnoErr.style.color = "red";
		return false;
	} else {
		roomsnoErr.innerHTML = "";
	}

    		// Validate rooms field
	if (rooms === "") {
		roomsErr.innerHTML = "Please select rooms types.";
		roomsErr.style.color = "red";
		return false;
	} else {
		roomsErr.innerHTML = "";
	}

    // Validate check in date field
	if (checkin_date === "") {
		checkinErr.innerHTML = "Please enter your check-in date.";
		checkinErr.style.color = "red";
		fdata["checkin_date"].focus();
		return false;
	} else {
		checkinErr.innerHTML = "";
	}
	
	// Validate check out date field
	if (checkout_date === "") {
		checkoutErr.innerHTML = "Please enter your check-out date.";
		checkoutErr.style.color = "red";
		fdata["checkout_date"].focus();
		return false;
	} else {
		checkoutErr.innerHTML = "";
	}

	
	// Validate Message field
	if (message == "") {
		messageErr.innerHTML = "Please enter your message.";
		messageErr.style.color = "red";
		fdata["message"].focus();
		return false;
	}
}





</script>