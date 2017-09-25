<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\jnskendaraan */

$this->title = Yii::t('app', 'Jnskendaraan  Baru');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Jnskendaraan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jnskendaraan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
