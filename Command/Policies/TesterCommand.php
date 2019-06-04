<?php

namespace App\Command\Policies;

use App\Entities\Tester;

final class TesterCommand extends BasePolicyCommand
{
    /**
     * @var string
     */
    protected static $defaultName = 'can:tester';

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
