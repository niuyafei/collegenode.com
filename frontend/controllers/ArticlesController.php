<?php
/**
 * Created by PhpStorm.
 * User: niuyafei
 * Date: 2017/12/11
 * Time: 上午1:04
 */
namespace frontend\controllers;

use yii;
use common\models\Articles;
use yii\web\Controller;
use yii\data\Pagination;

class ArticlesController extends Controller
{
	//点击量自增
	public function actionIncrement($id)
	{
		if($model = Articles::findOne($id)){
			$model->num += 1;
			$model->save();
			return json_encode([
				'code' => 1,
				'num' => $model->num,
			]);
		}
		return json_encode([
			'code' => '20',
			'message' => '参数错误'
		]);
	}

	public function actionIndex()
	{
		$language = Yii::$app->request->get("language", "EN");
		if($language == "EN"){
			$language = 1;
		}else{
			$language = 2;
		}
		$query = Articles::find()->where(['language' => $language]);
		$pages = new Pagination([
			'totalCount' => $query->count(),
			'pageSize' => 9
		]);
		$data = $query->offset($pages->offset)->limit($pages->limit)->orderBy("sort ASC")->asArray()->all();

		return $this->renderPartial("index_{$language}", [
			'pages' => $pages,
			'data' => $data
		]);

	}

	public function actionView($id, $language)
	{
		if($language == "EN"){
			$language = 1;
		}else{
			$language = 2;
		}
		if($data = Articles::findOne($id)){
			$data->num += 1;
			$data->save();
			return $this->renderPartial("view_{$language}", [
				'data' => $data
			]);
		}

		Yii::$app->session->setFlash('error', "参数错误");
		return $this->redirect(['site/index?language=' . $language == 1 ? "EN" : "SPANISH"]);
	}
}