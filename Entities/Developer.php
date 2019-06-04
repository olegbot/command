<?php


namespace App\Entities;

use App\Enum\StaffOpportunitiesEnum;

final class Developer extends BaseStaff
{
    /**
     * @return array
     */
    public function getOpportunities(): array
    {
        return [
            StaffOpportunitiesEnum::WRITE_CODE,
            StaffOpportunitiesEnum::TEST_CODE,
            StaffOpportunitiesEnum::COMMUNICATION_WITH_MANAGER,
        ];
    }
}
