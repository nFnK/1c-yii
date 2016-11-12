<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Podpiski */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Подписки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="podpiski-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
