<?php

namespace app\controllers;
namespace backend\controllers;

use app\models\Pengembalian;
use app\models\PengembalianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PengembalianController implements the CRUD actions for Pengembalian model.
 */
class PengembalianController extends Controller
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
     * Lists all Pengembalian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PengembalianSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pengembalian model.
     * @param string $kd_pengembalian Kd Pengembalian
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_pengembalian)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_pengembalian),
        ]);
    }

    /**
     * Creates a new Pengembalian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pengembalian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kd_pengembalian' => $model->kd_pengembalian]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pengembalian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_pengembalian Kd Pengembalian
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_pengembalian)
    {
        $model = $this->findModel($kd_pengembalian);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_pengembalian' => $model->kd_pengembalian]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pengembalian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_pengembalian Kd Pengembalian
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_pengembalian)
    {
        $this->findModel($kd_pengembalian)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pengembalian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_pengembalian Kd Pengembalian
     * @return Pengembalian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_pengembalian)
    {
        if (($model = Pengembalian::findOne(['kd_pengembalian' => $kd_pengembalian])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
