<?php

namespace app\models;

use Yii;
use yii\base\Model;


class DivisionForm extends Model
{
    public $number1;
    public $number2;
    public $opcion;

  
    public function rules()
    {
        return [
            // numero1 and numero2 are both required
            [['number1', 'number2', 'opcion'], 'required'],
            [['number1', 'number2'], 'number']
            
        ];
    }
}