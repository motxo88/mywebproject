<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Back\Meiopagamento */

$this->title = 'Create Meiopagamento';
$this->params['breadcrumbs'][] = ['label' => 'Meiopagamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meiopagamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
