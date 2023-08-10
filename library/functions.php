<?php
// 
// Author: Mike Jones
// Description: These are just commonly used helper functions
//============================================================
	
function getJSArrayString($list, $numeric=false)
{
	$Str = "[";
	for($i=0;$i<count($list);$i++)
	{
		if($numeric)
			$Str .= $list[$i];
		else
			$Str .= "\"".$list[$i]."\"";
		if($i < (count($list)-1))
			$Str .= ", ";
	}
	$Str .= "]";
	return $Str;
}


function output_table($header, $result, $class="")
{
	$s = '<table class="'.$class.'">';
	$s .= '<tr>';
	foreach($header as $col)
		$s .= '<td>'.$col['name'].'</td>';
	$s .= '</tr>';
	
	
	while($row=mysql_fetch_array($result))
	{
		$s .= '<tr>';
		foreach($header as $col)
			$s .= '<td>'.$row[$col['key']].'</td>';
		$s .= '</tr>';
	}
	
	$s .= '</table>';
	return $s;
}


//create pretty currency string
function create_currency_string($value)
{
	if($value==0)
		return "$ 0.00";
		
	//MTJ, this might need some more thought
	$str = "$ ";
	$price = $value;
	$parts = explode(".", $price);
	$str .= $parts[0];
	if(strlen($parts[1])==1)
		$str .= ".".$parts[1]."0";
	else if(strlen($parts[1])==0)
		$str .= ".00";
	else
		$str .= ".".$parts[1];
	return $str;
}

//returns truncated string
function truncate_string($string, $count, $dots = false)
{
	$ret = $string;
	if(strlen($string) > $count)
	{
		if($dots)
		{
			$ret = substr($string, 0, $count-3);
			$ret .= "...";
		}
		else
			$ret = substr($string, 0, $count);
	}
	return $ret;
}
	
	
//pads a number with zeros to reach character amount
function pad_number($number, $characters)
{
	$res = "";
	$len = strlen((string)$number);
	for($i=0;$i<($characters - $len);$i++)
		$res .= "0";
	$res .= $number;
	return $res;

}

//correctly capitalize any string
function correct_capitaliztion($str)
{
	$ret = strtolower($str);
	$ret[0] = strtoupper($ret[0]);
	for($i=1;$i<strlen($str);$i++)
	{
		if($ret[($i-1)]==" ")
			$ret[$i] = strtoupper($ret[$i]);
	}
	return $ret;
}


//=================
//  Email
//=================
function send_email($to_email, $subject, $message, $attachment="")
{
	global $CONFIG;
	$from = 'support@facebake.com';
	$from_name = "dreamwaresys.com";
	
	$message = preg_replace("/(\r\n|\r|\n)/", "<br />", $message); // Convert to html line endings
	$message = wordwrap($message);
	return send_smtp_mail($to_email, $subject, $message, $from, $from_name, $attachment);
}

function send_smtp_mail($to, $subject, $message, $from, $from_name, $attachment)
{
	require_once('mailer/class.phpmailer.php');
	$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
	$mail->IsSMTP(); // telling the class to use SMTP
	try 
	{
		$mail->Host       = "smtp.zoho.com"; // SMTP server
		$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host       = "smtp.zoho.com";      // sets GMAIL as the SMTP server
		$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
		$mail->Username   = "admin@facebake.com";  // ZOHO username
		$mail->Password   = "Asdqwe1234";            // ZOHO password
		$mail->AddReplyTo($from, $from_name);
		$mail->AddAddress($to);
		$mail->SetFrom($from, $from_name);
		$mail->Subject = $subject;
		$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
		$mail->MsgHTML($message);
		// if($attachment!="")
		//	$mail->AddAttachment($attachment);      // attachment
		$mail->Send();
		return true;
	} 
	catch(phpmailerException $e) 
	{
		error_log($e->errorMessage());
	} 
	catch (Exception $e) 
	{
		error_log($e->getMessage());
	}

	return false;
}



//gets a capitalized version of the domain - i.e. "Albanytakeout.com"
function get_pretty_domain()
{
	global $CONFIG;
	$domain = $CONFIG->domain;
	$domain[0] = strtoupper($domain[0]);
	return $domain;
}

?>