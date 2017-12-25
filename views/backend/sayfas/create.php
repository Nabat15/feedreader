<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\feedreader\models\Sayfa */

$this->title = 'Create Sayfa';
$this->params['breadcrumbs'][] = ['label' => 'Sayfas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sayfa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
