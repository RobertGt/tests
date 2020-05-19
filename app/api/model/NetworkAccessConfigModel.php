<?php
/**
 * Created by PhpStorm.
 * Author: Robert
 * Date: 2018/6/13 14:25
 * Email: 1183@mapgoo.net
 */

namespace app\api\model;


use mapgoo\base\Config;
use Mapgoo\Mlb\M2maas\Request\Data\EditNetworkAccessConfigReq;
use Mapgoo\Mlb\M2maas\Request\Data\GetNetworkAccessConfigReq;
use Mapgoo\Mlb\M2maas\Request\Data\RequestInfo;

class NetworkAccessConfigModel extends BaseModel
{
    /**
     * 获取设备当前的通讯网络配置
     * @param array $req
     * @return array
     */
    public function getTaskData(array $req = []):array
    {
        $params = $req['params'];
        $this->buildRequest($req);
        $getNetworkAccessConfigReq = new GetNetworkAccessConfigReq();
        $getNetworkAccessConfigReq->setIccid($params['iccid']);
        $requestInfo = new RequestInfo();
        $requestInfo->setBaseInfo($this->requestBase);
        $requestInfo->setGetNetworkAccessConfigReq($getNetworkAccessConfigReq);
        $resp['op'] = $req['requestType'] ? 1 : 0;
        $resp['message'] = $requestInfo->serializeToString();
        if($resp['op']){
            $resp['exchange'] = Config::get('exchange.source') . '.' . $req['soureType'];
            $resp['option'] = ['priority' => $req['priority']];
        }else{
            $resp['handle'] = 'bss';
            $resp['action'] = 'getNetworkAccessConfig';
        }
        return $resp;
    }

    /**
     * 修改设备通信网络配置
     * @param array $req
     * @return array
     */
    public function editTaskData(array $req = []):array
    {
        $params = $req['params'];
        $this->buildRequest($req);
        $editNetworkAccessConfigReq = new EditNetworkAccessConfigReq();
        $editNetworkAccessConfigReq->setIccid($params['iccid']);
        $editNetworkAccessConfigReq->setEffectiveDate($params['effectiveDate']);
        $editNetworkAccessConfigReq->setNacId($params['nacId']);
        $requestInfo = new RequestInfo();
        $requestInfo->setBaseInfo($this->requestBase);
        $requestInfo->setEditNetworkAccessConfigReq($editNetworkAccessConfigReq);
        $resp['op'] = $req['requestType'] ? 1 : 0;
        $resp['message'] = $requestInfo->serializeToString();
        if($resp['op']){
            $resp['exchange'] = Config::get('exchange.source') . '.' . $req['soureType'];
            $resp['option'] = ['priority' => $req['priority']];
        }else{
            $resp['handle'] = 'bss';
            $resp['action'] = 'editNetworkAccessConfig';
        }
        return $resp;
    }
}