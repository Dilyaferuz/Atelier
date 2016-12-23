<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property integer $id_customer
 * @property integer $id_seamstres
 * @property string $date_try
 * @property string $description
 * @property string $date_orders
 * @property string $cost
 * @property integer $status
 *
 * @property Customer $idCustomer
 * @property Seamstress $idSeamstres
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
            [['id_customer', 'id_seamstres', 'description'], 'required', 'message' => 'Поле обязательно для заполнения'],
            [['id_customer', 'id_seamstres', 'status'], 'integer','message' => 'Поля должна быть числом'],
            [['date_try', 'date_orders'], 'safe'],
            [['description'], 'string'],
            [['cost'], 'integer', 'message' => 'Цена должна быть числом'],
            [['id_customer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['id_customer' => 'id']],
            [['id_seamstres'], 'exist', 'skipOnError' => true, 'targetClass' => Seamstress::className(), 'targetAttribute' => ['id_seamstres' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '#',
            'id_customer' => 'Заказчик',
            'id_seamstres' => 'Швея',
            'date_try' => 'Дата примерки',
            'description' => 'Описание',
            'date_orders' => 'Дата заказа',
            'cost' => 'Цена',
            'status' => 'Выполнено'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'id_customer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSeamstres()
    {
        return $this->hasOne(Seamstress::className(), ['id' => 'id_seamstres']);
    }
}
