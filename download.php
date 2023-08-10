<?php
//================================
//  Download Resume Link Control 
//================================
//
//  This code acts as a bypass/authenticator for file downloads in order to 
//     	1) Obscure the true root directory for downloadable files
//		2) Prevent stale downloads / browser caching by appending a timestamp and no-cache headers
//

include_once('library/start.php');
global $CONFIG;

// turn off all downloads if resume is inactive to prevent unwanted access to personal information
if(!$CONFIG->resume_is_active)
	forward($CONFIG->url);

$target = $_GET['target'];

$filePath = ""; 	// path to file on local disk
$fileName = ""; 	// user-friendly filename
$contentType = ""; 	// content-type

if($target=="resume")
{
	if(!$CONFIG->resume_download_is_active)
		forward($CONFIG->url);

	$filePath = "download/resume.pdf"; // changed to PDF 2016-03-24 for formatting quality assurance
	$fileName = "Michael T Jones - Resume ".date("Ymd").".pdf"; // user-friendly filename
	$contentType = "pdf"; // content-type
}
else if($target=="holyquotes")
{
	if(!$CONFIG->resume_sourcecode_is_active)
		forward($CONFIG->url);
	
	$filePath = "download/holyquotes_appsource.zip"; // path to file on local disk
	$fileName = "MTJ HolyQuotes AppSource ".date("Ymd").".zip"; // user-friendly filename
	$contentType = "zip"; // content-type
}
else if($target=="dreamware")
{
	if(!$CONFIG->resume_sourcecode_is_active)
		forward($CONFIG->url);
	
	$filePath = "download/dreamware_websource.zip"; // path to file on local disk
	$fileName = "MTJ Dreamware WebSource ".date("Ymd").".zip"; // user-friendly filename
	$contentType = "zip"; // content-type
}
else
	exit('Error: bad file reference');

header('Content-type: application/'.$contentType);
header('Content-Disposition: attachment; filename="'.$fileName.'"');
header('Cache-Control: no-store, no-cache, max-age=0, must-revalidate');
//header('Content-Length: '.(string)(filesize($filePath)));
//echo $filePath;

readfile($filePath);

?>