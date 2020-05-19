<?php
/**
 * Auto generated from m2maas.proto at 2018-06-25 09:56:53
 *
 * mapgoo.mlb.m2maas.request.data package
 */

namespace Mapgoo\Mlb\M2maas\Request\Data {
/**
 * SendSmsRespParam message
 */
class SendSmsRespParam extends \ProtobufMessage
{
    /* Field index constants */
    const SMSMSGID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SMSMSGID => array(
            'name' => 'smsMsgId',
            'required' => true,
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
        $this->values[self::SMSMSGID] = null;
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
     * Sets value of 'smsMsgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSmsMsgId($value)
    {
        return $this->set(self::SMSMSGID, $value);
    }

    /**
     * Returns value of 'smsMsgId' property
     *
     * @return integer
     */
    public function getSmsMsgId()
    {
        $value = $this->get(self::SMSMSGID);
        return $value === null ? (integer)$value : $value;
    }
}
}