<?php
/* @var $this PesanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pesans',
);

$this->menu=array(
	array('label'=>'Create Pesan', 'url'=>array('create')),
	array('label'=>'Manage Pesan', 'url'=>array('admin')),
);
?>

<h1>Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
