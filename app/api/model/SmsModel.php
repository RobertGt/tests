<?php
/**
 * Created by PhpStorm.
 * Author: Robert
 * Date: 2018/6/13 17:05
 * Email: 1183@mapgoo.net
 */

namespace app\api\model;


use mapgoo\base\Config;
use Mapgoo\Mlb\M2maas\Request\Data\RequestInfo;
use Mapgoo\Mlb\M2maas\Request\Data\SendSmsReq;
use Mapgoo\Mlb\M2maas\Request\Data\SendSmsReqParam;

class SmsModel extends BaseModel
{
    /**
     * 向一个设备发送短信
     * @param array  $req  请求参数
     * @return array
     */
    public function sendSmsTaskData(array $req = []):array
    {
        $params = $req['params'];
        $this->buildRequest($req);
        $sendSmsReqParam = new SendSmsReqParam();
        $sendSmsReqParam->setSentToIccid($params['sentToIccid']);
        $sendSmsReqParam->setMessageText($params['messageText']);
        $sendSmsReqParam->setTpvp($params['tpvp']);
        $sendSmsReq = new SendSmsReq();
        $sendSmsReq->setMessageTextEncoding($params['messageTextEncoding']);
        $sendSmsReq->setSendSmsReqParam($sendSmsReqParam);
        $requestInfo = new RequestInfo();
        $requestInfo->setBaseInfo($this->requestBase);
        $requestInfo->setSendSmsReq($sendSmsReq);
        $resp['op'] = $req['requestType'] ? 1 : 0;
        $resp['message'] = $requestInfo->serializeToString();
        if($resp['op']){
            $resp['exchange'] = Config::get('exchange.source') . '.' . $req['soureType'];
            $resp['option'] = ['priority' => $req['priority']];
        }else{
            $resp['handle'] = 'bss';
            $resp['action'] = 'sendSms';
        }
        return $resp;
    }
}