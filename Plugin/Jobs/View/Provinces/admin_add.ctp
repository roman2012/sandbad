	<div class="page-title">
		<h3>ایجاد استان جدید</h3>
	</div>
	<div class="row">
		<?php 
			echo $this->Form->create(null,array('class'=>'form-horizontal')); 
			echo $this->Form->input('id');
		?>

			<div class="form-group">
				<label for="inputname" class="col-md-3 control-label">نام استان</label>
				<div class="col-md-6">
					<?php 
				     	$this->Form->inputDefaults(array('label' => false, 'class' => 'form-control', 'div' =>false ));
						echo $this->Form->input('name');
				      ?>
				  </div>
			</div>



			<div class="form-group ">
				<div class="col-md-3 "></div>
				<div class="controls col-md-6">
					<div class="checkbox check-default">
						<?php echo $this->Form->input('show'); ?>
						<label for="ProvinceShow">به صورت پیش فرض قابل رویت باشد.</label>
					</div>
				</div>
			</div>


			<div class="form-group">
				<div class="col-md-9">

					<button class="pull-right btn btn-success btn-cons" type="submit"> <i class="icon-ok"></i>
						ذخیره آیتم جدید
					</button>
				</div>
			</div>
			<hr>
			<?php echo $this->Form->end(); ?>

	</div>


