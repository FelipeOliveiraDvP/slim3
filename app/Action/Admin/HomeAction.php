<?php 

namespace App\Action\Admin;

use App\Action\Action;

final class HomeAction extends Action
{
	
	// Home Admin
	public function index($request, $response)
	{
		$vars = array();

		$response = $this->view->render($response, 'tpladmin.phtml', $vars);

		return $response;	
	}

	// Login Admin
	public function login($request, $response)
	{
		$vars = array();

		$response = $this->view->render($response, 'admin/login.phtml', $vars);

		return $response;	
	}
	
}

 ?>
