<?php

namespace app\models;

use Yii;
use yii\base\Model;


class RestaForm extends Model
{
    public $num1;
    public $num2;
    public $opcion;

  
    public function rules()
    {
        return [
            // numero1 and numero2 are both required
            [['num1', 'num2', 'opcion'], 'required'],
            [['num1', 'num2'], 'number']
            
        ];
    }
}