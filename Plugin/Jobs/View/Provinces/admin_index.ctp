<div class="page-title">
	<h3>لیست استان ها</h3>
</div>

<div class="row">
	<div class="col-md-8">
		<h5>
			شما تاکنون
			<span class="badge">2</span>
			استان ثبت کرده اید.
		</h5>
	</div>

	<div class="col-md-4">
		<a href="/sandbad/admin/jobs/provinces/add">
			<button class="btn btn-block btn-success" type="button"> <i class="fa fa-map-marker"></i>
				ایجاد استان جدید
			</button>
		</a>
	</div>

</div>
<hr>

<div class="row">

	<table class="table  table-hover general-table table-striped">
		<thead>
			<tr>
				<th>نام استان</th>
				<th>تعداد شهرستان</th>
				<th>وضعیت نمایش</th>
				<th>اقدامات</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($provinces as $province): ?>
			<tr>
				<td>
					<?php echo h($province['Province']['name']); ?>&nbsp;</td>
				<td>
					<?php 
						echo count($province['City']);
					?>
				</td>
				<?php if ($province['Province']['show']): ?>				
				<td>
					<button type="button" class="btn btn-primary btn-xs btn-mini"> <i class="fa fa-eye"></i>
						قابل روئیت
					</button>
				</td>
				<?php else: ?>
				<td>
					<button type="button" class="btn btn-danger btn-xs btn-mini">
						<i class="fa fa-eye-slash"></i>
						پنهان
					</button>
				</td>
				<?php endif ?>

				<td class="item-actions">
					<?php echo $this->Croogo->adminRowAction('حذف', array('action' => 'delete', $province['Province']['id']), array('icon' => 'fa fa-eraser', 'class'=>'btn btn-danger btn-xs btn-mini', 'escape' => true), __d('croogo', ' مطمئن هستید که میخواهید ایتم مورد نظر را حذف کنید ؟؟', $province['Province']['id'])); ?>
					<?php echo $this->Croogo->adminRowAction('ویرایش', array('action' => 'edit', $province['Province']['id']), array('icon' => 'pencil','class'=>'btn btn-white btn-xs btn-mini')); ?>
				</td>
			</tr>
			<?php endforeach; ?></tbody>
	</table>
</div>
<?php echo $this->element('admin/pagination'); ?>