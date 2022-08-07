<?php

namespace frontend\controllers;


use common\models\Orders;
use common\models\Products;
use Yii;
use yii\helpers\Json;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class ShopController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionShoppingCart()
    {

        return $this->render('shopping_cart');
    }

    public function actionCheckout()
    {

        $model = new Orders();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['final', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('checkout', [
            'model' => $model,
        ]);
    }

    public function actionFinal()
    {

        return $this->render('final');
    }

    public function actionProductDetails($id)
    {
        $model = Products::find()->where(['id' => $id])->one();
        return $this->render('product-details', ['model' => $model]);
    }

    public function actionCategoryViews($id)
    {
        $model = Products::find()->where(['category_id' => $id])->all();
        return $this->render('category-views', ['model' => $model]);
    }

    public function actionGetProduct($id)
    {
        $lang = Yii::$app->language;
        $model = Products::findOne($id);
        $response = [
//            'name' => $model->title_uz,
//            'price' => $model->price,
//            'count' => $model->quantity,
            'id' => $model->id,
//            'image' =>
        ];
        return Json::encode($response);
    }

    public function actionDeleteCart($id)
    {
        $cookie = json_decode($_COOKIE['cart']);
        $newarr = [];

        foreach ($cookie as $item) {
            if ($item->id == $id)
                continue;

            $newarr[] = $item;
        }

        unset($_COOKIE['cart']);
        setcookie('cart', null, -1);

        $_COOKIE['cart'] = Json::encode($newarr);

        return $this->redirect(['shop/shopping-cart']);
    }


}
