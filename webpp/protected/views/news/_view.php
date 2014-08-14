<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_admin')); ?>:</b>
	<?php echo CHtml::encode($data->id_admin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isi_berita')); ?>:</b>
	<?php echo CHtml::encode($data->isi_berita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penulis')); ?>:</b>
	<?php echo CHtml::encode($data->penulis); ?>
	<br />


</div>