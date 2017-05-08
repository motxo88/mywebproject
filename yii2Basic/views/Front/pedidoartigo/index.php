<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Front\PedidoartigoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedidoartigos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidoartigo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pedidoartigo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'quantidade',
            'valor',
            'artigo_id',
            'pedido_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
