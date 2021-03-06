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

namespace Eelly\SDK\Pay\Service;

use Eelly\SDK\Pay\DTO\RecordDTO;
use Eelly\SDK\Pay\Exception\RecordException;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface RecordInterface
{
    /**
     * @author eellytools<localhost.shell@gmail.com>
     */
    public function getRecord(int $prId): RecordDTO;

    /**
     * 添加会员核心交易数据.
     *
     * @param array $data
     * @param int $data["fromPaId"]     来源帐户ID
     * @param int $data["toPaId"]       目标帐户ID
     * @param int $data["type"]         操作类型：1 充值 2 提现 3 消费 4 结算 5 退款 6 诚保冻结 7 诚保解冻
     * @param int $data["itemId"]       关联ID
     * @param string $data["billNo"]    衣联交易号
     * @param string $data["money"]     成交金额：单位为分
     * @param string $data["remark"]    备注：JSON格式
     *
     * @throws RecordException
     *
     * @return int
     * @requestExample({"data":{"fromPaId":111,"toPaId":222,"type":2,"itemId":11101,"billNo":"1711114177786cvA2s","money":"100",
     *     "remark":"备注"}})
     * @returnExample(1)
     *
     * @author zhangzeqiang<zhangzeqiang@eelly.net>
     * @since  2017年11月11日
     */
    public function addRecord(array $data): int;

}
