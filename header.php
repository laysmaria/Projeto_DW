<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta name="description" content="<?php echo $descricao ?>">
	<meta name="keywords" content="<?php echo $keywords ?>">
	<meta name="author" content="<?php echo $autor ?>">
	<title><?php echo $titulo.' | '.ucwords($pagina) ?></title>

	<script src="jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="jquery.tmp1.min.js" type="text/javascript"></script>
    <script src="jquery.tmplPlus.min.js" type="text/javascript"></script>

	<script id="templateStructure" type="text/x-jquery-tmpl">
	<tr>
		<td>$(status)</td>
		<td>$(country)</td>
		<td>$(countryCode)</td>
		<td>$(region)</td>
		<td>$(regionName)</td>
		<td>$(city)</td>
		<td>$(zip)</td>
		<td>$(lat)</td>
		<td>$(lon)</td>
		<td>$(timezone)</td>
		<td>$(isp)</td>
		<td>$(org)</td>
		<td>$(as)</td>
		<td>$(query)</td>
	</tr>
</script>

<script type="text/javascript">
$(document).ready(function() {
	$(function(){
		$.getJSON("http://ip-api.com/json/?callback=?", function (data) {
			$('#templateStructure').template('myTemplate');
			$.tmpl('myTemplate', data).appendTo('#templateTable');
		});
	});
	</script>

</head>

</head>
<body>
<div id="container">
	<div id="header">
		<div id="logo">	
		</div>
	</div>