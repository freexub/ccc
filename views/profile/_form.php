<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'faculty_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edu_form_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edu_level_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stage_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_num')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'student_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speciality_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'review')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'claim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'document')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
