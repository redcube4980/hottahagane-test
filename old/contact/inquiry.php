<?
//メイン操作プログラム
$process = '';

if( !isset($_GET['p']) ) {
	$process = 'i';
}
else {
	$process = 'i';
	if( $_GET['p'] == 'c' or $_GET['p'] == 's' ) {
		$process = $_GET['p'];
	}
}

include_once("common.php");

switch($process) {
	case "i":
		header("Location: index.html");
		break;
	case "c":
		include("form_confirm.php");
		break;
	case "s":
		include("form_send.php");
		break;
}
?>