<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchdataByGroupLeagueSaisonJSONResponse StructType
 * @subpackage Structs
 */
class GetMatchdataByGroupLeagueSaisonJSONResponse extends AbstractStructBase
{
    /**
     * The GetMatchdataByGroupLeagueSaisonJSONResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetMatchdataByGroupLeagueSaisonJSONResult;

    /**
     * Constructor method for GetMatchdataByGroupLeagueSaisonJSONResponse
     * @uses GetMatchdataByGroupLeagueSaisonJSONResponse::setGetMatchdataByGroupLeagueSaisonJSONResult()
     * @param string $getMatchdataByGroupLeagueSaisonJSONResult
     */
    public function __construct($getMatchdataByGroupLeagueSaisonJSONResult = null)
    {
        $this->setGetMatchdataByGroupLeagueSaisonJSONResult($getMatchdataByGroupLeagueSaisonJSONResult);
    }

    /**
     * Get GetMatchdataByGroupLeagueSaisonJSONResult value
     * @return string|null
     */
    public function getGetMatchdataByGroupLeagueSaisonJSONResult()
    {
        return $this->GetMatchdataByGroupLeagueSaisonJSONResult;
    }

    /**
     * Set GetMatchdataByGroupLeagueSaisonJSONResult value
     * @param string $getMatchdataByGroupLeagueSaisonJSONResult
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaisonJSONResponse
     */
    public function setGetMatchdataByGroupLeagueSaisonJSONResult($getMatchdataByGroupLeagueSaisonJSONResult = null)
    {
        if (!is_null($getMatchdataByGroupLeagueSaisonJSONResult) && !is_string($getMatchdataByGroupLeagueSaisonJSONResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getMatchdataByGroupLeagueSaisonJSONResult, true), gettype($getMatchdataByGroupLeagueSaisonJSONResult)), __LINE__);
        }
        $this->GetMatchdataByGroupLeagueSaisonJSONResult = $getMatchdataByGroupLeagueSaisonJSONResult;
        return $this;
    }
}
