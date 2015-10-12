<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class LivredorsController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index','add']);
    }

    public $paginate = [
        //'fields' => ['Livredors.id', 'Livredors.created'],
        'limit' => 5,
        'order' => ['Livredors.created' => 'desc'],
		//'contain' => [],
    ];
		
    public function initialize() {
        parent::initialize();
        $this->loadComponent('Paginator');
    }
	
	function index() {
		$comments = $this->paginate();
	 	$this->set('e', '');
	 	$this->set('comments', $comments);
    }

    public function add() {
    	if(!$this->request->is('post')) {
	        throw new BadRequestException();
	    }
        if ($this->request->is('post')) {
        	$pseudo = $_POST['pseudo'];
            $text = $_POST['text'];
            if ($text=='') {
                //$this->Flash->error('Votre commentaire ne peut pas être vide.');
                $this->Flash->set('Votre commentaire ne peut pas être vide.', ['element' => 'growl_error']);
            } else {
            	$Livredors = TableRegistry::get('Livredors');
            	$e = $Livredors->newEntity();
				$e->pseudo = $pseudo;
				$e->text = $text;
				if ($Livredors->save($e)) {
                	//$this->Flash->success('Votre commentaire a été ajouté.');
                	$this->Flash->set('Votre commentaire a été ajouté.', ['element' => 'growl_success']);
				}				
	        }
        }
      	return $this->redirect(['action' => 'index']);
    }

}
