<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Back\Tipoperacao */

$this->title = 'Create Tipoperacao';
$this->params['breadcrumbs'][] = ['label' => 'Tipoperacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipoperacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
