<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />

		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

		<link href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['dirCSS'];?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['dirCSS'];?>/css/style.css" rel="stylesheet" type ="text/css">
		<link href="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['dirCSS'];?>/css/style2.css" rel="stylesheet" type ="text/css">

		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['dirJS'];?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['dirJS'];?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['dirJS'];?>/js/scripts.js"></script>
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>
		<!--div class="row header" id="banner"-->
			<div class="row" id="header1">
				<div class="col-md-7" id="image1">
					<img src="<?php echo Yii::app()->request->baseUrl.Yii::app()->params['dirWebImages'];?>/images/dashboard.png" height="80" width="400" alt="PP">
				</div>
				<div class="col-md-3 col-md-offset-2">
					<h5>Login as <?php echo Yii::app()->user->name; ?> | <a href="<?php echo Yii::app()->params['webURL'] ;?>site/logout"><font color="#1a6fb0">Logout</font></a></h5>
				</div>
			</div>

			<?php $url = explode("/",Yii::app()->urlManager->parseUrl(Yii::app()->request));
				$url = array_slice($url,1);
				$url[0] = (isset($url[0])) ? $url[0] : "";
				$url[0] = strtolower($url[0]);
		
				$isController= false;
			?>
			<div class="row" id="header2">
				<ul class="nav nav-tabs navbar-right">
					<!--home-->
					<li <?php if($isController && $url[1] ==='site') echo ' class="active"'; ?>>
						<?php echo CHtml::link('Home', array('site/index')); ?>
					</li>

					<!--news-->
					<li <?php if($isController && $url[1] ==='news') echo ' class="active"'; ?>>
						<?php echo CHtml::link('News', array('news/index')); ?>
					</li>

					<!--proyek-->
					<li <?php if($isController && $url[1] ==='proyek') echo ' class="active"'; ?>>
						<?php echo CHtml::link('Projects', array('proyek/index')); ?>
					</li>

					<!--galeri-->
					<li <?php if($isController && $url[1] ==='galeri') echo ' class="active"'; ?>>
						<?php echo CHtml::link('Gallery', array('galeri/index')); ?>
					</li>

					<!--pesan-->
					<li <?php if($isController && $url[1] ==='pesan') echo ' class="active"'; ?>>
						<?php echo CHtml::link('Messages', array('pesan/index')); ?>
					</li>
				</ul>
			</div>
		

		
	</body>
</html>

