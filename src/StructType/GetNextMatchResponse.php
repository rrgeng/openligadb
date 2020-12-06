<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNextMatchResponse StructType
 * @subpackage Structs
 */
class GetNextMatchResponse extends AbstractStructBase
{

    /**
     * The GetNextMatchResult
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public $GetNextMatchResult;

    /**
     * Constructor method for GetNextMatchResponse
     * @uses GetNextMatchResponse::setGetNextMatchResult()
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getNextMatchResult
     */
    public function __construct(\RrGeng\OpenligaDB\StructType\Matchdata $getNextMatchResult = null)
    {
        $this->setGetNextMatchResult($getNextMatchResult);
    }

    /**
     * Get GetNextMatchResult value
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function getGetNextMatchResult()
    {
        return $this->GetNextMatchResult;
    }

    /**
     * Set GetNextMatchResult value
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getNextMatchResult
     * @return \RrGeng\OpenligaDB\StructType\GetNextMatchResponse
     */
    public function setGetNextMatchResult(\RrGeng\OpenligaDB\StructType\Matchdata $getNextMatchResult = null)
    {
        $this->GetNextMatchResult = $getNextMatchResult;
        return $this;
    }
}
