<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ticket".
 *
 * @property int $id
 * @property int $service_id
 * @property int $user_id
 * @property int $status_id
 * @property string $date_create
 * @property string $date_update
 * @property int $active
 */
class Ticket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ticket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'user_id', 'status_id', 'active'], 'required'],
            [['service_id', 'user_id', 'status_id', 'active'], 'integer'],
            [['date_create', 'date_update'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'service_id' => 'Service ID',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'active' => 'Active',
        ];
    }
}
