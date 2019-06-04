<?php

namespace App\Command\Show;

use App\Entities\Manager;

final class ManagerCommand extends BaseShowCommand
{
    /**
     * @var string
     */
    protected static $defaultName = 'user:manager';

    /**
     * @var string
     */
    protected $className;

    /**
     * @return mixed|void
     */
    public function setClassName()
    {
        $this->className = Manager::class;
    }
}
