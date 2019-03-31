<?php

namespace backend\controllers;

use Yii;
use backend\models\Docs;
use backend\models\DocsSearch;
//use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\components\BaseController;



$lang = Yii::$app->language;

/**
 * DocsController implements the CRUD actions for Docs model.
 */
class DocsController extends BaseController
{
    /**
     * @inheritdoc
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
     * Lists all Docs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocsSearch();
        if(Yii::$app->user->identity->role_id != '1'){

        $params = Yii::$app->request->queryParams;
        $division = Yii::$app->user->identity->dvision_id;

        $params['DocsSearch']['division_id'] = $division;
        // $params['DocsSearch']['status_id'] = 1;

        $dataProvider = $searchModel->search($params);
        }

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
          return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

      

    /**
     * Displays a single Docs model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Docs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Docs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Docs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

      if ($model->load(Yii::$app->request->post())) {            
            if($model->status_id == '3'){
                $from='infoembassyuz@gmail.com';
                $to=$model->email;
                $subject='consul.mfa.uz javob xati';                
                $body = $model->comment;
                Yii::$app->mailer->compose()
                ->setFrom($from)
                ->setTo($to)
                ->setSubject($subject)
                ->setTextBody('Sizning arizangiz konsul tomonidan qabul qilinib, tekshirish uchun Toshkentga yuborildi. So`rovingiz natijasi xabar qilinadi.')
                ->send();
            }elseif($model->status_id == '2'){
                $from='infoembassyuz@gmail.com';
                $to=$model->email;
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
                $to=$model->email;
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
                $to=$model->email;
                $subject='consul.mfa.uz javob xati';                
                $body = $model->comment;
                Yii::$app->mailer->compose()
                ->setFrom($from)
                ->setTo($to)
                ->setSubject($subject)
                ->setTextBody('Sizning so`ragan hujjatingiz tayyor. Hujjatni olib ketish uchun e-navbat.mfa.uz veb-sahifasi orqali navbat olib, konsul qabuliga kelishingiz mumkin.')
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
     * Deletes an existing Docs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

     public function actionProcess()
    {
        $searchModel = new DocsSearch();

        $params = Yii::$app->request->queryParams;
        $division = Yii::$app->user->identity->dvision_id;

        $params['DocsSearch']['division_id'] = $division;
        $params['DocsSearch']['status_id'] = 3;

        $dataProvider = $searchModel->search($params);

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('process', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

         public function actionRejected()
    {
        $searchModel = new DocsSearch();

        $params = Yii::$app->request->queryParams;
        $division = Yii::$app->user->identity->dvision_id;

        $params['DocsSearch']['division_id'] = $division;
        $params['DocsSearch']['status_id'] = 4;

        $dataProvider = $searchModel->search($params);

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('Rejected', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

     public function actionRegistered()
    {
        $searchModel = new DocsSearch();

        $params = Yii::$app->request->queryParams;
        $division = Yii::$app->user->identity->dvision_id;

        $params['DocsSearch']['division_id'] = $division;
        $params['DocsSearch']['status_id'] = 6;

        $dataProvider = $searchModel->search($params);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('registered', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Finds the Docs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Docs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Docs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
