<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGoalsByMatchResponse StructType
 * @subpackage Structs
 */
class GetGoalsByMatchResponse extends AbstractStructBase
{

    /**
     * The GetGoalsByMatchResult
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal
     */
    public $GetGoalsByMatchResult;

    /**
     * Constructor method for GetGoalsByMatchResponse
     * @uses GetGoalsByMatchResponse::setGetGoalsByMatchResult()
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $getGoalsByMatchResult
     */
    public function __construct(\RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $getGoalsByMatchResult = null)
    {
        $this->setGetGoalsByMatchResult($getGoalsByMatchResult);
    }

    /**
     * Get GetGoalsByMatchResult value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal|null
     */
    public function getGetGoalsByMatchResult()
    {
        return $this->GetGoalsByMatchResult;
    }

    /**
     * Set GetGoalsByMatchResult value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $getGoalsByMatchResult
     * @return \RrGeng\OpenligaDB\StructType\GetGoalsByMatchResponse
     */
    public function setGetGoalsByMatchResult(\RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $getGoalsByMatchResult = null)
    {
        $this->GetGoalsByMatchResult = $getGoalsByMatchResult;
        return $this;
    }
}
