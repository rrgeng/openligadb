<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastMatchByLeagueTeamResponse StructType
 * @subpackage Structs
 */
class GetLastMatchByLeagueTeamResponse extends AbstractStructBase
{
    /**
     * The GetLastMatchByLeagueTeamResult
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public $GetLastMatchByLeagueTeamResult;

    /**
     * Constructor method for GetLastMatchByLeagueTeamResponse
     * @uses GetLastMatchByLeagueTeamResponse::setGetLastMatchByLeagueTeamResult()
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getLastMatchByLeagueTeamResult
     */
    public function __construct(\RrGeng\OpenligaDB\StructType\Matchdata $getLastMatchByLeagueTeamResult = null)
    {
        $this->setGetLastMatchByLeagueTeamResult($getLastMatchByLeagueTeamResult);
    }

    /**
     * Get GetLastMatchByLeagueTeamResult value
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function getGetLastMatchByLeagueTeamResult()
    {
        return $this->GetLastMatchByLeagueTeamResult;
    }

    /**
     * Set GetLastMatchByLeagueTeamResult value
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getLastMatchByLeagueTeamResult
     * @return \RrGeng\OpenligaDB\StructType\GetLastMatchByLeagueTeamResponse
     */
    public function setGetLastMatchByLeagueTeamResult(\RrGeng\OpenligaDB\StructType\Matchdata $getLastMatchByLeagueTeamResult = null)
    {
        $this->GetLastMatchByLeagueTeamResult = $getLastMatchByLeagueTeamResult;
        return $this;
    }
}
