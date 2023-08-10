<?php

// begin session
session_start(); 

global $CONFIG;

if (!include_once(dirname(__FILE__) . "/settings.php")) {	
	echo "Error: could not load overlord.  Overlord: Feed me.";
	exit;
}
if (!include_once(dirname(__FILE__) . "/functions.php")) {	
	echo "Error: could not load the function file.";
	exit;
}
if (!include_once(dirname(__FILE__) . "/encryption.php")) {	
	echo "Error: could not load the encryption code file.";
	exit;
}
if (!include_once(dirname(__FILE__) . "/security.php")) {	
	echo "Error: could not load the security library file.";
	exit;
}
if (!include_once(dirname(__FILE__) . "/views.php")) {		
	echo "Error: could not load the view library file.";
	exit;
}
// if (!include_once(dirname(__FILE__) . "/classes/BasePageTemplate.php")) {		
// 	echo "Error: could not load the ResumePageTemplate library file.";
// 	exit;
// }
// if (!include_once(dirname(__FILE__) . "/classes/ResumePageTemplate.php")) {		
// 	echo "Error: could not load the ResumePageTemplate library file.";
// 	exit;
// }

// class libraries
foreach(glob(dirname(__FILE__)."/classes/*.php") as $filename)
{	
	if(!include_once($filename)) 
	{	
		echo "Error: could not load the ".$filename." class file.";
		exit;
	}
}



?>