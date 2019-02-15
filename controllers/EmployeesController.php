<?php

namespace app\controllers;

use yii\rest\ActiveController;

class EmployeesController extends ActiveController
{
    public $modelClass = "\app\models\Employee";

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'data'
    ];

}
