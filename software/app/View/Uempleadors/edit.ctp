<div class="uempleadors form">
<?php echo $this->Form->create('Uempleador'); ?>
	<fieldset>
		<legend><?php echo __('Edit Uempleador'); ?></legend>
	<?php
		echo $this->Form->input('iduempleador');
		echo $this->Form->input('password');
		echo $this->Form->input('nombreUsuario');
		echo $this->Form->input('usuario_idusuario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Uempleador.iduempleador')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Uempleador.iduempleador'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uempleadors'), array('action' => 'index')); ?></li>
	</ul>
</div>
