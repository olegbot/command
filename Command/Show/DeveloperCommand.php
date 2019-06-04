<?php

namespace App\Command\Show;

use App\Entities\Developer;

final class DeveloperCommand extends BaseShowCommand
{
    /**
     * @var string
     */
    protected static $defaultName = 'user:developer';

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
