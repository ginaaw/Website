<?php
/* @var $this GaleriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Galeris',
);

$this->menu=array(
	array('label'=>'Create Galeri', 'url'=>array('create')),
	array('label'=>'Manage Galeri', 'url'=>array('admin')),
);
?>

<h1>Gallery</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
