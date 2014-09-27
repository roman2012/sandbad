<div class="cities view">
<h2><?php echo __('City'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($city['City']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($city['Province']['name'], array('controller' => 'provinces', 'action' => 'view', $city['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($city['City']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit City'), array('action' => 'edit', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete City'), array('action' => 'delete', $city['City']['id']), null, __('Are you sure you want to delete # %s?', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Jobs'); ?></h3>
	<?php if (!empty($city['Job'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Guild Id'); ?></th>
		<th><?php echo __('Established Time'); ?></th>
		<th><?php echo __('Logo'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('X-gmap'); ?></th>
		<th><?php echo __('Y-gmap'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($city['Job'] as $job): ?>
		<tr>
			<td><?php echo $job['id']; ?></td>
			<td><?php echo $job['title']; ?></td>
			<td><?php echo $job['category_id']; ?></td>
			<td><?php echo $job['guild_id']; ?></td>
			<td><?php echo $job['established_time']; ?></td>
			<td><?php echo $job['logo']; ?></td>
			<td><?php echo $job['tel']; ?></td>
			<td><?php echo $job['fax']; ?></td>
			<td><?php echo $job['city_id']; ?></td>
			<td><?php echo $job['address']; ?></td>
			<td><?php echo $job['x-gmap']; ?></td>
			<td><?php echo $job['y-gmap']; ?></td>
			<td><?php echo $job['description']; ?></td>
			<td><?php echo $job['status_id']; ?></td>
			<td><?php echo $job['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'jobs', 'action' => 'delete', $job['id']), null, __('Are you sure you want to delete # %s?', $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
