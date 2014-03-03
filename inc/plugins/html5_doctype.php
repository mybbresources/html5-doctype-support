<?php

/**
 * Script Name
 * Copyright 2014 Mark Topper, All Rights Reserved
 * Description: This plugin simple adds HTML5 support for the core MyBB system without changing in the core files.
 * Version: 0.1
 *
 * Author: Mark Topper
 * Website: http://webman.io
 * License: http://webman.io/license
 */

// Disallow direct access to this file for security reasons
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.");
}

// Call Hooks
$plugins->add_hook("pre_output_page", "html5_doctype_tag");

// Info
function html5_doctype_info() {
	return array(
	        "name" => 'HTML5 Doctype Plugin',
	        "description"=> 'As themes can not change the doctype, this plugin will change the doctype to HTML5',
	        "website" => "http://www.webman.io",
	        "author" => "Mark Topper",
	        "authorsite" => "http://www.webman.io",
	        "version" => "0.1",
	        "compatibility" => "16*"
	    );
}

// Activate
function html5_doctype_activate() {
}

// Deactivate
function html5_doctype_deactivate() {
} 

// Functions
function html5_doctype_tag(&$content) {
	$content = str_replace('<html xml:lang="en" lang="en" xmlns="http://www.w3.org/1999/xhtml">','<html>',$content);
	$content = str_replace('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">','<!DOCTYPE html>',$content);
	return $content;
}

?>
