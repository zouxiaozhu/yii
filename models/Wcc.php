<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wcc".
 *
 * @property integer $id
 * @property string $name
 * @property string $addr
 */
class Wcc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'addr'], 'string', 'max' => 11],
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
            'addr' => 'Addr',
        ];
    }
}
