<div class="page-title">
	<h3>لیست موضوعات</h3>
</div>

<div class="row">
	<div class="col-md-8">
		<h5>
			شما تاکنون
			<span class="badge"><?php echo $count; ?></span>
			موضوع ثبت کرده اید.
		</h5>
	</div>
	<div class="col-md-4">
		<a href="/sandbad/admin/jobs/Categories/add">
			<button class="btn btn-block btn-success" type="button"> <i class="fa fa-folder"></i>
				ایجاد موضوع جدید
			</button>
		</a>

	</div>

</div>
<hr>
<div class="row">
	<table class="table  table-hover general-table table-striped">
		<thead>
			<tr>
				<th>عنوان موضوع</th>
				<th>تعداد صنف</th>
				<th>وضعیت نمایش</th>
				<th>اقدامات</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($categories as $category): ?>
			<tr>
				<td>
					<?php echo h($category['Category']['title']); ?>&nbsp;</td>
				<td>
					<?php echo count($category['Guild']); ?>
				</td>
				<td>
					<?php if ($category['Category']['show']): ?>
						<button type="button" class="btn btn-primary btn-xs btn-mini"> <i class="fa fa-eye"></i>
						قابل روئیت
					</button>
					<?php else: ?>
					<button type="button" class="btn btn-danger btn-xs btn-mini"><i class="fa fa-eye-slash"></i> پنهان</button>

					<?php endif ?>
					
				</td>
				<td class="item-actions">					
					<?php echo $this->Croogo->adminRowAction('حذف', array('action' => 'delete', $category['Category']['id']), array('class'=>"btn btn-danger btn-xs btn-mini",'icon'=>'fa fa-eraser'), __d('croogo', 'آیا مطمئن هستید؟؟؟', $category['Category']['id'])); ?>					
				
					<?php echo $this->Croogo->adminRowAction('ویرایش', array('action' => 'edit', $category['Category']['id']),array('class'=>"btn btn-white btn-xs btn-mini",'icon'=>'fa fa-pencil')); ?>
				

				</td>
			</tr>
			<?php endforeach; ?></tbody>
	</table>
</div>
</div>