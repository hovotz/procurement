<div class="itemsRequests form">
<?php echo $this->Form->create('ItemsRequest');?>
	<fieldset>
 		<legend><?php __('Add Items Request'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Items Requests', true), array('action' => 'index'));?></li>
	</ul>
</div>