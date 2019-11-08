<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Dalolatnoma;
use app\models\DalolatnomaSearch;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DalolatnomaController implements the CRUD actions for Dalolatnoma model.
 */
class DalolatnomaController extends Controller
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
     * Lists all Dalolatnoma models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DalolatnomaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider = new ActiveDataProvider([
            'query' => Dalolatnoma::find(),
            'pagination' => array('pageSize' => 20),
            'sort'=>[
                'defaultOrder'=>[
                    'id'=>SORT_DESC,
                ],
            ],
        ]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dalolatnoma model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Dalolatnoma model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Dalolatnoma();

        if ($model->load(Yii::$app->request->post()) ) {

            $model->vaqt=date('Y-m-d H:i:s');
            $model->summa=0;
            if($model->narxi1){
                $model->summa += $model->narxi1;
            }if($model->narxi2){
                $model->summa += $model->narxi2;
            }if($model->narxi3){
                $model->summa += $model->narxi3;
            }if($model->narxi4){
                $model->summa += $model->narxi4;
            }if($model->narxi5){
                $model->summa += $model->narxi5;
            }
            if($model->save())
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dalolatnoma model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id,$ruxsat=null)
    {
        $model = $this->findModel($id);
        if($ruxsat){
            if($ruxsat==10){
                $model->status='Ruxsat berilgan';
                $model->save();
            }
            else{
                $model->status='Ruxsat berilmagan';
                $model->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dalolatnoma model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dalolatnoma model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dalolatnoma the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dalolatnoma::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
