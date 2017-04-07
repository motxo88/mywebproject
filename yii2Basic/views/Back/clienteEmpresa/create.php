<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Back\ClienteEmpresa */

$this->title = 'Create Cliente Empresa';
$this->params['breadcrumbs'][] = ['label' => 'Cliente Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-empresa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
