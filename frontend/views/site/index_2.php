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
        <a class="navbar-brand" href="/site/index?language=SPANISH"><img src="/img/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse navbar-collegenode-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="/site/index?language=SPANISH" class="nav-menu"><small>Inicio</small></a>
            </li>
            <li>
                <a href="/SPANISH/esp_bangdan_meiguo.html" class="nav-menu"><small>CollegeNode Rankings</small></a>
            </li>
            <li class="dropdown">
                <a id="dLabel" class="nav-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <small>CollegeNode Spanish</small>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li class="text-right">
                        <a href="http://collegenode.cn/product.html" class="color-blue">Panama</a>
                    </li>
                    <li class="text-right">
                        <a href="/site/index?language=EN" class="color-blue">CollegeNode English</a>
                    </li>
                    <li class="text-right">
                        <a href="http://www.collegenode.com" class="color-blue">CollegeNode Chinese</a>
                    </li>
                </ul>
            </li>
            <!--<li>
				<a href="mingxiao-dongtai.html" class="nav-menu"><small>名校动态</small></a>
			</li>-->
            <li>
                <a href="/SPANISH/esp_about.html" class="nav-menu"><small>Quiénes somos</small></a>
            </li>
            <!--<li>
				<a class="btn" href="#" style="border: 1px solid #FFFFFF; padding: 5px 20px; border-radius: 25px; margin-top: 15px; margin-left: 30px; margin-right: 15px;">
					<small>简体中文</small>
					<span class="caret"></span>
				</a>
			</li>-->
        </ul>
    </div>
</nav>
<div class="main-header">
    <div class="container">
        <div class="headline" style="padding-top: 10%;">
            <h1 style="font-size: 38px;">Rankings autorizados para estudiar en los E.E.U.U.</h1>
            <h3>El sitio web más autorizado para obtener información sobre universidades estadounidenses</h3>
            <p>
                <a class="btn btn-default m-t-10" href="/SPANISH/esp_bangdan_meiguo.html" role="button">Las mejores escuelas secundarias de los Estados Unidos</a>
            </p>
            <p>
                <a class="btn btn-default m-t-10" href="/SPANISH/esp_bangdan_biyexinshui.html" role="button">Las universidades con los graduados mejor pagados</a>
            </p>
            <p>
                <a class="btn btn-default m-t-10" href="/SPANISH/esp_bangdan_boshi.html" role="button">Las universidades con más graduados aceptados por el doctorado</a>
            </p>
        </div>
    </div>
    <img src="/img/macbook.png">
</div>
<svg class="divider" preserveaspectradio="none" viewBox="0 0 1080 46">
    <polygon x="0" y="0" points="0 46 1080 46 0 0"></polygon>
</svg>
<div class="container">
    <h1 class="text-center" style="font-size: 38px;">Artículos & Videos</h1>
    <div class="row index-news-row">
        <?php foreach($articles as $key => $value): ?>
            <?php if($key == 3): ?>
                </div>
                <div class="row index-news-row">
            <?php endif; ?>
            <div class="col-lg-4 m-t-40 cursor-pointer" onclick="window.location.href='/articles/view?id=<?= $value['id'] ?>&language=SPANISH'">
                <div class="news-box">
                    <div class="row m-t-10">
                        <div class="col-xs-12">
                            <img src="/img/uploads/<?= $value['img']; ?>" style="width:340px; height: 181px;" />
                        </div>
                    </div>
                    <div class="m-t-10 text-overflow"><?= $value['article'] ?></div>
                    <p class="color-gray m-t-5 news-remark text-overflow"><?= mb_substr(strip_tags($value['content']), 0, 28, "utf-8") . "..."; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="col-xs-12 text-center m-t-40">
        <a href="/articles/index?language=SPANISH" class="btn btn-primary btn-lg">Ver más artículos y videos</a>
    </div>
</div>
<div class="index-about">
    <svg class="divider" preserveaspectradio="none" viewBox="0 0 1080 46">
        <polygon x="0" y="0" points="0 0 1080 0 1080 46"></polygon>
    </svg>
    <div class="container">
        <h1 class="text-center color-white" style="font-size: 38px;">Quiénes somos</h1>
        <p class="m-t-40 color-graywhite">
            CollegeNode, también conocido como American Learning Education Exchange Organization, es una organización educativa con enfoque en la investigación de educación superior estadounidense y el intercambio de educación internacional. El objetivo de la empresa es proporcionar la información más precisa sobre las universidades estadounidenses para los estudiantes internacionales. El fundador de la compañía, Dan Ye, ha sido presentado en muchos medios de comunicación internacionales, incluyendo ABC, CNN y CCTV de China, como experto en educación.
        </p>
        <div class="col-xs-12 text-center m-t-20 m-b-40">
            <a href="/SPANISH/esp_about.html" class="btn btn-primary btn-lg">Saber más</a>
        </div>
    </div>
    <svg class="divider" preserveaspectradio="none" viewBox="0 0 1080 46">
        <polygon x="0" y="0" points="0 0 1080 46 0 46"></polygon>
    </svg>
</div>
<div class="text-center">
    <h1 class="text-center" style="font-size: 38px;">Aliado comercial</h1>
    <div class="container m-t-40">
        <img src="/img/company-logo.jpg" width="90%" />
    </div>
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

</html>
