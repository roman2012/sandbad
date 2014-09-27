<div class="page-title">
	<h3>لیست شهر ها</h3>
</div>

<div class="row">
	<div class="col-md-8">
		<h5>
			شما تاکنون
			<span class="badge"><?php echo $count; ?></span>
			شهرستان ثبت کرده اید.
		</h5>
	</div>

	<div class="col-md-4">
		<a href="/sandbad/admin/jobs/cities/add">
			<button  class="btn btn-block btn-success" type="button"> <i class="fa fa-map-marker"></i>
				ایجاد شهر جدید 
			</button>
		</a>
	</div>

</div>
<hr>

<div class="row">

	<table class="table  table-hover general-table table-striped">
		<thead>
			<tr>
				<th>نام شهرستان</th>
				<th>استان والد</th>
				<th>وضعیت نمایش</th>
				<th>اقدامات</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($cities as $city): ?>
				<tr>
					<td>
						<?php echo h($city['City']['name']); ?>&nbsp;
					</td>
					<td>
						<?php echo $this->Html->link($city['Province']['name'], array('controller' => 'provinces', 'action' => 'view', $city['Province']['id'])); ?>
					</td>
					<td>
						<?php if ($city['City']['show']): ?>
							<button type="button" class="btn btn-primary btn-xs btn-mini">
							<i class="fa fa-eye"></i>
								قابل روئیت
							</button>
						<?php else: ?>
							<button type="button" class="btn btn-danger btn-xs btn-mini"><i class="fa fa-eye-slash"></i> پنهان</button>

						<?php endif ?>
					</td>
					<td class="item-actions">
					<?php echo $this->Croogo->adminRowAction('حذف', array('action' => 'delete', $city['City']['id']), array('icon' => 'fa fa-eraser', 'class'=>'btn btn-danger btn-xs btn-mini', 'escape' => true), __d('croogo', 'آیا مطمئن هستید که قصد حذف کردن شهر مرود نظر را دارید؟', $city['City']['id'])); ?>
					<?php echo $this->Croogo->adminRowAction('ویرایش', array('action' => 'edit', $city['City']['id']), array('icon' => 'pencil','class'=>'btn btn-white btn-xs btn-mini')); ?>
				</td>
				</tr>
		<?php endforeach; ?>



		</tbody>
	</table>

</div>
<?php echo $this->element('admin/pagination'); ?>

