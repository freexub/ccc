<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
<!--        --><?//= Html::a('Create Services', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
//            'active',
//            'about:ntext',
            [
                'label' => '',
                'options' => ['width' => '100'],
                #'visible' => Yii::$app->user->can('user'),
                'format' => 'raw',
                'value' => function ($data) {

                    return '<a href="https://kstu-kz.antiplagiat.ru'.$data->id.'" target="_blank" class="btn btn-success">Заказать услугу</a>';
                },
            ],

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
