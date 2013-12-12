	
<?php if(AuthComponent::user('id')): ?>
  <h1>Ingresa!!!!!</h1>
<?php else: ?>
  <h5>Ingresa!!!!!   ;D</h5>
<?php endif; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
.project {
	background-color: #CC3;
	background-image: none;
	background-repeat: no-repeat;
	font-size: 14px;
	color: #063;
	word-spacing: normal;
	height: 500px;
	width: 700px;
}
</style>

<body>

<div align="left"><a href="Projects">Projects</a>
</div>

<input type="button" onclick=" location.href='Projects' " value="Projects" name="boton" /> 

<div class="project">
	<h2><?php echo __('Projects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('short_description'); ?></th>
	</tr>

	</table>
	
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

</body>
</html>