<?php

namespace app\controllers;


use app\models\Note;
use app\models\User;
use yii\web\Controller;


class TestController extends Controller
{


    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionIndex()
    {
/**
        if (!\Yii:: $app->user->can('admin')) {
            throw now ForbiddenHttpException('');
    }

*/
/**
       \Yii::$app->db->createCommand()->insert('user', ['username' => 'roma', 'name' => 'roman', 'surname' => 'petrov','password_hash' => '1234',  'access_token' => '4466', 'auth_key'  => '2466', 'created_at' => '1526788317',   'updated_at' => '1526788317', ])->execute();
       \Yii::$app->db->createCommand()->insert('user', ['username' => 'supervasya', 'name' => 'vasya', 'surname' => 'pupkin','password_hash' => '767668',  'access_token' => '4466', 'auth_key'  => '2466', 'created_at' => '1526788317',   'updated_at' => '1526788317', ])->execute();
        \Yii::$app->db->createCommand()-> addForeignKey('fx_note_user', 'note', ['creator_id'], 'user', ['id'])->execute();
        \Yii::$app->db->createCommand()-> addForeignKey('fx_access_note', 'access', ['note_id'], 'note', ['id'])->execute();
       \Yii::$app->db->createCommand()-> addForeignKey('fx_access_user', 'access', ['user_id'], 'user', ['id'])->execute();
*/
/**
   $note = new Note();
   $note ->text = 'текст1';
   $note ->link('creator', $user);
   */

/**
        $user = new User();
        $user->username = 'roman22';
        $user->name = 'roma';
        $user->surname = 'petrov';
        $user->password_hash = '23234';
        $user->access_token = '234';
        $user->auth_key = '123';
        $user->created_at = '1526788317';
        $user->updated_at = '1526788317';
        $user->save();



$note = new Note();
$note ->text = 'текст юзера1';
$note ->creator_id = 1;
$note ->save();

*/








        return $this->render('index',   [



'model' => $model
    ]);
    }
}
