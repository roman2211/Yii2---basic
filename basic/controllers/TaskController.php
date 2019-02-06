<?php


namespace app\controllers;


use app\models\Task;
use yii\web\Controller;

class TaskController extends Controller
{

  public function actionIndex() {
    echo 'index'; exit;
  }

  public function actionTest(){
    $task = new Task();
    $task->setAttributes([
    'taskName'=>'YII2',
    'taskDescription'=>'освоить',
    'deadLine'=> strtotime('31-03-2019 20:00:00'),
    'responsible'=>['Иванов'],
    'currentTime'=>strtotime(date('d-m-Y H:i:s')),
    'startTime'=> strtotime('02-02-2019 10:00:00'),
    'status' =>'выполняется',
    'manager' => ['Игорь Полуянов']
    ], false);

    var_dump($task);
    var_dump($task->validate()); var_dump($task->getErrors()); exit;

  }
}