<div class="jobs index">
	<h2><?php echo __('Jobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('guild_id'); ?></th>
			<th><?php echo $this->Paginator->sort('established_time'); ?></th>
			<th><?php echo $this->Paginator->sort('logo'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('x-gmap'); ?></th>
			<th><?php echo $this->Paginator->sort('y-gmap'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobs as $job): ?>
	<tr>
		<td><?php echo h($job['Job']['id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($job['Category']['title'], array('controller' => 'categories', 'action' => 'view', $job['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($job['Guild']['title'], array('controller' => 'guilds', 'action' => 'view', $job['Guild']['id'])); ?>
		</td>
		<td><?php echo h($job['Job']['established_time']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['logo']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['tel']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['fax']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($job['City']['name'], array('controller' => 'cities', 'action' => 'view', $job['City']['id'])); ?>
		</td>
		<td><?php echo h($job['Job']['address']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['x-gmap']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['y-gmap']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['description']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($job['User']['name'], array('controller' => 'users', 'action' => 'view', $job['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $job['Job']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $job['Job']['id']), null, __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guilds'), array('controller' => 'guilds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guild'), array('controller' => 'guilds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
