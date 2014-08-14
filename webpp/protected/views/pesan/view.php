<?php
/* @var $this PesanController */
/* @var $model Pesan */

$this->breadcrumbs=array(
	'Pesans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pesan', 'url'=>array('index')),
	array('label'=>'Create Pesan', 'url'=>array('create')),
	array('label'=>'Update Pesan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pesan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pesan', 'url'=>array('admin')),
);
?>

<h1>View Pesan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'divisi',
		'nama',
		'email',
		'pesan',
	),
)); ?>
