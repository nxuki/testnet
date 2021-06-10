<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Contact;
class SiteController extends Controller
{
    public function actionForms()
    {
        $model = new Contact();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->render('forms', [
                'model' => $model,
            ]);
        } else {
            return $this->render('forms', [
                'model' => $model,
            ]);
        }
    }
}