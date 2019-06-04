<?php

namespace App\Command\Base;

use App\Entities\BaseStaff;
use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

abstract class BaseCommand extends Command
{
    /**
     * @var
     */
    protected $io;

    /**
     * @var
     */
    protected $entity;

    /**
     * @var
     */
    protected $className;

    /**
     * @return mixed
     */
    abstract function setClassName();

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @throws Exception
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        parent::initialize($input, $output);

        $this->io = new SymfonyStyle($input, $output);
        $this->setClassName();
        $this->setEntity();
    }

    /**
     * @throws Exception
     */
    private function setEntity()
    {
        $this->entity = $this->getClass();
    }

    /**
     * @return BaseStaff
     * @throws \Exception
     */
    private function getClass(): BaseStaff
    {
        if((bool)($this->className)){
            return new $this->className();
        }

        throw new Exception('Property $className does not exists or empty in ' . static::class);
    }
}
