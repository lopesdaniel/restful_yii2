<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "job_titles".
 *
 * @property int $id
 * @property string $job_name
 * @property string $slogan
 */
class JobTitle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'job_titles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_name', 'slogan'], 'required'],
            [['job_name', 'slogan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_name' => 'Job Name',
            'slogan' => 'Slogan',
        ];
    }
}
