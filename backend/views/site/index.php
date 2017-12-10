<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;
use yii\helpers\Html;

$this->title = 'My Application';
?>
<div class="col-xs-10">
    <h4 class="color-blue">名校动态 <small class="pull-right p-t-5 p-r-15"><a href="/articles/add">+ 增加</a></small></h4>
    <hr class="m-t-5" />
    <div class="p-20 p-t-0">
        <table class="table text-center admin-cont-table-col">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">标题</th>
                    <th class="text-center">类型</th>
                    <th class="text-center">排序</th>
                    <th class="text-center">点击数</th>
                    <th class="text-center">语言</th>
                    <th class="text-center">创建时间</th>
                    <th class="text-center">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $key => $value): ?>
                    <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= mb_substr($value['article'], 0, 10, "utf-8") . (mb_strlen($value['article'], "utf-8") > 10 ? "..." : ""); ?></td>
                        <td><?= $value['type'] == 1 ? "文章" : "视频"; ?></td>
                        <td><?= $value['sort'] ?></td>
                        <td><?= $value['num']; ?></td>
                        <td><?= $value['language'] == 1 ? "英语" : "西班牙语"; ?></td>
                        <td><?= $value['created_at'] ?></td>
                        <td>
                            <?= Html::beginForm(['/articles/delete?id=' . $value['id']], "post"); ?>
                            <a href="/articles/update?id=<?= $value['id']; ?>">编辑</a>
                            <span class="p-l-5 p-r-5 color-lightgray"> | </span>
                                <?= Html::submitButton("删除", ['class' => 'color-red btn btn-link']); ?>
<!--                            <a href="/articles/delete?id=--><?////= $value['id']; ?><!--" class="color-red">删除</a>-->
                            <?= Html::endForm(); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <hr class="m-0" />
        <nav class="text-center">
            <?= LinkPager::widget(['pagination' => $pages]); ?>
        </nav>
    </div>
</div>
