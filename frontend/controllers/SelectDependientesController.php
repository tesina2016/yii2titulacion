<?php

namespace frontend\controllers;
use frontend\models\Student;
use frontend\models\Plan;
use frontend\models\Option;


class SelectDependientesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionPlan($id){
	        echo HtmlHelpers::dropDownList
	        (
	        	Student::className(), 
	        	'idestudiante', $id, 'nombreestudiante'
	        );
	}

}

//public static string dropDownList ( $name, $selection = null, $items = [], $options = [] )
