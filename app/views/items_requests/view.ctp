<div class="itemsRequests view">
<h2><?php  __('Items Request');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $itemsRequest['ItemsRequest']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Request Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $itemsRequest['ItemsRequest']['request_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Item Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $itemsRequest['ItemsRequest']['item_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quantity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $itemsRequest['ItemsRequest']['quantity']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Items Request', true), array('action' => 'edit', $itemsRequest['ItemsRequest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Items Request', true), array('action' => 'delete', $itemsRequest['ItemsRequest']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $itemsRequest['ItemsRequest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Requests', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Request', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
