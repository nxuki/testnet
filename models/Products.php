<?php
namespace app\models;
use Yii;
use yii\base\Model;
class Products extends \yii\db\ActiveRecord{
       /**
    * @inheritdoc
    */
   public static function tableName()
   {
       return 'products';
   }
   /**
    * @inheritdoc
    */
   
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['BridgeFinance','FundPlacement'], 'required'],
            // email has to be a valid email address
           
        ];
    }
}
