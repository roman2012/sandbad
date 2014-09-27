<div class="page-title">
	<h3>ویرایش صنف</h3>
</div>
<div class="row">
	<?php 
	echo $this->Form->create('Guild',array('class'=>'form-horizontal')); 
	echo $this->Form->input('id');
	$this->Form->inputDefaults(array('label' => false, 'class' => 'form-control', 'div' =>false ));
?>

	<div class="form-group">
		<label for="inputname" class="col-md-3 control-label">عنوان آیتم</label>
		<div class="col-md-6">
			<?php echo $this->Form->input('title'); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="inputname" class="col-md-3 control-label">موضوع فعالیت</label>
		<div class="col-md-6">
			<?php 
				echo $this->Form->input('category_id');				
				
			?>
		</div>
	</div>

	<div class="form-group ">
		<div class="col-md-3 "></div>
		<div class="controls col-md-6">
			<div class="checkbox check-default">				
				<?php echo $this->Form->input('show',array('type'=>'checkbox')); ?>
				<label for="GuildShow">به صورت پیش فرض قابل رویت باشد.</label>
			</div>
		</div>
	</div>








	<div class="form-group">
		<div class="col-md-9">
			<!-- <button class="pull-right btn btn-success btn-cons" type="submit"> <i class="icon-ok"></i>
			ذخیره
		</button>
		-->
		<?php  
	    	$options = array(
	    		'label'=>
		'ذخیره',
	    		'class'=>'pull-right btn btn-success btn-cons',
	    		);
	    	echo $this->Form->end($options); 
	    ?>
	</div>
</div>
<hr></div>










