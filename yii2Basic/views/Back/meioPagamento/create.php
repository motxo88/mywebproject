<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Back\MeioPagamento */

$this->title = 'Create Meio Pagamento';
$this->params['breadcrumbs'][] = ['label' => 'Meio Pagamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meio-pagamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
