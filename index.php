<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use bjsmasth\Salesforce;

class AccountsController extends AppController
{
	public $components = ["SFReset"]

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
	}


}

?> 

