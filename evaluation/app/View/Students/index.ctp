<h1>La liste des eleves</h1>
<?php echo $this->Html->link('Ajouter un nouvel élève à la liste',array('controller'=>'students', 'action'=>'add')) .'<br>';?>
<?php echo $this->Html->link('Afficher la liste de matieres',array('controller'=>'matieres', 'action'=>'index'));?>
<table>
	<tr>
		<th>Nom</th>
		<th>Prenom</th>
		<th>Date de naissance</th>	
		<th colspan="2">Action</th>
	</tr>

<?php foreach ($students as $student): ?>
	<tr>
		<td> <?php echo $this->Html->link($student['Student']['nom'],array('controller'=>'students','action'=>'view',$student['Student']['id']));?> </td>
		<td> <?php echo $student['Student']['prenom'];?> </td>
		<td> <?php echo $student['Student']['date_naissance'];?> </td>
		<td> <?php echo $this->Html->link('modifier', 
			 array('controller'=> 'students', 'action' => 'edit',$student['Student']['id'])); ?> </td>

		<td> <?php echo $this->Form->postlink('Supprimer', array('controller'=>'students','action'=> 'delete', $student['Student']['id']),
		     array('confirm'=> 'voulez-vous vraiment supprimer cet élève?'));?> </td>

	<td> </td>
	</tr>

<?php endforeach ?>
</table>
<?php unset($student); ?>
