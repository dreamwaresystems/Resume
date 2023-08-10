<?php

	//MTJ this function generates the output of a php file and 
	//    returns the resulting string of HTML.
	function view_content($view_folder, $file_name)
	{
		global $CONFIG;
		ob_start();
		$content_location = $CONFIG->root."views/".$view_folder."/".$file_name;
		if (file_exists($content_location))
			include($content_location);
		else 
			echo "ERROR: Content view doesn't exist";
		$content = ob_get_clean();
		return $content;
	}

	function view_ads($file_name)
	{
		global $CONFIG;
		ob_start();
		$content_location = $CONFIG->root."views/ads/".$file_name;
		if (file_exists($content_location))
			include($content_location);
		else 
			echo "ERROR: Content view doesn't exist";
		$content = ob_get_clean();
		return $content;
	}
?>