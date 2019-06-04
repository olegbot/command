<?php

require __DIR__.'/vendor/autoload.php';

use App\Command\Policies\DeveloperCommand as CanDoDeveloperAction;
use App\Command\Policies\DesignerCommand as CanDoDesignerAction;
use App\Command\Policies\TesterCommand as CanDoTesterAction;
use App\Command\Policies\ManagerCommand as CanDoManagerAction;
use App\Command\Show\DeveloperCommand as ShowInformationDeveloper;
use App\Command\Show\DesignerCommand as ShowInformationDesigner;
use App\Command\Show\ManagerCommand as ShowInformationManager;
use App\Command\Show\TesterCommand as ShowInformationTester;
use Symfony\Component\Console\Application;

$application = new Application();

$application->addCommands([
    new ShowInformationDeveloper(),
    new ShowInformationDesigner(),
    new ShowInformationManager(),
    new ShowInformationTester(),
    new CanDoDeveloperAction(),
    new CanDoDesignerAction(),
    new CanDoTesterAction(),
    new CanDoManagerAction(),
]);

$application->run();