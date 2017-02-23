<?php echo $this->Form->create('Student'); ?>
<?php echo $this->Form->input('nom'); ?>
<?php echo $this->Form->input('prenom'); ?>
<?php echo $this->Form->input('date_naissance'); ?>
<?php echo $this->Form->input('id',array('type','hidden')); ?>
<?php echo $this->Form->end('Editer'); ?>
