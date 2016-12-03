<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 @property integer $id_customer
 @property integer $id_seamstres
 * @property date $date_orders
 * @property text $description
 * @property timestamp $date_try
 * @property decimal $cost
 * @property integer $status
 *
 * @property Attendance[] $attendances
 * @property Customer $customer
    */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_orders', 'description', 'date_try'], 'required', 'message'=>'Поле должно быть обязательно заполнено'],
            [['id_customer', 'status'], 'integer'],
			[['id_customer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['id_customer' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_orders' => 'Дата заказа',
            'date_try' => 'Дата примерки',
            'id_customer' => 'Заказчик',
            'cost' => 'Стоимость',
			'id_seamstres' => 'Швея',
            'status' => 'Статус активности',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttendances()
    {
        return $this->hasMany(Attendance::className(), ['order_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCourse()
    {
        return $this->hasOne(Course::className(), ['id' => 'id_customer']);
    }
}
