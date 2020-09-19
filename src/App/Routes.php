<?php
use Slim\Routing\RouteCollectorProxy;

$app ->group('/api',function(RouteCollectorProxy $group){
    $group->get('/institutes','App\Controllers\InstitutionController:getAll');
});