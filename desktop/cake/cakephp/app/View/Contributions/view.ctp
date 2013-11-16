<div class="contributions view">
<h2><?php echo __('Contribution'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reward Id'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['reward_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contribution['Contribution']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contribution'), array('action' => 'edit', $contribution['Contribution']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contribution'), array('action' => 'delete', $contribution['Contribution']['id']), null, __('Are you sure you want to delete # %s?', $contribution['Contribution']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contributions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contribution'), array('action' => 'add')); ?> </li>
	</ul>
</div>
