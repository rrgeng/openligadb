<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchdataByLeagueDateTimeResponse StructType
 * @subpackage Structs
 */
class GetMatchdataByLeagueDateTimeResponse extends AbstractStructBase
{
    /**
     * The GetMatchdataByLeagueDateTimeResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata
     */
    public $GetMatchdataByLeagueDateTimeResult;

    /**
     * Constructor method for GetMatchdataByLeagueDateTimeResponse
     * @uses GetMatchdataByLeagueDateTimeResponse::setGetMatchdataByLeagueDateTimeResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByLeagueDateTimeResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByLeagueDateTimeResult = null)
    {
        $this->setGetMatchdataByLeagueDateTimeResult($getMatchdataByLeagueDateTimeResult);
    }

    /**
     * Get GetMatchdataByLeagueDateTimeResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata|null
     */
    public function getGetMatchdataByLeagueDateTimeResult()
    {
        return $this->GetMatchdataByLeagueDateTimeResult;
    }

    /**
     * Set GetMatchdataByLeagueDateTimeResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByLeagueDateTimeResult
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueDateTimeResponse
     */
    public function setGetMatchdataByLeagueDateTimeResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByLeagueDateTimeResult = null)
    {
        $this->GetMatchdataByLeagueDateTimeResult = $getMatchdataByLeagueDateTimeResult;
        return $this;
    }
}
