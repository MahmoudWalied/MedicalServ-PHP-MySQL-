<?php


// sanitizing for string
function sanitizeString($string)
{
	$string = trim($string);
	$string = filter_var($string,FILTER_UNSAFE_RAW);
	return $string;
}

// validate if empty
function checkEmpty($string)
{
	if(empty($string))
	{
		return false;
	}
	return true;
}

// validate if lessThan
function checkLess($value,$minimum)
{
	if(strlen($value) < $minimum)
	{
		return false;
	}
	return true;
}



// sanitize for email
function sanitizeEmail($email)
{
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	return $email;
}


// validate for email
function validEmail($email)
{
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		return false;
	}
	return true;
}


?>





