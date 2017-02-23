<h1> 
     <?php echo $nomPrenom[0]['students']['nom']; ?> 
	 <?php echo $nomPrenom[0]['students']['prenom']; ?>
</h1>

<?php echo $this->Form->create('MatieresStudent'); ?>
<?php echo $this->Form->input('note',array('label' => $intitule[0]['matieres']['intituler'])); ?>
<?php echo $this->Form->end('Editer'); ?>

