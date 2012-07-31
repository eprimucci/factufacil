<div class="coursesCustomers view">
<h2><?php  echo __('Courses Customer');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($coursesCustomer['CoursesCustomer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursesCustomer['Course']['title'], array('controller' => 'courses', 'action' => 'view', $coursesCustomer['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($coursesCustomer['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $coursesCustomer['Customer']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Courses Customer'), array('action' => 'edit', $coursesCustomer['CoursesCustomer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Courses Customer'), array('action' => 'delete', $coursesCustomer['CoursesCustomer']['id']), null, __('Are you sure you want to delete # %s?', $coursesCustomer['CoursesCustomer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courses Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
	</ul>
</div>
