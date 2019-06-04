<?php

namespace App\Command\Show;

use App\Command\Base\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseShowCommand extends BaseCommand
{
    /**
     *
     */
    protected function configure()
    {
        $this->setHelp('This command show opportunities user')
        ->setDescription("This command show opportunities");
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->entity->showOpportunities());
    }
}
