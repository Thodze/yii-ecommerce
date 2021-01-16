<?php
/**
 * @var \common\models\User $user
 * @var \common\models\UserAddress $userAddress
 * */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\widgets\Pjax;

?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Address Information
            </div>
            <div class="card-body">
                <?php Pjax::begin([
                    'enablePushState' => false
                ]) ?>
                <?= $this->render('user_address', [
                    'userAddress' => $userAddress
                ]) ?>
                <?php Pjax::end() ?>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                Account information
            </div>
            <div class="card-body">
                <?php Pjax::begin([
                    'enablePushState' => false
                ]) ?>
                <?= $this->render('user_account', [
                    'user' => $user
                ]) ?>
                <?php Pjax::end() ?>
            </div>
        </div>
    </div>
</div>
