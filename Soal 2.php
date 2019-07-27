<?php
function is_username_valid($username)
{
	$regex_username = '/^[a-zA-Z]([a-zA-z0-9_-]){5,9}/';
	if (preg_match($regex_username, $username)) {
		// return true
		echo 'true<br>';
		// username benar
	} else {
		// return false
		echo 'false<br>';
	}
}

function is_password_valid($password)
{
	$regex_password = '/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[=])(?=.*[#$^+=!*()@%&]).{8,}/';

	if (preg_match($regex_password, $password)) {
		echo 'true<br>';
		//password benar
	} else {
		echo 'false<br>';
	}
}

// Test
is_username_valid('Xrutaf888');
is_username_valid('1Diana');
is_password_valid('pa=ssW0rd');
is_password_valid('C0d3YourFuture!#');


is_password_valid('pa@ssW0=rd');
is_password_valid('C0=dYour');
is_password_valid('pa@ssW0rd');
