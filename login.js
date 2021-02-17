function Empty() {
	emailVal = document.getElementById("loginEmail").value;
	passVal = document.getElementById("loginPassword").value;
	if ((emailVal=="") || (passVal=="")) {
		alert("We know you're a dummy, but you should be able to provide us with your email and password");
		return false;
	}
	return true;
}
function EmailCorrectForm() {
	var val = document.getElementById("accEmail").value;
	console.log(val)
	if (val=="") {
		alert("We know you're a dummy, but you should be able to provide us with your email");
		return false;
	}
	with (val) {
		atPos = val.indexOf("@");
		periodPos = val.indexOf(".");
		if (atPos < 1 || (periodPos - atPos) < 2) {
			alert("Please provide a valid email (JohnDoe@gmail.com, etc.)");
			return false;
		}
		else {
			return true;
		}
	}
}

function PasswordCorrectForm() {
	var valStr = document.getElementById("accPassword").value;
	console.log(valStr)
	if (valStr=="") {
		alert("We know you're a dummy, but you should be able to provide us with your password");
		return false;
	}
	else if ((valStr.length< 8) || (valStr.length > 16)) {
		alert("The password must be 8-16 characters long.");
		return false;
	}
	else if (!(new RegExp(".*[0-9].*").test(valStr))) {
		alert("The password must contain at least one digit.");
		return false;
	}
	else if (!(new RegExp(".*[a-z].*").test(valStr))) {
		alert("The password must contain at least one lowercase letter.");
		return false;
	}
	else if (!(new RegExp(".*[A-Z].*").test(valStr))) {
		alert("The password must contain at least one uppercase letter.");
		return false;
	}
	else if (!(new RegExp(".*[!@#$%^&*(),.?:{}|<>].*").test(valStr))) {
		alert("The password must contain at least one special character.");
		return false;
	}
	else {
		return true;
	}
}

function AccountValidation() {
	if (!EmailCorrectForm()) {
		return false;
	}
	else if (!PasswordCorrectForm()) {
		return false;
	}
	return true;
}