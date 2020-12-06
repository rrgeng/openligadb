<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastMatch StructType
 * @subpackage Structs
 */
class GetLastMatch extends AbstractStructBase
{
    /**
     * The leagueShortcut
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $leagueShortcut;

    /**
     * Constructor method for GetLastMatch
     * @uses GetLastMatch::setLeagueShortcut()
     * @param string $leagueShortcut
     */
    public function __construct($leagueShortcut = null)
    {
        $this->setLeagueShortcut($leagueShortcut);
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
     * @return \RrGeng\OpenligaDB\StructType\GetLastMatch
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
