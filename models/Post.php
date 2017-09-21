<?php
namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    //  public $name, $addr;
    const SCENARIOS_CREATE = 'create';
    const SCENARIOS_UPDATE = 'update';
    
    public static function tableName()
    {
        return 'post';
    }
    
    public function scenarios()
    {
        return [
            self::SCENARIOS_CREATE => ['name', 'population', 'code'],
            self::SCENARIOS_UPDATE => ['name', 'population']
        ];
        
    }
    
    public function rules()
    {
        return [
//            [['name', 'addr'], 'string', 'max' => 11],
            [['name', 'addr'], 'string', 'max' => 11]
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'   => \Yii::t('app', 'ID'),
            'name' => \Yii::t('app', 'Name Is Required'),
            'addr' => \Yii::t('app', 'Addr Is Required'),
        ];
    }
}