<?php

namespace App\Entities;

use App\Enum\StaffOpportunitiesEnum;
use Exception;

abstract class BaseStaff
{
    /**
     * @return array
     */
    abstract public function getOpportunities(): array;

    /**
     * @return array
     */
    private function getOpportunityTitles(): array
    {
        return array_intersect_key(StaffOpportunitiesEnum::TITLES, array_flip($this->getOpportunities()));
    }

    /**
     * @return string
     */
    public function showOpportunities(): string
    {
        return implode(' | ', $this->getOpportunityTitles());
    }

    /**
     * @param string $action
     * @return bool
     * @throws Exception
     */
    public function can(string $action): bool
    {
        $actions = StaffOpportunitiesEnum::ACTIONS;

        if(key_exists($action, $actions)) {
            return in_array($actions[$action], $this->getOpportunities());
        }

        throw new Exception("Action: {$action} does not exists");
    }
}
