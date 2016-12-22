<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $last_name
 * @property string $first_name
 * @property string $patronymic
 * @property string $telephone
 * @property string $note
 *
 * @property Order[] $orders
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'patronymic', 'telephone', ], 'required', 'message' => 'Поле обязательно для заполнения'],
            [['telephone'], 'string','max' => 20, 'tooLong' => 'Указано слишком длинное значение'],
            [['last_name', 'first_name', 'patronymic', 'note'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'last_name' => 'Фамилия',
            'first_name' => 'Имя',
            'patronymic' => 'Отчество',
            'telephone' => 'Телефон',
            'note' => 'Заметка',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_customer' => 'id']);
    }
}
