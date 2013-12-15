<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <style type="text/css">
    .color {
	background-color: #9F0;
}
    </style>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Profile!</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="Home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

  <div class="container">

    <div class="users view">
<div align="left"><a href="home">Home</a></div>
<h2>&nbsp;</h2>
</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <table width="1049" border="1">
    <tr>
        <th width="297" scope="col"><h3><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?></h3>
          <h3><?php echo __('Actions'); ?></h3>
          <ul>
            <li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit')); ?></li>
            <li><?php echo $this->Html->link(__('List Contributions'), array('controller' => 'contributions', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('List Notifications'), array('controller' => 'notifications', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?></li>
      </ul>          <h2>&nbsp;</h2></th>
        <th width="736" scope="col"><h2><?php echo __('User'); ?></h2>
          <dl>
            <dt><?php echo __('Email'); ?>: <?php echo h($user['User']['email']); ?> &nbsp; </dt>
            <dt><?php echo __('First Name'); ?>: <?php echo h($user['User']['first_name']); ?> &nbsp; </dt>
            <dt><?php echo __('Last Name'); ?>: <?php echo h($user['User']['last_name']); ?> &nbsp; </dt>
            <dt><?php echo __('Is Active'); ?>: <?php echo h($user['User']['is_active']); ?> &nbsp; </dt>
            <dt><?php echo __('Is Admin'); ?>:  <?php echo h($user['User']['is_admin']); ?> &nbsp; </dt>
            <dt><?php echo __('Created'); ?>: <?php echo h($user['User']['created']); ?> &nbsp; </dt>
            <dt><?php echo __('Modified'); ?>: <?php echo h($user['User']['modified']); ?> &nbsp; </dt>
        </dl></th>
    </tr>
  </table>
  <div class="related">
    <h3><?php echo __('Related Contributions'); ?></h3>
    <?php if (!empty($user['Contribution'])): ?>
    <table cellpadding = "0" cellspacing = "0">
      <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('User Id'); ?></th>
        <th><?php echo __('Reward Id'); ?></th>
        <th><?php echo __('Amount'); ?></th>
        <th><?php echo __('Created'); ?></th>
        <th><?php echo __('Modified'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php foreach ($user['Contribution'] as $contribution): ?>
      <tr>
        <td><?php echo $contribution['id']; ?></td>
        <td><?php echo $contribution['user_id']; ?></td>
        <td><?php echo $contribution['reward_id']; ?></td>
        <td><?php echo $contribution['amount']; ?></td>
        <td><?php echo $contribution['created']; ?></td>
        <td><?php echo $contribution['modified']; ?></td>
        <td class="actions"><?php echo $this->Html->link(__('View'), array('controller' => 'contributions', 'action' => 'view', $contribution['id'])); ?> <?php echo $this->Html->link(__('Edit'), array('controller' => 'contributions', 'action' => 'edit', $contribution['id'])); ?> <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contributions', 'action' => 'delete', $contribution['id']), null, __('Are you sure you want to delete # %s?', $contribution['id'])); ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <?php endif; ?>
  	</div>
  <div class="related">
    <h3><?php echo __('Related Notifications'); ?></h3>
    <?php if (!empty($user['Notification'])): ?>
    <table cellpadding = "0" cellspacing = "0">
      <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('Message Id'); ?></th>
        <th><?php echo __('User Id'); ?></th>
        <th><?php echo __('Viewed'); ?></th>
        <th><?php echo __('Created'); ?></th>
        <th><?php echo __('Modified'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
      </tr>
      <?php foreach ($user['Notification'] as $notification): ?>
      <tr>
        <td><?php echo $notification['id']; ?></td>
        <td><?php echo $notification['message_id']; ?></td>
        <td><?php echo $notification['user_id']; ?></td>
        <td><?php echo $notification['viewed']; ?></td>
        <td><?php echo $notification['created']; ?></td>
        <td><?php echo $notification['modified']; ?></td>
        <td class="actions"><?php echo $this->Html->link(__('View'), array('controller' => 'notifications', 'action' => 'view', $notification['id'])); ?> <?php echo $this->Html->link(__('Edit'), array('controller' => 'notifications', 'action' => 'edit', $notification['id'])); ?> <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'notifications', 'action' => 'delete', $notification['id']), null, __('Are you sure you want to delete # %s?', $notification['id'])); ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <?php endif; ?>
  </div>
  <h3><?php echo __('Related Projects'); ?></h3>
  <?php if (!empty($user['Project'])): ?>
  <table cellpadding = "0" cellspacing = "0">
    <tr>
      <th><?php echo __('Id'); ?></th>
      <th><?php echo __('Category Id'); ?></th>
      <th><?php echo __('User Id'); ?></th>
      <th><?php echo __('Name'); ?></th>
      <th><?php echo __('Short Description'); ?></th>
      <th><?php echo __('Long Description'); ?></th>
      <th><?php echo __('Start Date'); ?></th>
      <th><?php echo __('End Date'); ?></th>
      <th><?php echo __('Goal'); ?></th>
      <th><?php echo __('Is Active'); ?></th>
      <th><?php echo __('Created'); ?></th>
      <th><?php echo __('Modified'); ?></th>
      <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($user['Project'] as $project): ?>
    <tr>
      <td><?php echo $project['id']; ?></td>
      <td><?php echo $project['category_id']; ?></td>
      <td><?php echo $project['user_id']; ?></td>
      <td><?php echo $project['name']; ?></td>
      <td><?php echo $project['short_description']; ?></td>
      <td><?php echo $project['long_description']; ?></td>
      <td><?php echo $project['start_date']; ?></td>
      <td><?php echo $project['end_date']; ?></td>
      <td><?php echo $project['goal']; ?></td>
      <td><?php echo $project['is_active']; ?></td>
      <td><?php echo $project['created']; ?></td>
      <td><?php echo $project['modified']; ?></td>
      <td class="actions"><?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?> <?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?> <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?></td>
    </tr>
    <?php endforeach; ?>
  </table>
  <?php endif; ?>
  <div class="actions"></div>
  <p>&nbsp;</p>
  </body>
</html>
