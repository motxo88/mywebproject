<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Back\FamiliaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Familias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="familia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Familia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'descricao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
