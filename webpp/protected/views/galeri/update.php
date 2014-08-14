<?php
/* @var $this GaleriController */
/* @var $model Galeri */

$this->breadcrumbs=array(
	'Galeris'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Galeri', 'url'=>array('index')),
	array('label'=>'Create Galeri', 'url'=>array('create')),
	array('label'=>'View Galeri', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Galeri', 'url'=>array('admin')),
);
?>

<h1>Update Galeri <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>