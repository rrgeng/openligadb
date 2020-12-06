<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrentGroupOrderIDResponse StructType
 * @subpackage Structs
 */
class GetCurrentGroupOrderIDResponse extends AbstractStructBase
{

    /**
     * The GetCurrentGroupOrderIDResult
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GetCurrentGroupOrderIDResult;

    /**
     * Constructor method for GetCurrentGroupOrderIDResponse
     * @uses GetCurrentGroupOrderIDResponse::setGetCurrentGroupOrderIDResult()
     * @param int $getCurrentGroupOrderIDResult
     */
    public function __construct($getCurrentGroupOrderIDResult = null)
    {
        $this->setGetCurrentGroupOrderIDResult($getCurrentGroupOrderIDResult);
    }

    /**
     * Get GetCurrentGroupOrderIDResult value
     * @return int
     */
    public function getGetCurrentGroupOrderIDResult()
    {
        return $this->GetCurrentGroupOrderIDResult;
    }

    /**
     * Set GetCurrentGroupOrderIDResult value
     * @param int $getCurrentGroupOrderIDResult
     * @return \RrGeng\OpenligaDB\StructType\GetCurrentGroupOrderIDResponse
     */
    public function setGetCurrentGroupOrderIDResult($getCurrentGroupOrderIDResult = null)
    {
        if (!is_null($getCurrentGroupOrderIDResult) && !(is_int($getCurrentGroupOrderIDResult) || ctype_digit($getCurrentGroupOrderIDResult))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($getCurrentGroupOrderIDResult, true), gettype($getCurrentGroupOrderIDResult)), __LINE__);
        }
        $this->GetCurrentGroupOrderIDResult = $getCurrentGroupOrderIDResult;
        return $this;
    }
}
