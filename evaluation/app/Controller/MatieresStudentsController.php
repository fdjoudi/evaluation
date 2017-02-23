<?php 
	/**
	 * 
	 * @author DJOUDI Fares
	 */
	class MatieresStudentsController extends AppController
	{	
		
		public function index()
		{

		}


		/**
		 * permet de modifier ou d'ajouter une note dans une matiere à un élève donné 
		 * @param $ids: identifiant de l'élève
		 * @param $idm: identifiant de la matiere
		 */
		public function editNote($ids,$idm){

		if(!$ids || !$idm)
		{
			throw new NotFoundException('invalide argument !');
		}

		$sm = $this->MatieresStudent->find('all',array(
				'conditions' => array('MatieresStudent.student_id' => $ids,'MatieresStudent.matiere_id' => $idm))
			);

		$intitule = $this->MatieresStudent->query("SELECT intituler From matieres WHERE matieres.id = $idm;");

		$nomPrenom = $this->MatieresStudent->query("SELECT nom, prenom From students WHERE students.id = $ids;");

		$this->set(compact('intitule'));
		$this->set(compact('nomPrenom'));

		if(!$sm)
		{
			throw new NotFoundException('invalide argument !');	
		}

		if($this->request->is('post') || $this->request->is('put')){
			$this->MatieresStudent->student_id = $ids;
			$this->MatieresStudent->matiere_id = $idm;
			$n = (int) $this->request->data['MatieresStudent']['note'];
			$this->MatieresStudent->query("UPDATE matieres_students 
											  SET note = $n
											  WHERE student_id = $ids AND matiere_id = $idm;");
	
				$this->Session->setFlash('la note a été modifié avec succes !');
				$this->redirect(array('controller'=> 'students','action'=>'view',$ids));
		}

		// pour que le contenant soit préremplit
		if(!$this->request->data)
		{
			$this->request->data['MatieresStudent']['note'] = $sm[0]['MatieresStudent']['note'];
		}

	}
	}
?>