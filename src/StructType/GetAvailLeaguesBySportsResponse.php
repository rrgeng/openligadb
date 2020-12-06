<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailLeaguesBySportsResponse StructType
 * @subpackage Structs
 */
class GetAvailLeaguesBySportsResponse extends AbstractStructBase
{

    /**
     * The GetAvailLeaguesBySportsResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague
     */
    public $GetAvailLeaguesBySportsResult;

    /**
     * Constructor method for GetAvailLeaguesBySportsResponse
     * @uses GetAvailLeaguesBySportsResponse::setGetAvailLeaguesBySportsResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague $getAvailLeaguesBySportsResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfLeague $getAvailLeaguesBySportsResult = null)
    {
        $this->setGetAvailLeaguesBySportsResult($getAvailLeaguesBySportsResult);
    }

    /**
     * Get GetAvailLeaguesBySportsResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague|null
     */
    public function getGetAvailLeaguesBySportsResult()
    {
        return $this->GetAvailLeaguesBySportsResult;
    }

    /**
     * Set GetAvailLeaguesBySportsResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague $getAvailLeaguesBySportsResult
     * @return \RrGeng\OpenligaDB\StructType\GetAvailLeaguesBySportsResponse
     */
    public function setGetAvailLeaguesBySportsResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfLeague $getAvailLeaguesBySportsResult = null)
    {
        $this->GetAvailLeaguesBySportsResult = $getAvailLeaguesBySportsResult;
        return $this;
    }
}
