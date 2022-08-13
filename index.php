<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	//echo "OK";
	$sql = new Gfcondominio\DB\Sql();

	$results = $sql->select("SELECT * FROM usuarios");

	echo json_encode($results);
	
});

$app->run();

 ?>