<div class="items form">
<?php echo $this->Form->create('Item');?>
	<fieldset>
 		<legend><?php __('Edit Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_category_id');
		echo $this->Form->input('unit_id');
		echo $this->Form->input('name');
		echo $this->Form->input('price');
		echo $this->Form->input('Request');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Item.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Item.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Items', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Item Categories', true), array('controller' => 'item_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Category', true), array('controller' => 'item_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units', true), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit', true), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requests', true), array('controller' => 'requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Request', true), array('controller' => 'requests', 'action' => 'add')); ?> </li>
	</ul>
</div>