<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchdataByGroupLeagueSaisonResponse StructType
 * @subpackage Structs
 */
class GetMatchdataByGroupLeagueSaisonResponse extends AbstractStructBase
{
    /**
     * The GetMatchdataByGroupLeagueSaisonResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata
     */
    public $GetMatchdataByGroupLeagueSaisonResult;

    /**
     * Constructor method for GetMatchdataByGroupLeagueSaisonResponse
     * @uses GetMatchdataByGroupLeagueSaisonResponse::setGetMatchdataByGroupLeagueSaisonResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByGroupLeagueSaisonResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByGroupLeagueSaisonResult = null)
    {
        $this->setGetMatchdataByGroupLeagueSaisonResult($getMatchdataByGroupLeagueSaisonResult);
    }

    /**
     * Get GetMatchdataByGroupLeagueSaisonResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata|null
     */
    public function getGetMatchdataByGroupLeagueSaisonResult()
    {
        return $this->GetMatchdataByGroupLeagueSaisonResult;
    }

    /**
     * Set GetMatchdataByGroupLeagueSaisonResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByGroupLeagueSaisonResult
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaisonResponse
     */
    public function setGetMatchdataByGroupLeagueSaisonResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByGroupLeagueSaisonResult = null)
    {
        $this->GetMatchdataByGroupLeagueSaisonResult = $getMatchdataByGroupLeagueSaisonResult;
        return $this;
    }
}
