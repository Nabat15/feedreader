<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\feedreader\models\Sayfa */

$this->title = 'Update Sayfa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sayfas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sayfa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
