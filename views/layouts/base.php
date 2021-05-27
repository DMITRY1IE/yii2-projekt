<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\Breadcrumbs;
use app\widgets\Alert;

AppAsset::register($this);

$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head> 

<body>
    <?php $this->beginBody() ?>
        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    
    <!-- <?= Html::a('сортировка по дате', ['SiteController/actionFirsttable','Firsttable'=>['Date'=>Yii::$app->user->id]] ,['class'=>'sort-date']) ?>
    <?= Html::button('сортировка по имени', [''] ,['class'=>'sort-name']) ?> -->
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>