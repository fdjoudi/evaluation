<?php 

/**
 * le controlleur qui permet une manipulation sur l'ensemble des données qui se trouve dans la table matieres
 *
 * @author DJOUDI Fares
 */

class MatieresController extends AppController
{
	

	/**
	 * envoie les données qui se trouve dans la table matière à la view index.ctp
	 * @param void
	 *
	 */
	public function index()
	{
		$this->set('matieres',$this->Matiere->find('all'));		
	}


	/**
	 * ajouter une nouvelle matière à la liste 
	 * @param void
	 *
	 */
	public function add()
	{
		if($this->request->is('post'))
		{
			$this->Matiere->create();
			if($this->Matiere->save($this->request->data))
			{
				$this->Session->setFlash('Matière ajouter avec succès!');
				$this->redirect(array('controller' => 'matieres', 'action' => 'index'));
			}
			else
			{
				$this->Session->setFlash('Erreur lors de l\'ajout de la matière!');	
			}
		}
	}


	/**
	 * modifié l'intituler d'une matière
	 * @param $id: identifiant de la matière
	 *
	 */
	public function edit($id)
	{
		if(!$id)
		{
			throw new NotFoundException('Matière invalide !');
		}
		$matiere = $this->Matiere->findById($id);
		if(!$matiere)
		{
			throw new NotFoundException('Matière invalide !');
			
		}
		else
		{
			if($this->request->is('post') || $this->request->is('put'))
			{
				$this->Matiere->id = $id;
				if($this->Matiere->save($this->request->data))
				{
					$this->Session->setFlash('Matière modifié avec succès !');
					$this->redirect(array('controller' => 'matieres', 'action'=> 'index'));
				}
				else
				{
					$this->Session->setFlash('erreur lors de la modification de la matière');
				}
			}
		}

		if(!$this->request->data)
		{
			$this->request->data = $matiere;
		}
	}



	/**
	 * supprimer une matière
	 * @param $id: identifiant de la matière
	 *
	 */
	public function delete($id)
	{
		if($this->request->is('get'))
		{
			throw new MethodeNotAllowedException();
		}

		if($this->Matiere->delete($id)){
			$this->Session->setFlash('Matière #'.$id.'supprimé avec succès !');
			$this->redirect(array('controller' => 'matieres' ,'action'=>'index'));
		}
	}

}
?>