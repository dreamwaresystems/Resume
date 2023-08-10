<?php

//============================//
// ResumeTemplate Class
// Author: Mike Jones
// Created: 2016-02-21
//============================//
class ResumePageTemplate extends BasePageTemplate 
{
	function __construct() {parent::__construct();}
	function __destruct() {parent::__destruct();}

	protected function outputPageHeader()
	{
		global $CONFIG, $CSS_VERSION;
		echo '<!DOCTYPE html>'.chr(10);
		echo '<html>'.chr(10);
		echo '<head>'.chr(10);
			// character set
			echo '<meta charset="UTF-8">'.chr(10);
			
			// title
			echo '<title>Michael T. Jones | Resume</title>'.chr(10);
			
			// favicon
			echo '<link rel="shortcut icon" type="image/x-icon" href="'.$CONFIG->url.'favicon.ico">'.chr(10);
			echo '<link rel="icon" type="image/x-icon" href="'.$CONFIG->url.'favicon.ico">'.chr(10);
			echo '<link rel="icon" type="image/png" sizes="32x32" href="'.$CONFIG->url.'images/icons/favicon-32x32.png">'.chr(10);
			echo '<link rel="icon" type="image/png" sizes="96x96" href="'.$CONFIG->url.'images/icons/favicon-96x96.png">'.chr(10);
			echo '<link rel="icon" type="image/png" sizes="16x16" href="'.$CONFIG->url.'images/icons/favicon-16x16.png">'.chr(10);
			
			// css
			echo '<link rel="stylesheet" type="text/css"  href="'.$CONFIG->url.'css/template.css?version='.$CSS_VERSION.'" />'.chr(10);
			echo '<link rel="stylesheet" type="text/css"  href="'.$CONFIG->url.'css/resume.css?version='.$CSS_VERSION.'" />'.chr(10);
			
			
			// javascript
			echo '<script language="javascript" type="text/javascript" src="'.$CONFIG->url.'js/jquery-1.12.0.min.js"></script>'.chr(10);
			// ChartJS re-write to fix color issues... ttps://github.com/FVANCOP/ChartNew.js/
			echo '<script language="javascript" type="text/javascript" src="'.$CONFIG->url.'js/chartjs/ChartNew.js"></script>'.chr(10);
			
			// fancybox  ttp://fancyapps.com/fancybox/#license
			echo '<script language="javascript" type="text/javascript" src="'.$CONFIG->url.'js/fancybox/jquery.fancybox.pack.js"></script>'.chr(10);
			echo '<link rel="stylesheet" type="text/css"  href="'.$CONFIG->url.'js/fancybox/jquery.fancybox.css?version='.$CSS_VERSION.'" />'.chr(10);

			echo '<link rel="stylesheet" href="'.$CONFIG->url.'js/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />';
			echo '<script type="text/javascript" src="'.$CONFIG->url.'js/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>';
			echo '<script type="text/javascript" src="'.$CONFIG->url.'js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>';
			//echo '<link rel="stylesheet" href="'.$CONFIG->url.'js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />';
			/*echo '<script type="text/javascript" src="'.$CONFIG->url.'js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>';*/

		echo '</head>'.chr(10).chr(10);
		echo '<body>'.chr(10);
	}

	public function printWrapperBegin($topnav = "home")
	{
		$this->current_topnav = $topnav;
		if($this->current_topnav=="home")
			echo '<div id="outer_wrap_home">'.chr(10);
		else
			echo '<div id="outer_wrap_resume">'.chr(10);
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
			"summary"    => array("btn" => "Summary",      "title" => "Summary",                 "link" => "#summary"),
			"skills"     => array("btn" => "Skills",       "title" => "Professional Skills",     "link" => "#skills"),
			"experience" => array("btn" => "Experience",   "title" => "Professional Experience", "link" => "#experience"),
			"education"  => array("btn" => "Education",    "title" => "Education",               "link" => "#education"),
			"portfolio"  => array("btn" => "Portfolio",    "title" => "Project Portfolio",       "link" => "#portfolio"),
			"sourcecode" => array("btn" => "Code Samples", "title" => "Source Code Samples",     "link" => "#sourcecode", "style" => "style=\"min-width:150px;\""),
			);

		echo '<div class="header_wrap">'.chr(10);
			echo '<div class="header">'.chr(10);
				
				if(!$CONFIG->resume_is_active)
				{
					// inactive resume
					echo '<div class="header_inactive" style="width:35%;">Resume No Longer Active</div>'.chr(10);
				}
				else
				{
					foreach($topNavList as $name => $Info)
					{
						$class = "";
						if($name==$this->current_topnav && $this->current_topnav!="home")
							$class = "header_select";
						if($Info['class']!="")
							$class .= " ".$Info['class'];
						echo '<a href="'.$Info['link'].'" class="'.$class.'" '.$Info['style'].'>'.$Info['btn'].'</a>'.chr(10);
					}
				}
			echo '</div>'.chr(10);
		echo '</div>'.chr(10);
		
	}
	
	public function printContentBegin($homepage = false)
	{
		global $CONFIG;
		
		$left_header_style = "";
		if(!$CONFIG->resume_is_active)
			$left_header_style = "margin-top:125px;";

		echo '<div id="content_wrap_resume">'.chr(10);
		?>
		<div class="cv_header">
			<div class="cv_header_left" style=" <?=$left_header_style?> ">
				<div class="cvtitle">Michael T. Jones</div>
				<div class="cvsubtitle">Lead iOS Engineer</div>
				<?php
					if($CONFIG->resume_is_active)
					{
						if($CONFIG->resume_download_is_active)
							echo '<div class="cv_download_doc_btn" id="downloadLink" tag="resume">Download Printable Resume</div>'.chr(10);
						echo '<a class="linkedinBtn" id="linkedinBtn" title="LinkedIn Profile" href="'.$CONFIG->linkedin_link.'" target="_blank"></a>'.chr(10);
					}
				?>
				<a class="cv_github_btn" href="https://github.com/Jonesyme/" target="_blank"></a>
			</div>
			<div class="cv_header_right">
				<img src="<?=$CONFIG->url?>images/resume/profile3.png" alt="profile image" />
			</div>
		</div>
		<?php
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
				echo "Copyright &copy; ".date("Y")." Michael T. Jones".chr(10);
			echo '</div>'.chr(10);
		echo '</div>'.chr(10);
		
		// output starlight script (if not homepage)
		/*if($this->current_topnav!="home")
		{
			echo '<script type="text/javascript">
					$(document).ready(function(){
						configureStarlightForAllPages();
					});
				</script>'.chr(10);

		}*/
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
