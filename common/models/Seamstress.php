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
 * @property integer $experience
 * @property string $scedule_of_work
 *
 * @property Order[] $orders
 */
class Seamstress extends \yii\db\ActiveRecord
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
            [['first_name', 'last_name', 'specialization', 'telephone', 'status', 'experience', 'scedule_of_work'], 'required', 'message' => 'Поле обязательно для заполнения'],
            [['specialization', 'telephone'], 'string'],
            [['status', 'experience'], 'integer'],
            [['first_name', 'last_name', 'scedule_of_work'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'specialization' => 'Специализация',
            'telephone' => 'Телефон',
            'status' => 'Работает',
            'experience' => 'Опыт работы',
            'scedule_of_work' => 'График работы',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_seamstres' => 'id']);
    }
}
