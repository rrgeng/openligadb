<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailGroupsResponse StructType
 * @subpackage Structs
 */
class GetAvailGroupsResponse extends AbstractStructBase
{
    /**
     * The GetAvailGroupsResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfGroup
     */
    public $GetAvailGroupsResult;

    /**
     * Constructor method for GetAvailGroupsResponse
     * @uses GetAvailGroupsResponse::setGetAvailGroupsResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGroup $getAvailGroupsResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfGroup $getAvailGroupsResult = null)
    {
        $this->setGetAvailGroupsResult($getAvailGroupsResult);
    }

    /**
     * Get GetAvailGroupsResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGroup|null
     */
    public function getGetAvailGroupsResult()
    {
        return $this->GetAvailGroupsResult;
    }

    /**
     * Set GetAvailGroupsResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGroup $getAvailGroupsResult
     * @return \RrGeng\OpenligaDB\StructType\GetAvailGroupsResponse
     */
    public function setGetAvailGroupsResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfGroup $getAvailGroupsResult = null)
    {
        $this->GetAvailGroupsResult = $getAvailGroupsResult;
        return $this;
    }
}
