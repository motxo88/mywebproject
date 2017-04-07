<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Back\TipoOperacao */

$this->title = 'Create Tipo Operacao';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Operacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-operacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
