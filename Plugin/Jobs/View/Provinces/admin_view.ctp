<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Provinces'), h($province['Province']['name']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Provinces'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Province'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Province'), array('action' => 'edit', $province['Province']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Province'), array('action' => 'delete', $province['Province']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Provinces'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Province'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="provinces view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($province['Province']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Name'); ?></dt>
		<dd>
			<?php echo h($province['Province']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
