<?php
//GET値を処理用に項目へコピー
$varGET = $_GET;
$product = '';
//請求された資料のチェック
switch( true ){ //case判定は「true」と「===」により厳密な判定を使用
case $varGET['dl'] === 'pb':
	$product = '特殊鋼鋼材（Pb添加）';
	break;
case $varGET['dl'] === 'nonpb':
	$product = '特殊鋼鋼材（Pb添加除く）';
	break;
case $varGET['dl'] === 'stainless':
	$product = 'ステンレス鋼材';
	break;
case $varGET['dl'] === 'nonpb-stainless':
	$product = 'ステンレス鋼材（Pb添加除く）';
	break;
default:
	//請求された資料が不正な場合、sds.shtmlへリダイレクト(302)
	header("Location: sds.shtml");
	exit(0);
	break;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja"><head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta http-equiv="content-script-type" content="text/javascript">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="imagetoolbar" content="no">
<meta name="description" content="時代のニーズに応える含ニッケル鋼のスペシャリスト、堀田ハガネ。調達から加工、流通まで「まかせて良かった」の笑顔のために、価値ある鋼をお届けいたします。">
<meta name="keywords" content="SNC415,SNC631,SNC815,SNCM220H,SNCM420H,SNCM220,SNCM420,SNCM439,SNCM447,SNCM616,SNCM630,SNCM815,特殊鋼,ステンレス鋼,堀田ハガネ">
<title>安全データシート取得 | 製品情報 | 株式会社 堀田ハガネ</title>
<link rel="stylesheet" href="/common/css/import.css" type="text/css" media="screen,print">
<link rel="stylesheet" href="css/product.css" type="text/css" media="screen,print">
<script type="text/javascript" src="/common/js/common.js"></script>

</head>
<body>
<div id="TOP">
<? include "../common/ssi/mod_header.ssi"; ?>
<!-- jQwizard改 jQuery本体が「mod_header.ssi」で読み込まれる為、ここに定義する必要性有 -->
<script type="text/javascript" src="../js/wizard/jquery.wizard.js"></script>
<link rel="stylesheet" type="text/css" href="../js/wizard/wizard.css">
<!-- 郵便番号→住所 -->
<script src="https://zipaddr.github.io/zipaddra.js" charset="UTF-8"></script>
<script language="javascript">
<!--//
$(function(){
	$('#jqwizard').wizard({
		'onPrev': function(currentIndex){
			switch (currentIndex) {
			case 1:
				//使用できるボタンを限定する
				$('#cont_btn_1ststep').css('display', 'block');
				$('#cont_btn_next_prev').css('display', 'none');
				$('#cont_btn_exit').css('display', 'none');
				break;
			case 2:
				//使用できるボタンを限定する
				$('#cont_btn_1ststep').css('display', 'none');
				$('#cont_btn_next_prev').css('display', 'block');
				$('#cont_btn_exit').css('display', 'none');
				break;
			default:
				break;
			}
		},
		'onNext': function(currentIndex){
			switch (currentIndex) {
			case 0:
				$('#err_name').html('');
				$('#err_mail').html('');
				$('#err_company').html('');
				ret = download_chk("check");
				if( ret === false ) return ret;
				//使用できるボタンを限定する
				$('#cont_btn_1ststep').css('display', 'none');
				$('#cont_btn_next_prev').css('display', 'block');
				$('#cont_btn_exit').css('display', 'none');
				//表示用項目へ複写
				$('#dsp_name').html( $('#inp_name').val() );
				$('#dsp_mail').html( $('#inp_mail').val() );
				$('#dsp_company').html( $('#inp_company').val() );
				$('#dsp_branch').html( $('#inp_branch').val() );
				$('#dsp_zip').html( $('#inp_zip1').val() + '-' + $('#inp_zip2').val() );
				$('#dsp_address').html( $('#address').val()) ;
				break;
			case 1:
				ret = download_chk("confirm");
				if( ret === false ) return ret;
				//使用できるボタンを限定する
				$('#cont_btn_1ststep').css('display', 'none');
				$('#cont_btn_next_prev').css('display', 'none');
				$('#cont_btn_exit').css('display', 'block');
				break;
			default:
				break;
			}
		},
		'onChange': function(currentIndex){
		}
	});
	//リセットボタン押下時の処理
	$('#jqwizard_reset').on('click',function(){
		$('#inp_name').val('');
		$('#inp_mail').val('');
		$('#inp_company').val('');
		$('#inp_branch').val('');
		$('#inp_zip').val('');
		$('#address').val('');
		$('#err_name').html('');
		$('#err_mail').html('');
		$('#err_company').html('');
		location.href = '#jqwiz_step1';
	});
	//TOPへ戻るボタン押下時の処理
	$('#jqwizard_exit').on('click',function(){
		location.href = '/';
	});

	//同意のチェック変更による処理
	$('#chk_confirm').on('change',function(){
    if( $(this).prop('checked') ){
			$('#btn_download').css('display', 'inline');
    } else {
			$('#btn_download').css('display', 'none');
    }
	});

	//初期状態で使用できるボタンを限定する
	$('#cont_btn_1ststep').css('display', 'block');
	$('#cont_btn_next_prev').css('display', 'none');
	$('#cont_btn_exit').css('display', 'none');
	$('#btn_download').css('display', 'none');
	
});
function download_chk(proc){
	var result;
	var postdata = $("#frmDownload").serialize();
	var targetURL = 'sdsdownload_chk.php?mode=' + proc;
	$.ajax({
		async: false,
		type: "POST",
		url: targetURL,
		data: postdata,
		dataType: 'json',
		success: function(msg){
			if( msg.result == true ){
				$('#fname').attr('href', '/download.php?hash=' + msg.fname);
				//入力値を更新(全角半角操作,サニタイジング)
				$('#inp_name').val( msg.inp_name );
				$('#inp_mail').val( msg.inp_mail );
				$('#inp_company').val( msg.inp_company );
				$('#inp_branch').val( msg.inp_branch );
				$('#inp_zip').val( msg.inp_zip );
				$('#address').val( msg.inp_address );
				ret = true;
			} else {
				$('#err_name').html( msg.name );
				$('#err_mail').html( msg.mail );
				$('#err_company').html( msg.company );
				ret = false;
			}
		},
		error: function(a,b,c){
			return false;
		}
	});
	return ret;
}
//-->
</script>
<div id="BODY">
<div id="MAIN">
<div class="titleArea">
<h1><img src="img/sds/title_sds.jpg" alt="SNCM鋼 【肌焼鋼】7種類のSNCM鋼　他の追随を許さない充実のラインナップ！"></h1>

</div><!-- /titleArea -->


<div id="detailSds" class="detailArea">
	<h3 class="subtitleSdsDL">取得フォーム</h3>
	<div id="jqwizard" class="jqwizard">
		<div class="jqwizard_navi">
			<ul>
				<li><img src="img/sds/step01.png" alt="お申込み内容の入力"/></a></li>
				<li><img src="img/sds/step02.png" alt="入力内容の確認"/></a></li>
				<li><a href="#jqwiz_step3" title=""><img src="img/sds/step03.png" alt="お申込み完了・ダウンロード"/></a></li>
			</ul>
		</div>
		<div class="jqwizard_panel">
			<section class="jqwizard_content" id="jqwiz_step1">
				<div class="step_exp textSDS">以下のフォームに必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>半角カナ・特殊文字は使用しないでください。<br></div>
				<div class="step_exc textSDS">
					● お客様からいただく個人情報は、原則として、お問い合わせ・資料請求への回答に<br>&nbsp;&nbsp;&nbsp;必要な情報のみ使用させていただきます。<br>● ＊は必須項目となり、ご入力がない場合送信できませんのでご了承ください。<br>
				</div>
				<form id="frmDownload">
					<input type='hidden' name='dl' value='<? echo $varGET['dl'] ?>' />
					<table class="jqwiz_table">
						<tr class="product">
							<td>資料名</td><td><? echo $product; ?></td>
						</tr>
						<tr>
							<td>氏名<span class="text_warning">＊</span></td>
							<td>
								<input type="text" name="inp_name" id="inp_name" /><span class="text_warning">&nbsp;＊全角</span><br>
								<div id="err_name" class="text_warning"></div>
							</td>
						</tr>
						<tr>
							<td>メールアドレス<span class="text_warning">＊</span></td>
							<td>
								<input type="text" name="inp_mail" id="inp_mail" /><span class="text_warning">&nbsp;＊半角英数記号</span>
								<div id="err_mail" class="text_warning"></div>
							</td>
						</tr>
						<tr>
							<td>会社名<span class="text_warning">＊</span></td>
							<td>
								<input type="text" name="inp_company" id="inp_company" />
								<div id="err_company" class="text_warning"></div>
							</td>
						</tr>
						<tr>
							<td>部署名</td>
							<td><input type="text" name="inp_branch" id="inp_branch" /></td>
						</tr>
						<tr>
							<td>会社住所</td>
							<td>
								〒<input type="text" name="inp_zip1" id="zipcode1" class="inp_zip" />-<input type="text" name="inp_zip2" id="zipcode2" class="inp_zip" />
								<input type="text" name="inp_zip" id="inp_zip" style="display:none;" />
								<!--<button type="button" id="btn_zip">自動入力</button><span class="text_warning">&nbsp;＊半角数字、ハイフン「-」は入力しないで下さい</span>--><br>
								<input type="text" name="inp_address" id="address" />
							</td>
						</tr>
					</table>
				</form>
			</section>
			<section class="jqwizard_content" id="jqwiz_step2">
				<div class="step_exp textSDS">以下のフォームに必要事項をご入力の上、「入力内容を確認する」ボタンを押してください。<br>半角カナ・特殊文字は使用しないでください。<br></div>
				<div class="step_exc textSDS">
					● お客様からいただく個人情報は、原則として、お問い合わせ・資料請求への回答に<br>&nbsp;&nbsp;&nbsp;必要な情報のみ使用させていただきます。<br>● ＊は必須項目となり、ご入力がない場合送信できませんのでご了承ください。<br>
				</div>
				<table class="jqwiz_table">
					<tr class="product">
						<td>資料名</td><td><? echo $product; ?></td>
					</tr>
					<tr>
						<td>氏名</td><td><span id="dsp_name"></span></td>
					</tr>
					<tr>
						<td>メールアドレス</td><td><span id="dsp_mail"></span></td>
					</tr>
					<tr>
						<td>会社名</td><td><span id="dsp_company"></span></td>
					</tr>
					<tr>
						<td>部署名</td><td><span id="dsp_branch"></span></td>
					</tr>
					<tr>
						<td>会社住所</td><td>〒<span id="dsp_zip"></span><br><span id="dsp_address"></span></td>
					</tr>
				</table>
			</section>
			<section class="jqwizard_content" id="jqwiz_step3">
				<div class="step_exp textSDS">以下の点にご同意（チェックボックスにチェック）の上、「ダウンロード」ボタンを押して、<br>ご希望のSDSをご取得下さい。<br></div>
				<div class="step_exc textSDS">
					“本WebページからSDSを入手することに受諾するもの”と見なさせて頂きます。<br>
					<input type='checkbox' id='chk_confirm' />&nbsp;&nbsp;<span class="">同 意 す る</span><br>
					<span class="text_warning">※同意して頂きますと「ダウンロード」ボタンが表示されます。<br>※ファイルのダウンロードはこの画面が表示されてから1時間有効です。</span>
				</div>
				<table class="jqwiz_table">
					<tr class="product">
						<td>資料名</td>
						<td><? echo $product; ?></td>
						<td class="download_button">
							<a href="" id="fname"　target="_blank"><button type="button" id="btn_download" class="jqwiz_btn"><img src="img/sds/btn_download.png" alt="ダウンロード"/></button></a>
						</td>
					</tr>
				</table>
				<div class="step_exp textSDS">
					この度はお申込みいただきまして誠にありがとうございます。入力いただきましたメールアドレス宛に、「ダウンロードありがとうございました」という件名で確認のメールを送信いたしました。メールが届いていない場合は、入力した電子メールアドレスに誤りがあるか、送信エラーが起きている恐れがございます。メールアドレスにお間違いがない場合は、大変恐れ入りますが再度お申込みくださいますよう、お願い申し上げます。<br>
				</div>
			</section>
		</div>
		<div class="jqwizard_buttons">
			<div id="cont_btn_1ststep">
				<button type="button" id="jqwizard_reset" class="jqwizard_reset jqwiz_btn"><img src="img/sds/btn_reset.png" alt=""/></button>
				<button type="button" class="jqwizard_next jqwiz_btn"><img src="img/sds/btn_next.png" alt="" /></button>
			</div>
			<div id="cont_btn_next_prev">
				<button type="button" class="jqwizard_previous jqwiz_btn"><img src="img/sds/btn_prev.png" alt=""/></button>
				<button type="button" class="jqwizard_next jqwiz_btn"><img src="img/sds/btn_next.png" alt=" "/></button>
			</div>
			<div id="cont_btn_exit">
				<button type="button" id="jqwizard_exit" class="jqwiz_btn"><img src="img/sds/btn_end.png" alt="" /></button>
			</div>
		</div>
	</div>


	<div class="followingSec">
	</div><!-- /followingSec -->
	
	<div class="pdfSec">
	</div><!-- /pdfSec -->


</div><!-- /detailArea -->
</div><!-- /MAIN -->
<? include "../product/ssi/mod_menu.ssi"; ?>
</div><!-- /BODY -->
<? include "../common/ssi/mod_footer.ssi"; ?>
</div><!-- /TOP -->
</body>
</html>