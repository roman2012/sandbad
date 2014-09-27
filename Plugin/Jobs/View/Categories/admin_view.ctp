<?php
$this->viewVars['title_for_layout'] = sprintf('%s: %s', __d('croogo', 'Categories'), h($category['Category']['title']));

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Categories'), array('action' => 'index'));

?>
<h2 class="hidden-desktop"><?php echo __d('croogo', 'Category'); ?></h2>

<div class="row-fluid">
	<div class="span12 actions">
		<ul class="nav-buttons">
		<li><?php echo $this->Html->link(__d('croogo', 'Edit Category'), array('action' => 'edit', $category['Category']['id']), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Form->postLink(__d('croogo', 'Delete Category'), array('action' => 'delete', $category['Category']['id']), array('button' => 'danger', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'List Categories'), array('action' => 'index'), array('button' => 'default')); ?> </li>
		<li><?php echo $this->Html->link(__d('croogo', 'New Category'), array('action' => 'add'), array('button' => 'success')); ?> </li>
		</ul>
	</div>
</div>

<div class="categories view">
	<dl class="inline">
		<dt><?php echo __d('croogo', 'Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('croogo', 'Title'); ?></dt>
		<dd>
			<?php echo h($category['Category']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
