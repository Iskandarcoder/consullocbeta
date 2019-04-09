<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Loss;
use frontend\models\LossSearch;
//use yii\web\Controller;
use frontend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\Model;
use common\models\CaptchaCode;
use backend\models\Labor;
use backend\models\Family;



/**
 * LossController implements the CRUD actions for Loss model.
 */
class LossController extends BaseController
{
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
        ];
    }

    /**
     * Lists all Loss models.
     * @return mixed
     */

    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionBarcode($id)
    {
        return $this->render('barcode', [
            'guide' => $guide,
        ]);
    }

    public function actionIndex()
    {
        $searchModel = new LossSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Loss model.
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

    public function actionPdf($id)
    {
        $model = $this->findModel($id);

        // get your HTML raw content without any layouts or scripts
        if(Yii::$app->language == 'uz'){
            $content = $this->renderPartial('_uzpdf', [
                'model' => $model,
            ]);
        }else{
            $content = $this->renderPartial('_pdf', [
                'model' => $model,
            ]);
        }

        $pdf = Yii::$app->pdf;
        $pdf->content = $content;

        // return the pdf output as per the destination setting
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;

        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/pdf');
        return $pdf->render();
    }

    public function actionExportPdf($id)
    {
        $model = $this->findModel($id);

        if(Yii::$app->language == 'uz'){
            $content = $this->renderPartial('_uzpdf', [
            'model' => $model,
        ]);         
        }else{
            $content = $this->renderPartial('_pdf', [
            'model' => $model,
        ]); 
        }

        

        $pdf = Yii::$app->pdf;
        $pdf->content = $content;

        // return the pdf output as per the destination setting
        Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;

        // $pdf->destination = \kartik\mpdf\Pdf::DEST_DOWNLOAD;

        $name = 'loss.pdf';
        $path = Yii::getAlias('@frontend/web/pdf/').$name;

        $pdf->output($content, $path, \kartik\mpdf\Pdf::DEST_FILE);

        return $this->redirect(['pdf', 'id' => $id]);
    }

    /**
     * Creates a new Loss model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Loss();

        $model->setRandomString();
        $modelFamily = [new Family];
        $modelLabor = [new Labor];

        if ($model->load(Yii::$app->request->post())) {

            $modelFamily = Model::createMultiple(Family::classname());
            Model::loadMultiple($modelFamily, Yii::$app->request->post());

            $modelLabor = Model::createMultiple(Labor::classname());
            Model::loadMultiple($modelLabor, Yii::$app->request->post());
            
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file1 = UploadedFile::getInstance($model,'file1');

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
            $model->passport = $imageName;
            }          

            if ($model->save()) {
                $valid = true;
                foreach ($modelFamily as $key => $modelF) {
                    $modelF->loss_id = $model->id;
                    $valid = $valid && $modelF->validate();
                }    

                foreach ($modelLabor as $key => $modelL) {
                    $modelL->loss_id = $model->id;
                    $valid = $valid && $modelL->validate();
                }

                if ($valid) {
                    $transaction = \Yii::$app->db->beginTransaction();
                    try {
                        $flag = false;
                        foreach ($modelFamily as $modelF) {
                            if (!($flag = $modelF->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }  

                        foreach ($modelLabor as $modelL) {
                            if (!($flag = $modelL->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }          
            
                        if ($flag) {
                            $transaction->commit();
                            return $this->redirect(['export-pdf', 'id' => $model->id]);
                        }
                    } catch (Exception $e) {
                        $transaction->rollBack();
                    }
                }
            }       

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();

                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelFamily as $modelfa) {
                            $modelfa->loss_id = $model->id;
                            if (! ($flag = $modelfa->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }  
                        foreach ($modelLabor as $modella) {
                            $modella->loss_id = $model->id;
                            if (! ($flag = $modella->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }                           
                    }

                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['view', 'id' => $model->id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
        return $this->render('create', [
            'model' => $model,
            'modelFamily' => (empty($modelFamily)) ? [new Family] : $modelFamily,
            'modelLabor' => (empty($modelLabor)) ? [new Labor] : $modelLabor,
            ]);
        }
    }

    /**
     * Updates an existing Loss model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Loss model.
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

    /**
     * Finds the Loss model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Loss the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Loss::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
