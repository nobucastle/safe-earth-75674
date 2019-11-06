<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use bjsmasth\Salesforce;

class AccountsController extends AppController
{
	public $components = ["SFReset"];

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
	}

	public function index()
	{
		$this->autoRender = fales;

		try{
		    $query = 'SELECT Id, Name FROM ACCOUNT LIMIT 100';
		    $crud = new Salesforce\CRUD();
		    print_r("<pre>");
		    print_r($crud->query($query));
		    print_r("</pre>");
		} catch (Exception $e) {
		    echo '捕捉した例外: ', $e->getMessage(), "\n";
		}
	}
}

?> 

