<?php

namespace Jorgecaso\AdminlteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Console\Application;
use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;
use Symfony\Component\Filesystem\Filesystem;

class JorgecasoAdminlteBundle extends Bundle
{
    public function registerCommands(Application $application){
        $crudCommand = $application->get('jabgenerate:doctrine:crud');
        $generator = new DoctrineCrudGenerator(null, __DIR__.'/Resources/skeleton/crud');
        $crudCommand->setGenerator($generator);

        parent::registerCommands($application);
    }
}