<?php
/**
 * Auto generated from m2maas.proto at 2018-06-25 09:56:53
 *
 * mapgoo.mlb.m2maas.request.data package
 */

namespace Mapgoo\Mlb\M2maas\Request\Data {
/**
 * GetTerminalUsageResp message
 */
class GetTerminalUsageResp extends \ProtobufMessage
{
    /* Field index constants */
    const USAGEINFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USAGEINFO => array(
            'name' => 'usageInfo',
            'repeated' => true,
            'type' => '\Mapgoo\Mlb\M2maas\Request\Data\UsageInfo'
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
        $this->values[self::USAGEINFO] = array();
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
     * Appends value to 'usageInfo' list
     *
     * @param \Mapgoo\Mlb\M2maas\Request\Data\UsageInfo $value Value to append
     *
     * @return null
     */
    public function appendUsageInfo(\Mapgoo\Mlb\M2maas\Request\Data\UsageInfo $value)
    {
        return $this->append(self::USAGEINFO, $value);
    }

    /**
     * Clears 'usageInfo' list
     *
     * @return null
     */
    public function clearUsageInfo()
    {
        return $this->clear(self::USAGEINFO);
    }

    /**
     * Returns 'usageInfo' list
     *
     * @return \Mapgoo\Mlb\M2maas\Request\Data\UsageInfo[]
     */
    public function getUsageInfo()
    {
        return $this->get(self::USAGEINFO);
    }

    /**
     * Returns 'usageInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getUsageInfoIterator()
    {
        return new \ArrayIterator($this->get(self::USAGEINFO));
    }

    /**
     * Returns element from 'usageInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Mapgoo\Mlb\M2maas\Request\Data\UsageInfo
     */
    public function getUsageInfoAt($offset)
    {
        return $this->get(self::USAGEINFO, $offset);
    }

    /**
     * Returns count of 'usageInfo' list
     *
     * @return int
     */
    public function getUsageInfoCount()
    {
        return $this->count(self::USAGEINFO);
    }
}
}