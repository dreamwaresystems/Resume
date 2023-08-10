<?php

//===========================//
// BasePageTemplate Class
// Author: Mike Jones
// Created: 10-21-2012
//===========================//

// abstract base template class
abstract class BasePageTemplate
{
	protected $current_topnav; // current top-level navigation selected
	protected $current_subnav; // current sub-level navigation selected
	
	function __construct()
	{
		ob_start();
	}
	function __destruct() {}
	
	public function write($content = "", $indent = 0)
	{
		echo $content;
	}
	
	// custom template design members
	protected function outputPageHeader() {}
	public function printWrapperBegin() {}
	public function printWrapperEnd() {}
	public function printHeader() {}
	public function printContentBegin(){}
	public function printContentEnd() {}
	public function printContentFooter(){}
	public function outputPage() {}
}
?>
