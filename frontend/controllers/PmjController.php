<?php

namespace frontend\controllers;

use Yii;
use backend\models\Pmj;
use frontend\models\PmjSearch;
//use yii\web\Controller;
use frontend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\Teenager;
use backend\models\Employment;
use backend\models\Relative;
use backend\models\Model;
use common\models\CaptchaCode;

/**
 * PmjController implements the CRUD actions for Pmj model.
 */
class PmjController extends BaseController
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
     * Lists all Pmj models.
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
        $searchModel = new PmjSearch();
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

        $name = 'kus.pdf';
        $path = Yii::getAlias('@frontend/web/pdf/').$name;

        $pdf->output($content, $path, \kartik\mpdf\Pdf::DEST_FILE);

        return $this->redirect(['pdf', 'id' => $id]);
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
        $modelTeenager = [new Teenager];
        $modelEmployment = [new Employment];
        $modelRelative = [new Relative];

        if ($model->load(Yii::$app->request->post())) {

            $modelTeenager = Model::createMultiple(Teenager::classname());
            Model::loadMultiple($modelTeenager, Yii::$app->request->post());

            $modelEmployment = Model::createMultiple(Employment::classname());
            Model::loadMultiple($modelEmployment, Yii::$app->request->post());

            $modelRelative = Model::createMultiple(Relative::classname());
            Model::loadMultiple($modelRelative, Yii::$app->request->post());

            
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

            if ($model->save()) {
                $valid = true;
                foreach ($modelTeenager as $key => $modelT) {
                    $modelT->pmj_id = $model->id;
                    $valid = $valid && $modelT->validate();
                }    

                foreach ($modelEmployment as $key => $modelE) {
                    $modelE->pmj_id = $model->id;
                    $valid = $valid && $modelE->validate();
                } 

                foreach ($modelRelative as $key => $modelR) {
                    $modelR->pmj_id = $model->id;
                    $valid = $valid && $modelR->validate();
                }             

                if ($valid) {
                    $transaction = \Yii::$app->db->beginTransaction();
                    try {
                        $flag = false;
                        foreach ($modelTeenager as $modelT) {
                            if (!($flag = $modelT->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }  

                        foreach ($modelEmployment as $modelE) {
                            if (!($flag = $modelE->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }  

                        foreach ($modelRelative as $modelR) {
                            if (!($flag = $modelR->save(false))) {
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
                        foreach ($modelTeenager as $modelte) {
                            $modelte->pmj_id = $model->id;
                            if (! ($flag = $modelte->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }  
                        foreach ($modelEmployment as $modelem) {
                            $modelem->pmj_id = $model->id;
                            if (! ($flag = $modelem->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                        foreach ($modelRelative as $modelre) {
                            $modelre->pmj_id = $model->id;
                            if (! ($flag = $modelre->save(false))) {
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
            'modelTeenager' => (empty($modelTeenager)) ? [new Teenager] : $modelTeenager,
            'modelEmployment' => (empty($modelEmployment)) ? [new Employment] : $modelEmployment,
            'modelRelative' => (empty($modelRelative)) ? [new Relative] : $modelRelative,
            ]);
        }
    }

    /**
     * Updates an existing Pmj model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

             $model->file = UploadedFile::getInstance($model,'file');

            if ($model->file) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->file->saveAs( $upload_path.'.'.$model->file->extension );
            $model->photo = $imageName;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /**
     * Deletes an existing Pmj model.
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
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

