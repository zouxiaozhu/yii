<?php
namespace app\controllers;
use yii\base\Exception;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller{
    
    public function actionIndex(){
        
        $query = Country::find();
        $count = $query->count();
        $page = new Pagination([
            'defaultPageSize'=>8,
            'totalCount'=>$count
        ]);
        
        $country_info = $query->orderBy('name')->offset($page->offset)->limit($page->limit)->all();
        return $this->render('index',[
            'countries'=>$country_info,
            'pagination'=>$page
        ]);
    }
    
    public function actionUpdate(){
        $countries = Country::find()->orderBy('population asc')->asArray()->all();
        $country = Country::findOne('US');
        $country->name = 'USA';
      
        var_export(($country));
    }
}