<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastChangeDateByGroupLeagueSaisonResponse StructType
 * @subpackage Structs
 */
class GetLastChangeDateByGroupLeagueSaisonResponse extends AbstractStructBase
{
    /**
     * The GetLastChangeDateByGroupLeagueSaisonResult
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $GetLastChangeDateByGroupLeagueSaisonResult;

    /**
     * Constructor method for GetLastChangeDateByGroupLeagueSaisonResponse
     * @uses GetLastChangeDateByGroupLeagueSaisonResponse::setGetLastChangeDateByGroupLeagueSaisonResult()
     * @param string $getLastChangeDateByGroupLeagueSaisonResult
     */
    public function __construct($getLastChangeDateByGroupLeagueSaisonResult = null)
    {
        $this->setGetLastChangeDateByGroupLeagueSaisonResult($getLastChangeDateByGroupLeagueSaisonResult);
    }

    /**
     * Get GetLastChangeDateByGroupLeagueSaisonResult value
     * @return string
     */
    public function getGetLastChangeDateByGroupLeagueSaisonResult()
    {
        return $this->GetLastChangeDateByGroupLeagueSaisonResult;
    }

    /**
     * Set GetLastChangeDateByGroupLeagueSaisonResult value
     * @param string $getLastChangeDateByGroupLeagueSaisonResult
     * @return \RrGeng\OpenligaDB\StructType\GetLastChangeDateByGroupLeagueSaisonResponse
     */
    public function setGetLastChangeDateByGroupLeagueSaisonResult($getLastChangeDateByGroupLeagueSaisonResult = null)
    {
        if (!is_null($getLastChangeDateByGroupLeagueSaisonResult) && !is_string($getLastChangeDateByGroupLeagueSaisonResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getLastChangeDateByGroupLeagueSaisonResult, true), gettype($getLastChangeDateByGroupLeagueSaisonResult)), __LINE__);
        }
        $this->GetLastChangeDateByGroupLeagueSaisonResult = $getLastChangeDateByGroupLeagueSaisonResult;
        return $this;
    }
}
