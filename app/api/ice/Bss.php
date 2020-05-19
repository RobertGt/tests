<?php
/**
 * Created by PhpStorm.
 * Author: Robert
 * Date: 2018/6/14 16:55
 * Email: 1183@mapgoo.net
 */

namespace app\api\ice;


use mapgoo\helper\BytesHelper;
use Mapgoo\Mlb\M2maas\Request\Data\ResponseInfo;

class Bss
{
    /**
     * 设备修改响应
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function editTerminal($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getTerminalEditResp();
            $res['result']['iccid'] = $object->getIccid();
            $res['result']['effectiveDate'] = $object->getEffectiveDate();
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 获取设备内容响应
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function getTerminalDetails($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getGetTerminalDetailResp();
            $res['result']['infos'][] = [];
            foreach ($object->getInfosIterator() as $value) {
                $info['iccid'] = $value->getIccid();
                $info['imei'] = $value->getImei();
                $info['status'] = $value->getStatus();
                $info['monthToDateUsage'] = $value->getMonthToDateUsage();
                $info['monthToDateDataUsage'] = $value->getMonthToDateDataUsage();
                $info['primaryDataRemaining'] = $value->getPrimaryDataRemaining();
                $info['totalPrimaryIncludedData'] = $value->getTotalPrimaryIncludedData();
                $info['dateActivated'] = $value->getDateActivated();
                $info['termEndDate'] = $value->getTermEndDate();
                $res['result']['infos'][] = $info;
            }
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 排队资费计划响应
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function queueTerminalRatePlan($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getQueueTerminalRatePlanResp();
            $res['result']['iccid'] = $object->getIccid();
            $res['result']['renewalRatePlan'] = $object->getRenewalRatePlan();
            $res['result']['status'] = $object->getStatus();
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 修改卡资费计划响应
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function editTerminalRating($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getEditTerminalRatingResp();
            $res['result']['iccid'] = $object->getIccid();
            $res['result']['status'] = $object->getStatus();
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 获取设备会话信息响应参数
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function getSessionInfo($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getGetSessionInfoResp();
            $res['result']['sessionInfos'] = [];
            foreach ($object->getSessionInfosIterator() as $value){
                $info['iccid'] = $value->getIccid();
                $info['ipAddress'] = $value->getIpAddress();
                $info['ipv6Address'] = $value->getIpv6Address();
                $info['dateSessionStarted'] = $value->getDateSessionStarted();
                $info['dateSessionEnded'] = $value->getDateSessionEnded();
                $res['result']['sessionInfos'][] = $info;
            }
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 获取数据有变更过的卡响应参数
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function getModifiedTerminals($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getGetModifiedTerminalsResp();
            $res['result']['totalPages'] = $object->getTotalPages();
            $res['result']['iccics'] = [];
            foreach ($object->getIccidsIterator() as $value){
                $res['result']['iccics'][] = $value;
            }
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 获取基本资费计划和所有排队资费计划响应参数
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function getTerminalRating($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getGetTerminalRatingResp();
            $res['result']['iccid'] = $object->getIccid();
            $res['result']['terminalRating'] = [];
            foreach ($object->getTerminalRatingIterator() as $value){
                $info['ratePlanName'] = $value->getRatePlanName();
                $info['queuePosition'] = $value->getQueuePosition();
                $info['expirationDate'] = $value->getExpirationDate();
                $info['termLength'] = $value->getTermLength();
                $info['dataRemaining'] = $value->getDataRemaining();
                $res['result']['terminalRating'][] = $info;
            }
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 获取账单详情响应
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function getTerminalAuditTrail($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getGetTerminalAuditTrailResp();
            $res['result']['totalPages'] = $object->getTotalPages();
            $res['result']['terminalAuditTrails'] = [];
            foreach ($object->getTerminalAuditTrailsIterator() as $value){
                $info['field'] = $value->getField();
                $info['priorValue'] = $value->getPriorValue();
                $info['value'] = $value->getValue();
                $info['effectiveDate'] = $value->getEffectiveDate();
                $info['status'] = $value->getStatus();
                $info['userName'] = $value->getUserName();
                $info['delegatedUser'] = $value->getDelegatedUser();
                $res['result']['terminalAuditTrails'][] = $info;
            }
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 获取设备当前的通讯网络配置响应
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function getNetworkAccessConfig($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getGetNetworkAccessConfigResp();
            $res['result']['nacIds'] = [];
            foreach ($object->getNacIdsIterator() as $value){
                $info['iccid'] = $value->getIccid();
                $info['nacId'] = $value->getNacId();
                $res['result']['nacIds'][] = $info;
            }
            $object->getNacIds();
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 修改设备通信网络配置响应参数
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function editNetworkAccessConfig($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getEditNetworkAccessConfigResp();
            $res['result']['iccid'] = $object->getIccid();
            $res['result']['effectiveDate'] = $object->getEffectiveDate();
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 获取设备当前用量明细响应
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function getTerminalUsageDataDetails($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getGetTerminalUsageDataDetailsResp();
            foreach ($object->getUsageDetailsIterator() as $value){
                $info['iccid'] = $value->getIccid();
                $info['cycleStartDate'] = $value->getCycleStartDate();
                $info['terminalId'] = $value->getTerminalId();
                $info['endConsumerId'] = $value->getEndConsumerId();
                $info['customer'] = $value->getCustomer();
                $info['billable'] = $value->getBillable();
                $info['zone'] = $value->getZone();
                $info['sessionStartTime'] = $value->getSessionStartTime();
                $info['duration'] = $value->getDuration();
                $info['dataVolume'] = $value->getDataVolume();
                $info['countryCode'] = $value->getCountryCode();
                $info['serviceType'] = $value->getServiceType();
                $res['result']['usageDetails'][] = $info;
            }
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 获取设备用量响应
     * @param $handle
     * @param $message
     * @return array|bool|int
     */
    public function getTerminalUsage($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getGetTerminalUsageResp()->getUsageInfo();
            $res['result']['iccid'] = $object->getIccid();
            $res['result']['terminalId'] = $object->getTerminalId();
            $res['result']['customer'] = $object->getCustomer();
            $res['result']['endConsumerId'] = $object->getEndConsumerId();
            $res['result']['totalDataVolume'] = $object->getTotalDataVolume();
            $res['result']['billableDataVolume'] = $object->getBillableDataVolume();
            $res['result']['cycleStartDate'] = $object->getCycleStartDate();
            $res['result']['billable'] = $object->getBillable();
            $res['result']['totalSMSVolume'] = $object->getTotalSMSVolume();
            $res['result']['totalVoiceVolume'] = $object->getTotalVoiceVolume();
            $res['result']['billableSMSVolume'] = $object->getBillableSMSVolume();
            $res['result']['billableVoiceVolume'] = $object->getBillableVoiceVolume();
            $res['result']['ratePlan'] = $object->getRatePlan();
            $res['result']['eventsUsage'] = $object->getEventsUsage();
            $res['result']['totalEvents'] = $object->getTotalEvents();
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 向一个设备发送短信响应
     * @param $handle
     * @param $message
     */
    public function sendSms($handle, $message)
    {
        $response = '';
        $res = $handle->request($message, $response);
        if($res === 0){
            $response = BytesHelper::toStr($response);
            $resp = new ResponseInfo();
            $resp->parseFromString($response);
            $res = $this->baseInfo($resp);
            $object = $resp->getSendSmsResp();
            $res['result']['smsMsgId'] = $object->getSendSmsRespParam()->getSmsMsgId();
            return $res;
        }else{
            return false;
        }
    }

    /**
     * 设置基础返回
     * @param ResponseInfo $resp
     * @return array
     */
    private function baseInfo(ResponseInfo $resp):array
    {
        $baseInfo = $resp->getBaseInfo();
        $baseInfo['error']     = $baseInfo->getError();
        $baseInfo['reason']    = $baseInfo->getReason();
        $baseInfo['messageId'] = $baseInfo->getMessageId();
        $baseInfo['timestamp'] = $baseInfo->getTimestamp();
        $baseInfo['result']    = [];
        return $baseInfo;
    }
}