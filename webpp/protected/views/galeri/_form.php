<?php
/* @var $this GaleriController */
/* @var $model Galeri */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'galeri-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_admin'); ?>
		<?php echo $form->textField($model,'id_admin'); ?>
		<?php echo $form->error($model,'id_admin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_foto'); ?>
		<?php echo $form->textField($model,'nama_foto',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'nama_foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto'); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskrips'); ?>
		<?php echo $form->textArea($model,'deskrips',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deskrips'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->