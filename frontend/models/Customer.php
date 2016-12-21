<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Customer".
 *
 * @property integer $id
 * @property string $last_name
 * @property string $telephone
 * @property string $note
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_name', 'telephone', 'note'], 'required'],
            [['telephone'], 'string'],
            [['last_name', 'note'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'telephone' => 'Telephone',
            'note' => 'Note',
        ];
    }
}
