<?php
$this->viewVars['title_for_layout'] = __d('croogo', 'Jobs');
$this->extend('/Common/admin_edit');

$this->Html
	->addCrumb('', '/admin', array('icon' => 'home'))
	->addCrumb(__d('croogo', 'Jobs'), array('action' => 'index'));

if ($this->action == 'admin_edit') {
	$this->Html->addCrumb($this->data['Job']['title'], '/' . $this->request->url);
	$this->viewVars['title_for_layout'] = 'Jobs: ' . $this->data['Job']['title'];
} else {
	$this->Html->addCrumb(__d('croogo', 'Add'), '/' . $this->request->url);
}

echo $this->Form->create('Job');

?>
<div class="jobs row-fluid">
	<div class="span8">
		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'Job'), '#job');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">
			<div id='job' class="tab-pane">
			<?php
				echo $this->Form->input('id');
				$this->Form->inputDefaults(array('label' => false, 'class' => 'span10'));
				echo $this->Form->input('title', array(
					'label' => 'Title',
				));
				echo $this->Form->input('category_id', array(
					'label' => 'Category Id',
				));
				echo $this->Form->input('guild_id', array(
					'label' => 'Guild Id',
				));
				echo $this->Form->input('established_time', array(
					'label' => 'Established Time',
				));
				echo $this->Form->input('logo', array(
					'label' => 'Logo',
				));
				echo $this->Form->input('tel', array(
					'label' => 'Tel',
				));
				echo $this->Form->input('fax', array(
					'label' => 'Fax',
				));
				echo $this->Form->input('city_id', array(
					'label' => 'City Id',
				));
				echo $this->Form->input('address', array(
					'label' => 'Address',
				));
				echo $this->Form->input('x-gmap', array(
					'label' => 'X-gmap',
				));
				echo $this->Form->input('y-gmap', array(
					'label' => 'Y-gmap',
				));
				echo $this->Form->input('description', array(
					'label' => 'Description',
				));
				echo $this->Form->input('status', array(
					'label' => 'Status',
				));
				echo $this->Form->input('user_id', array(
					'label' => 'User Id',
				));
			?>
			</div>
			<?php echo $this->Croogo->adminTabs(); ?>
		</div>

	</div>

	<div class="span4">
	<?php
		echo $this->Html->beginBox(__d('croogo', 'Publishing')) .
			$this->Form->button(__d('croogo', 'Apply'), array('name' => 'apply')) .
			$this->Form->button(__d('croogo', 'Save'), array('class' => 'btn btn-primary')) .
			$this->Html->link(__d('croogo', 'Cancel'), array('action' => 'index'), array('class' => 'btn btn-danger')) .
			$this->Html->endBox();
		?>
	</div>

</div>
<?php echo $this->Form->end(); ?>
