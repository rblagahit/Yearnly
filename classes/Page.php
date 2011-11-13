<?php
class Page{

	public function __construct(){
		//Empty right now
	}
	
	public function Html_Head(){
		 return '<!DOCTYPE html>
				<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
				<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
				<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
				<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
				<head>
					<meta charset="utf-8" />
					<meta name="viewport" content="width=device-width" />
					<link rel="stylesheet" href="_assets/stylesheets/foundation.css">
					<link rel="stylesheet" href="_assets/stylesheets/app.css">
					<!--[if lt IE 9]><link rel="stylesheet" href="_assets/stylesheets/ie.css"><![endif]-->
					<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
	}
	
	public function Javascripts(){
		return '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
				<script src="_assets/javascripts/Helper.js" type="text/javascript"></script>
				<script src="_assets/javascripts/foundation.js"></script>
				<script src="_assets/javascripts/app.js"></script>';
	}
}

?>