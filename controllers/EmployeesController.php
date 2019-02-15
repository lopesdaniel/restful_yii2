<?php

namespace app\controllers;

use app\models\EmployeeProviders;
use yii\rest\ActiveController;

class EmployeesController extends ActiveController
{
    public $modelClass = "\app\models\Employee";

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'data'
    ];

    public function actions()
    {
        $actions = parent::actions();

        $actions['index']['prepareDataProvider'] = [$this, 'carregaDataProvider'];

        return $actions;
    }

    public function carregaDataProvider()
    {
        $params = \Yii::$app->request->queryParams;

        $provider = new EmployeeProviders();

        return $provider->search($params);
    }

}
