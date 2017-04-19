<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode('POS System') ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'POS System',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        
        'options' => ['class' => 'navbar-nav navbar-right'],//Dropdown menus usando a class yii\bootstrap\Nav
        
        'items' => [
            [
            'label' => 'Produtos',
            'items' => [                        
                ['label' => 'Familia', 'url' => ['/Back/familia/index']],
                    '<li class="divider"></li>',
                ['label' => 'Categoria', 'url' => ['/Back/categoria/index']],
                    '<li class="divider"></li>',
                ['label' => 'Artigo', 'url' => ['/Back/artigo/index']],
                    '<li class="divider"></li>',
                ['label' => 'IVA', 'url' => ['/Back/iva/index']],
            ],
        ],
            [
            'label' => 'Caixas',
            'items' => [
                ['label' => 'Caixa', 'url' => ['/Back/caixa/index']],
                    '<li class="divider"></li>',                
                ['label' => 'Tipo de Operação', 'url' => ['/Back/tipoperacao/index']],
                    '<li class="divider"></li>',
                ['label' => 'Meio Pagamento', 'url' => ['/Back/meiopagamento/index']],
            ],
        ],
            ['label' => 'Mesa', 'url' => ['/Back/mesa/index']],
            ['label' => 'Cliente Empresa', 'url' => ['/Back/clientempresa/index']],
            ['label' => 'Gestão Utilizadores', 'url' => ['/user/admin']],
            //['label' => 'User', 'url' => ['/user']], 
            [
             'label' => 'Área Pessoal',
             'items' => [
                ['label' => 'Perfil', 'url' => ['/user/profile']],
                    '<li class="divider"></li>',
                ['label' => 'Alterar Dados Pessoais', 'url' => ['/user/account']], 
            ],
        ],
        
            Yii::$app->user->isGuest ? 
                ['label' => 'Login', 'url' => ['/user/login']] : // or ['/user/login-email']
                ['label' => 'Logout (' . Yii::$app->user->displayName . ')',
                    'url' => ['/user/logout'],
                    'linkOptions' => ['data-method' => 'post']],
            
    ],
        ]);     
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; POS System <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
