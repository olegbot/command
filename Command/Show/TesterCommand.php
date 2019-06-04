<?php

namespace App\Command\Show;

use App\Entities\Tester;

final class TesterCommand extends BaseShowCommand
{
    /**
     * @var string
     */
    protected static $defaultName = 'user:tester';

    /**
     * @var string
     */
    protected $className;

    /**
     * @return mixed|void
     */
    public function setClassName()
    {
        $this->className = Tester::class;
    }
}
