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

use Eelly\DTO\WordDTO;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface WordInterface
{

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getWord(int $WordId): WordDTO;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function addWord(array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function updateWord(int $WordId, array $data): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function deleteWord(int $WordId): bool;

    /**
     *
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function listWordPage(array $condition = [], int $currentPage = 1, int $limit = 10): array;


}