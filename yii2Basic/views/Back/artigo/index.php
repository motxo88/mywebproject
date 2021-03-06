<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Back\ArtigoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artigos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artigo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Criar Artigo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'preco',
            'categoria_id',
            'iva_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
