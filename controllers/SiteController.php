<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Tree;
use app\models\Giphy;

class SiteController extends Controller
{
      
    public function actionIndex()
    {
        $tree = new Tree();
        
        $tree = $tree->getTree();
        
        return $this->render('index', [
            'tree' => $tree,
        ]);
    }

    public function actionReCaptcha()
    {
        $model = new Giphy();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->renderAjax('image', [
                'url_image' => $model->getRandomGif()
            ]);
        }
        return $this->renderAjax('re-captcha', [
            'model' => $model
        ]);
    }
}
