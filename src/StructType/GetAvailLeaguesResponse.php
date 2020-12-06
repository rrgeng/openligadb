<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailLeaguesResponse StructType
 * @subpackage Structs
 */
class GetAvailLeaguesResponse extends AbstractStructBase
{

    /**
     * The GetAvailLeaguesResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague
     */
    public $GetAvailLeaguesResult;

    /**
     * Constructor method for GetAvailLeaguesResponse
     * @uses GetAvailLeaguesResponse::setGetAvailLeaguesResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague $getAvailLeaguesResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfLeague $getAvailLeaguesResult = null)
    {
        $this->setGetAvailLeaguesResult($getAvailLeaguesResult);
    }

    /**
     * Get GetAvailLeaguesResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague|null
     */
    public function getGetAvailLeaguesResult()
    {
        return $this->GetAvailLeaguesResult;
    }

    /**
     * Set GetAvailLeaguesResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague $getAvailLeaguesResult
     * @return \RrGeng\OpenligaDB\StructType\GetAvailLeaguesResponse
     */
    public function setGetAvailLeaguesResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfLeague $getAvailLeaguesResult = null)
    {
        $this->GetAvailLeaguesResult = $getAvailLeaguesResult;
        return $this;
    }
}
