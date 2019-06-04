<?php

namespace App\Entities;

use App\Enum\StaffOpportunitiesEnum;

final class Manager extends BaseStaff
{
    /**
     * @return array
     */
    public function getOpportunities(): array
    {
        return [
            StaffOpportunitiesEnum::SET_TASKS
        ];
    }
}
