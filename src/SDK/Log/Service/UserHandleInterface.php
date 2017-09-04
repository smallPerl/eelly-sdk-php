<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Log\Service;

use Eelly\DTO\UserHandleDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface UserHandleInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getUserHandle(int $UserHandleId): UserHandleDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addUserHandle(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateUserHandle(int $UserHandleId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteUserHandle(int $UserHandleId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listUserHandlePage(array $condition = [], int $limit = 10, int $currentPage = 1): array;


}