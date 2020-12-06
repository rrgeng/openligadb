<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFusballdatenResponse StructType
 * @subpackage Structs
 */
class GetFusballdatenResponse extends AbstractStructBase
{
    /**
     * The GetFusballdatenResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfFussballdaten
     */
    public $GetFusballdatenResult;

    /**
     * Constructor method for GetFusballdatenResponse
     * @uses GetFusballdatenResponse::setGetFusballdatenResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfFussballdaten $getFusballdatenResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfFussballdaten $getFusballdatenResult = null)
    {
        $this->setGetFusballdatenResult($getFusballdatenResult);
    }

    /**
     * Get GetFusballdatenResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfFussballdaten|null
     */
    public function getGetFusballdatenResult()
    {
        return $this->GetFusballdatenResult;
    }

    /**
     * Set GetFusballdatenResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfFussballdaten $getFusballdatenResult
     * @return \RrGeng\OpenligaDB\StructType\GetFusballdatenResponse
     */
    public function setGetFusballdatenResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfFussballdaten $getFusballdatenResult = null)
    {
        $this->GetFusballdatenResult = $getFusballdatenResult;
        return $this;
    }
}
