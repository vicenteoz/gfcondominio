<?php 

require_once("vendor/autoload.php");


use \Slim\Slim;
use \Gfcondominio\Page;

//$app = new \Slim\Slim();
$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	//echo "OK";
	//$sql = new Gfcondominio\DB\Sql();
	//$results = $sql->select("SELECT * FROM usuarios");
	//echo json_encode($results);

	$page = new Page();

	$page->setTpl("index");
});

$app->run();

 ?>