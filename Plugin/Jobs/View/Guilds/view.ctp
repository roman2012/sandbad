<div class="guilds view">
<h2><?php echo __('Guild'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($guild['Guild']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($guild['Guild']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guild'), array('action' => 'edit', $guild['Guild']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guild'), array('action' => 'delete', $guild['Guild']['id']), null, __('Are you sure you want to delete # %s?', $guild['Guild']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guilds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guild'), array('action' => 'add')); ?> </li>
	</ul>
</div>
