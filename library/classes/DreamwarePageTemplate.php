<?php

//===========================//
// DreamwareTemplate Class
// Author: Mike Jones
// Created: 02-22-2016
//===========================//

// dreamware site template
class DreamwarePageTemplate extends BasePageTemplate
{
	function __construct() {}
	function __destruct() {}
	
	protected function outputPageHeader()
	{
		global $CONFIG, $CSS_VERSION;
		echo '<!DOCTYPE html>'.chr(10);
		echo '<html>'.chr(10);
		echo '<head>'.chr(10);
			// character set
			echo '<meta charset="UTF-8">'.chr(10);
			
			// title
			echo '<title>Dreamware Systems LLC | Custom software development</title>'.chr(10);
			
			// favicon
			echo '<link rel="shortcut icon" type="image/x-icon" href="'.$CONFIG->url.'favicon.ico">'.chr(10);
			echo '<link rel="icon" type="image/x-icon" href="'.$CONFIG->url.'favicon.ico">'.chr(10);
			echo '<link rel="icon" type="image/png" sizes="32x32" href="'.$CONFIG->url.'images/icons/favicon-32x32.png">'.chr(10);
			echo '<link rel="icon" type="image/png" sizes="96x96" href="'.$CONFIG->url.'images/icons/favicon-96x96.png">'.chr(10);
			echo '<link rel="icon" type="image/png" sizes="16x16" href="'.$CONFIG->url.'images/icons/favicon-16x16.png">'.chr(10);
			
			// css
			echo '<link rel="stylesheet" type="text/css"  href="'.$CONFIG->url.'css/template.css?version='.$CSS_VERSION.'" />'.chr(10);
			echo '<link rel="stylesheet" type="text/css"  href="'.$CONFIG->url.'css/pages.css?version='.$CSS_VERSION.'" />'.chr(10);
			//echo '<link rel="stylesheet" type="text/css"  href="'.$CONFIG->url.'css/twinkle.css" />'.chr(10);
			
			// javascript
			echo '<script language="javascript" type="text/javascript" src="'.$CONFIG->url.'js/jquery-1.12.0.min.js"></script>'.chr(10);
			echo '<script language="javascript" type="text/javascript" src="'.$CONFIG->url.'js/starlight.js"></script>'.chr(10);
			
			// site verification tag
			echo '<meta name="google-site-verification" content="rdg0229xyAhCPNY2z-5miyz4-2GKlhHKbInYlhg2Tz8" />'.chr(10);
			
		echo '</head>'.chr(10).chr(10);
		echo "<body>".chr(10);
	}

	public function printWrapperBegin($topnav = "home")
	{
		$this->current_topnav = $topnav;
		if($this->current_topnav=="home")
			echo '<div id="outer_wrap_home">'.chr(10);
		else
			echo '<div id="outer_wrap" class="starlight">'.chr(10);
		
		if($this->current_topnav=="resume")
			$this->printHeaderResume();
		else
			$this->printHeader();
	}
	public function printWrapperEnd()
	{
		echo '</div>'.chr(10);
	}
	
	public function printHeader()
	{
		global $CONFIG;
		
		$topNavList = array(
			"home"        => array("title" => "Home",        "link" => "",               "class" => "homelink"),
			"development" => array("title" => "Development", "link" => "pg/development", "class" => ""),
			"products"    => array("title" => "Products",    "link" => "pg/products",    "class" => ""),
			"about"       => array("title" => "About",       "link" => "pg/about",       "class" => ""),
			"advertising" => array("title" => "Advertising", "link" => "pg/advertising", "class" => ""),
			"contact"     => array("title" => "Contact",     "link" => "pg/contact",     "class" => ""),
			);
			
		echo '<div class="header_wrap">'.chr(10);
			echo '<div class="header">'.chr(10);

				foreach($topNavList as $name => $Info)
				{
					$class = "";
					if($name==$this->current_topnav && $this->current_topnav!="home")
						$class = "header_select";
					if($Info['class']!="")
						$class .= " ".$Info['class'];
					echo '<a href="'.$CONFIG->url.$Info['link'].'" class="'.$class.'">'.$Info['title'].'</a>'.chr(10);
				}

			echo '</div>'.chr(10);
		echo '</div>'.chr(10);
	}
	
	public function printHeaderResume()
	{
		global $CONFIG;
		
		$topNavList = array(
			"home"        => array("title" => "About Me",    "link" => "resume/#aboutme",     "class" => ""),
			"development" => array("title" => "Experience",  "link" => "resume/#experience",  "class" => ""),
			"products"    => array("title" => "Skills",      "link" => "resume/#skills",      "class" => ""),
			"about"       => array("title" => "Meet Me",     "link" => "resume/#meetme",      "class" => ""),
			"advertising" => array("title" => "Portfolio",   "link" => "resume/#portfolio",   "class" => ""),
			"contact"     => array("title" => "Contact",     "link" => "resume/#contact",     "class" => ""),
			);
			
		echo '<div class="header_wrap">'.chr(10);
			echo '<div class="header">'.chr(10);

				foreach($topNavList as $name => $Info)
				{
					$class = "";
					if($name==$this->current_topnav && $this->current_topnav!="home")
						$class = "header_select";
					if($Info['class']!="")
						$class .= " ".$Info['class'];
					echo '<a href="'.$CONFIG->url.$Info['link'].'" class="'.$class.'">'.$Info['title'].'</a>'.chr(10);
				}

			echo '</div>'.chr(10);
		echo '</div>'.chr(10);
	}
	
	public function printContentBegin($homepage = false)
	{
		echo '<div id="content_wrap">'.chr(10);
	}
	
	public function printContentEnd()
	{
		$this->printContentFooter();
		
		echo '</div>'.chr(10);
	}
	
	public function printContentFooter()
	{
		global $CONFIG;
		echo '<div id="footer">'.chr(10);
			echo '<div class="copyright_text">'.chr(10);
				echo "Copyright &copy; ".date("Y")." Dreamware Systems LLC".chr(10);
			echo '</div>'.chr(10);
		echo '</div>'.chr(10);
		
		// output starlight script (if not homepage)
		if($this->current_topnav!="home")
		{
			echo '<script type="text/javascript">
					$(document).ready(function(){
						configureStarlightForAllPages();
					});
				</script>'.chr(10);

		}
	}

	// output final page
	public function outputPage()
	{
		global $CONFIG;
		
		$output = ob_get_contents();
		ob_end_clean();
		
		$this->OutputPageHeader();
		
		echo $output;
		echo $CONFIG->tracking_tag;

		echo '</body>'.chr(10);
		echo '</html>'.chr(10);
	}
}
?>
