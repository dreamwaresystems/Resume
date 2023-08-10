<?php

	// global settings
	global $CONFIG, $CSS_VERION, $JS_VERSION, $DEBUG_FLAG;
	$CSS_VERSION = date("YmdGi");
	$JS_VERSION = date("YmdGi");
	
	$CONFIG->admin_email = "jones.t.michael@gmail.com";
	
	
	//== Resume Site Settings ================//
	$CONFIG->resume_is_active = true;
	$CONFIG->resume_download_is_active = true;
	$CONFIG->resume_sourcecode_is_active = false;
	$CONFIG->linkedin_link = "https://www.linkedin.com/in/michael-jones-05257a7";
	//========================================//
	
	// local / dev servers
	if($_SERVER['HTTP_HOST']=="localhost")
	{
		$DEBUG_FLAG = 1;
		$CONFIG->url = "http://localhost/dreamware/resume/";
		$CONFIG->root = "C:/Users/jones/Documents/WebDevelopment/mjcvme/";
		$CONFIG->tracking_id = '';
	}
	else // live servers
	{
		$DEBUG_FLAG = 0; //use compression and such
		ini_set('error_reporting', '1');
		
		$CONFIG->url = "https://www.mjcv.me/";
		$CONFIG->root = "/home/sites/mjcv-me";	
		$CONFIG->tracking_id = '';
	}

	$CONFIG->data_path = $CONFIG->root."data/";
	
	// tracking ID
	$CONFIG->tracking_tag = '';
	/*
	$CONFIG->tracking_tag = '<script type="text/javascript">'.chr(10);
	$CONFIG->tracking_tag .= '   var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");'.chr(10);
	$CONFIG->tracking_tag .= '   document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));'.chr(10);
	$CONFIG->tracking_tag .= '</script>'.chr(10);
	$CONFIG->tracking_tag .= '<script type="text/javascript">'.chr(10);
	$CONFIG->tracking_tag .= '   try{'.chr(10);
	$CONFIG->tracking_tag .= '      var pageTracker = _gat._getTracker("'.$CONFIG->tracking_id.'");'.chr(10);
	$CONFIG->tracking_tag .= '      pageTracker._trackPageview();'.chr(10);
	$CONFIG->tracking_tag .= '   } catch(err) {}'.chr(10);
	$CONFIG->tracking_tag .= '</script>'.chr(10).chr(10);
	*/
?>