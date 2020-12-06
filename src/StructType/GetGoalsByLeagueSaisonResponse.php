<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGoalsByLeagueSaisonResponse StructType
 * @subpackage Structs
 */
class GetGoalsByLeagueSaisonResponse extends AbstractStructBase
{
    /**
     * The GetGoalsByLeagueSaisonResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal
     */
    public $GetGoalsByLeagueSaisonResult;

    /**
     * Constructor method for GetGoalsByLeagueSaisonResponse
     * @uses GetGoalsByLeagueSaisonResponse::setGetGoalsByLeagueSaisonResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $getGoalsByLeagueSaisonResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $getGoalsByLeagueSaisonResult = null)
    {
        $this->setGetGoalsByLeagueSaisonResult($getGoalsByLeagueSaisonResult);
    }

    /**
     * Get GetGoalsByLeagueSaisonResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal|null
     */
    public function getGetGoalsByLeagueSaisonResult()
    {
        return $this->GetGoalsByLeagueSaisonResult;
    }

    /**
     * Set GetGoalsByLeagueSaisonResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $getGoalsByLeagueSaisonResult
     * @return \RrGeng\OpenligaDB\StructType\GetGoalsByLeagueSaisonResponse
     */
    public function setGetGoalsByLeagueSaisonResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $getGoalsByLeagueSaisonResult = null)
    {
        $this->GetGoalsByLeagueSaisonResult = $getGoalsByLeagueSaisonResult;
        return $this;
    }
}
