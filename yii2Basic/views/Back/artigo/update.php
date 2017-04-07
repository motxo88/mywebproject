<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Back\Artigo */

$this->title = 'Update Artigo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Artigos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="artigo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
