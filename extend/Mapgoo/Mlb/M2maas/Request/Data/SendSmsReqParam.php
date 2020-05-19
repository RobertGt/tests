<?php
/**
 * Auto generated from m2maas.proto at 2018-06-25 09:56:53
 *
 * mapgoo.mlb.m2maas.request.data package
 */

namespace Mapgoo\Mlb\M2maas\Request\Data {
/**
 * SendSmsReqParam message
 */
class SendSmsReqParam extends \ProtobufMessage
{
    /* Field index constants */
    const SENTTOICCID = 1;
    const MESSAGETEXT = 2;
    const TPVP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SENTTOICCID => array(
            'name' => 'sentToIccid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGETEXT => array(
            'name' => 'messageText',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TPVP => array(
            'name' => 'tpvp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::SENTTOICCID] = null;
        $this->values[self::MESSAGETEXT] = null;
        $this->values[self::TPVP] = null;
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
     * Sets value of 'sentToIccid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSentToIccid($value)
    {
        return $this->set(self::SENTTOICCID, $value);
    }

    /**
     * Returns value of 'sentToIccid' property
     *
     * @return string
     */
    public function getSentToIccid()
    {
        $value = $this->get(self::SENTTOICCID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'messageText' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageText($value)
    {
        return $this->set(self::MESSAGETEXT, $value);
    }

    /**
     * Returns value of 'messageText' property
     *
     * @return string
     */
    public function getMessageText()
    {
        $value = $this->get(self::MESSAGETEXT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'tpvp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTpvp($value)
    {
        return $this->set(self::TPVP, $value);
    }

    /**
     * Returns value of 'tpvp' property
     *
     * @return integer
     */
    public function getTpvp()
    {
        $value = $this->get(self::TPVP);
        return $value === null ? (integer)$value : $value;
    }
}
}