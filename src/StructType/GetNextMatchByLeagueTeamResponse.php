<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNextMatchByLeagueTeamResponse StructType
 * @subpackage Structs
 */
class GetNextMatchByLeagueTeamResponse extends AbstractStructBase
{
    /**
     * The GetNextMatchByLeagueTeamResult
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public $GetNextMatchByLeagueTeamResult;

    /**
     * Constructor method for GetNextMatchByLeagueTeamResponse
     * @uses GetNextMatchByLeagueTeamResponse::setGetNextMatchByLeagueTeamResult()
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getNextMatchByLeagueTeamResult
     */
    public function __construct(\RrGeng\OpenligaDB\StructType\Matchdata $getNextMatchByLeagueTeamResult = null)
    {
        $this->setGetNextMatchByLeagueTeamResult($getNextMatchByLeagueTeamResult);
    }

    /**
     * Get GetNextMatchByLeagueTeamResult value
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function getGetNextMatchByLeagueTeamResult()
    {
        return $this->GetNextMatchByLeagueTeamResult;
    }

    /**
     * Set GetNextMatchByLeagueTeamResult value
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getNextMatchByLeagueTeamResult
     * @return \RrGeng\OpenligaDB\StructType\GetNextMatchByLeagueTeamResponse
     */
    public function setGetNextMatchByLeagueTeamResult(\RrGeng\OpenligaDB\StructType\Matchdata $getNextMatchByLeagueTeamResult = null)
    {
        $this->GetNextMatchByLeagueTeamResult = $getNextMatchByLeagueTeamResult;
        return $this;
    }
}
