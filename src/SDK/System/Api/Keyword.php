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

namespace Eelly\SDK\System\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\System\Service\SystemKeywordInterface;
use Eelly\SDK\System\DTO\WordDTO;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Keyword implements SystemKeywordInterface
{
    /**
     * 获取敏感词.
     *
     * @param int $wordId 敏感词id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return WordDTO
     * @requestExample([1])
     * @returnExample({"word": "敏感词示例","fwId": "1","type": "1","adminId": "1","adminName": "admin","createdTime": "1503716527","updateTime": "2017-08-26 03:20:30"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since   2017-8-26
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的敏感词id",operator:["gt",0]})
     * )
     */
    public function getWord(int $wordId): WordDTO
    {
        return EellyClient::request('system/keyword', __FUNCTION__, true, $wordId);
    }

    /**
     * 获取敏感词.
     *
     * @param int $wordId 敏感词id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return WordDTO
     * @requestExample([1])
     * @returnExample({"word": "敏感词示例","fwId": "1","type": "1","adminId": "1","adminName": "admin","createdTime": "1503716527","updateTime": "2017-08-26 03:20:30"})
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since   2017-8-26
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的敏感词id",operator:["gt",0]})
     * )
     */
    public function getWordAsync(int $wordId)
    {
        return EellyClient::request('system/keyword', __FUNCTION__, false, $wordId);
    }

    /**
     * 添加敏感词.
     *
     * @param array  $data           敏感词内容
     * @param string $data['word']   敏感词名称
     * @param int    $data['type']   敏感词类型／1 商品标题 2 店主咨询 4 商品评论 ……
     * @param int    $data['mode']   处理方式：（1：警告  2：屏蔽  3：替换）
     * @param string $data['reword'] 替换词
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample([{"word":"敏感词示例","type":"1","mode":"3","reword":"我是替换词"}])
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-8-26
     */
    public function addWord(array $data): bool
    {
        return EellyClient::request('system/keyword', __FUNCTION__, true, $data);
    }

    /**
     * 添加敏感词.
     *
     * @param array  $data           敏感词内容
     * @param string $data['word']   敏感词名称
     * @param int    $data['type']   敏感词类型／1 商品标题 2 店主咨询 4 商品评论 ……
     * @param int    $data['mode']   处理方式：（1：警告  2：屏蔽  3：替换）
     * @param string $data['reword'] 替换词
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample([{"word":"敏感词示例","type":"1","mode":"3","reword":"我是替换词"}])
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-8-26
     */
    public function addWordAsync(array $data)
    {
        return EellyClient::request('system/keyword', __FUNCTION__, false, $data);
    }

    /**
     * 修改敏感词.
     *
     * @param int 敏感词id
     * @param array  $data           敏感词内容
     * @param string $data['word']   敏感词名称
     * @param int    $data['type']   敏感词类型／1 商品标题 2 店主咨询 4 商品评论 ……
     * @param int    $data['mode']   处理方式：（1：警告  2：屏蔽  3：替换）
     * @param string $data['reword'] 替换词
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample([1,{"word": "敏感词示例","type": "1","mode":"3","reword":"我是替换词"}])
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2016-08-26
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的敏感词id",operator:["gt",0]})
     * )
     */
    public function updateWord(int $wordId, array $data): bool
    {
        return EellyClient::request('system/keyword', __FUNCTION__, true, $wordId, $data);
    }

    /**
     * 修改敏感词.
     *
     * @param int 敏感词id
     * @param array  $data           敏感词内容
     * @param string $data['word']   敏感词名称
     * @param int    $data['type']   敏感词类型／1 商品标题 2 店主咨询 4 商品评论 ……
     * @param int    $data['mode']   处理方式：（1：警告  2：屏蔽  3：替换）
     * @param string $data['reword'] 替换词
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample([1,{"word": "敏感词示例","type": "1","mode":"3","reword":"我是替换词"}])
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2016-08-26
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的敏感词id",operator:["gt",0]})
     * )
     */
    public function updateWordAsync(int $wordId, array $data)
    {
        return EellyClient::request('system/keyword', __FUNCTION__, false, $wordId, $data);
    }

    /**
     * 删除敏感词.
     *
     * @param int 敏感词id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample([1])
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-26
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的敏感词id",operator:["gt",0]})
     * )
     */
    public function deleteWord(int $wordId): bool
    {
        return EellyClient::request('system/keyword', __FUNCTION__, true, $wordId);
    }

    /**
     * 删除敏感词.
     *
     * @param int 敏感词id
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return bool
     * @requestExample([1])
     * @returnExample(true)
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-26
     * @Validation(
     *   @OperatorValidator(0,{message:"非法的敏感词id",operator:["gt",0]})
     * )
     */
    public function deleteWordAsync(int $wordId)
    {
        return EellyClient::request('system/keyword', __FUNCTION__, false, $wordId);
    }

    /**
     * 分页获取敏感词.
     *
     * @param array  $condition         敏感词条件
     * @param string $condition['word'] 敏感词名称
     * @param int    $condition['type'] 敏感词类型／1 商品标题 2 店主咨询 4 商品评论 ……
     * @param int    $limit             分页条数
     * @param int    $currentPage       页码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"word": "敏感词示例","type": "1","mode":"1","reword":"替换词"}],"limit": "10","currentPage": "1"])
     * @returnExample(["items": [{"fw_id": "1", "type": "1","word": "敏感词示例","mode":"3","reword":"替换词","admin_id": "1","admin_name": "admin","created_time": "1503716527","update_time": "2017-08-26 03:52:15"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-26
     * @Validation(
     *   @OperatorValidator(1,{message:"非法的数据条数",operator:["gt",0]}),
     *   @OperatorValidator(2,{message:"非法的页码",operator:["gt",0]})
     * )
     */
    public function listWordPage(array $condition = [], int $currentPage = 1, int $limit = 10): array
    {
        return EellyClient::request('system/keyword', __FUNCTION__, true, $condition, $currentPage, $limit);
    }

    /**
     * 分页获取敏感词.
     *
     * @param array  $condition         敏感词条件
     * @param string $condition['word'] 敏感词名称
     * @param int    $condition['type'] 敏感词类型／1 商品标题 2 店主咨询 4 商品评论 ……
     * @param int    $limit             分页条数
     * @param int    $currentPage       页码
     *
     * @throws \Eelly\SDK\System\Exception\SystemException
     *
     * @return array 返回分页结果
     * @requestExample(["condition": [{"word": "敏感词示例","type": "1","mode":"1","reword":"替换词"}],"limit": "10","currentPage": "1"])
     * @returnExample(["items": [{"fw_id": "1", "type": "1","word": "敏感词示例","mode":"3","reword":"替换词","admin_id": "1","admin_name": "admin","created_time": "1503716527","update_time": "2017-08-26 03:52:15"}],"page": {"first": 1,"before": 1,"current": 1,"last": 1,"next": 1,"total_pages": 1,"total_items": 1,"limit": 10}])
     *
     * @author zhoujiansheng<zhoujiansheng@eelly.net>
     *
     * @since 2017-08-26
     * @Validation(
     *   @OperatorValidator(1,{message:"非法的数据条数",operator:["gt",0]}),
     *   @OperatorValidator(2,{message:"非法的页码",operator:["gt",0]})
     * )
     */
    public function listWordPageAsync(array $condition = [], int $currentPage = 1, int $limit = 10)
    {
        return EellyClient::request('system/keyword', __FUNCTION__, false, $condition, $currentPage, $limit);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}