<?php

namespace App\Entities;

use App\Enum\StaffOpportunitiesEnum;

final class Tester extends BaseStaff
{
    /**
     * @return array
     */
    public function getOpportunities(): array
    {
        return [
            StaffOpportunitiesEnum::TEST_CODE,
            StaffOpportunitiesEnum::COMMUNICATION_WITH_MANAGER,
            StaffOpportunitiesEnum::SET_TASKS,
        ];
    }
}
