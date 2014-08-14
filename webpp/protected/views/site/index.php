<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></h1>

<p>This page is about to manage the website. Administrator can manage the content of the website using this system.</p>

<p>The website content you can manage include:</p>
<ul>
	<li>Create, update, delete, and vie News</li>
	<li>Create, update, delete, and view Projects</li>
	<li>Change the Project status</li>
	<li>Create, update, delete, and view pictures in Gallery</li>
	<li>Delete and view Massages from viewer of the website</li>
</ul>

<p>For more detail management, administrator can choose one of the menu above.</p>
