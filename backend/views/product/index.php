<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'contentOptions' => [
                    'style' => 'width: 100px'
                ]
            ],
            'name',
            [
                'attribute' => 'image',
                'content' => function ($model) {
                    return Html::img($model->getImageUrl(), ['style' => 'width: 100px']);
                }
            ],
            'description:html',
            [
                'attribute' => 'price',
            ],
            [
                'attribute' => 'status',
                'content' => function ($model) {
                    return Html::tag('span', $model->status ? 'Active' : 'Draft', [
                        'class' => $model->status ? 'badge badge-success' : 'badge badge-danger'
                    ]);
                },
                'contentOptions' => [
                    'style' => 'width: 100px'
                ]
            ],
            'created_at:datetime',
            'updated_at:datetime',
            //'created_by',
            //'updated_by',

            ['class' => 'common\grid\ActionColumn'],
        ],
//        'pager' => \yii\bootstrap4\LinkPager::class
    ]); ?>


</div>
