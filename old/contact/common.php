<?
// 口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口
//
// 堀田ハガネメールフォーム　共通モジュール
//
// 口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口口

//共通部分
mb_internal_encoding('UTF-8');
ini_set('display_errors',1);

$fields = array(
'namae',
'phonetic',
'mail',
'mailB',
'vocational',
'company',
'division',
'zipcodeA',
'zipcodeB',
'addressA',
'addressB',
'telA',
'telB',
'telC',
'detail'
);

// 職業のリスト
$vocational_list = array(
	"会社経営",
	"会社員",
	"学生"
);
// 都道府県
$pref_list = array(
"未選択",
"北海道"  ,"青森県"  ,"岩手県"  ,"宮城県"  ,"秋田県"  ,
"山形県"  ,"福島県"  ,"茨城県"  ,"栃木県"  ,"群馬県"  ,
"埼玉県"  ,"千葉県"  ,"東京都"  ,"神奈川県","新潟県"  ,
"富山県"  ,"石川県"  ,"福井県"  ,"山梨県"  ,"長野県"  ,
"岐阜県"  ,"静岡県"  ,"愛知県"  ,"三重県"  ,"滋賀県"  ,
"京都府"  ,"大阪府"  ,"兵庫県"  ,"奈良県"  ,"和歌山県",
"鳥取県"  ,"島根県"  ,"岡山県"  ,"広島県"  ,"山口県"  ,
"徳島県"  ,"香川県"  ,"愛媛県"  ,"高知県"  ,"福岡県"  ,
"佐賀県"  ,"長崎県"  ,"熊本県"  ,"大分県"  ,"宮崎県"  ,
"鹿児島県","沖縄県  " );

// メール送信先（本番）
$mailto = 'maido1@hotta-hagane.co.jp';
//$mailto = 'it@redcube.jp';
// メール送信元
$mailfrom = 'maido1@hotta-hagane.co.jp';
// 件名
$subject = '【Web】お問い合わせメール';
$subjectG = 'お問合せを承りました。株式会社　堀田ハガネ';

function decode() {
	global $fields;

	foreach($fields as $field) {
		global $$field;
		if( isset($_POST[$field]) ) {
			$$field = htmlspecialchars($_POST[$field]);
		}
		else {
			$$field = '';
		}
	}
}

function debug_print() {
	global $fields;
	
	foreach($fields as $field) {
		global $$field;
		print "$field=".$$field."<br />\n";
	}
}
?>
