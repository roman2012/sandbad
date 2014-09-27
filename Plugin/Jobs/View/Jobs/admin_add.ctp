<div class="page-title">
	<h3>کسب و کار جدید</h3>
</div>
<div class="row">
	<?php 
		echo $this->Form->create('Job',array('class'=>'form-horizontal')); 
		echo $this->Form->input('id');
	?>
	<div class="form-group">
		<label for="inputname" class="col-md-3 control-label">عنوان کامل کسب و کار</label>
		<div class="col-md-6">
			<?php 
	     	$this->
			Form->inputDefaults(array('label' => false, 'class' => 'form-control', 'div' =>false ));
			echo $this->Form->input('title');
	      ?>
			<span class="help-block">
				مثلا: کانون آگهی و تبلیغات کارنجک یا رستوران ایتالیائی جنوبگان
			</span>
		</div>
	</div>

	<div class="form-group">
		<label for="inputname" class="col-md-3 control-label">نام و نام خانوادگی مدیریت</label>
		<div class="col-md-6">
			<input type="text" class="form-control" id="inputname"></div>
	</div>

	<div class="form-group">
		<label for="inputname" class="col-md-3 control-label">موضوع فعالیت</label>
		<div class="col-md-6">
			<?php 
							echo $this->Form->input('categories',array(
								'after' => $this->Html->image('Jobs.bar.gif',array('id'=>'change_category')),
								));
						 ?>
		</div>
	</div>
	<div class="form-group">
		<label for="inputname" class="col-md-3 control-label">موضوع فعالیت</label>
		<div class="col-md-6">
			<?php 
							echo $this->Form->input('guilds');
						 ?>
		</div>
	</div>

	<hr>

	<div class="form-group ">
		<label for="gender" class="col-md-3 control-label">تاریخ تاسیس</label>
		<div class="controls">
			<div class="checkbox check-default">
				<input id="checkbox1" type="checkbox" value="1">
				<label for="checkbox1">تاریخ دقیق شروع کسب و کارم را به خاطر دارم.</label>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-3 "></div>
		<div class="col-md-2">

			<select id="remote" style="width:100%">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>

		</div>
		<div class="col-md-2">
			<select id="remote" style="width:100%">
				<option value="1">فروردین</option>
				<option value="2">اردیبهشت</option>
				<option value="3">خرداد</option>
				<option value="4">تیر</option>
				<option value="5">مرداد</option>
				<option value="6">شهریور</option>
				<option value="7">مهر</option>
				<option value="8">آبان</option>
				<option value="9">آذر</option>
				<option value="10">دی</option>
				<option value="11">بهمن</option>
				<option value="12">اسفند</option>
			</select>

		</div>
		<div class="col-md-2">
			<select id="remote" style="width:100%">
				<option value="1">1366</option>
				<option value="1">1367</option>
				<option value="1">1368</option>
			</select>

		</div>

	</div>

	<hr>

	<!-- 	<div class="form-group">
	<?php  echo $this->
	Form->input('province_id', array(
            'default' => $province_id,
            'label'   => array(
                'class' => 'col-lg-3 control-label',
                'text'  =>'استان'
        )));  ?>
</div>
-->
<div class="form-group">
	<label for="inputfamily" class="col-md-3 control-label">شهر</label>
	<div class="col-md-6">
		<?php  echo $this->Form->input('city_id', array(
		        'type'  => 'select',                       
		        'after' => $this->Html->image('bar.gif',array('id'=>'city_load')),
		        ));  ?>
	</div>
</div>

<div class="form-group">
	<label for="inputfamily" class="col-md-3 control-label">آدرس</label>
	<div class="col-md-6">
		<?php 
echo $this->				
		Form->input('address',array('type'=>'textarea'));
?>
	</div>
</div>

<div class="form-group">
	<label for="inputname" class="col-md-3 control-label">کد پستی</label>
	<div class="col-md-6">
		<?php echo $this->Form->input('zip_code'); ?></div>
</div>

<div class="form-group">
	<label for="inputname" class="col-md-3 control-label">محل دقیق روی نقشه</label>
	<div class="col-md-6">
		<button class="btn btn-block btn-warning" data-toggle="modal" data-target="#myModal" type="button"> <i class="fa fa-map-marker"></i>
			انتخاب دقیق محل فعالیت روی نقشه
		</button>
	</div>
</div>
<hr>

<div class="form-group">
	<label for="inputname" class="col-md-3 control-label">شماره تلفن</label>
	<div class="col-md-6">
		<?php echo $this->Form->input('tel'); ?></div>
</div>

<div class="form-group">
	<label for="inputname" class="col-md-3 control-label">شماره نمابر(فکس)</label>
	<div class="col-md-6">
		<?php echo $this->Form->input('fax'); ?></div>
</div>

<div class="form-group">
	<label for="inputname" class="col-md-3 control-label">شماره همراه</label>
	<div class="col-md-6">
		<?php echo $this->Form->input('mobile'); ?></div>
</div>

<div class="form-group">
	<label for="inputname" class="col-md-3 control-label">آدرس وبسایت</label>
	<div class="col-md-6">
		<?php echo $this->Form->input('web_address'); ?></div>
</div>

<div class="form-group">
	<label for="inputname" class="col-md-3 control-label">آدرس پست الکترونیک</label>
	<div class="col-md-6">
		<?php echo $this->Form->input('email'); ?></div>
</div>

<hr>

<div class="form-group">
	<label for="inputfamily" class="col-md-3 control-label">متن توضیحات</label>
	<div class="col-md-6">
		<?php echo $this->Form->input('description',array('type'=>'textarea')); ?></div>
</div>

<hr>

<div class="form-group">
	<div class="col-md-9">
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
<hr>
</div>


<script>
	$('#JobCategories').change(function(){
           var formData = $(this).parents('form').serialize();
           $.ajax({
               type: "POST",
               url: 'change_category',
               data: formData,             
               success: function(msg){
                         $('#JobGuilds').html(msg);               
               }
             });
         });
         $('#change_category').hide();
         // $('#cities').hide();
         $(document).ajaxStart(function(){
             $('#change_category').show();
             // $('#cities').show();
          }).ajaxStop(function(){
             $('#change_category').hide();
          });
</script>