<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "colors".
 *
 * @property string $id
 * @property string $name
 * @property string $hexa
 */
class Colors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'colors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['hexa'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'hexa' => 'Hexa',
        ];
    }
}
