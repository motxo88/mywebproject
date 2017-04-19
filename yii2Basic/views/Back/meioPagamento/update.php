<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Back\Meiopagamento */

$this->title = 'Update Meiopagamento: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Meiopagamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meiopagamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
