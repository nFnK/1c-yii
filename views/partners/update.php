<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Partners */

$this->title = 'Изменить: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Наши партнеры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="partners-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <img src="/img/<?= $model->logo ?>">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
