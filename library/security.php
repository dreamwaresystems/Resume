<?php

/*
	Mike Jones 2/27/2008
    These functions and classes are used to prevent SQL Injections and malicious activities
*/

//check that we're logged in
function is_logged_in()
{
	if($_SESSION['uid']!="")
		return true;
	else
		return false;
}

//check if its admin
function is_admin()
{
	if($_SESSION['admin']==1 && is_logged_in())
		return true;
	else
		return false;
}

//generates random authentication hash for preventing CSRF attacks
function generate_csrf_hash()
{
	$reset_time = 60*10; //10 minutes
	$hash = $_SESSION['csrf_hash'];
	if($_SESSION['csrf_hash_time']=="" || (time()-$_SESSION['csrf_hash_time'])>$reset_time)
	{
		//create new one
		$hash = sha1(microtime()).sha1(microtime()+5);;
		$_SESSION['csrf_hash']=$hash;
		$_SESSION['csrf_hash_time']=time();
	}
	return $hash;
}

//generate new random hashes
function generate_random_hex()
{
	return substr(md5(microtime() . rand()), 0, 8);
}

//generate random password
function generate_random_password()
{
	// start with a blank 
	$password = "";
	$possible = "0123456789bcdfghjkmnpqrstvwxyz"; 
	$i = 0; 
	
	// add random characters to $password until $length is reached
	while ($i < 8) 
	{ 
		$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		$password .= $char;
		$i++;
	}
	return $password;
}

//hash password entry using md5 
function hash_password($password, $hash = "")
{
	return md5($password.$hash);
}
	
//function to forward to urls
function forward($location = "") 
{
	global $CONFIG;

	if (!headers_sent()) 
	{
		if($location=="ERROR")
		{
			$location = $CONFIG->url . "pages/messages.php?id=189";
		}
		else if(!strstr($location, "http")) //relative link
		{
			$location = $CONFIG->url . $location;
		}
		header("Location: {$location}");
		exit(0);
	}
	else
		echo "Error: headers already sent";

	return false;
	
}

//Check for re-direction from forms (i.e. if the user goes to accounts but gets re-directed to the login page
// we need to redirect them to accounts afterwards
function check_for_redirect()
{
	global $CONFIG;
	
	//check for forward code 
	$redirect = $_SESSION['redirect'];
	$address = "";
	if($redirect != "")
	{
		//if($redirect == "7834")      //code for myaccount home
		//	$address = 'account/home.php';
		//if($redirect == "5634")      //code for checkout page
		//	$address = 'pages/shoppingbag.php';
	}
	if($address != "")
		return $address;
	else if($redirect != "")
		return $redirect;
	else
		return $CONFIG->url;
}

/**
 * Sanitise a string for database use
 *
 * @param string $string The string to sanitise
 * @return string Sanitised string
 */
function sanitize_string($string) {
	$str = mysql_real_escape_string(trim($string)); //MYSQL injection protection
	return htmlspecialchars($str); //XXS protection
}
function unsanitize_string($string) {
	return stripslashes($string);
}
function sanitize_blog($string) //only used for blogs which are admin runned
{
	return mysql_real_escape_string(trim($string)); //MYSQL injection protection
}
function sanitize_image($image) //only used for images
{
	return mysql_real_escape_string($image); //MYSQL injection protection
}
function sanitize($string){
	return mysql_real_escape_string(trim($string)); //MYSQL injection protection
}
function unsanitize($string) {
	return stripslashes($string);
}

//this is ripped from "http://www.addedbytes.com/php/email-address-validation/"
function check_email_address($email) 
{
	// First, we check that there's one @ symbol, and that the lengths are right
	if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) 
	{
		// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
		return false;
	}
	
	// Split it into sections to make life easier
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
	for ($i = 0; $i < sizeof($local_array); $i++) 
	{
		if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
			return false;
	}
	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) 
	{ 
		// Check if domain is IP. If not, it should be valid domain name
		$domain_array = explode(".", $email_array[1]);
		if (sizeof($domain_array) < 2)
			return false; // Not enough parts to domain

		for ($i = 0; $i < sizeof($domain_array); $i++) 
		{
			if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) 
				return false;
		}
	}
   return true;
}
	

?>