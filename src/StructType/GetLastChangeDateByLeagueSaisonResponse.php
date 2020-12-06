<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastChangeDateByLeagueSaisonResponse StructType
 * @subpackage Structs
 */
class GetLastChangeDateByLeagueSaisonResponse extends AbstractStructBase
{
    /**
     * The GetLastChangeDateByLeagueSaisonResult
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $GetLastChangeDateByLeagueSaisonResult;

    /**
     * Constructor method for GetLastChangeDateByLeagueSaisonResponse
     * @uses GetLastChangeDateByLeagueSaisonResponse::setGetLastChangeDateByLeagueSaisonResult()
     * @param string $getLastChangeDateByLeagueSaisonResult
     */
    public function __construct($getLastChangeDateByLeagueSaisonResult = null)
    {
        $this->setGetLastChangeDateByLeagueSaisonResult($getLastChangeDateByLeagueSaisonResult);
    }

    /**
     * Get GetLastChangeDateByLeagueSaisonResult value
     * @return string
     */
    public function getGetLastChangeDateByLeagueSaisonResult()
    {
        return $this->GetLastChangeDateByLeagueSaisonResult;
    }

    /**
     * Set GetLastChangeDateByLeagueSaisonResult value
     * @param string $getLastChangeDateByLeagueSaisonResult
     * @return \RrGeng\OpenligaDB\StructType\GetLastChangeDateByLeagueSaisonResponse
     */
    public function setGetLastChangeDateByLeagueSaisonResult($getLastChangeDateByLeagueSaisonResult = null)
    {
        if (!is_null($getLastChangeDateByLeagueSaisonResult) && !is_string($getLastChangeDateByLeagueSaisonResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getLastChangeDateByLeagueSaisonResult, true), gettype($getLastChangeDateByLeagueSaisonResult)), __LINE__);
        }
        $this->GetLastChangeDateByLeagueSaisonResult = $getLastChangeDateByLeagueSaisonResult;
        return $this;
    }
}
