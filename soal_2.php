<?php 
var password = 'assdfB!uhh2';
function ValidatePassword(password){
	var regexp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&]?)[A-Za-z\d$@$!%*?&]{8,}/g;
	var validate = password.match(regexp);

	if (password.length > 8) {
		if (validate!==null) {
			return true;
		}
	}else{
			return false;
	}
}

 ?>
