<?php

//処理文字コードの指定
mb_language("Japanese");
mb_internal_encoding("UTF-8");
mb_regex_encoding("UTF-8");

$sacm645 = Array();
array_push($sacm645,Array("13", "5500", "1.04", "A", "○", ""));
array_push($sacm645,Array("16", "5500", "1.58", "A", "○", ""));
array_push($sacm645,Array("19", "5500", "2.23", "", "", ""));
array_push($sacm645,Array("22", "5500", "2.98", "A", "○", ""));
array_push($sacm645,Array("25", "6000", "3.85", "", "", ""));
array_push($sacm645,Array("28", "6000", "4.83", "A", "○", ""));
array_push($sacm645,Array("30", "6000", "5.55", "", "", ""));
array_push($sacm645,Array("32", "6000", "6.31", "A", "●", ""));
array_push($sacm645,Array("34", "6000", "7.13", "A", "●", ""));
array_push($sacm645,Array("36", "6000", "8.00", "", "", ""));
array_push($sacm645,Array("38", "6000", "8.90", "A", "●", ""));
array_push($sacm645,Array("40", "6000", "9.87", "", "", ""));
array_push($sacm645,Array("42", "6000", "10.88", "A", "●", ""));
array_push($sacm645,Array("44", "6000", "11.94", "A", "●", ""));
array_push($sacm645,Array("46", "6000", "13.05", "", "", ""));
array_push($sacm645,Array("48", "6000", "14.21", "A", "●", ""));
array_push($sacm645,Array("50", "6000", "15.41", "", "", ""));
array_push($sacm645,Array("55", "6000", "18.65", "A", "●", ""));
array_push($sacm645,Array("60", "6000", "22.20", "", "", ""));
array_push($sacm645,Array("65", "6000", "26.05", "A", "●", ""));
array_push($sacm645,Array("70", "6000", "30.21", "A", "●", ""));
array_push($sacm645,Array("75", "6000", "34.68", "A", "●", ""));
array_push($sacm645,Array("80", "6000", "39.46", "A", "●", ""));
array_push($sacm645,Array("85", "6000", "44.45", "A", "●", ""));
array_push($sacm645,Array("90", "6000", "49.95", "A", "●", ""));
array_push($sacm645,Array("95", "6000", "55.64", "A", "●", ""));
array_push($sacm645,Array("100", "6000", "61.70", "A", "●", ""));
array_push($sacm645,Array("110", "6000", "74.60", "A", "●", ""));
array_push($sacm645,Array("120", "6000", "88.78", "A", "●", ""));
array_push($sacm645,Array("130", "6000", "104.20", "A", "●", ""));
array_push($sacm645,Array("140", "6000", "120.84", "A", "●", ""));
array_push($sacm645,Array("150", "6000", "138.72", "A", "●", ""));
array_push($sacm645,Array("160", "6000", "157.80", "A", "●", ""));
array_push($sacm645,Array("170", "6000", "178.20", "A", "●", ""));
array_push($sacm645,Array("180", "6000", "199.80", "A", "●", ""));
array_push($sacm645,Array("190", "6000", "222.60", "A", "●", ""));
array_push($sacm645,Array("200", "6000", "246.60", "A", "●", ""));
array_push($sacm645,Array("210", "6000", "271.90", "A", "●", ""));
array_push($sacm645,Array("220", "6000", "298.40", "A", "●", ""));
array_push($sacm645,Array("230", "6000", "326.10", "A", "●", ""));
array_push($sacm645,Array("240", "6000", "355.10", "A", "●", ""));
array_push($sacm645,Array("250", "6000", "385.30", "A", "●", ""));
array_push($sacm645,Array("260", "", "416.80", "A", "●", ""));
array_push($sacm645,Array("270", "", "449.50", "A", "●", ""));
array_push($sacm645,Array("280", "", "483.40", "A", "●", ""));
array_push($sacm645,Array("290", "", "518.60", "A", "●", ""));
array_push($sacm645,Array("300", "", "554.90", "A", "●", ""));
array_push($sacm645,Array("310", "", "592.80", "A", "●", ""));
array_push($sacm645,Array("320", "", "631.30", "A", "●", ""));
array_push($sacm645,Array("330", "", "712.90", "A", "●", ""));
array_push($sacm645,Array("340", "", "755.00", "A", "●", ""));
array_push($sacm645,Array("350", "", "800.00", "A", "●", ""));
array_push($sacm645,Array("360", "", "892.00", "A", "●", ""));
array_push($sacm645,Array("370", "", "988.00", "A", "●", ""));
array_push($sacm645,Array("380", "", "1089.00", "A", "●", ""));
array_push($sacm645,Array("400", "", "1248.00", "A", "●", ""));
array_push($sacm645,Array("430", "", "", "", "", ""));
array_push($sacm645,Array("450", "", "", "", "", ""));
array_push($sacm645,Array("480", "", "", "", "", ""));
array_push($sacm645,Array("", "", "", "", "", ""));
array_push($sacm645,Array("", "", "", "", "", ""));
array_push($sacm645,Array("", "", "", "", "", ""));
array_push($sacm645,Array("", "", "", "", "", ""));
array_push($sacm645,Array("", "", "", "", "", ""));

$json_sacm645 = json_encode($sacm645);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JSON Data</title>
</head>

<body>

<h2>SACM645</h2>
<? echo $json_sacm645; ?>

</body>
</html>