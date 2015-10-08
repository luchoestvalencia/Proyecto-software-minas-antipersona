<div class="lugarempleos index">
	<h2><?php echo __('Lugarempleos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idlugarEmpleo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('uempleador_iduempleador'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lugarempleos as $lugarempleo): ?>
	<tr>
		<td><?php echo h($lugarempleo['Lugarempleo']['idlugarEmpleo']); ?>&nbsp;</td>
		<td><?php echo h($lugarempleo['Lugarempleo']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($lugarempleo['Lugarempleo']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($lugarempleo['Lugarempleo']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($lugarempleo['Lugarempleo']['uempleador_iduempleador']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lugarempleo['Lugarempleo']['idlugarEmpleo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lugarempleo['Lugarempleo']['idlugarEmpleo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lugarempleo['Lugarempleo']['idlugarEmpleo']), array(), __('Are you sure you want to delete # %s?', $lugarempleo['Lugarempleo']['idlugarEmpleo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Lugarempleo'), array('action' => 'add')); ?></li>
	</ul>
</div>
