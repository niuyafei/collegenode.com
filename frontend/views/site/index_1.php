<?php

/* @var $this yii\web\View */

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
<div class="main-header">
    <div class="container">
        <div class="headline" style="padding-top: 10%;">
            <h1 style="font-size: 38px;">Authoritative rankings for studying in the USA</h1>
            <h3>The most authoritative website for data on American colleges</h3>
            <p>
                <a class="btn btn-default m-t-10" href="/EN/bangdan_meiguo.html" role="button">Best High Schools in the US</a>
            </p>
            <p>
                <a class="btn btn-default m-t-10" href="/EN/bangdan_biyexinshui.html" role="button">Colleges With Highest Graduate Salaries</a>
            </p>
            <p>
                <a class="btn btn-default m-t-10" href="/EN/bangdan_boshi.html" role="button">Top Ph.D Feeder Colleges</a>
            </p>
        </div>
    </div>
    <img src="/img/macbook.png">
</div>
<div class="container">
    <h1 class="text-center" style="font-size: 38px;">Articles & Videos</h1>
    <div class="row index-news-row">
        <?php foreach($articles as $key => $value): ?>
            <?php if($key == 3): ?>
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
                    <div class="m-t-10 text-overflow"><?= $value['article'] ?></div>
                    <p class="color-gray m-t-5 news-remark text-overflow"><?= mb_substr(strip_tags($value['content']), 0, 28, "utf-8")."..."; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-xs-12 text-center m-t-40">
        <a class="btn btn-primary btn-lg" href="/articles/index?language=EN">View more articles and videos</a>
    </div>
</div>

<div class="index-about" style="margin-top: 40px; background-image: url(/img/bg.jpg), -webkit-gradient(linear, right top, left bottom, from(#fff));">
    <div class="container">
        <div class="text-center">
            <img src="/img/logo02.png" />
        </div>
        <h3 class="text-center color-white" style="font-size: 38px;">3-Week Institute for Social Innovation</h3>
        <p class="m-t-40 color-graywhite">In collaboration with ThinkImpact and MIT, our award-winning curriculum guides students through a creative learning process focused on global entrepreneurship, giving them clear actions to take and provoking thoughtful reactions and insights along the way. The ultimate goal of the programs is to learn through collaboration. To accomplish this, participants build a team with locals, university students, and professionals to formulate ideas on how to improve quality of life in the local community. The program is designed to give student a perspective on global social challenges while engage in peers and small communities in the developing world. Students will be staying in dormitories at Boston's MIT and have the chance to interact and participate in pre-departure activities. In Panama, students will work in teams of 6, with a college or graduate student team leading their projects.</p>
        <div class="col-xs-12 text-center m-t-20 m-b-40">
            <a href="/EN/thinkimpact.html" class="btn btn-primary btn-lg">Click here for more information</a>
        </div>
    </div>
    <!--<svg class="divider" preserveaspectradio="none" viewBox="0 0 1080 46">
		<polygon x="0" y="0" points="0 0 1080 46 0 46"></polygon>
	</svg>-->
</div>

<div class="index-about" style="margin-top: 25px;">
    <div class="container">
        <h1 class="text-center color-white" style="font-size: 38px;">About us</h1>
        <p class="m-t-40 color-graywhite">CollegeNode, also known as American Learning Education Exchange Organization, is a education organizition with focus on American higher education research and international education exchange. The company's goal is to provide the most accurate data on American universities for international students. Company founder Dan Ye has been featured on many international media outlets, including ABC, CNN and CCTV of China, as education expert.</p>
        <div class="col-xs-12 text-center m-t-20 m-b-40">
            <a href="/EN/about.html" class="btn btn-primary btn-lg">Learn more</a>
        </div>
    </div>
</div>
<div class="text-center">
    <div class="container">
        <img src="/img/company-logo.jpg" width="90%" />
    </div>
</div>
		<span onclick="javascript:;" class="backtop cursor-pointer hidden-xs">
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

</style>
</body>
<script>
    $(".dropdown").mouseover(function(){
        var obj = $(".dropdown-menu");
        if(obj.css("display") == "none"){
            obj.fadeIn(1000);
        }
    });

    $(".dropdown").mouseleave(function(){
        $(".dropdown-menu").css("display", "none");
    });
</script>

</html>
