<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gcc".
 *
 * @property integer $id
 * @property string  $addr
 * @property string  $name
 */
class Gcc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gcc';
    }
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['addr', 'name'], 'required','string', 'max' => 11],
            ['name', 'email']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'   => Yii::t('app', 'ID'),
            'addr' => 'Your Addr',
            'name' => Yii::t('app', 'Your Name')
        ];
    }
}
