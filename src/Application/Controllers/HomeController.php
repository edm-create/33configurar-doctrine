<?php

namespace Application\Controllers;

use Application\Services\Doctrine;
use DI\ContainerBuilder;

class HomeController {
    public function index(Doctrine $doctrine) {
        $container=ContainerBuilder::buildDevContainer();
        $doctrine=$container->get(Doctrine::class);
        var_dump($doctrine);
    }
}
