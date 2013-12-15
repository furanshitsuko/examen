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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
          <a class="navbar-brand" href="Projects">Projects</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="app/Home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

  <div class="container">

      <div class="starter-template">
        <h1>Projects</h1>
        <p class="lead">here you see yours projects<br></p>
		
		
      </div>

    <div class="projects index">

	<div class="actions">
	  <table width="1102" border="1">
	    <tr>
	      <th width="126" height="126" scope="col"><ul>
	        <li><?php echo __('Actions'); ?></li>
	        <li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?></li>
	        <li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?></li>
	        <li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?></li>
	        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
	        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?></li>
	        <li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?></li>
	        <li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?></li>
	        <li><?php echo $this->Html->link(__('List Rewards'), array('controller' => 'rewards', 'action' => 'index')); ?></li>
	        <li><?php echo $this->Html->link(__('New Reward'), array('controller' => 'rewards', 'action' => 'add')); ?></li>
	        </ul></th>
	      <th width="960" scope="col"><h2><?php echo __('Projects'); ?></h2>
	        <table width="1019" cellpadding="0" cellspacing="0">
	          <tr>
	            <th><?php echo $this->Paginator->sort('id'); ?></th>
	            <th><?php echo $this->Paginator->sort('category_id'); ?></th>
	            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
	            <th><?php echo $this->Paginator->sort('name'); ?></th>
	            <th><?php echo $this->Paginator->sort('short_description'); ?></th>
	            <th><?php echo $this->Paginator->sort('long_description'); ?></th>
	            <th><?php echo $this->Paginator->sort('start_date'); ?></th>
	            <th><?php echo $this->Paginator->sort('end_date'); ?></th>
	            <th><?php echo $this->Paginator->sort('goal'); ?></th>
	            <th><?php echo $this->Paginator->sort('is_active'); ?></th>
	            <th><?php echo $this->Paginator->sort('created'); ?></th>
	            <th><?php echo $this->Paginator->sort('modified'); ?></th>
	            <th class="actions"><?php echo __('Actions'); ?></th>
              </tr>
	          <?php foreach ($projects as $project): ?>
	          <tr>
	            <td><?php echo h($project['Project']['id']); ?>&nbsp;</td>
	            <td><?php echo $this->Html->link($project['Category']['name'], array('controller' => 'categories', 'action' => 'view', $project['Category']['id'])); ?></td>
	            <td><?php echo $this->Html->link($project['User']['email'], array('controller' => 'users', 'action' => 'view', $project['User']['id'])); ?></td>
	            <td><?php echo h($project['Project']['name']); ?> &nbsp; </td>
	            <td><?php echo h($project['Project']['short_description']); ?> &nbsp;   </td>
	            <td><?php echo h($project['Project']['long_description']); ?> &nbsp; </td>
	            <td><?php echo h($project['Project']['start_date']); ?> &nbsp; </td>
	            <td><?php echo h($project['Project']['end_date']); ?> &nbsp; </td>
	            <td><?php echo h($project['Project']['is_active']); ?> &nbsp;  </td>
	            <td><?php echo h($project['Project']['created']); ?> &nbsp; </td>
	            <td><?php echo h($project['Project']['modified']); ?> &nbsp; </td>
	            <td class="actions"><?php echo $this->Html->link(__('View'), array('action' => 'view', $project['Project']['id'])); ?> <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $project['Project']['id'])); ?> <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?></td>
              </tr>
	          <?php endforeach; ?>
            </table>
	        <p>
	          <?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>
            </p>
	        <p>                  <span class="paging">
	          <?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	          </span></p></th>
        </tr>
      </table>
      </div>
	<h2>&nbsp;</h2>
	<div class="paging"></div>
</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
