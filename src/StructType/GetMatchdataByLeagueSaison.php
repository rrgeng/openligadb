<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchdataByLeagueSaison StructType
 * @subpackage Structs
 */
class GetMatchdataByLeagueSaison extends AbstractStructBase
{
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
     * Constructor method for GetMatchdataByLeagueSaison
     * @uses GetMatchdataByLeagueSaison::setLeagueShortcut()
     * @uses GetMatchdataByLeagueSaison::setLeagueSaison()
     * @param string $leagueShortcut
     * @param string $leagueSaison
     */
    public function __construct($leagueShortcut = null, $leagueSaison = null)
    {
        $this
            ->setLeagueShortcut($leagueShortcut)
            ->setLeagueSaison($leagueSaison);
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
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueSaison
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
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueSaison
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
