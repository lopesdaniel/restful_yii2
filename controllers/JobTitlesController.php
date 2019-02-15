<?php

namespace app\controllers;

use app\models\JobTitle;
use yii\web\Response;

class JobTitlesController extends \yii\web\Controller
{
    public function actionListar()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        $jobsTitles = JobTitle::find()->all();

        return $jobsTitles;
    }

}
