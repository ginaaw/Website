<?php
/* @var $this ProyekController */
/* @var $model Proyek */

$this->breadcrumbs=array(
	'Proyeks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Proyek', 'url'=>array('index')),
	array('label'=>'Create Proyek', 'url'=>array('create')),
	array('label'=>'Update Proyek', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Proyek', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proyek', 'url'=>array('admin')),
);
?>

<h1>View Proyek #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_proyek',
		'tanggal_mulai',
		'tanggal_peresmian',
		'foto',
		'deskripsi',
		'status',
		'id_admin',
	),
)); ?>
