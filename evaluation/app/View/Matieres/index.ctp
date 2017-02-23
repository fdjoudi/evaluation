<h1>Liste des Matieres</h1>
<?php echo $this->Html->link('Ajouter une nouvelle matière à la liste',array('controller'=>'Matieres', 'action'=>'add'));?>
<table>
	<tr>
		<th> Intituler </th>
		<th colspan="2"> Action </th>
	</tr>
<?php foreach ($matieres as $matiere): ?>
	<tr>
		<td> <?php echo $matiere['Matiere']['intituler']; ?> </td>

		<td> <?php echo $this->Html->link('Modifier',array('controller' => 'matieres', 'action' => 'edit',$matiere['Matiere']['id'])); ?></t

		<td> <?php echo $this->Form->postlink('Supprimer',
			array('controller' => 'matieres','action' => 'delete', $matiere['Matiere']['id']),
			array('confirm' =>'Voulez vous vraiment supprimer cette matière?')
		); ?></td>
	</tr>

<?php endforeach ?>
<?php unset($matiere) ?>
</table>