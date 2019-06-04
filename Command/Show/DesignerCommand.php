<?php

namespace App\Command\Show;

use App\Entities\Designer;

final class DesignerCommand extends BaseShowCommand
{
    /**
     * @var string
     */
    protected static $defaultName = 'user:designer';

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
