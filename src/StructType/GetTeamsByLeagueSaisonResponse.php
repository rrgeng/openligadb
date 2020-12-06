<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTeamsByLeagueSaisonResponse StructType
 * @subpackage Structs
 */
class GetTeamsByLeagueSaisonResponse extends AbstractStructBase
{
    /**
     * The GetTeamsByLeagueSaisonResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfTeam
     */
    public $GetTeamsByLeagueSaisonResult;

    /**
     * Constructor method for GetTeamsByLeagueSaisonResponse
     * @uses GetTeamsByLeagueSaisonResponse::setGetTeamsByLeagueSaisonResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfTeam $getTeamsByLeagueSaisonResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfTeam $getTeamsByLeagueSaisonResult = null)
    {
        $this->setGetTeamsByLeagueSaisonResult($getTeamsByLeagueSaisonResult);
    }

    /**
     * Get GetTeamsByLeagueSaisonResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfTeam|null
     */
    public function getGetTeamsByLeagueSaisonResult()
    {
        return $this->GetTeamsByLeagueSaisonResult;
    }

    /**
     * Set GetTeamsByLeagueSaisonResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfTeam $getTeamsByLeagueSaisonResult
     * @return \RrGeng\OpenligaDB\StructType\GetTeamsByLeagueSaisonResponse
     */
    public function setGetTeamsByLeagueSaisonResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfTeam $getTeamsByLeagueSaisonResult = null)
    {
        $this->GetTeamsByLeagueSaisonResult = $getTeamsByLeagueSaisonResult;
        return $this;
    }
}
