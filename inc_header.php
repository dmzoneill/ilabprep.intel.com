<?php

include_once( "inc_conf.php" );
include_once( "inc_functions.php" );

print "<!doctype html>
<html lang='en'>
	<head>
		<title>iLabPrep.intel.com - iLab Template Scripts</title>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
        <script src='" . WWWROOT . "/view.js'></script>
        <script type='text/javascript' src='//cdn.sublimevideo.net/js/uisc9vax.js'></script>
		<link rel='stylesheet' type='text/css' href='" . WWWROOT . "/main.css' media='all'>
	</head>
	<body>
		<div class='header'>
			<br/>
			<table>
				<tr>
					<td width='100'>
						<img src='" . WWWROOT . "/images/iLabBlueHeadSmall.png' style='vertical-align: middle;margin-left:20px'/>
					</td>
					<td valign='top' width='350' align='left'>
						<font style='color:#115EA2;font-size:26pt'>iLabPrep</font> <font style='color:#115EA2;font-size:18pt'>Template Scripts</font><br>
						<font style='color:#115EA2;font-size:10pt'>&nbsp;&nbsp;Simply making a better template</font>
					</td>
				</tr>
			</table>
		</div>
		<div id='pageContent' class='cssBody'>
		";
