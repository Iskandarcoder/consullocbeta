<?php

namespace frontend\controllers;

use Yii;
use backend\models\Docs;
use frontend\models\DocsSearch;
//use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\components\BaseController;
use yii\web\UploadedFile;
use backend\models\Model;


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
    
    public function actionBarcode($id)
    {
        return $this->render('barcode', [
            'guide' => $guide,
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

        $name = 'docs.pdf';
        $path = Yii::getAlias('@frontend/web/pdf/').$name;

        $pdf->output($content, $path, \kartik\mpdf\Pdf::DEST_FILE);

        return $this->redirect(['pdf', 'id' => $id]);
    }

    public function actionIndex()
    {
        $searchModel = new DocsSearch();
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
        $model->setRandomString();
              

        if ($model->load(Yii::$app->request->post())) {
             $model->file = UploadedFile::getInstance($model,'file');
            if ($model->file) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->file->saveAs( $upload_path);
            $model->scan_file = $imageName;
            }
            $model->save();
            return $this->redirect(['export-pdf', 'id' => $model->id]);
        } 
            return $this->render('create', [
                'model' => $model,
            ]);        
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
              $model->file = UploadedFile::getInstance($model,'file');
              if ($model->file) {
            $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file->extension;
            $upload_path = Yii::getAlias('@backend/web/uploads/').$imageName;
            $model->file->saveAs( $upload_path.'.'.$model->file->extension );
            $model->photo = $imageName;
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
