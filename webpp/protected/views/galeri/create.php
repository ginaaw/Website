<?php
/* @var $this GaleriController */
/* @var $model Galeri */

$this->breadcrumbs=array(
	'Galeris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Galeri', 'url'=>array('index')),
	array('label'=>'Manage Galeri', 'url'=>array('admin')),
);
?>

<h1>Create Galeri</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>