<div class="card">
    <div class="card-header">
        <div class="card-title"><h3>Your cart items</h3></div>
    </div>
    <div class="card-body p-0">
        <?php if (!empty($items)): ?>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Product</th>
                <th>Image</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($items as $item) : ?>
                <tr>
                    <td><?= $item['name'] ?></td>
                    <td>
                        <img src="<?= Yii::$app->params['frontendUrl'] . '/storage' . $item['image'] ?>"
                             style="width: 100px;"
                             alt="<?= $item['name'] ?>">
                    </td>
                    <td><?= $item['price'] ?></td>
                    <td><?= $item['quantity'] ?></td>
                    <td><?= $item['total_price'] ?></td>
                    <td>
                        <?= \yii\helpers\Html::a('Delete', ['/cart/delete', 'id' => $item['id']], [
                            'class' => 'btn btn-outline-danger btn-sm',
                            'data-method' => 'post',
                            'data-confirm' => 'Are you sure yoi want to remove this product form cart?'
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="card-body float-right">
            <a href="<?= \yii\helpers\Url::to(['/cart/checkout']) ?>" class="btn btn-primary">Checkout</a>
        </div>
        <?php else: ?>
        <p class="text-muted text-center p-5">There are no items in the cart</p>
        <?php endif;?>
    </div>
</div>