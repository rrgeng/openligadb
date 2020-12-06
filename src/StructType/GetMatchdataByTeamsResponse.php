<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchdataByTeamsResponse StructType
 * @subpackage Structs
 */
class GetMatchdataByTeamsResponse extends AbstractStructBase
{
    /**
     * The GetMatchdataByTeamsResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata
     */
    public $GetMatchdataByTeamsResult;

    /**
     * Constructor method for GetMatchdataByTeamsResponse
     * @uses GetMatchdataByTeamsResponse::setGetMatchdataByTeamsResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByTeamsResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByTeamsResult = null)
    {
        $this
            ->setGetMatchdataByTeamsResult($getMatchdataByTeamsResult);
    }

    /**
     * Get GetMatchdataByTeamsResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata|null
     */
    public function getGetMatchdataByTeamsResult()
    {
        return $this->GetMatchdataByTeamsResult;
    }

    /**
     * Set GetMatchdataByTeamsResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByTeamsResult
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByTeamsResponse
     */
    public function setGetMatchdataByTeamsResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByTeamsResult = null)
    {
        $this->GetMatchdataByTeamsResult = $getMatchdataByTeamsResult;
        return $this;
    }
}
