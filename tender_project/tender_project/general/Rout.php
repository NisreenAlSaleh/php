<?php

class Routing{
public $routes=array();
function router()
{
$url = isset($_GET['url']) ? $_GET['url'] :'';
		
		$url = explode('/', $url);

		
		
		if(isset($_GET['url'])){

		$file = 'controler/' . $url[1] . '.php';
               print_r( $url);
		if (file_exists($file)) {
			require $file;
		} else {
			echo'controler not found0000';
		}
		
		

		// calling methods
		
			if (isset($url[2])) {
				if (method_exists($url[1], $url[2])) {
                                    $controller=new $url[1];
					$controller->{$url[2]}();
				} else {
					echo'method not found';
				}
			} 
		}
}

}

?>