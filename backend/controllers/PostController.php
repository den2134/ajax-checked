<?php
namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;
use app\models\Text;

class PostController extends Controller{

    public function actionCreate() {
        if(Yii::$app->request->isPost){
            $model = new Text();

            $post = Yii::$app->request->post()['text'];
            $model->info = $post;
            $model->save();
            $this->render('create');
        } else
        return $this->render('create');
    }

    public function actionPosts(){
        $query = (new Query())
            ->select(['id','info','isCheck'])
            ->from('text')
            ->all();

        /*echo '<pre>';
        print_r($query);
        die();*/
        return $this->render('posts', ['arr' => $query]);
    }

    public function actionSave(){
        $success = false;

        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

            $model = Text::findOne($data['val']);
            $model->isCheck = $data['check'] === 'true'? true: false;
            //print_r($model['isCheck']);
            //die();
            if($model->save()) $success = true;

            return $success;
        }
        return $success;
    }
}