<?php
/*
Template Name: page-sdsdownload
*/
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
	header("Location: /sds/");
	exit(0);
	break;
}
?>
<?php get_header();?>
<!-- main-->
<main id="BODY">
<div id="MAIN">
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
<?php endif; ?>
<div id="detailSds" class="detailArea">
	<div id="jqwizard" class="jqwizard">
  	<h3 class="subtitleSdsDL">取得フォーム</h3>
		<div class="jqwizard_navi" v-bind:class="[step0 ? 'step0' : [step1 ? 'step1' : 'step2']]">
			<ul>
				<li class="jqwizard_current step0"><img src="<?php echo get_template_directory_uri(); ?>/img/sds/step01.png" alt="お申込み内容の入力"/></a></li>
				<li v-bind:class="{'jqwizard_current step1' : ! step0}"><img src="<?php echo get_template_directory_uri(); ?>/img/sds/step02.png" alt="入力内容の確認"/></a></li>
				<li v-bind:class="{'jqwizard_current step2' : step2}"><a href="#jqwiz_step3" title=""><img src="<?php echo get_template_directory_uri(); ?>/img/sds/step03.png" alt="お申込み完了・ダウンロード"/></a></li>
			</ul>
		</div>
		<div class="jqwizard_panel">
			<section  v-show="step0" class="jqwizard_content" id="jqwiz_step1">
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
								〒<input type="text" name="inp_zip1" id="zip1" />&nbsp;-&nbsp;<input type="text" name="inp_zip2" id="zip2" />
								<input type="text" name="inp_zip" id="inp_zip" style="display:none;" />
								<!--<button type="button" id="btn_zip">自動入力</button>
								<span class="text_warning">&nbsp;＊半角数字、ハイフン「-」は入力しないで下さい</span>-->
								<span class="text_warning">&nbsp;＊半角数字</span><br>
								<input type="text" name="inp_address" id="address" />
							</td>
						</tr>
					</table>
				</form>
			</section>
			<section v-show="step1" class="jqwizard_content" id="jqwiz_step2">
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
			<section v-show="step2" class="jqwizard_content" id="jqwiz_step3">
				<div class="step_exp textSDS">以下の点にご同意（チェックボックスにチェック）の上、「ダウンロード」ボタンを押して、<br>ご希望のSDSをご取得下さい。<br></div>
				<div class="step_exc textSDS">
					“本WebページからSDSを入手することに受諾するもの”と見なさせて頂きます。<br>
					<input v-on:click="dllink = !dllink" type='checkbox' id='chk_confirm' />&nbsp;&nbsp;<span class="">同 意 す る</span><br>
					<span class="text_warning">※同意して頂きますと「ダウンロード」ボタンが表示されます。<br>※ファイルのダウンロードはこの画面が表示されてから1時間有効です。</span>
				</div>
				<table class="jqwiz_table">
					<tr class="product">
						<td>資料名</td>
						<td><? echo $product; ?></td>
						<td class="download_button">
							<a v-show="dllink" href="" id="fname"　target="_blank"><button type="button" id="btn_download" class="jqwiz_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/sds/btn_download.png" alt="ダウンロード"/></button></a>
						</td>
					</tr>
				</table>
				<div class="step_exp textSDS">
					この度はお申込みいただきまして誠にありがとうございます。入力いただきましたメールアドレス宛に、「ダウンロードありがとうございました」という件名で確認のメールを送信いたしました。メールが届いていない場合は、入力した電子メールアドレスに誤りがあるか、送信エラーが起きている恐れがございます。メールアドレスにお間違いがない場合は、大変恐れ入りますが再度お申込みくださいますよう、お願い申し上げます。<br>
				</div>
			</section>
		</div>
		<div class="jqwizard_buttons">
			<div v-show="step0" id="cont_btn_1ststep">
				<button v-on:click="rest_input" type="button" id="jqwizard_reset" class="jqwizard_reset jqwiz_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/sds/btn_reset.png" alt=""/></button>
				<button v-on:click="check_input" type="button" class="jqwizard_next jqwiz_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/sds/btn_next.png" alt="" /></button>
			</div>
			<div v-show="step1" id="cont_btn_next_prev">
				<button v-on:click="return_input" type="button" class="jqwizard_previous jqwiz_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/sds/btn_prev.png" alt=""/></button>
				<button v-on:click="confirm_input" type="button" class="jqwizard_next jqwiz_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/sds/btn_next.png" alt=" "/></button>
			</div>
			<div v-show="step2" id="cont_btn_exit">
				<button type="button" id="jqwizard_exit" class="jqwiz_btn"><img src="<?php echo get_template_directory_uri(); ?>/img/sds/btn_end.png" alt="" /></button>
			</div>
		</div>
	</div>


	<div class="followingSec">
	</div><!-- /followingSec -->
	
	<div class="pdfSec">
	</div><!-- /pdfSec -->


</div><!-- /detailArea -->
</div><!-- /MAIN -->
<?php get_sidebar('mod_menu'); ?>
</main>
<!-- /main-->
<?php get_footer();?>