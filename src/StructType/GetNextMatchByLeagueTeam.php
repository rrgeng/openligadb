<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNextMatchByLeagueTeam StructType
 * @subpackage Structs
 */
class GetNextMatchByLeagueTeam extends AbstractStructBase
{
    /**
     * The leagueId
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $leagueId;

    /**
     * The teamId
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $teamId;

    /**
     * Constructor method for GetNextMatchByLeagueTeam
     * @uses GetNextMatchByLeagueTeam::setLeagueId()
     * @uses GetNextMatchByLeagueTeam::setTeamId()
     * @param int $leagueId
     * @param int $teamId
     */
    public function __construct($leagueId = null, $teamId = null)
    {
        $this
            ->setLeagueId($leagueId)
            ->setTeamId($teamId);
    }

    /**
     * Get leagueId value
     * @return int
     */
    public function getLeagueId()
    {
        return $this->leagueId;
    }

    /**
     * Set leagueId value
     * @param int $leagueId
     * @return \RrGeng\OpenligaDB\StructType\GetNextMatchByLeagueTeam
     */
    public function setLeagueId($leagueId = null)
    {
        if (!is_null($leagueId) && !(is_int($leagueId) || ctype_digit($leagueId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($leagueId, true), gettype($leagueId)), __LINE__);
        }
        $this->leagueId = $leagueId;
        return $this;
    }

    /**
     * Get teamId value
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set teamId value
     * @param int $teamId
     * @return \RrGeng\OpenligaDB\StructType\GetNextMatchByLeagueTeam
     */
    public function setTeamId($teamId = null)
    {
        if (!is_null($teamId) && !(is_int($teamId) || ctype_digit($teamId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($teamId, true), gettype($teamId)), __LINE__);
        }
        $this->teamId = $teamId;
        return $this;
    }
}
