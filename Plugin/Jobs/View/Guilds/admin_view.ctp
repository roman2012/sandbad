<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Guilds'), h($guild['Guild']['title']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Guilds'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Guild'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Guild'), array('action' => 'edit', $guild['Guild']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Guild'), array('action' => 'delete', $guild['Guild']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $guild['Guild']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Guilds'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Guild'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		</ul>
	</div>
</div>

<div class="guilds view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($guild['Guild']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Title'); ?></dt>
		<dd>
			<?php echo h($guild['Guild']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
