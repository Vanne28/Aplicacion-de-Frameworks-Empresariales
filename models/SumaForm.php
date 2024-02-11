<?php

namespace app\models;

use Yii;
use yii\base\Model;


class SumaForm extends Model
{
    public $numero1;
    public $numero2;
    public $opcion;

  
    public function rules()
    {
        return [
            // numero1 and numero2 are both required
            [['numero1', 'numero2', 'opcion'], 'required'],
            [['numero1', 'numero2'], 'number']
            
        ];
    }
}