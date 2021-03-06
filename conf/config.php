<?php
/**
 * Created by PhpStorm.
 * Author: Robert
 * Date: 2018/6/8 17:31
 * Email: 1183@mapgoo.net
 */
return [
    'server'  => [
        'pfile'      => '/tmp/swoole.pid',
        'pname'      => 'php-swoole',
        'autoReload' => true,
    ],
    'http'    => [
        'host'  => '0.0.0.0',
        'port'  => 10800,
        'model' => SWOOLE_PROCESS,
        'type'  => SWOOLE_SOCK_TCP,
    ],
    'setting' => [
        'worker_num'      => 4,
        'max_request'     => 10000,
        'daemonize'       => 0,
        'dispatch_mode'   => 2,
        'log_file'        => LOG_PATH . 'swoole.log',
        'task_worker_num' => 10,
        'http_parse_post' => false,
    ],
    'mq'     => [
        'host'      => '192.168.100.203',
        'port'      =>  5672,
        'login'     => 'admin',
        'password'  => 'admin123',
        'vhost'      => '/',
        'connect_timeout' => 3
    ],
    'exchange'=> [
        'source'  =>  'mapgoo.mlb.exchange.source',
        'push'    =>  'mapgoo.mlb.exchange.push.data'
    ],
    //ice配置格式需要安照此配置增加
    'ice'     => [
        //集群地址
        'iceGrid'        => 'Mapgoo-Server/Locator:default -h 192.168.100.10 -p 22000:default -h 192.168.100.11 -p 22001:default -h 192.168.100.158 -p 22002',
        'messageSizeMax' => 0,
        'lib'            => '/usr/local/mapgoo/php/',
        'option'         => [
            'cap'  => [
                'session'        => 'CacheSession',
                'helper'         => '\\CacheProxy_CacheSessionPrxHelper',
                'import'         => 'CacheProxy'
            ],
            'oss'  => [
                'session'        => 'OSSSession',
                'helper'         => '\\OSS_OSSSessionPrxHelper',
                'import'         => 'OSS'
            ],
        ],
    ]
];