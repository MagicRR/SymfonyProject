<?php

// config/routes.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\Controller\ProjetController;

$collection = new RouteCollection();
$collection->add('projet_list', new Route('/projet', array(
    '_controller' => [ProjetController::class, 'projet_list']
)));
$collection->add('projet_id', new Route('/projet/{slug}', array(
    '_controller' => [ProjetController::class, 'projet_id']
)));

return $collection;

?>
