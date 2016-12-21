<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "seamstress".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $specialization
 * @property string $telephone
 * @property integer $status
 *
 * @property Order $order
 * @property Customer[] $ids
 * @property Order $id0
 */
class seamstress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seamstress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'specialization', 'telephone', 'status'], 'required'],
            [['specialization', 'telephone'], 'string'],
            [['status'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 200],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'specialization' => 'Специализация',
            'telephone' => 'Телефон',
            'status' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIds()
    {
        return $this->hasMany(Customer::className(), ['id' => 'id'])->viaTable('order', ['id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Order::className(), ['id' => 'id']);
    }
}
