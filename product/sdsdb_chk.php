<?php

$flg = true;

//データベース接続
$dbUser = "mw2pg2bmww"; $dbInstance = "hottah"; $dbPass = "Yahotta104+"; $charset = "utf-8"; $host = "localhost";
$dsn = 'mysql:dbname='.$dbInstance.';host='.$host.';';
//$dsn = 'mysql:dbname='.$dbUser.';host='.$host.';charset='.$charset.";"; //PHP5.3.6以降の文字コード指定付
//$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'"); //PHP5.3.6未満の文字コード指定
try{
	$pdo = new PDO($dsn, $dbUser, $dbPass, $options);
	//$pdo = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $err) {
	$flg = false;
	$errMessage = $err->getMessage();
}

if( $flg ){	
	//属性設定、静的プレースホルダを使用
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Catch Exception
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true); //mysqlベースのコード(fetchallではなくfetchの連続使用)
} else {
	echo "NG....<br>\n$errMessage<br>\n";
	exit(0);
}

echo "Succeeded connecting database..<br>";
exit(0);

?>
