<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailSportsResponse StructType
 * @subpackage Structs
 */
class GetAvailSportsResponse extends AbstractStructBase
{
    /**
     * The GetAvailSportsResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfSport
     */
    public $GetAvailSportsResult;

    /**
     * Constructor method for GetAvailSportsResponse
     * @uses GetAvailSportsResponse::setGetAvailSportsResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfSport $getAvailSportsResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfSport $getAvailSportsResult = null)
    {
        $this->setGetAvailSportsResult($getAvailSportsResult);
    }

    /**
     * Get GetAvailSportsResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfSport|null
     */
    public function getGetAvailSportsResult()
    {
        return $this->GetAvailSportsResult;
    }

    /**
     * Set GetAvailSportsResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfSport $getAvailSportsResult
     * @return \RrGeng\OpenligaDB\StructType\GetAvailSportsResponse
     */
    public function setGetAvailSportsResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfSport $getAvailSportsResult = null)
    {
        $this->GetAvailSportsResult = $getAvailSportsResult;
        return $this;
    }
}
