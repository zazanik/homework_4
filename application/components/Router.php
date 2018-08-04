<?php

namespace zazanik\hw\components;

/**
 * Class Router
 * @package zazanik\hw\components
 */
class Router
{
	/**
	 * @var mixed
	 */
	private $routes;

	/**
	 * Router constructor.
	 */
	public function __construct()
	{
		$routesPath = ROOT.'/application/config/routes.php';
		$this->routes = include($routesPath);
	}

	/**
	 * @return string
	 */
	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');
		}
	}

	public function run()
	{
		$uri = $this->getURI();
		foreach ($this->routes as $uriPattern => $path) {
			if(preg_match("~$uriPattern~", $uri)) {
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				$segments = explode('/', $internalRoute);
				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);
				$actionName = 'action'.ucfirst(array_shift($segments));
				$parameters = $segments;
				$class = "\\zazanik\\hw\\controllers\\" . $controllerName;
				$controllerObject = new $class();
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				if ($result != null) {
					break;
				}
			}
		}
	}
}