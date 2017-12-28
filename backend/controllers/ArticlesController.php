<?php
/**
 * Created by PhpStorm.
 * User: niuyafei
 * Date: 2017/12/10
 * Time: 下午10:25
 */
namespace backend\controllers;

use yii;
use yii\web\Controller;
use common\models\Articles;

class ArticlesController extends Controller
{
	private $path = "/var/www/collegenode_20171210/backend/web";
	//添加文章
	public function actionAdd()
	{
		$model = new Articles();
		if($model->load(Yii::$app->request->post())){
			$fileName = $this->uploadFiles($_FILES['Articles']);
			$model->img = $fileName;
			$model->created_at = date("Y-m-d H:i:s");
			if($model->save()){
				Yii::$app->session->setFlash("success", "保存成功");
			}else{
				Yii::$app->session->setFlash("error", "保存失败");
			}
			return $this->redirect(['site/index']);
		}

		return $this->render("add", [
			'model' => $model
		]);
	}

	//删除文章
	public function actionDelete($id)
	{
		if(Articles::findOne($id)->delete()){
			Yii::$app->session->setFlash('success', "删除成功");
		}else{
			Yii::$app->session->setFlash('error', "删除失败");
		}

		return $this->redirect(['site/index']);

	}

	//更新文章
	public function actionUpdate($id)
	{
		$model = Articles::findOne($id);
		if(Yii::$app->request->post()){
			$img = $model->img;
			$model->load(Yii::$app->request->post());
			$model->updated_at = date("Y-m-d H:i:s");
			if($_FILES['Articles']['name']['img']){
				$fileName = $this->uploadFiles($_FILES['Articles']);
				$model->img = $fileName;
			}else{
				$model->img = $img;
			}

			if($model->save()){
				Yii::$app->session->setFlash('success', "更新成功");
			}else{
				Yii::$app->session->setFlash('error', "更新失败");
			}
			return $this->redirect(['site/index']);
		}

		return $this->render("update", [
			'model' => $model
		]);
	}

	//保存上传文件
	public function uploadFiles($file)
	{
		$name = $file['name']['img'];
		$ext = substr($name, strripos($name, "."), strlen($name));
		$fileName = date("YmdHis").rand(1000,999) . $ext;
		move_uploaded_file($file['tmp_name']['img'], $this->path . "/img/uploads/".$fileName);

		return $fileName;
	}
}
