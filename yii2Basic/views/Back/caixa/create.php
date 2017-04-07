<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Back\Caixa */

$this->title = 'Create Caixa';
$this->params['breadcrumbs'][] = ['label' => 'Caixas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
