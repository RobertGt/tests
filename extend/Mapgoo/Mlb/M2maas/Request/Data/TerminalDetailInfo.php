<?php
/**
 * Auto generated from m2maas.proto at 2018-06-25 09:56:53
 *
 * mapgoo.mlb.m2maas.request.data package
 */

namespace Mapgoo\Mlb\M2maas\Request\Data {
/**
 * TerminalDetailInfo message
 */
class TerminalDetailInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ICCID = 1;
    const IMEI = 2;
    const STATUS = 3;
    const MONTHTODATEUSAGE = 4;
    const MONTHTODATEDATAUSAGE = 5;
    const PRIMARYDATAREMAINING = 6;
    const TOTALPRIMARYINCLUDEDDATA = 7;
    const DATEACTIVATED = 8;
    const TERMENDDATE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ICCID => array(
            'name' => 'iccid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMEI => array(
            'name' => 'imei',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MONTHTODATEUSAGE => array(
            'name' => 'monthToDateUsage',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MONTHTODATEDATAUSAGE => array(
            'name' => 'monthToDateDataUsage',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRIMARYDATAREMAINING => array(
            'name' => 'primaryDataRemaining',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALPRIMARYINCLUDEDDATA => array(
            'name' => 'totalPrimaryIncludedData',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATEACTIVATED => array(
            'name' => 'dateActivated',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TERMENDDATE => array(
            'name' => 'termEndDate',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::ICCID] = null;
        $this->values[self::IMEI] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::MONTHTODATEUSAGE] = null;
        $this->values[self::MONTHTODATEDATAUSAGE] = null;
        $this->values[self::PRIMARYDATAREMAINING] = null;
        $this->values[self::TOTALPRIMARYINCLUDEDDATA] = null;
        $this->values[self::DATEACTIVATED] = null;
        $this->values[self::TERMENDDATE] = null;
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
     * Sets value of 'iccid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIccid($value)
    {
        return $this->set(self::ICCID, $value);
    }

    /**
     * Returns value of 'iccid' property
     *
     * @return string
     */
    public function getIccid()
    {
        $value = $this->get(self::ICCID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'imei' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImei($value)
    {
        return $this->set(self::IMEI, $value);
    }

    /**
     * Returns value of 'imei' property
     *
     * @return string
     */
    public function getImei()
    {
        $value = $this->get(self::IMEI);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'status' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return string
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'monthToDateUsage' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMonthToDateUsage($value)
    {
        return $this->set(self::MONTHTODATEUSAGE, $value);
    }

    /**
     * Returns value of 'monthToDateUsage' property
     *
     * @return integer
     */
    public function getMonthToDateUsage()
    {
        $value = $this->get(self::MONTHTODATEUSAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'monthToDateDataUsage' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMonthToDateDataUsage($value)
    {
        return $this->set(self::MONTHTODATEDATAUSAGE, $value);
    }

    /**
     * Returns value of 'monthToDateDataUsage' property
     *
     * @return integer
     */
    public function getMonthToDateDataUsage()
    {
        $value = $this->get(self::MONTHTODATEDATAUSAGE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'primaryDataRemaining' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPrimaryDataRemaining($value)
    {
        return $this->set(self::PRIMARYDATAREMAINING, $value);
    }

    /**
     * Returns value of 'primaryDataRemaining' property
     *
     * @return integer
     */
    public function getPrimaryDataRemaining()
    {
        $value = $this->get(self::PRIMARYDATAREMAINING);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'totalPrimaryIncludedData' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalPrimaryIncludedData($value)
    {
        return $this->set(self::TOTALPRIMARYINCLUDEDDATA, $value);
    }

    /**
     * Returns value of 'totalPrimaryIncludedData' property
     *
     * @return integer
     */
    public function getTotalPrimaryIncludedData()
    {
        $value = $this->get(self::TOTALPRIMARYINCLUDEDDATA);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'dateActivated' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDateActivated($value)
    {
        return $this->set(self::DATEACTIVATED, $value);
    }

    /**
     * Returns value of 'dateActivated' property
     *
     * @return string
     */
    public function getDateActivated()
    {
        $value = $this->get(self::DATEACTIVATED);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'termEndDate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTermEndDate($value)
    {
        return $this->set(self::TERMENDDATE, $value);
    }

    /**
     * Returns value of 'termEndDate' property
     *
     * @return string
     */
    public function getTermEndDate()
    {
        $value = $this->get(self::TERMENDDATE);
        return $value === null ? (string)$value : $value;
    }
}
}