<?php

namespace backend\controllers;

use Yii;
use backend\models\Pmj;
use backend\models\PmjSearch;
//use yii\web\Controller;
use backend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Employment;
use backend\models\Relative;
use backend\models\Teenager;
use yii\filters\AccessControl;


$lang = Yii::$app->language;


/**
 * PmjController implements the CRUD actions for Pmj model.
 */
class PmjController extends BaseController
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
     * Lists all Pmj models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PmjSearch();

        if(Yii::$app->user->identity->role_id != '1'){

        $params = Yii::$app->request->queryParams;
        $division = Yii::$app->user->identity->dvision_id;

        $params['PmjSearch']['division_id'] = $division;
        $params['PmjSearch']['status_id'] = '0';

        $dataProvider = $searchModel->search($params);
        }

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pmj model.
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
     * Creates a new Pmj model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()    
    {
        $model = new Pmj();
        $model->setRandomString();       

        if ($model->load(Yii::$app->request->post())) {          
            
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file1 = UploadedFile::getInstance($model,'file1');
            $model->file2 = UploadedFile::getInstance($model,'file2');
            $model->file3 = UploadedFile::getInstance($model,'file3');

            if ($model->file) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->file->saveAs( $upload_path);
            $model->photo = $imageName;
            }

            if ($model->file1) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file1->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->file1->saveAs( $upload_path);
            $model->photo1 = $imageName;
            }

            if ($model->file2) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file2->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->file2->saveAs( $upload_path);
            $model->photo2 = $imageName;
            }

            if ($model->file3) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file3->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->file3->saveAs( $upload_path);
            $model->photo3 = $imageName;
            }             

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
        return $this->render('create', [
            'model' => $model,            
            ]);
        }
    }

    /**
     * Updates an existing Pmj model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
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
     * Deletes an existing Pmj model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

     public function actionProcess($status)
    {
        $searchModel = new PmjSearch();
        if(Yii::$app->user->identity->role_id != '1'){

            $params = Yii::$app->request->queryParams;
            $division = Yii::$app->user->identity->dvision_id;

            $params['PmjSearch']['division_id'] = $division;           
            $params['PmjSearch']['status'] = $status;           

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
        $searchModel = new PmjSearch();

        if(Yii::$app->user->identity->role_id != '1'){
            $params = Yii::$app->request->queryParams;
            $division = Yii::$app->user->identity->dvision_id;
            $params['PmjSearch']['division_id'] = $division;
            $params['PmjSearch']['status_id'] = 6;
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
        $searchModel = new PmjSearch();

        if(Yii::$app->user->identity->role_id != '1'){
            $params = Yii::$app->request->queryParams;
            $division = Yii::$app->user->identity->dvision_id;
            $params['PmjSearch']['division_id'] = $division;
            $params['PmjSearch']['status_id'] = 4;
            $dataProvider = $searchModel->search($params);
        }
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('deny', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Finds the Pmj model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pmj the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pmj::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
