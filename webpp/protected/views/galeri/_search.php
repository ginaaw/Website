<?php
/* @var $this GaleriController */
/* @var $model Galeri */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_admin'); ?>
		<?php echo $form->textField($model,'id_admin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_foto'); ?>
		<?php echo $form->textField($model,'nama_foto',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto'); ?>
		<?php echo $form->textField($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskrips'); ?>
		<?php echo $form->textArea($model,'deskrips',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->