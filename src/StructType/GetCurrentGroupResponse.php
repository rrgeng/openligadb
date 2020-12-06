<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrentGroupResponse StructType
 * @subpackage Structs
 */
class GetCurrentGroupResponse extends AbstractStructBase
{
    /**
     * The GetCurrentGroupResult
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \RrGeng\OpenligaDB\StructType\Group
     */
    public $GetCurrentGroupResult;

    /**
     * Constructor method for GetCurrentGroupResponse
     * @uses GetCurrentGroupResponse::setGetCurrentGroupResult()
     * @param \RrGeng\OpenligaDB\StructType\Group $getCurrentGroupResult
     */
    public function __construct(\RrGeng\OpenligaDB\StructType\Group $getCurrentGroupResult = null)
    {
        $this->setGetCurrentGroupResult($getCurrentGroupResult);
    }

    /**
     * Get GetCurrentGroupResult value
     * @return \RrGeng\OpenligaDB\StructType\Group
     */
    public function getGetCurrentGroupResult()
    {
        return $this->GetCurrentGroupResult;
    }

    /**
     * Set GetCurrentGroupResult value
     * @param \RrGeng\OpenligaDB\StructType\Group $getCurrentGroupResult
     * @return \RrGeng\OpenligaDB\StructType\GetCurrentGroupResponse
     */
    public function setGetCurrentGroupResult(\RrGeng\OpenligaDB\StructType\Group $getCurrentGroupResult = null)
    {
        $this->GetCurrentGroupResult = $getCurrentGroupResult;
        return $this;
    }
}
