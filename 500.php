<?php
#設定ファイル
include_once("setting.php");

# Gナビ用
$filename = "500";

$h1 = "500エラー";
?>
<!DOCTYPE HTML>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">

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


				<p class="lead01">アクセスしようとしたページは表示できませんでした。<br />
				以下のような原因が考えられます。</p>


				<div class="point">断続的に発生する場合</div>
				<ul>
					<li>・CGIの負荷が大きい(CGIプロセスが多数動作している)。</li>
				</ul>

				<div class="point">常に発生にする場合</div>
				<ul>
					<li>・CGIのパーミッション設定に誤りがある。</li>
					<li>・CGIのソースコードに問題がある。</li>
					<li>・.htaccessの記述に誤りがある。</li>
				</ul>

			</div><!--//.innerBox-->

	</div><!--//#error-->
</div><!--//#wrapper-->


	</div><!--//#work-->
</div><!--//#contents-->










<?php include_once("./inc/footer.php");?>


</body>
</html>