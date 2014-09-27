<div class="page-title">
	<h3>لیست اصناف</h3>
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
		<a href="/sandbad/admin/jobs/Guilds/add">
			<button class="btn btn-block btn-success" type="button"> <i class="fa fa-folder"></i>
				ایجاد صنف جدید
			</button>
		</a>

	</div>

</div>
<hr>
<div class="row">
	<table class="table  table-hover general-table table-striped">
		<thead>
			<tr>
				<th>نام صنف</th>
				<th>موضوع والد</th>
				<th>وضعیت نمایش</th>
				<th>اقدامات</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($guilds as $guild): ?>
			<tr>
				<td>
					<?php echo h($guild['Guild']['title']); ?>&nbsp;</td>
				<td>
					<?php echo $guild['Category']['title']; ?>
				</td>
<!-- 				<td>
					<?php 
						echo $this->element('admin/toggle', array(
							'id'     => $guild['Guild']['id'],
							'status' => (int)$guild['Guild']['show'],
						));
					 ?>
				</td> -->
				<td>
					<?php if ($guild['Guild']['show']): ?>
						<button type="button" class="btn btn-primary btn-xs btn-mini"> <i class="fa fa-eye"></i>
							قابل روئیت
						</button>					
					<?php else: ?>
						<button type="button" class="btn btn-danger btn-xs btn-mini"><i class="fa fa-eye-slash"></i> پنهان</button>
					<?php endif ?>
				</td>
				<td class="item-actions">
					
						<?php echo $this->Croogo->adminRowAction('حذف', array('action' => 'delete', $guild['Guild']['id']), array('icon' => 'fa fa-eraser', 'class'=>'btn btn-danger btn-xs btn-mini', 'escape' => true), __d('croogo', 'آیا مطمئن هستید؟', $guild['Guild']['id'])); ?>
					
						<?php echo $this->Croogo->adminRowAction('ویرایش', array('action' => 'edit', $guild['Guild']['id']),array('icon' => 'fa fa-pencil','class'=>'btn btn-white btn-xs btn-mini')); ?>


				</td>
			</tr>
			<?php endforeach; ?></tbody>
	</table>
</div>
</div>
