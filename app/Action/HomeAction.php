<?php 

namespace App\Action;

final class HomeAction extends Action
{
	// Home
	public function index($request, $response)
	{
		$vars = array();

		$response = $this->view->render($response, 'template.phtml', $vars);

		return $response;

	}
	// Noticias
	public function noticias($request, $response)
	{
		$vars['page'] = 'noticias';

		$response = $this->view->render($response, 'template.phtml', $vars);

		return $response;

	}
	// Sobre
	public function sobre($request, $response)
	{
		$vars['page'] = 'sobre';

		$response = $this->view->render($response, 'template.phtml', $vars);

		return $response;

	}
}

 ?>
