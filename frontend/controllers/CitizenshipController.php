<?php

namespace frontend\controllers;

use Yii;
use backend\models\Citizenship;
use frontend\models\CitizenshipSearch;
//use yii\web\Controller;
use frontend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\Model;
use common\models\CaptchaCode;
use backend\models\InrelativePmj;
use backend\models\OutrelativePmj;
use backend\models\Children;





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
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

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


    /**
     * Lists all Citizenship models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CitizenshipSearch();
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

        $name = 'citizenship.pdf';
        $path = Yii::getAlias('@frontend/web/pdf/').$name;

        $pdf->output($content, $path, \kartik\mpdf\Pdf::DEST_FILE);

        return $this->redirect(['pdf', 'id' => $id]);
    }

    /**
     * Creates a new Citizenship model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Citizenship();

        $model->setRandomString();
        $modelInrelative = [new InrelativePmj];
        $modelOutrelative = [new OutrelativePmj];
        $modelChildren = [new Children];

        if ($model->load(Yii::$app->request->post())) {

            $modelInrelative = Model::createMultiple(InrelativePmj::classname());
            Model::loadMultiple($modelInrelative, Yii::$app->request->post());

            $modelOutrelative = Model::createMultiple(OutrelativePmj::classname());
            Model::loadMultiple($modelOutrelative, Yii::$app->request->post());

            $modelChildren = Model::createMultiple(Children::classname());
            Model::loadMultiple($modelChildren, Yii::$app->request->post());

            
            $model->file = UploadedFile::getInstance($model,'file');
            $model->photo1 = UploadedFile::getInstance($model,'photo1');
            $model->photo2 = UploadedFile::getInstance($model,'photo2');
            $model->photo3 = UploadedFile::getInstance($model,'photo3');
            $model->photo4 = UploadedFile::getInstance($model,'photo4');


            if ($model->file) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->file->saveAs( $upload_path);
            $model->photo = $imageName;
            }

            if ($model->photo1) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->photo1->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->photo1->saveAs( $upload_path);
            $model->file1 = $imageName;
            }

            if ($model->photo2) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->photo2->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->photo2->saveAs( $upload_path);
            $model->file2 = $imageName;
            }

            if ($model->photo3) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->photo3->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->photo3->saveAs( $upload_path);
            $model->file3 = $imageName;
            } 

            if ($model->photo4) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->photo4->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->photo4->saveAs( $upload_path);
            $model->file4 = $imageName;
            }           

            if ($model->save()) {
                $valid = true;
                foreach ($modelInrelative as $key => $modelI) {
                    $modelI->citizenship_id = $model->id;
                    $valid = $valid && $modelI->validate();
                }    

                foreach ($modelOutrelative as $key => $modelO) {
                    $modelO->citizenship_id = $model->id;
                    $valid = $valid && $modelO->validate();
                } 

                foreach ($modelChildren as $key => $modelC) {
                    $modelC->citizenship_id = $model->id;
                    $valid = $valid && $modelC->validate();
                }             

                if ($valid) {
                    $transaction = \Yii::$app->db->beginTransaction();
                    try {
                        $flag = false;
                        foreach ($modelInrelative as $modelI) {
                            if (!($flag = $modelI->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }  

                        foreach ($modelOutrelative as $modelO) {
                            if (!($flag = $modelO->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }  

                        foreach ($modelChildren as $modelC) {
                            if (!($flag = $modelC->save(false))) {
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
                        foreach ($modelInrelative as $modelin) {
                            $modelin->citizenship_id = $model->id;
                            if (! ($flag = $modelin->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }  
                        foreach ($modelOutrelative as $modelout) {
                            $modelout->citizenship_id = $model->id;
                            if (! ($flag = $modelout->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                        foreach ($modelChildren as $modelch) {
                            $modelch->citizenship_id = $model->id;
                            if (! ($flag = $modelch->save(false))) {
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
            'modelInrelative' => (empty($modelInrelative)) ? [new Inrelative] : $modelInrelative,
            'modelOutrelative' => (empty($modelOutrelative)) ? [new Outrelative] : $modelOutrelative,
            'modelChildren' => (empty($modelChildren)) ? [new Children] : $modelChildren,
            ]);
        }
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

             $model->photo = UploadedFile::getInstance($model,'photo');

            if ($model->photo) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->photo->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->photo->saveAs( $upload_path.'.'.$model->photo->extension );
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
