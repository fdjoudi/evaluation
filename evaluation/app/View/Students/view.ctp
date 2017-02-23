<h1> liste des matieres  </h1>
	
<table>
	<tr>
		<th> Intituler </th>
		<th> note /20</th>
 	</tr>

<?php foreach ($values as $value): ?>
	<tr>

	    <td><?php echo $value['matieres']['intituler'];?></td>
	    <td><?php if ($value['matieres_students']['note'] == null) 
	  			{
	  				 echo $this->Html->link( 'Ajouter', 
	array('controller'=> 'matieres_Students', 'action' => 'editNote', $value['matieres_students']['student_id'] ,$value['matieres_students']['matiere_id']));
	  			}else
	  			{

	  			 echo $this->Html->link($value['matieres_students']['note'], 
	array('controller'=> 'matieres_Students', 'action' => 'editNote', $value['matieres_students']['student_id'],$value['matieres_students']['matiere_id'])); 
	  				
	  			} 
			?></td>

	</tr>
<?php endforeach ?>
</table>
<?php unset($value); ?>

