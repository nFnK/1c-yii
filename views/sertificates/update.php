<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sertificates */

$this->title = 'Изменить: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Сертификаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="sertificates-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <img src="/img/<?= $model->image ?>">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    	<?= $form->field($model2, 'imageFile')->fileInput() ?>

    	<button class="btn btn-success">Cохранить</button>

	<?php ActiveForm::end() ?>


</div>
