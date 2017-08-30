<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\System\Service;

use Eelly\DTO\GbDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GbInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGb(int $GbId): GbDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGb(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGb(int $GbId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGb(int $GbId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGbPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}