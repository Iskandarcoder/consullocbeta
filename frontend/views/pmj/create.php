<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pmj */

?>
<div class="pmj-create">

    <?= $this->render('_form', [
        'model' => $model,
        'modelTeenager' => $modelTeenager,
        'modelEmployment' => $modelEmployment,
        'modelRelative' => $modelRelative,
    ]) ?>

</div>
