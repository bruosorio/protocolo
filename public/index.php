<?php


use app\models\ProtocolItem;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
Use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';


$app =  AppFactory::create();
$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);


$app->get('/',function(Request $request, Response $response, $args){
    $a = new ProtocolItem();
    $a->vendor = "Fornecedor";
    var_dump($a);
    //$response->getBody()->write("");
    //return $response;
});


$app->run();

?>