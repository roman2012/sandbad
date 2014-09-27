<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Cities'), h($city['City']['name']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Cities'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'City'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit City'), array('action' => 'edit', $city['City']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete City'), array('action' => 'delete', $city['City']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Cities'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New City'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Provinces'), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Province'), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Job'), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="cities view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($city['City']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Province'); ?></dt>
		<dd>
			<?php echo $this->Html->link($city['Province']['name'], array('controller' => 'provinces', 'action' => 'view', $city['Province']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Name'); ?></dt>
		<dd>
			<?php echo h($city['City']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
