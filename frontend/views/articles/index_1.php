<?php
/**
 * Created by PhpStorm.
 * User: niuyafei
 * Date: 2017/12/11
 * Time: 上午1:20
 */

use yii\widgets\LinkPager;

//英语
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
			<div class="m-t-20"><span>$29.99 per month to view all articles and videos</span></div>
			<a class="btn btn-default btn-lg m-t-20" data-toggle="modal" data-target="#pay-modal">View more articles and videos</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row index-news-row">
		<?php foreach($data as $key => $value): ?>
			<?php if($key % 3 == 0): ?>
				</div>
				<div class="row index-news-row">
			<?php endif; ?>
			<div class="col-lg-4 m-t-40 cursor-pointer" onclick="window.location.href='/articles/view?id=<?= $value['id'] ?>&language=EN'">
				<div class="news-box">
					<div class="row m-t-10">
						<div class="col-xs-12">
							<img src="/img/uploads/<?= $value['img']; ?>" style="width:340px; height: 181px;" />
						</div>
					</div>
					<div class="m-t-10 text-overflow"><?= $value['article']; ?></div>
					<p class="color-gray m-t-5 news-remark text-overflow"><?= mb_strlen(strip_tags($value['content']), "utf-8") > 28 ? (mb_substr(strip_tags($value['content']), 0, 28, "utf-8") . "...") : strip_tags($value['content']); ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<nav aria-label="Page navigation" class="text-center m-t-20">
		<ul class="pagination">
			<?= LinkPager::widget([
				'pagination' => $pages
			]); ?>
		</ul>
	</nav>
</div>

		<span onclick="javascript::void(0);" class="backtop cursor-pointer hidden-xs">
			<small><small><span class="glyphicon glyphicon-chevron-up"></span></small>
			</small>
		</span>
<footer class="text-center m-t-40">
	<small>Copyright © 2014-2017 American Learning Education Exchange Organization Inc.</small>
</footer>
<script src="/js/jquery-2.1.3.min.js" type="text/javascript" charset="utf-8"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/backtop.js" type="text/javascript" charset="utf-8"></script>
<div class="modal" id="pay-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header color-blue">
				Payment
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<a href="/EN/visa_pay.html"><img src="/img/visa.png" width="100%" /></a>
						</div>
						<div class="col-sm-6">
							<a href="/EN/mastercard_pay.html"><img src="/img/mastercard.png" width="100%" /></a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.btn-default {
		border-radius: 25px;
		font-size: 18px;
		padding: 12px 80px;
		color: #489ed2;
		background-color: #fff;
		border-color: #fff;
	}

	.btn-default {
		border-radius: 25px;
		font-size: 16px;
		padding: 12px 40px;
		color: #489ed2;
		background-color: #fff;
		border-color: #fff;
	}

	.navbar-default .navbar-nav>.open>a,
	.navbar-default .navbar-nav>.open>a:hover,
	.navbar-default .navbar-nav>.open>a:focus {
		background-color: #277fb3;
		color: #FFFFFF;
	}

	.dropdown-menu {
		min-width: 98px;
		text-align: center;
	}

	.dropdown-menu>li>a,
	.dropdown-menu>li>a:hover,
	.dropdown-menu>li>a:focus {
		color: #489ed2;
		background-color: transparent;
	}
</style>
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