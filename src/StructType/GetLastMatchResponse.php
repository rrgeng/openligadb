<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastMatchResponse StructType
 * @subpackage Structs
 */
class GetLastMatchResponse extends AbstractStructBase
{
    /**
     * The GetLastMatchResult
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public $GetLastMatchResult;

    /**
     * Constructor method for GetLastMatchResponse
     * @uses GetLastMatchResponse::setGetLastMatchResult()
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getLastMatchResult
     */
    public function __construct(\RrGeng\OpenligaDB\StructType\Matchdata $getLastMatchResult = null)
    {
        $this->setGetLastMatchResult($getLastMatchResult);
    }

    /**
     * Get GetLastMatchResult value
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function getGetLastMatchResult()
    {
        return $this->GetLastMatchResult;
    }

    /**
     * Set GetLastMatchResult value
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $getLastMatchResult
     * @return \RrGeng\OpenligaDB\StructType\GetLastMatchResponse
     */
    public function setGetLastMatchResult(\RrGeng\OpenligaDB\StructType\Matchdata $getLastMatchResult = null)
    {
        $this->GetLastMatchResult = $getLastMatchResult;
        return $this;
    }
}
