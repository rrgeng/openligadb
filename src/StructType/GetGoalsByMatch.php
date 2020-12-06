<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGoalsByMatch StructType
 * @subpackage Structs
 */
class GetGoalsByMatch extends AbstractStructBase
{

    /**
     * The MatchID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MatchID;

    /**
     * Constructor method for GetGoalsByMatch
     * @uses GetGoalsByMatch::setMatchID()
     * @param int $matchID
     */
    public function __construct($matchID = null)
    {
        $this->setMatchID($matchID);
    }

    /**
     * Get MatchID value
     * @return int
     */
    public function getMatchID()
    {
        return $this->MatchID;
    }

    /**
     * Set MatchID value
     * @param int $matchID
     * @return \RrGeng\OpenligaDB\StructType\GetGoalsByMatch
     */
    public function setMatchID($matchID = null)
    {
        if (!is_null($matchID) && !(is_int($matchID) || ctype_digit($matchID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($matchID, true), gettype($matchID)), __LINE__);
        }
        $this->MatchID = $matchID;
        return $this;
    }
}
