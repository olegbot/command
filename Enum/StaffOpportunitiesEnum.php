<?php

namespace App\Enum;

final class StaffOpportunitiesEnum
{
    /**
     *  @int write code
     */
    const WRITE_CODE = 1;

    /**
     * @int test code
     */
    const TEST_CODE = 2;

    /**
     * @int communication with manager
     */
    const COMMUNICATION_WITH_MANAGER = 3;

    /**
     * @int draw
     */
    const DRAW = 4;

    /**
     * @int set tasks
     */
    const SET_TASKS = 5;

    /**
     * @array list titles
     */
    const TITLES = [
        self::WRITE_CODE => 'code writing',
        self::TEST_CODE => 'code testing',
        self::COMMUNICATION_WITH_MANAGER => 'communication with manager',
        self::DRAW => 'draw',
        self::SET_TASKS => 'set tasks',
    ];

    /**
     * @array list actions
     */
    const ACTIONS = [
        'writeCode' => self::WRITE_CODE,
        'testCode' => self::TEST_CODE,
        'communicationWithManager' => self::COMMUNICATION_WITH_MANAGER,
        'draw' => self::DRAW,
        'setTasks' => self::SET_TASKS,
    ];
}
