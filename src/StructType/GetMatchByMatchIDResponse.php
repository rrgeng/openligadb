<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchByMatchIDResponse StructType
 * @subpackage Structs
 */
class GetMatchByMatchIDResponse extends AbstractStructBase
{
    /**
     * The GetMatchByMatchIDResult
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public $GetMatchByMatchIDResult;

    /**
     * Constructor method for GetMatchByMatchIDResponse
     * @uses GetMatchByMatchIDResponse::setGetMatchByMatchIDResult()
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getMatchByMatchIDResult
     */
    public function __construct(\RrGeng\OpenligaDB\StructType\Matchdata $getMatchByMatchIDResult = null)
    {
        $this->setGetMatchByMatchIDResult($getMatchByMatchIDResult);
    }

    /**
     * Get GetMatchByMatchIDResult value
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function getGetMatchByMatchIDResult()
    {
        return $this->GetMatchByMatchIDResult;
    }

    /**
     * Set GetMatchByMatchIDResult value
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getMatchByMatchIDResult
     * @return \RrGeng\OpenligaDB\StructType\GetMatchByMatchIDResponse
     */
    public function setGetMatchByMatchIDResult(\RrGeng\OpenligaDB\StructType\Matchdata $getMatchByMatchIDResult = null)
    {
        $this->GetMatchByMatchIDResult = $getMatchByMatchIDResult;
        return $this;
    }
}
