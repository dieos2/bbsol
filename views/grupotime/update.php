<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\GrupoTime */

$this->title = 'Update Grupo Time: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Grupo Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="grupo-time-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
