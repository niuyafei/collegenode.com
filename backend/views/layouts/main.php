<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="width=device-width; initial-scale=1; maximum-scale=1" name="viewport">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>申校系统</title>
    <link href="..//bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/dashboard.css" />
</head>
<?php $this->beginBody(); ?>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="../#">
                <img src="/img/logo.jpg" height="100%" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="color-gray p-r-20">
                    <?= Html::beginForm(['/site/logout', 'post']) ?>
                        <?= Html::submitButton(Yii::$app->user->identity->username . "(Logout)", ['class' => 'btn btn-link logout']) ?>
                    <?= Html::endForm(); ?>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container p-0 admin-cont">
    <div class="col-xs-2">
        <ul class="list-group m-b-0 admin-cont-nav">
            <li class="list-group-item text-center">
                <a href="/site/index" class="focus">Articles&Videos</a>
            </li>
        </ul>
    </div>
    <!-- content begin -->
    <?= $content; ?>
    <!-- content end -->
</div>
<footer>
    <hr />
    <div class="container">
        <div class="row">
            <div class="col-xs-12 p-0 text-center">
                <p class="m-t-10 color-gray">
                    留洋帮 © 京ICP备14025251号-2<br> 咨询电话：400 610 0025
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Placed at the end of the document so the pages load faster -->
<script src="/bootstrap/js/jquery-2.1.3.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/modal-middle.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/bootstrap/js/ie10-viewport-bug-workaround.js"></script>

</body>
<?php $this->endBody(); ?>
</html>
<?php $this->endPage() ?>
