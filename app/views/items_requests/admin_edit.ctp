<div class="itemsRequests form">
<?php echo $this->Form->create('ItemsRequest');?>
	<fieldset>
 		<legend><?php __('Admin Edit Items Request'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('request_id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('quantity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ItemsRequest.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ItemsRequest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Items Requests', true), array('action' => 'index'));?></li>
	</ul>
</div>