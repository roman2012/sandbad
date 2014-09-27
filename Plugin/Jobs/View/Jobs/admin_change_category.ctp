<?php foreach ($guilds as $key => $value): ?>

<option value=<?php echo $value['Guild']['id']; ?> >
	<?php echo $value['Guild']['title']; ?>
</option>
<?php endforeach; ?>