<?php
/**
 * Auto generated from m2maas.proto at 2018-06-25 09:56:53
 *
 * mapgoo.mlb.m2maas.request.data package
 */

namespace Mapgoo\Mlb\M2maas\Request\Data {
/**
 * GetTerminalUsageDataDetailsResp message
 */
class GetTerminalUsageDataDetailsResp extends \ProtobufMessage
{
    /* Field index constants */
    const USAGEDETAILS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USAGEDETAILS => array(
            'name' => 'usageDetails',
            'repeated' => true,
            'type' => '\Mapgoo\Mlb\M2maas\Request\Data\UsageDetails'
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
        $this->values[self::USAGEDETAILS] = array();
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
     * Appends value to 'usageDetails' list
     *
     * @param \Mapgoo\Mlb\M2maas\Request\Data\UsageDetails $value Value to append
     *
     * @return null
     */
    public function appendUsageDetails(\Mapgoo\Mlb\M2maas\Request\Data\UsageDetails $value)
    {
        return $this->append(self::USAGEDETAILS, $value);
    }

    /**
     * Clears 'usageDetails' list
     *
     * @return null
     */
    public function clearUsageDetails()
    {
        return $this->clear(self::USAGEDETAILS);
    }

    /**
     * Returns 'usageDetails' list
     *
     * @return \Mapgoo\Mlb\M2maas\Request\Data\UsageDetails[]
     */
    public function getUsageDetails()
    {
        return $this->get(self::USAGEDETAILS);
    }

    /**
     * Returns 'usageDetails' iterator
     *
     * @return \ArrayIterator
     */
    public function getUsageDetailsIterator()
    {
        return new \ArrayIterator($this->get(self::USAGEDETAILS));
    }

    /**
     * Returns element from 'usageDetails' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Mapgoo\Mlb\M2maas\Request\Data\UsageDetails
     */
    public function getUsageDetailsAt($offset)
    {
        return $this->get(self::USAGEDETAILS, $offset);
    }

    /**
     * Returns count of 'usageDetails' list
     *
     * @return int
     */
    public function getUsageDetailsCount()
    {
        return $this->count(self::USAGEDETAILS);
    }
}
}