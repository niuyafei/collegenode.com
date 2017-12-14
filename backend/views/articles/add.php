<?php
/**
 * Created by PhpStorm.
 * User: niuyafei
 * Date: 2017/12/10
 * Time: 下午10:52
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="col-xs-10">
	<h4 class="color-blue">名校动态 - 新增</h4>
	<hr class="m-t-5" />
	<div class="p-20 p-t-0">
		<?php $form = ActiveForm::begin([
			'action' => ['/articles/add'],
			'method' => 'post',
			'options' => [
				'enctype' => 'multipart/form-data',
			],
		]) ?>
		<div class="case-edit-cont">
			<div class="row case-edit-formwidth">
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-3 text-right p-t-5 p-r-0">
							<b>排序：</b>
						</div>
						<div class="col-xs-9">
							<?= $form->field($model, "sort")->textInput()->label(false); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row case-edit-formwidth">
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-3 text-right p-t-5 p-r-0">
							<b>类型：</b>
						</div>
						<div class="col-xs-9">
							<select class="form-control" name="Articles[type]">
								<option value="1">文章</option>
								<option value="2">视频</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row case-edit-formwidth">
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-3 text-right p-t-5 p-r-0">
							<b>语言：</b>
						</div>
						<div class="col-xs-9">
							<select class="form-control" name="Articles[language]">
								<option value="1">英语</option>
								<option value="2">西班牙语</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row case-edit-formwidth">
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-3 text-right p-t-5 p-r-0">
							<b>标题：</b>
						</div>
						<div class="col-xs-9">
							<?= $form->field($model, "article")->textInput()->label(false); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row case-edit-formwidth">
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-3 text-right p-t-5 p-r-0">
							<b>图片：</b>
						</div>
						<div class="col-xs-9">
							<?= $form->field($model, "img")->fileInput()->label(false); ?>
							<p class="p-t-5 m-b-0"><small class="color-red">图片大小不超过2M，支持jpg.png.gif格式</small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row case-edit-formwidth">
				<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-3 text-right p-t-5 p-r-0">
							<b>内容：</b>
						</div>
						<div class="col-xs-10">
							<?= $form->field($model, "content")->textarea(['id' => 'editor_id'])->label(false); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row case-edit-formwidth">
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-3 text-right p-t-5 p-r-0">
							<b>视频链接：</b>
						</div>
						<div class="col-xs-9">
							<?= $form->field($model, "video")->textInput()->label(false); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row case-edit-formwidth">
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-3 text-right p-t-5 p-r-0">
							<b>点击量：</b>
						</div>
						<div class="col-xs-9">
							<?= $form->field($model, "num")->textInput()->label(false); ?>
						</div>
					</div>
				</div>
			</div>
			<hr />
			<div class="row text-center">
				<?= Html::submitButton("保存", ['class' => 'btn btn-blue btn-lg p-l-20 p-r-20']); ?>
			</div>
		</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>
<script charset="utf-8" src="/kingeditor/kindeditor-all.js"></script>
<script charset="utf-8" src="/kingeditor/lang/zh-CN.js"></script>
<script>
	KindEditor.ready(function(K) {
		window.editor = K.create('#editor_id');
	});
</script>