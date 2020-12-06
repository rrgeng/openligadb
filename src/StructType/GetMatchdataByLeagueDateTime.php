<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchdataByLeagueDateTime StructType
 * @subpackage Structs
 */
class GetMatchdataByLeagueDateTime extends AbstractStructBase
{

    /**
     * The fromDateTime
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $fromDateTime;

    /**
     * The toDateTime
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $toDateTime;

    /**
     * The leagueShortcut
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $leagueShortcut;

    /**
     * Constructor method for GetMatchdataByLeagueDateTime
     * @uses GetMatchdataByLeagueDateTime::setFromDateTime()
     * @uses GetMatchdataByLeagueDateTime::setToDateTime()
     * @uses GetMatchdataByLeagueDateTime::setLeagueShortcut()
     * @param string $fromDateTime
     * @param string $toDateTime
     * @param string $leagueShortcut
     */
    public function __construct($fromDateTime = null, $toDateTime = null, $leagueShortcut = null)
    {
        $this
            ->setFromDateTime($fromDateTime)
            ->setToDateTime($toDateTime)
            ->setLeagueShortcut($leagueShortcut);
    }

    /**
     * Get fromDateTime value
     * @return string
     */
    public function getFromDateTime()
    {
        return $this->fromDateTime;
    }

    /**
     * Set fromDateTime value
     * @param string $fromDateTime
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueDateTime
     */
    public function setFromDateTime($fromDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($fromDateTime) && !is_string($fromDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDateTime, true), gettype($fromDateTime)), __LINE__);
        }
        $this->fromDateTime = $fromDateTime;
        return $this;
    }

    /**
     * Get toDateTime value
     * @return string
     */
    public function getToDateTime()
    {
        return $this->toDateTime;
    }

    /**
     * Set toDateTime value
     * @param string $toDateTime
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueDateTime
     */
    public function setToDateTime($toDateTime = null)
    {
        if (!is_null($toDateTime) && !is_string($toDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDateTime, true), gettype($toDateTime)), __LINE__);
        }
        $this->toDateTime = $toDateTime;
        return $this;
    }

    /**
     * Get leagueShortcut value
     * @return string|null
     */
    public function getLeagueShortcut()
    {
        return $this->leagueShortcut;
    }

    /**
     * Set leagueShortcut value
     * @param string $leagueShortcut
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueDateTime
     */
    public function setLeagueShortcut($leagueShortcut = null)
    {
        if (!is_null($leagueShortcut) && !is_string($leagueShortcut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leagueShortcut, true), gettype($leagueShortcut)), __LINE__);
        }
        $this->leagueShortcut = $leagueShortcut;
        return $this;
    }
}
