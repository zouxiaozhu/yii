<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Post;


class PostController extends Controller
{
    public function actionView($a)
    {
        if (!$a) {
            return json_encode(['errorCode' => 300, 'errorMsg' => '缺少参数或者参数不合法']);
        }
        $model = Post::findOne($a);
        if ($model) {
            return $this->render('view', ['models' => $model]);
        } else {
            return $this->redirect('/');
        }
        
    }
    
    public function actionIndex()
    {
        $model = Post::find()->all();
        $this->render('index', ['models' => $model]);
    }
    
    public function actionCreate()
    {
        $model = new Post();
        
        $bool = $model->validate();
//        var_export($bool);die;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $post = Post::find();
            return $this->redirect('post/index');
        } else {
            //echo 222;die;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
}