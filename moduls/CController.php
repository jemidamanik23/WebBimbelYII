<?php

namespace app\moduls; 

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * KelasController implements the CRUD actions for kelas model.
 */
class CController extends Controller
{
    public $cActions = [];
    public $cRole = [];
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function ($rule, $action) {
                            if(!in_array($this->action->id,$this->cActions)){
                                return true;
                            }
                            if(Yii::$app->user->isGuest){
                                return $this->redirect(['site/login']);
                            }
                            return in_array(Yii::$app->user->identity->role,$this->cRole);
                        },
                        'denyCallback' => function ($rule, $action) {
                            if(Yii::$app->user->isGuest){
                                return $this->redirect(['site/login']);
                            }
                            throw new \Exception('You are not allowed to access this page');
                        }
                    ],
                ],
            ],
        ];
    }
}
