<?php

namespace App\Command\Policies;

use App\Entities\Manager;

final class ManagerCommand extends BasePolicyCommand
{
    /**
     * @var string
     */
    protected static $defaultName = 'can:manager';

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
