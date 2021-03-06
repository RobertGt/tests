<?php
/**
 * Created by PhpStorm.
 * Author: Robert
 * Date: 2018/6/13 12:01
 * Email: 1183@mapgoo.net
 */

namespace app\api\controller;


use mapgoo\base\Application;
use mapgoo\http\Request;
use mapgoo\http\Response;
use Swoole\Server;

class Base
{
    /**
     * 统一处理请求数据
     * @param Request $request
     * @return array
     */
    public function requestData(Request $request):array
    {
        $req = [
            'messageId'    => $request->getRawParameter('messageId' , ''),
            'soureType'    => (int)$request->getRawParameter('soureType' , 0),
            'requestType'  => (int)$request->getRawParameter('requestType' , 0),
            'callbackUrl'  => $request->getRawParameter('callbackUrl' , ''),
            'priority'     => $request->getRawParameter('priority' , 0),
            'params'       => $request->getRawParameter('params' , []),
        ];
        return $req;
    }

    /**
     * 统一响应处理
     * @param Response $response
     * @param array $taskData
     * @param string $messageId
     */
    public function responseData(Response $response, array $taskData, string $messageId)
    {
        $taskData = json_encode($taskData);
        Application::$server->getServer()->task($taskData, -1, function (Server $server, $taskId, $resp) use ($response, $messageId) {
            if($resp['op'] == 1){
                if($resp['resp'] === true){
                    $response->response(200, 'success', $messageId)->send();
                    return;
                }
                $reason = $resp['resp'];
            }else{
                if($resp['resp'] === false){
                    $response->response($resp['resp']['code'], $resp['resp']['reason'], $resp['resp']['messageId'], $resp['resp']['timestamp'], $resp['resp']['result'])->send();
                    return;
                }
                $reason = '获取失败';
            }
            $response->response(ErrorCode::SERVER_ERROR, $reason, $messageId)->send();
        });
    }
}