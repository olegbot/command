<?php

namespace App\Command\Policies;

use App\Entities\Designer;

final class DesignerCommand extends BasePolicyCommand
{
    /**
     * @var string
     */
    protected static $defaultName = 'can:designer';

    /**
     * @var string
     */
    protected $className;

    /**
     * @return mixed|void
     */
    public function setClassName()
    {
        $this->className = Designer::class;
    }
}
