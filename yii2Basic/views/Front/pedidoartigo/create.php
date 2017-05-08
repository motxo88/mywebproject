<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Front\Pedidoartigo */

$this->title = 'Create Pedidoartigo';
$this->params['breadcrumbs'][] = ['label' => 'Pedidoartigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidoartigo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
