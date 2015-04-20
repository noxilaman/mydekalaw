<div class="page-header">
	<h2><?php echo __('Groups'); ?></h2>
</div>
<div class="text-right">
<?php echo $this->Html->link(
		'<i class="icon-pencil icon-white"></i> '.__('Add Group'),
	array('admin' => true, 'action' => 'add'), 
	array('class' => 'btn btn-primary','escape' => false)); 
	?>
</div>
<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('{:start} - {:end} of {:count}')));
	?>
</p>
<table class="table">
	<tr>
		<th><?php echo $this->Paginator->sort('c_name'); ?></th>
		<th><?php echo $this->Paginator->sort('c_comment'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php 
//debug($lawdata);
	foreach ($lawdata as $law): ?>
	<tr>
		<td><?php echo h($law['TbLawdatum']['c_name']); ?>&nbsp;</td>
		<td><?php echo h($law['TbLawdatum']['c_comment']); ?>&nbsp;</td>
		<td class="actions">
			    <div class="btn-group">
			    	<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $law['TbLawdatum']['i_id']), array('class' => 'btn btn-primary')); ?>
			    	<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $law['TbLawdatum']['i_id']), array('class' => 'btn btn-danger') , __('Are you sure you want to delete # %s?', $law['TbLawdatum']['i_id'])); ?>
			    </div>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<?php echo $this->Paginator->pagination(array('div' => 'pagination pagination-right')); ?>

