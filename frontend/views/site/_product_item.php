<?php
/**
 * @var \common\models\Product $model
 */
?>


<div class="card h-100">
    <a href="#"><img class="card-img-top" src="<?= $model->getImageUrl() ?>" alt=""></a>
    <div class="card-body">
        <h4 class="card-title">
            <a href="#"><?= $model->name ?></a>
        </h4>
        <h5>$<?= $model->price ?></h5>
        <div class="card-text">
            <?= $model->getShortDescription() ?>
        </div>
    </div>
    <div class="card-footer text-right">
        <a href="<?= \yii\helpers\Url::to(['/cart/add']) ?>" class="btn btn-primary btn-add-to-cart">
            Add to Cart
        </a>
    </div>
</div>

