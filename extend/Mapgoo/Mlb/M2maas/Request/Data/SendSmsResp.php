<?php
/**
 * Auto generated from m2maas.proto at 2018-06-25 09:56:53
 *
 * mapgoo.mlb.m2maas.request.data package
 */

namespace Mapgoo\Mlb\M2maas\Request\Data {
/**
 * SendSmsResp message
 */
class SendSmsResp extends \ProtobufMessage
{
    /* Field index constants */
    const SENDSMSRESPPARAM = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SENDSMSRESPPARAM => array(
            'name' => 'sendSmsRespParam',
            'required' => true,
            'type' => '\Mapgoo\Mlb\M2maas\Request\Data\SendSmsRespParam'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::SENDSMSRESPPARAM] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'sendSmsRespParam' property
     *
     * @param \Mapgoo\Mlb\M2maas\Request\Data\SendSmsRespParam $value Property value
     *
     * @return null
     */
    public function setSendSmsRespParam(\Mapgoo\Mlb\M2maas\Request\Data\SendSmsRespParam $value=null)
    {
        return $this->set(self::SENDSMSRESPPARAM, $value);
    }

    /**
     * Returns value of 'sendSmsRespParam' property
     *
     * @return \Mapgoo\Mlb\M2maas\Request\Data\SendSmsRespParam
     */
    public function getSendSmsRespParam()
    {
        return $this->get(self::SENDSMSRESPPARAM);
    }
}
}