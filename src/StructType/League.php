<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for League StructType
 * @subpackage Structs
 */
class League extends AbstractStructBase
{
    /**
     * The leagueID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $leagueID;

    /**
     * The leagueSportID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $leagueSportID;

    /**
     * The leagueName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $leagueName;

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
     * Constructor method for League
     * @uses League::setLeagueID()
     * @uses League::setLeagueSportID()
     * @uses League::setLeagueName()
     * @uses League::setLeagueShortcut()
     * @uses League::setLeagueSaison()
     * @param int $leagueID
     * @param int $leagueSportID
     * @param string $leagueName
     * @param string $leagueShortcut
     * @param string $leagueSaison
     */
    public function __construct($leagueID = null, $leagueSportID = null, $leagueName = null, $leagueShortcut = null, $leagueSaison = null)
    {
        $this
            ->setLeagueID($leagueID)
            ->setLeagueSportID($leagueSportID)
            ->setLeagueName($leagueName)
            ->setLeagueShortcut($leagueShortcut)
            ->setLeagueSaison($leagueSaison);
    }

    /**
     * Get leagueID value
     * @return int
     */
    public function getLeagueID()
    {
        return $this->leagueID;
    }

    /**
     * Set leagueID value
     * @param int $leagueID
     * @return \RrGeng\OpenligaDB\StructType\League
     */
    public function setLeagueID($leagueID = null)
    {
        if (!is_null($leagueID) && !(is_int($leagueID) || ctype_digit($leagueID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($leagueID, true), gettype($leagueID)), __LINE__);
        }
        $this->leagueID = $leagueID;
        return $this;
    }

    /**
     * Get leagueSportID value
     * @return int
     */
    public function getLeagueSportID()
    {
        return $this->leagueSportID;
    }

    /**
     * Set leagueSportID value
     * @param int $leagueSportID
     * @return \RrGeng\OpenligaDB\StructType\League
     */
    public function setLeagueSportID($leagueSportID = null)
    {
        if (!is_null($leagueSportID) && !(is_int($leagueSportID) || ctype_digit($leagueSportID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($leagueSportID, true), gettype($leagueSportID)), __LINE__);
        }
        $this->leagueSportID = $leagueSportID;
        return $this;
    }

    /**
     * Get leagueName value
     * @return string|null
     */
    public function getLeagueName()
    {
        return $this->leagueName;
    }

    /**
     * Set leagueName value
     * @param string $leagueName
     * @return \RrGeng\OpenligaDB\StructType\League
     */
    public function setLeagueName($leagueName = null)
    {
        if (!is_null($leagueName) && !is_string($leagueName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leagueName, true), gettype($leagueName)), __LINE__);
        }
        $this->leagueName = $leagueName;
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
     * @return \RrGeng\OpenligaDB\StructType\League
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
     * @return \RrGeng\OpenligaDB\StructType\League
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
