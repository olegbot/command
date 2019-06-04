<?php

namespace App\Command\Policies;

use App\Entities\Developer;

final class DeveloperCommand extends BasePolicyCommand
{
    /**
     * @var string
     */
    protected static $defaultName = 'can:developer';

    /**
     * @var string
     */
    protected $className;

    /**
     * @return mixed|void
     */
    public function setClassName()
    {
        $this->className = Developer::class;
    }
}
