<?php
/* @var $this GaleriController */
/* @var $model Galeri */

$this->breadcrumbs=array(
	'Galeris'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Galeri', 'url'=>array('index')),
	array('label'=>'Create Galeri', 'url'=>array('create')),
	array('label'=>'Update Galeri', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Galeri', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Galeri', 'url'=>array('admin')),
);
?>

<h1>View Galeri #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_admin',
		'nama_foto',
		'foto',
		'deskrips',
	),
)); ?>
