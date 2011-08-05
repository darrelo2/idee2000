<?php
// {app}/error.php
class AppError extends ErrorHandler {
 
	function __construct($method, $messages)
	{
		$params = Router::getParams();
 
		// Comme dis dans l'exemple, on veut une 404 pour les 2 methodes suivantes
		if ($method == 'missingController' || $method == 'missingView')
		{
			// Ca c'est une methode custom pour gerer l'affichage
			$this->missingControllerorView($params);
		}
		else
		parent::__construct($method, $messages);
 
	}
 
	// La methode custom en question
	function missingControllerorView($params)
	{
		$this->controller =& new AppController();
		$this->controller->_set(Router::getPaths());
		$this->controller->params = $params;
		$this->controller->constructClasses();
		$this->controller->viewPath = $params['controller'];
		header("HTTP/1.0 404 Not Found");
		$this->controller->render('/errors/error404', 'error');
		e($this->controller->output);
		exit;
	}
}
?>