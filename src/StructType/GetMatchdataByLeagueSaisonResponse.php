<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchdataByLeagueSaisonResponse StructType
 * @subpackage Structs
 */
class GetMatchdataByLeagueSaisonResponse extends AbstractStructBase
{
    /**
     * The GetMatchdataByLeagueSaisonResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata
     */
    public $GetMatchdataByLeagueSaisonResult;

    /**
     * Constructor method for GetMatchdataByLeagueSaisonResponse
     * @uses GetMatchdataByLeagueSaisonResponse::setGetMatchdataByLeagueSaisonResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByLeagueSaisonResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByLeagueSaisonResult = null)
    {
        $this->setGetMatchdataByLeagueSaisonResult($getMatchdataByLeagueSaisonResult);
    }

    /**
     * Get GetMatchdataByLeagueSaisonResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata|null
     */
    public function getGetMatchdataByLeagueSaisonResult()
    {
        return $this->GetMatchdataByLeagueSaisonResult;
    }

    /**
     * Set GetMatchdataByLeagueSaisonResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByLeagueSaisonResult
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueSaisonResponse
     */
    public function setGetMatchdataByLeagueSaisonResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata $getMatchdataByLeagueSaisonResult = null)
    {
        $this->GetMatchdataByLeagueSaisonResult = $getMatchdataByLeagueSaisonResult;
        return $this;
    }
}
