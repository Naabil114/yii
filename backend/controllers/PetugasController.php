<?php

namespace app\controllers;
namespace backend\controllers;

use app\models\Petugas;
use app\models\PetugasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PetugasController implements the CRUD actions for Petugas model.
 */
class PetugasController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Petugas models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PetugasSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Petugas model.
     * @param string $id_petugas Id Petugas
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_petugas)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_petugas),
        ]);
    }

    /**
     * Creates a new Petugas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Petugas();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_petugas' => $model->id_petugas]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Petugas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_petugas Id Petugas
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_petugas)
    {
        $model = $this->findModel($id_petugas);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_petugas' => $model->id_petugas]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Petugas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_petugas Id Petugas
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_petugas)
    {
        $this->findModel($id_petugas)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Petugas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_petugas Id Petugas
     * @return Petugas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_petugas)
    {
        if (($model = Petugas::findOne(['id_petugas' => $id_petugas])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
