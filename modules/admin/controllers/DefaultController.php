<?php

namespace app\modules\admin\controllers;

use app\models\Dalolatnoma;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login','error'],
                        'allow' => true,

                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionSearch($search){
        $model=Dalolatnoma::find()->where(['like','familiya','%'.$search.'%',false])->orWhere(['like','ism','%'.$search.'%',false])
            ->orWhere(['like','sharif','%'.$search.'%',false])->orWhere(['like','id','%'.$search.'%',false])
            ->orWhere(['like','qaysi_tartib','%'.$search.'%',false])->orWhere(['like','fuqoroligi','%'.$search.'%',false])->all();
        return $this->render('search',[
            'model'=>$model,
        ]);
    }
}
