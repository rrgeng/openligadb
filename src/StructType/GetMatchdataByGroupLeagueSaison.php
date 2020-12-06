<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchdataByGroupLeagueSaison StructType
 * @subpackage Structs
 */
class GetMatchdataByGroupLeagueSaison extends AbstractStructBase
{
    /**
     * The groupOrderID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $groupOrderID;

    /**
     * The leagueShortcut
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $leagueShortcut;

    /**
     * The leagueSaison
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $leagueSaison;

    /**
     * Constructor method for GetMatchdataByGroupLeagueSaison
     * @uses GetMatchdataByGroupLeagueSaison::setGroupOrderID()
     * @uses GetMatchdataByGroupLeagueSaison::setLeagueShortcut()
     * @uses GetMatchdataByGroupLeagueSaison::setLeagueSaison()
     * @param int $groupOrderID
     * @param string $leagueShortcut
     * @param string $leagueSaison
     */
    public function __construct($groupOrderID = null, $leagueShortcut = null, $leagueSaison = null)
    {
        $this
            ->setGroupOrderID($groupOrderID)
            ->setLeagueShortcut($leagueShortcut)
            ->setLeagueSaison($leagueSaison);
    }

    /**
     * Get groupOrderID value
     * @return int
     */
    public function getGroupOrderID()
    {
        return $this->groupOrderID;
    }

    /**
     * Set groupOrderID value
     * @param int $groupOrderID
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaison
     */
    public function setGroupOrderID($groupOrderID = null)
    {
        if (!is_null($groupOrderID) && !(is_int($groupOrderID) || ctype_digit($groupOrderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupOrderID, true), gettype($groupOrderID)), __LINE__);
        }
        $this->groupOrderID = $groupOrderID;
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
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaison
     */
    public function setLeagueShortcut($leagueShortcut = null)
    {
        if (!is_null($leagueShortcut) && !is_string($leagueShortcut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leagueShortcut, true), gettype($leagueShortcut)), __LINE__);
        }
        $this->leagueShortcut = $leagueShortcut;
        return $this;
    }

    /**
     * Get leagueSaison value
     * @return string|null
     */
    public function getLeagueSaison()
    {
        return $this->leagueSaison;
    }

    /**
     * Set leagueSaison value
     * @param string $leagueSaison
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaison
     */
    public function setLeagueSaison($leagueSaison = null)
    {
        if (!is_null($leagueSaison) && !is_string($leagueSaison)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leagueSaison, true), gettype($leagueSaison)), __LINE__);
        }
        $this->leagueSaison = $leagueSaison;
        return $this;
    }
}
