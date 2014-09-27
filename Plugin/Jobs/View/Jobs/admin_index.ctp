<div class="page-title">	
	<h3>لیست همه کسب و کارها</h3>		
</div>
<div class="row">
	    <div class="col-md-8">
<h5>شما هم اکنون میتوانید <span class="badge">2</span> کسب و کار معرفی کنید.</h5>
		</div>

			    <div class="col-md-4">				    
			    	<a href="/sandbad/admin/jobs/jobs/add" method="get" class="btn btn-block btn-success">
			    		<button class="btn btn-block btn-success" type="button">
			    		<i class="fa fa-rocket"></i> 
			    		ایجاد کسب و کار جدید
			    		</button>
			    	</a>
			    </div>

</div>
<hr>
<div class="row">

<table class="table  table-hover general-table table-striped">
        <thead>
        <tr>
            <th>عنوان کامل</th>
            <th>موضوع</th>
            <!-- <th>تعداد بازدید کل</th> -->
            <!-- <th>کیفیت اطلاعات ارسالی</th> -->
            <th>اقدامات</th>
        </tr>
        </thead>
        <tbody>

        <tr>
        	<?php foreach ($jobs as $job): ?>
	<tr>		
		<td>
			<?php echo h($job['Job']['title']); ?>&nbsp;
		</td>
		<td>
			<?php echo $this->Html->link($job['Category']['title'], array('controller' => 'categories', 'action' => 'view', $job['Category']['id'])); ?>
		</td>
		<td></td>

		<td>
			<?php echo $this->Html->link($job['User']['name'], array('controller' => 'users', 'action' => 'view', $job['User']['id'])); ?>
		</td>
		<td class="item-actions">
			<?php echo $this->Croogo->adminRowAction(' نمایش ', array('action' => 'view', $job['Job']['id']), array('icon' => 'eye','class'=>'btn btn-white btn-xs btn-mini')); ?>
			<?php echo $this->Croogo->adminRowAction(' ویرایش ', array('action' => 'edit', $job['Job']['id']), array('icon' => 'pencil','class'=>'btn btn-white btn-xs btn-mini')); ?>
			<?php echo $this->Croogo->adminRowAction(' حذف ', array('action' => 'delete', $job['Job']['id']), array('icon' => 'eraser','class'=>'btn btn-danger btn-xs btn-mini','type'=>'button', 'escape' => true), __d('croogo', 'Are you sure you want to delete # %s?', $job['Job']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
        

        </tbody>
    </table>


</div>




