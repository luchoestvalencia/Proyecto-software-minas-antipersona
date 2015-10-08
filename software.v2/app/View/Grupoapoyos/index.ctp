<div class="grupoapoyos index">
	<h2><?php echo __('Grupoapoyos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('idgrupoApoyo'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('ugrupoApoyo_idugrupoApoyo'); ?></th>
			<th><?php echo $this->Paginator->sort('listaFavoritos_idlistaFavoritos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($grupoapoyos as $grupoapoyo): ?>
	<tr>
		<td><?php echo h($grupoapoyo['Grupoapoyo']['idgrupoApoyo']); ?>&nbsp;</td>
		<td><?php echo h($grupoapoyo['Grupoapoyo']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($grupoapoyo['Grupoapoyo']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($grupoapoyo['Grupoapoyo']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($grupoapoyo['Grupoapoyo']['ugrupoApoyo_idugrupoApoyo']); ?>&nbsp;</td>
		<td><?php echo h($grupoapoyo['Grupoapoyo']['listaFavoritos_idlistaFavoritos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grupoapoyo['Grupoapoyo']['idgrupoApoyo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grupoapoyo['Grupoapoyo']['idgrupoApoyo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grupoapoyo['Grupoapoyo']['idgrupoApoyo']), array(), __('Are you sure you want to delete # %s?', $grupoapoyo['Grupoapoyo']['idgrupoApoyo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Grupoapoyo'), array('action' => 'add')); ?></li>
	</ul>
</div>
