<?php
/**
 * Auto generated from m2maas.proto at 2018-06-25 09:56:53
 *
 * mapgoo.mlb.m2maas.request.data package
 */

namespace Mapgoo\Mlb\M2maas\Request\Data {
/**
 * SendSmsReq message
 */
class SendSmsReq extends \ProtobufMessage
{
    /* Field index constants */
    const MESSAGETEXTENCODING = 1;
    const SENDSMSREQPARAM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MESSAGETEXTENCODING => array(
            'name' => 'messageTextEncoding',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SENDSMSREQPARAM => array(
            'name' => 'sendSmsReqParam',
            'required' => true,
            'type' => '\Mapgoo\Mlb\M2maas\Request\Data\SendSmsReqParam'
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
        $this->values[self::MESSAGETEXTENCODING] = null;
        $this->values[self::SENDSMSREQPARAM] = null;
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
     * Sets value of 'messageTextEncoding' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageTextEncoding($value)
    {
        return $this->set(self::MESSAGETEXTENCODING, $value);
    }

    /**
     * Returns value of 'messageTextEncoding' property
     *
     * @return string
     */
    public function getMessageTextEncoding()
    {
        $value = $this->get(self::MESSAGETEXTENCODING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'sendSmsReqParam' property
     *
     * @param \Mapgoo\Mlb\M2maas\Request\Data\SendSmsReqParam $value Property value
     *
     * @return null
     */
    public function setSendSmsReqParam(\Mapgoo\Mlb\M2maas\Request\Data\SendSmsReqParam $value=null)
    {
        return $this->set(self::SENDSMSREQPARAM, $value);
    }

    /**
     * Returns value of 'sendSmsReqParam' property
     *
     * @return \Mapgoo\Mlb\M2maas\Request\Data\SendSmsReqParam
     */
    public function getSendSmsReqParam()
    {
        return $this->get(self::SENDSMSREQPARAM);
    }
}
}