<?php
/* @var $this GaleriController */
/* @var $data Galeri */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_admin')); ?>:</b>
	<?php echo CHtml::encode($data->id_admin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_foto')); ?>:</b>
	<?php echo CHtml::encode($data->nama_foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskrips')); ?>:</b>
	<?php echo CHtml::encode($data->deskrips); ?>
	<br />


</div>