<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Jobs'), h($job['Job']['title']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Jobs'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Job'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Job'), array('action' => 'edit', $job['Job']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Job'), array('action' => 'delete', $job['Job']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Jobs'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Job'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Guilds'), array('controller' => 'guilds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Guild'), array('controller' => 'guilds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="jobs view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Title'); ?></dt>
		<dd>
			<?php echo h($job['Job']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($job['Category']['title'], array('controller' => 'categories', 'action' => 'view', $job['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Guild'); ?></dt>
		<dd>
			<?php echo $this->Html->link($job['Guild']['title'], array('controller' => 'guilds', 'action' => 'view', $job['Guild']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Established Time'); ?></dt>
		<dd>
			<?php echo h($job['Job']['established_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Logo'); ?></dt>
		<dd>
			<?php echo h($job['Job']['logo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Tel'); ?></dt>
		<dd>
			<?php echo h($job['Job']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Fax'); ?></dt>
		<dd>
			<?php echo h($job['Job']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($job['City']['name'], array('controller' => 'cities', 'action' => 'view', $job['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Address'); ?></dt>
		<dd>
			<?php echo h($job['Job']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'X-gmap'); ?></dt>
		<dd>
			<?php echo h($job['Job']['x-gmap']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Y-gmap'); ?></dt>
		<dd>
			<?php echo h($job['Job']['y-gmap']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Description'); ?></dt>
		<dd>
			<?php echo h($job['Job']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Status'); ?></dt>
		<dd>
			<?php echo h($job['Job']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($job['User']['name'], array('controller' => 'users', 'action' => 'view', $job['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
