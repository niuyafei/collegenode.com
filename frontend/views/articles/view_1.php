<?php
/**
 * Created by PhpStorm.
 * User: niuyafei
 * Date: 2017/12/11
 * Time: 上午1:21
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

	<title>collegenode</title>

	<!-- Bootstrap -->
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>

	<![endif]-->
</head>

<body>
<nav class="navbar navbar-default navbar-collegenode" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collegenode-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/site/index?language=EN"><img src="/img/logo.png"></a>
	</div>
	<div class="collapse navbar-collapse navbar-collegenode-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li>
				<a href="/site/index?language=EN" class="nav-menu"><small>Home</small></a>
			</li>
			<li>
				<a href="/EN/bangdan_meiguo.html" class="nav-menu"><small>CollegeNode Rankings</small></a>
			</li>
			<li class="dropdown">
				<a id="dLabel" class="nav-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<small onclick="window.location.href='http://collegenode.cn/product.html'" style="cursor: pointer;">Panama</small>
				</a>
				<ul class="dropdown-menu" aria-labelledby="dLabel">
					<li class="text-right">
						<a href="/site/index?language=EN" class="color-blue">USA</a>
					</li>
					<li class="text-right">
						<a href="/site/index?language=SPANISH" class="color-blue">Mexico</a>
					</li>
					<li class="text-right">
						<a href="http://www.collegenode.com" class="color-blue">China</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="/EN/about.html" class="nav-menu"><small>About us</small></a>
			</li>
		</ul>
	</div>
</nav>
<div class="main-header sub-header">
	<div class="container">
		<div class="text-center">
			<h1 style="font-size: 38px;">Articles & Videos</h1>
		</div>
	</div>
</div>
<div class="container m-t-20">
	<div class="row index-news-row">
		<div class="col-sm-12" style="border: 1px solid #EEEEEE; padding: 15px;">
			<h3 class="text-center"><?= $data['article'] ?></h3>
			<div class="text-center">
				<small class="color-gray">阅读：<?= $data['num']; ?></small>
			</div>
			<div class="text-center m-t-10">
				<div class="bdsharebuttonbox">
					<small class="color-gray">分享到：</small>
					<a href="#" class="bds_fbook" data-cmd="fbook" title="share to facebook" style="float: none; background-image: url(/img/facebook.jpg); background-position: 0; background-size: 20px;"></a>
					<a href="#" class="bds_twi" data-cmd="twi" title="share to twitter" style="float: none; background-image: url(/img/twitter.jpg); background-position: 0; background-size: 20px;"></a>
				</div>
			</div>
			<hr />
			<?php if($data['type'] == 1): ?>
				<!-- 文章 -->
				<p style="text-indent: 25px;"><?= $data['content']; ?></p>
			<?php else: ?>
				<!-- 视频 -->
				<div style="text-align:center;">
					<?php
						$video = explode("/", $data['video']);
						$video = end($video);
					?>
					<iframe id="vzvd-2924134" name="vzvd-2924134" title="video player" class="video-player" type="text/html" width="576" height="324" frameborder="0" allowFullScreen allowTransparency="true" mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/<?= $video; ?>/player"></iframe>
				</div>
			<?php endif; ?>
		</div>

	</div>
</div>

<footer class="text-center m-t-40">
	<small>Copyright © 2014-2017 American Learning Education Exchange Organization Inc.</small>
</footer>

<script src="/js/jquery-2.1.3.min.js" type="text/javascript" charset="utf-8"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script>
	window._bd_share_config = {
		"common": {
			"bdSnsKey": {},
			"bdText": "",
			"bdMini": "2",
			"bdMiniList": false,
			"bdPic": "",
			"bdStyle": "0",
			"bdSize": "16"
		},
		"share": {}
	};
	with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>
</body>
<script>
	$(".dropdown").mouseover(function(){
		var obj = $(".dropdown-menu");
		if(obj.css("display") == "none"){
			setTimeout(function(){
				obj.fadeIn(1000);
			}, 500)
		}
	});

	$(".dropdown").mouseleave(function(){
		$(".dropdown-menu").css("display", "none");
	});
</script>
</html>