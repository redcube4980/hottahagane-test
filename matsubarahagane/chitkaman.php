<?php

//処理文字コードの指定
mb_language("Japanese");
mb_internal_encoding("UTF-8");
mb_regex_encoding("UTF-8");

require_once "echo_commonhtml.php";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ちっかマン</title>

<? echo_jslink(); ?>

<? echo_bootstrap(); ?>

<link rel="stylesheet" type="text/css" href="chitkaman.css">
</head>

<body>
<div id="container">
	<div id="contImage"></div>
	<div id="contProfile">
	</div>
</div>
</body>
</html>
