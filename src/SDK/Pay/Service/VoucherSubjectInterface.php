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


/**
 * 凭证科目对应接口
 * 
 * @author wechan<liweiquan@eelly.net>
 */
interface VoucherSubjectInterface
{    
    /**
     * 获取一条凭证科目信息
     * 
     * @param string $voucherCode
     * 
     * @requestExample({"voucherCode":"110"})
     * @returnExample({"voucherCode":"101","subjectCodeDebit":"1300102","subjectCodeCredit":"310","remark":"测试清算","createdTime":"1508466305","updateTime":"2017-11-20 16:59:11"})
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     * 
     * @Validation(
     *    @PresenceOf(0,{message : "非法的凭证代码"}),
     * )
     */
    public function getVoucherSubject(string $voucherCode);
    
    /**
     * 添加凭证科目对应信息
     * 
     * @return bool
     * 
     * @param array $data 请求参数
     * @param string $data['voucherCode'] 凭证代码
     * @param string $data['subjectCodeDebit'] 记借方科目代码
     * @param string $data['subjectCodeCredit'] 记贷方科目代码
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"data":{"voucherCode":"101","subjectCodeDebit":"1300102","subjectCodeCredit":"1300102","remark":"123"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     */
    public function addVoucherSubject(array $data): bool;

    /**
     * 更新凭证科目信息
     * 
     * @param string $voucherCode 凭证代码
     * @param array $data 请求参数
     * @param string $data['subjectCodeDebit'] 记借方科目代码
     * @param string $data['subjectCodeCredit'] 记借方科目代码
     * @param string $data['remark'] 备注
     * 
     * @requestExample({"$voucherCode":"120","data":{"subjectCodeDebit":"1234", "subjectCodeCredit":"1234", "remark":"1234"}})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     */
    public function updateVoucherSubject(string $voucherCode, array $data): bool;

    /**
     * 删除一条凭证科目信息
     * 
     * @return bool
     * 
     * @param $voucherCode 凭证代码
     * 
     * @requestExample({"voucherCode":"120"})
     * @returnExample(true)
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月15日
     */
    public function deleteVoucherSubject(string $voucherCode): bool;
}
