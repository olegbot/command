<?php

namespace App\Command\Policies;

use App\Command\Base\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BasePolicyCommand extends BaseCommand
{
    /**
     *
     */
    protected function configure()
    {
        $this->addArgument('action', InputArgument::REQUIRED, 'The action.')
            ->setDescription("This command for check opportunity by action")
            ->setHelp('This command for check opportunity user by action');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try{
            var_export($this->entity->can($input->getArgument('action')));
        } catch (\Exception $exception){
            $this->io->error($exception->getMessage());
        }
    }
}
