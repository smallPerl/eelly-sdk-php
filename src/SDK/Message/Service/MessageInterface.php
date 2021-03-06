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

namespace Eelly\SDK\Message\Service;

use Eelly\DTO\UidDTO;
use Eelly\SDK\Message\DTO\MessageDTO;

/**
 * 消息.
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
interface MessageInterface
{
    /**
     * 获取指定id消息.
     *
     * @param int $messageId 消息id
     *
     * @throws \Eelly\SDK\
     *
     * @return MessageDTO
     * @requestExample(1)
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function getMessage(int $messageId): MessageDTO;

    /**
     * 添加消息.
     *
     * @param array  $data 添加的信息
     * @param int    $data ['senderId']    发送者ID：0 系统消息
     * @param int    $data ['receiveType'] 接收类型：1 全部用户(系统) 2
     * @param int    $data ['mtId']        消息模板ID：0 自定义消息
     * @param string $data ['title']       消息标题
     * @param array  $data ['parameter']   消息参数
     *
     * @throws \Eelly\SDK\Message\Exception\MessageException
     *
     * @return int 返回添加成功id
     * @requestExample({"senderId":1,"receiveType":1,"mtId":1,"title":"消息标题","parameter":{"user":"梁新宜","content":"测试消息参数","time":"2017-09-04"}})
     * @returnExample(1)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function addMessage(array $data): int;

    /**
     * 删除指定id消息.
     *
     * @param int $messageId 消息id
     *
     * @throws \Eelly\SDK\
     *
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function deleteMessage(int $messageId, UidDTO $user = null): bool;

    /**
     * 批量删除消息.
     *
     * @param int $messageIds 消息id数组
     *
     * @throws \Eelly\SDK\
     *
     * @return bool
     * @requestExample(1)
     * @returnExample(true)
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-8-1
     */
    public function deleteMessageBatch(array $messageIds, UidDTO $user): bool;

    /**
     * 获取消息列表（可条件检索）.
     *
     * @param int|null    $senderId    发送者ID：0 系统消息
     * @param int|null    $receiveType 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param int|null    $mtId        消息模板ID：0 自定义消息
     * @param string|null $title       消息标题
     * @param int|null    $status      状态：0 未处理 1 处理完成 2 处理中，主要用于邮件、短信消息异步处理时标注处理状态
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-
     */
    public function listMessage(int $senderId = null, int $receiveType = null, int $mtId = null, string $title = null, int $status = null): array;

    /**
     * 获取分页消息列表（可条件检索）.
     *
     * @param array|null  $data
     * @param int|null    $data['sender_id']    发送者ID：0 系统消息
     * @param int|null    $data['receive_type'] 接收类型：1 全部用户(系统) 2 全部卖家(系统) 3 全部买家(系统) 4 指定用户
     * @param int|null    $data['mt_id']        消息模板ID：0 自定义消息
     * @param string|null $data['title']        消息标题
     * @param int|null    $data['status']       状态：0 未处理 1 处理完成 2 处理中，主要用于邮件、短信消息异步处理时标注处理状态
     * @param int         $limit                每页条数
     * @param int         $currentPage          当前页
     *
     * @throws \Eelly\SDK\
     *
     * @return array
     * @requestExample()
     * @returnExample()
     *
     * @author liangxinyi<liangxinyi@eelly.net>
     *
     * @since 2017-
     */
    public function listMessagePage(array $data = null, int $currentPage = 1, int $limit = 10): array;
}
