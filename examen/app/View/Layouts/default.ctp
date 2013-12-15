<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0”>
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <?php echo $this->Html->charset(); ?>
<title>
                <?php echo $cakeDescription ?>:
                <?php echo $title_for_layout; ?>
        </title>
        <?php
                echo $this->Html->meta('icon');

                echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('app');

                echo $this->fetch('meta');
                echo $this->fetch('css');
                echo $this->fetch('script');
        ?>
<style type="text/css">
#container {
	color: #000000;
}
.skyblue {
	color: #000000;
}
</style>
<meta charset="utf-8">
</head>
<body bgcolor="#000000" text="#000000" link="#000000" vlink="#000000" alink="#000000">
        <style type="text/css">
body {
        background-color: #6E6E6E;
}
</style>
<div id="container">
                <div id="header">
                        <strong><?php echo $this->Html->link("My CakePHP Application", ''); ?></strong>
                        <div class="right padding-right-10">
                                <?php if(AuthComponent::user('id')): ?>
                                        <?php echo $this->Html->link(__('Profile'), array('controller' => 'users', 'action' => 'profile')); ?> |
                                  <?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?>
                          <?php else: ?>
                                  <?php echo $this->Html->link(__('Sign in'), array('controller' => 'users', 'action' => 'login')); ?> | 
                            <?php echo $this->Html->link(__('Sign up'), array('controller' => 'users', 'action' => 'register')); ?>
                          <?php endif; ?>
                        </div>
                </div>
                <div id="content">

                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->Session->flash('auth'); ?>

                        <?php echo $this->fetch('content'); ?>
                </div>
                <div id="footer">
                        <?php echo $this->Html->link(
                                        
                                        'http://luppi-no.tumblr.com',
                                        array('target' => '_blank', 'escape' => false)
                                );
                        ?>
                </div>
        </div>
<p class="skyblue">&nbsp;</p>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
