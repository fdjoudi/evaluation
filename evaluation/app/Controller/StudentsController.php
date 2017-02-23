<?php 

/**
 * le controlleur qui permet une manipulation sur l'ensemble des données qui se trouve dans la table 
 * students
 * 
 * @author DJOUDI Fares
 */
class StudentsController extends AppController
{
	public $uses = array('MatieresStudent','Student','Matiere');



	/**
	 * envoie les données qui se trouve dans la table students à la view index.ctp
	 * @param void 
	 *
	 */
	public function index()
	{
		$this->set('students',$this->Student->find('all'));
	}



	/**
	 * ajouter un élève 
	 * @param void
	 */
	public function add()
	{
		if($this->request->is('post'))
		{
			$this->Student->create();

			if($this->Student->save($this->request->data))
			{
				$this->Session->setFlash('L\'éleve est ajouter avec succès');
				$this->redirect(array('controller'=> 'students' , 'action' => 'index'));
			}
			else
			{
				$this->Session->setFlash('Erreur lors de la création de l\'éleve');
			}
		}
	}






	/**
	 * modifié un élève 
	 * @param $id : identifiant de l'élève à modifier
	 */
	public function edit($id = null)
	{
		if(!$id)
		{
			throw new NotFoundException(__('Eleve invalide !'));
		}

		$student=$this->Student->findById($id);
		if(!$student)
		{
			throw new NotFoundException(__('Eleve invalide !'));
		}

		if($this->request->is('post') || $this->request->is('put'))
		{
			$this->Student->id = $id;
			if($this->Student->save($this->request->data))
			{
				$this->Session->setFlash('l\'éleve est modifié avec succes !');
				$this->redirect(array('action'=>'index'));
			}
			else
			{
				$this->Session->setFlash(__('Erreur lors de la modification de l\'éleve'));
			}
		}

		// pour que le contenant soit préremplit
		if(!$this->request->data)
		{
			$this->request->data = $student;
		}
	}



	/**
	 * supprime un élève 
	 * @param $id: identifiant de l'élève à supprimer 
	 */
	public function delete($id)
	{
		if($this->request->is('get'))
		{
		 	throw new MethodeNotAllowedException();
		}

		 if($this->Student->delete($id)){
		 	$this->Session->setFlash('Elève #'.$id.'supprimé avec succès !');
		 	$this->redirect(array('action'=>'index'));
		}
	}
		



	/**
	 * envoie les champs intituler et note qui se touvre dans les table matieres et matieres_students à la * view view.ctp 
	 * @param $id: l'identifiant de l'élève
	 * @
	 */
	public function view($id)
	{

		$this->set('values',$this->MatieresStudent->query("SELECT  student_id,matiere_id,intituler, note FROM  matieres , matieres_students WHERE $id = matieres_students.student_id AND matieres.id = matieres_students.matiere_id;"));

	}
}

?>