<div class="items index">
	<h2><?php __('Items');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('item_category_id');?></th>
			<th><?php echo $this->Paginator->sort('unit_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($items as $item):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $item['Item']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($item['ItemCategory']['name'], array('controller' => 'item_categories', 'action' => 'view', $item['ItemCategory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($item['Unit']['name'], array('controller' => 'units', 'action' => 'view', $item['Unit']['id'])); ?>
		</td>
		<td><?php echo $item['Item']['name']; ?>&nbsp;</td>
		<td><?php echo $item['Item']['price']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $item['Item']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $item['Item']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Item', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Categories', true), array('controller' => 'item_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Category', true), array('controller' => 'item_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units', true), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit', true), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requests', true), array('controller' => 'requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Request', true), array('controller' => 'requests', 'action' => 'add')); ?> </li>
	</ul>
</div>