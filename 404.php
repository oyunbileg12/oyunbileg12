<?php
#設定ファイル
include_once("setting.php");

# Gナビ用
$filename = "404";

$h1 = "404エラー";
?>
<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">

	<meta http-equiv="Refresh" content="3;URL=<?php print $path;?>">

	<?php include_once("./inc/charset.php");?>
	<title><?php print $filename;?>エラー</title>
	<meta name="description" content="<?php print $filename;?>エラー" />
	<meta name="Keywords" content="<?php print $filename;?>エラー" />

	<?php include_once("./inc/head.php");?>

	<link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
	<script type="text/javascript" src="contact/mfp.statics/thanks.js"></script>

</head>
<body>



<?php include_once("./inc/header.php");?>



<h2><span>404</span><?php print $filename;?>エラー</h2>



<!--▼パンくずリスト▼-->
<div id="breadcrumbs">
	<ul>
		<li><a href="<?php print $path;?>">HOME</a></li>
		<li><?php print $filename;?>エラー</li>
	</ul>
</div><!-- #breadcrumbs -->
<!--▲パンくずリスト▲-->


<div id="contents">
	<div id="error">



<div id="wrapper">
	<div id="error">
		<h3><span><?php print $filename;?>エラー</span></h3>
			<div class="innerBox02">

				<p class="lead02">※3秒後に自動的にトップページへ戻ります。</p>
				<p class="lead01">アクセスしようとしたページは表示できませんでした。<br />
				以下のような原因が考えられます。</p>

				<ul class="point">
					<li>・アクセスしようとしたファイルが存在しない(ファイルの設置箇所を誤っている)。</li>
					<li>・URLアドレスが間違っている。</li>
				</ul>
			</div><!--//.innerBox-->
	</div><!--//#error-->
</div><!--//#wrapper-->


	</div><!--//#work-->
</div><!--//#contents-->









<?php include_once("./inc/footer.php");?>


</body>
</html>