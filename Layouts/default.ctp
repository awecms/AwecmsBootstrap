<?php
/**
 * AweCMS: Bootstrap
 * Copyright (c) David Gallagher (http://thegallagher.net)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) David Gallagher (http://thegallagher.net)
 * @link          http://awecms.com
 * @package       AwecmsSeo
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$awecmsDescription = __d('awecms', 'Awecms Bootstrap');
?>
<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?php
		echo $this->Html->charset();
		echo $this->Html->meta(array('http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge,chrome=1'));
	?>
	<title>
		<?php echo $awecmsDescription; ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width'));
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->Html->css('awecms.min');
		echo $this->Html->css('main');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('scriptHead');
		
		echo $this->Html->script('vendor/modernizr-2.6.2.min.js');
	?>
</head>
<body>
	<?php echo $this->element('chromeframe'); ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<?php echo $this->Html->link($awecmsDescription, 'http://awecms.com', array('class' => 'brand')); ?>
			</div>
		</div>
    </div>
	<div class="container">
		<div class="hero-unit">
			<h1><?php echo __d('awecms', 'AweCMS Bootstrap'); ?></h1>
			<p><?php echo __d('awecms', 'This is a newly baked AweCMS Bootstrap theme.'); ?></p>
		</div>
		<div id="content" role="main">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
		<footer id="footer">
			<p><?php echo __d('awecms', 'Baked using %s', $this->Html->link($awecmsDescription, 'http://awecms.com')); ?></p>
		</footer>
	</div>
	<?php
		$jQueryVersion = '1.9.1';
		echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/jquery/' . $jQueryVersion . '/jquery.min.js');
		$script = $this->Html->script('vendor/jquery-' . $jQueryVersion . '.min');
		echo $this->Html->scriptBlock('window.jQuery || document.write(\'' . str_replace('</', '<\\/', $script) . '\')');
		echo $this->Html->script('vendor/bootstrap.min');
		
		echo $this->Html->script('plugins');
		echo $this->Html->script('main');
		echo $this->fetch('script');
	?>
</body>
</html>
