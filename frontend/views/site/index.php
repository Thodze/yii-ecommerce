<?php

/* @var $this yii\web\View
 * @var \yii\data\ActiveDataProvider $dataProvider
 */

$this->title = 'Yii2 Ecommerce';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_product_item',
                'layout' => '{summary}<div class="row">{items}</div>{pager}',
                'itemOptions' => [
                    'class' => 'col-lg-4 col-md-6 mb-4'
                ]
            ]) ?>
        </div>

    </div>
</div>
