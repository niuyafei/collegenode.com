<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $article
 * @property string $content
 * @property string $img
 * @property string $video
 * @property string $type
 * @property integer $status
 * @property integer $sort
 * @property integer $num
 * @property string $created_at
 * @property string $updated_at
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article', 'img', 'created_at'], 'required', 'message' => '{attribute}不能为空'],
            [['content', 'type', 'language'], 'string'],
            [['status', 'sort', 'num'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['article', 'img', 'video'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article' => '标题',
            'content' => '内容',
            'img' => 'Image',
            'video' => 'Video',
            'type' => '类型',
            'status' => '状态',
            'sort' => '排序',
            'num' => '点击数',
            'language' => '语言',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
