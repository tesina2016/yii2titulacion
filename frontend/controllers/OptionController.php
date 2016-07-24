<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Option;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OptionController implements the CRUD actions for Option model.
 */
class OptionController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    /**
     * Lists all Option models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Option::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionLists($id){

        $countPlans = Option::find()
        ->where(['idplan'=>$id])
        ->count();

        $plans = Option::find()
        ->where(['idplan'=>$id])
        ->all();
        
        if($countPlans > 0 ){
            echo "<option> Seleccione un Plan...</option>";
            foreach ($plans as $plan) {
                echo "<option value='".$plan->idopcion."'>".$plan->nombreopcion."</option>";
            }
        } else {    
            echo "<option> No hay Planes, verifique...</option>";
        }
    }


    /**
     * Displays a single Option model.
     * @param integer $idplan
     * @param integer $idopcion
     * @return mixed
     */
    public function actionView($idplan, $idopcion)
    {
        return $this->render('view', [
            'model' => $this->findModel($idplan, $idopcion),
        ]);
    }

    /**
     * Creates a new Option model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Option();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idplan' => $model->idplan, 'idopcion' => $model->idopcion]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Option model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idplan
     * @param integer $idopcion
     * @return mixed
     */
    public function actionUpdate($idplan, $idopcion)
    {
        $model = $this->findModel($idplan, $idopcion);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idplan' => $model->idplan, 'idopcion' => $model->idopcion]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Option model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idplan
     * @param integer $idopcion
     * @return mixed
     */
    public function actionDelete($idplan, $idopcion)
    {
        $this->findModel($idplan, $idopcion)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Option model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idplan
     * @param integer $idopcion
     * @return Option the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idplan, $idopcion)
    {
        if (($model = Option::findOne(['idplan' => $idplan, 'idopcion' => $idopcion])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
