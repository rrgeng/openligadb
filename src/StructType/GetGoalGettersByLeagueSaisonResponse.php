<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGoalGettersByLeagueSaisonResponse StructType
 * @subpackage Structs
 */
class GetGoalGettersByLeagueSaisonResponse extends AbstractStructBase
{
    /**
     * The GetGoalGettersByLeagueSaisonResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfGoalGetter
     */
    public $GetGoalGettersByLeagueSaisonResult;

    /**
     * Constructor method for GetGoalGettersByLeagueSaisonResponse
     * @uses GetGoalGettersByLeagueSaisonResponse::setGetGoalGettersByLeagueSaisonResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGoalGetter $getGoalGettersByLeagueSaisonResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfGoalGetter $getGoalGettersByLeagueSaisonResult = null)
    {
        $this->setGetGoalGettersByLeagueSaisonResult($getGoalGettersByLeagueSaisonResult);
    }

    /**
     * Get GetGoalGettersByLeagueSaisonResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGoalGetter|null
     */
    public function getGetGoalGettersByLeagueSaisonResult()
    {
        return $this->GetGoalGettersByLeagueSaisonResult;
    }

    /**
     * Set GetGoalGettersByLeagueSaisonResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGoalGetter $getGoalGettersByLeagueSaisonResult
     * @return \RrGeng\OpenligaDB\StructType\GetGoalGettersByLeagueSaisonResponse
     */
    public function setGetGoalGettersByLeagueSaisonResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfGoalGetter $getGoalGettersByLeagueSaisonResult = null)
    {
        $this->GetGoalGettersByLeagueSaisonResult = $getGoalGettersByLeagueSaisonResult;
        return $this;
    }
}
