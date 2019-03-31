<?php

namespace backend\controllers;


use Yii;
use backend\models\Citizenship;
use backend\models\CitizenshipSearch;
//use yii\web\Controller;
use backend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\InrelativePmj;
use backend\models\OutrelativePmj;
use backend\models\Children;
use yii\filters\AccessControl;



/**
 * CitizenshipController implements the CRUD actions for Citizenship model.
 */
class CitizenshipController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    

    /**
     * Lists all Citizenship models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CitizenshipSearch();
        if(Yii::$app->user->identity->role_id != '1'){

        $params = Yii::$app->request->queryParams;
        $division = Yii::$app->user->identity->dvision_id;

        $params['CitizenshipSearch']['division_id'] = $division;
        $params['CitizenshipSearch']['status_id'] = 0;

        $dataProvider = $searchModel->search($params);
        }

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Citizenship model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Citizenship model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Citizenship();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Citizenship model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
 if ($model->load(Yii::$app->request->post())) {            
            if($model->status_id == '2'){
                $from='infoembassyuz@gmail.com';
                $to=$model->mail;
                $subject='consul.mfa.uz javob xati';                
                $body = $model->comment;
                Yii::$app->mailer->compose()
                ->setFrom($from)
                ->setTo($to)
                ->setSubject($subject)
                ->setTextBody('Sizning arizangiz konsul tamonidan tekshirilib, qabul qilindi. Xujjatlarni topshirish uchun e-navbat.mfa.uz veb-sahifasi orqali navbat olib, konsul qabuliga borishingiz mumkin.')
                ->send();
            }elseif($model->status_id == '1'){
                $from='infoembassyuz@gmail.com';
                $to=$model->mail;
                $subject='consul.mfa.uz javob xati';                
                $body = $model->comment;
                Yii::$app->mailer->compose()
                ->setFrom($from)
                ->setTo($to)
                ->setSubject($subject)
                ->setTextBody($body)
                ->send();
            }elseif($model->status_id == '4'){
                $from='infoembassyuz@gmail.com';
                $to=$model->mail;
                $subject='consul.mfa.uz javob xati';                
                $body = $model->comment;
                Yii::$app->mailer->compose()
                ->setFrom($from)
                ->setTo($to)
                ->setSubject($subject)
                ->setTextBody('Sizning arizangizga rad javobi berildi.')
                ->send();
            }elseif($model->status_id == '5'){
                $from='infoembassyuz@gmail.com';
                $to=$model->mail;
                $subject='consul.mfa.uz javob xati';                
                $body = $model->comment;
                Yii::$app->mailer->compose()
                ->setFrom($from)
                ->setTo($to)
                ->setSubject($subject)
                ->setTextBody('Sizga doimiy ro`yhatga turish uchun ruhsat berildi. Pasportingizga muhr bostirish uchun e-navbat.mfa.uz veb-sahifasi orqali navbat olib, konsul qabuliga borishingiz mumkin.')
                ->send();
            }
                $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                
            ]);
        }
    }

    /**
     * Deletes an existing Citizenship model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

      public function actionProcess($statuss)
    {
        $searchModel = new CitizenshipSearch();
        if(Yii::$app->user->identity->role_id != '1'){

            $params = Yii::$app->request->queryParams;
            $division = Yii::$app->user->identity->dvision_id;

            $params['CitizenshipSearch']['division_id'] = $division;           
            $params['CitizenshipSearch']['statuss'] = $statuss;           

            $dataProvider = $searchModel->search($params);
        }
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('process', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    

     public function actionRegistered()
    {
        $searchModel = new CitizenshipSearch();

        if(Yii::$app->user->identity->role_id != '1'){
            $params = Yii::$app->request->queryParams;
            $division = Yii::$app->user->identity->dvision_id;
            $params['CitizenshipSearch']['division_id'] = $division;
            $params['CitizenshipSearch']['status_id'] = 6;
            $dataProvider = $searchModel->search($params);
        }
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('registered', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

     public function actionDeny()
    {
        $searchModel = new CitizenshipSearch();

        if(Yii::$app->user->identity->role_id != '1'){
            $params = Yii::$app->request->queryParams;
            $division = Yii::$app->user->identity->dvision_id;
            $params['CitizenshipSearch']['division_id'] = $division;
            $params['CitizenshipSearch']['status_id'] = 4;
            $dataProvider = $searchModel->search($params);
        }
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('deny', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Finds the Citizenship model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Citizenship the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Citizenship::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
