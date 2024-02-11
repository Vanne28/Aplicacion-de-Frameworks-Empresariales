<?php

namespace app\models;

use Yii;
use yii\base\Model;


class MultiplicacionForm extends Model
{
    public $nume1;
    public $nume2;
    public $opcion;

  
    public function rules()
    {
        return [
            // numero1 and numero2 are both required
            [['nume1', 'nume2', 'opcion'], 'required'],
            [['nume1', 'nume2'], 'number']
            
        ];
    }
}