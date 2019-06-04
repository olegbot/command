<?php

namespace App\Entities;

use App\Enum\StaffOpportunitiesEnum;

final class Designer extends BaseStaff
{
    /**
     * @return array
     */
    public function getOpportunities(): array
    {
        return [
            StaffOpportunitiesEnum::DRAW,
            StaffOpportunitiesEnum::COMMUNICATION_WITH_MANAGER,
        ];
    }
}
