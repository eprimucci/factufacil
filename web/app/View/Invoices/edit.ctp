<div class="invoices form">
<?php echo $this->Form->create('Invoice');?>
	<fieldset>
		<legend><?php echo __('Edit Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('issued_date');
		echo $this->Form->input('number');
		echo $this->Form->input('period');
		echo $this->Form->input('paid');
		echo $this->Form->input('paid_date');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('course_id');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Invoice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Invoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
