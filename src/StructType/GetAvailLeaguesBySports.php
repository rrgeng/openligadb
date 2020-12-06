<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailLeaguesBySports StructType
 * @subpackage Structs
 */
class GetAvailLeaguesBySports extends AbstractStructBase
{
    /**
     * The sportID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $sportID;

    /**
     * Constructor method for GetAvailLeaguesBySports
     * @uses GetAvailLeaguesBySports::setSportID()
     * @param int $sportID
     */
    public function __construct($sportID = null)
    {
        $this
            ->setSportID($sportID);
    }

    /**
     * Get sportID value
     * @return int
     */
    public function getSportID()
    {
        return $this->sportID;
    }

    /**
     * Set sportID value
     * @param int $sportID
     * @return \RrGeng\OpenligaDB\StructType\GetAvailLeaguesBySports
     */
    public function setSportID($sportID = null)
    {
        if (!is_null($sportID) && !(is_int($sportID) || ctype_digit($sportID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sportID, true), gettype($sportID)), __LINE__);
        }
        $this->sportID = $sportID;
        return $this;
    }
}
