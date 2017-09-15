<?php

declare(strict_types=1);

/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Activity\Service;

use Eelly\DTO\GoodsDTO;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface GoodsInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getGoods(int $goodsId): GoodsDTO;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addGoods(array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateGoods(int $goodsId, array $data): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteGoods(int $goodsId): bool;

    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listGoodsPage(array $condition = [], int $limit = 10, int $currentPage = 1): array;
}
