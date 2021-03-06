<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <title>申校系统</title>

    <!-- Bootstrap core CSS -->
    <link href="..//bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="..//css/style.css" />
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="container">
            <div class="index-main-body">
                <h1 class="logo hide-text">CollegeNode</h1>
                <h4 class="logo-slogn">成 就 人 生 远 航 梦 想</h4>
                <h5 class="text-center color-blue">申校助手后台中心</h5>
                <div class="p-10 m-t-20">
                    <div role="tabpanel" class="tab-pane fade in active" id="login">
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            <div class="form-boxline">
                                <label for="inputEmail" class="sr-only">Email</label>
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true, "placeholder" => 'Email'])->label(false); ?>
                                <hr class="form-middleline" />
                                <label for="inputPassword" class="sr-only">Password</label>
                                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false); ?>
                            </div>
                            <?= Html::submitButton('Login', ['class' => 'btn btn-lg btn-primary btn-block m-t-20', 'name' => 'login-button']) ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mastfoot">
        <div class="inner color-ad text-center">
            <p>Copyright © 北京联校传奇信息科技有限公司</p>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="..//css/login.css" />
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/bootstrap/js/jquery-2.1.3.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
<style type="text/css">
    .btn-primary {
        color: #ffffff;
        background-color: #03a1e9;
        border-color: transparent;
    }
    .btn-primary:focus, .btn-primary:hover {
        color: #ffffff;
        background-color: #03a1e9;
        border-color: transparent;
    }
    .p-t-10 {
        padding-top: 10px;
    }
    .m-t-20 {
        margin-top: 20px;
    }
</style>
</body>

</html>
