<?php

namespace app\controllers;

use app\models\DivisionForm;
use app\models\InicioForm;
use app\models\RestaForm;
use app\models\SumaForm;
use app\models\MultiplicacionForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\Controller;

class CalcuController extends Controller
{
    public function actionIndex()
    {
        $mensaje = 'Yes, it is';
        $h2 = 'UNIVO';
        $dateTime = new \DateTime();

        return $this->render(
            'index',
            [
                'mensaje' => $mensaje,
                'h2' => $h2,
                'dateTime' => $dateTime,
            ]
        );
    }

   /* public function actionResta()
    {
        $valor_a = 60;
        $valor_b = 8;
        $resultado = $valor_a - $valor_b;

        return $this->render('resta', ['resultado' => $resultado]);
    }
*/
    public function actionSuma()
    {
        $model = new SumaForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $opcion=$model->opcion;

            if($opcion=="+"){
                $resultado = $model->numero1 + $model->numero2;
                $respuesta = ("El resultado de la suma es: " . $resultado);
            } else  if($opcion=="-"){
                $resultado = $model->numero1 - $model->numero2;
                $respuesta = ("El resultado de la resta es: " . $resultado);
            } else   if($opcion=="*"){
                $resultado = $model->numero1 * $model->numero2;
                $respuesta = ("El resultado de la multiplicacion es: " . $resultado);
            } else   if($opcion=="/"){
                $resultado = $model->numero1 / $model->numero2;
                $respuesta = ("El resultado de la division es: " . $resultado);
            }
            
            return $this->render('suma', ['model' => $model, 'respuesta' => $respuesta]);
            
        }

        return $this->render('suma', ['model' => $model]);
        
    }
/*
    public function actionResta()
    {
        $modelo = new RestaForm();

        if ($modelo->load(Yii::$app->request->post()) && $modelo->validate()) {
            $opcion=$modelo->opcion;

            if($opcion=="-"){
                $resultado = $modelo->num1 - $modelo->num2;
                $respuesta = ("El resultado de la resta es: " . $resultado);
            }
            

            return $this->render('resta', ['model' => $modelo, 'respuesta' => $respuesta]);
        }

        return $this->render('resta', ['model' => $modelo]);
    }

    public function actionMultiplicacion()
    {
        $modelo = new MultiplicacionForm();

        if ($modelo->load(Yii::$app->request->post()) && $modelo->validate()) {
            $opcion=$modelo->opcion;

            if($opcion=="*"){
                $resultado = $modelo->nume1 * $modelo->nume2;
                $respuesta = ("El resultado de la multiplicacion es: " . $resultado);
            }
            

            return $this->render('multiplicacion', ['model' => $modelo, 'respuesta' => $respuesta]);
        }

        return $this->render('multiplicacion', ['model' => $modelo]);
    }

    public function actionDivision()
    {
        $modelo = new DivisionForm();

        if ($modelo->load(Yii::$app->request->post()) && $modelo->validate()) {
            $opcion=$modelo->opcion;

            if($opcion=="/"){
                $resultado = $modelo->number1 / $modelo->number2;
                $respuesta = ("El resultado de la division es: " . $resultado);
            }
            

            return $this->render('division', ['model' => $modelo, 'respuesta' => $respuesta]);
        }

        return $this->render('division', ['model' => $modelo]);
    }
*/}