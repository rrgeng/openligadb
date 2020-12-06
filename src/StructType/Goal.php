<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Goal StructType
 * @subpackage Structs
 */
class Goal extends AbstractStructBase
{
    /**
     * The goalGetterID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $goalGetterID;

    /**
     * The goalMachID
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $goalMachID;

    /**
     * The goalID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $goalID;

    /**
     * The goalScoreTeam1
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $goalScoreTeam1;

    /**
     * The goalScoreTeam2
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $goalScoreTeam2;

    /**
     * The goalMatchMinute
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $goalMatchMinute;

    /**
     * The goalPenalty
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $goalPenalty;

    /**
     * The goalOwnGoal
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $goalOwnGoal;

    /**
     * The goalOvertime
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $goalOvertime;

    /**
     * The goalComment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $goalComment;

    /**
     * The goalGetterName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $goalGetterName;

    /**
     * Constructor method for Goal
     * @uses Goal::setGoalGetterID()
     * @uses Goal::setGoalMachID()
     * @uses Goal::setGoalID()
     * @uses Goal::setGoalScoreTeam1()
     * @uses Goal::setGoalScoreTeam2()
     * @uses Goal::setGoalMatchMinute()
     * @uses Goal::setGoalPenalty()
     * @uses Goal::setGoalOwnGoal()
     * @uses Goal::setGoalOvertime()
     * @uses Goal::setGoalComment()
     * @uses Goal::setGoalGetterName()
     * @param int $goalGetterID
     * @param int $goalMachID
     * @param int $goalID
     * @param int $goalScoreTeam1
     * @param int $goalScoreTeam2
     * @param int $goalMatchMinute
     * @param bool $goalPenalty
     * @param bool $goalOwnGoal
     * @param bool $goalOvertime
     * @param string $goalComment
     * @param string $goalGetterName
     */
    public function __construct($goalGetterID = null, $goalMachID = null, $goalID = null, $goalScoreTeam1 = null, $goalScoreTeam2 = null, $goalMatchMinute = null, $goalPenalty = null, $goalOwnGoal = null, $goalOvertime = null, $goalComment = null, $goalGetterName = null)
    {
        $this
            ->setGoalGetterID($goalGetterID)
            ->setGoalMachID($goalMachID)
            ->setGoalID($goalID)
            ->setGoalScoreTeam1($goalScoreTeam1)
            ->setGoalScoreTeam2($goalScoreTeam2)
            ->setGoalMatchMinute($goalMatchMinute)
            ->setGoalPenalty($goalPenalty)
            ->setGoalOwnGoal($goalOwnGoal)
            ->setGoalOvertime($goalOvertime)
            ->setGoalComment($goalComment)
            ->setGoalGetterName($goalGetterName);
    }

    /**
     * Get goalGetterID value
     * @return int
     */
    public function getGoalGetterID()
    {
        return $this->goalGetterID;
    }

    /**
     * Set goalGetterID value
     * @param int $goalGetterID
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalGetterID($goalGetterID = null)
    {
        if (!is_null($goalGetterID) && !(is_int($goalGetterID) || ctype_digit($goalGetterID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goalGetterID, true), gettype($goalGetterID)), __LINE__);
        }
        $this->goalGetterID = $goalGetterID;
        return $this;
    }

    /**
     * Get goalMachID value
     * @return int
     */
    public function getGoalMachID()
    {
        return $this->goalMachID;
    }

    /**
     * Set goalMachID value
     * @param int $goalMachID
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalMachID($goalMachID = null)
    {
        if (!is_null($goalMachID) && !(is_int($goalMachID) || ctype_digit($goalMachID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goalMachID, true), gettype($goalMachID)), __LINE__);
        }
        $this->goalMachID = $goalMachID;
        return $this;
    }

    /**
     * Get goalID value
     * @return int
     */
    public function getGoalID()
    {
        return $this->goalID;
    }

    /**
     * Set goalID value
     * @param int $goalID
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalID($goalID = null)
    {
        if (!is_null($goalID) && !(is_int($goalID) || ctype_digit($goalID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goalID, true), gettype($goalID)), __LINE__);
        }
        $this->goalID = $goalID;
        return $this;
    }

    /**
     * Get goalScoreTeam1 value
     * @return int
     */
    public function getGoalScoreTeam1()
    {
        return $this->goalScoreTeam1;
    }

    /**
     * Set goalScoreTeam1 value
     * @param int $goalScoreTeam1
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalScoreTeam1($goalScoreTeam1 = null)
    {
        if (!is_null($goalScoreTeam1) && !(is_int($goalScoreTeam1) || ctype_digit($goalScoreTeam1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goalScoreTeam1, true), gettype($goalScoreTeam1)), __LINE__);
        }
        $this->goalScoreTeam1 = $goalScoreTeam1;
        return $this;
    }

    /**
     * Get goalScoreTeam2 value
     * @return int
     */
    public function getGoalScoreTeam2()
    {
        return $this->goalScoreTeam2;
    }

    /**
     * Set goalScoreTeam2 value
     * @param int $goalScoreTeam2
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalScoreTeam2($goalScoreTeam2 = null)
    {
        if (!is_null($goalScoreTeam2) && !(is_int($goalScoreTeam2) || ctype_digit($goalScoreTeam2))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goalScoreTeam2, true), gettype($goalScoreTeam2)), __LINE__);
        }
        $this->goalScoreTeam2 = $goalScoreTeam2;
        return $this;
    }

    /**
     * Get goalMatchMinute value
     * @return int
     */
    public function getGoalMatchMinute()
    {
        return $this->goalMatchMinute;
    }

    /**
     * Set goalMatchMinute value
     * @param int $goalMatchMinute
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalMatchMinute($goalMatchMinute = null)
    {
        if (!is_null($goalMatchMinute) && !(is_int($goalMatchMinute) || ctype_digit($goalMatchMinute))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goalMatchMinute, true), gettype($goalMatchMinute)), __LINE__);
        }
        $this->goalMatchMinute = $goalMatchMinute;
        return $this;
    }

    /**
     * Get goalPenalty value
     * @return bool
     */
    public function getGoalPenalty()
    {
        return $this->goalPenalty;
    }

    /**
     * Set goalPenalty value
     * @param bool $goalPenalty
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalPenalty($goalPenalty = null)
    {
        if (!is_null($goalPenalty) && !is_bool($goalPenalty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($goalPenalty, true), gettype($goalPenalty)), __LINE__);
        }
        $this->goalPenalty = $goalPenalty;
        return $this;
    }

    /**
     * Get goalOwnGoal value
     * @return bool
     */
    public function getGoalOwnGoal()
    {
        return $this->goalOwnGoal;
    }

    /**
     * Set goalOwnGoal value
     * @param bool $goalOwnGoal
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalOwnGoal($goalOwnGoal = null)
    {
        if (!is_null($goalOwnGoal) && !is_bool($goalOwnGoal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($goalOwnGoal, true), gettype($goalOwnGoal)), __LINE__);
        }
        $this->goalOwnGoal = $goalOwnGoal;
        return $this;
    }

    /**
     * Get goalOvertime value
     * @return bool
     */
    public function getGoalOvertime()
    {
        return $this->goalOvertime;
    }

    /**
     * Set goalOvertime value
     * @param bool $goalOvertime
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalOvertime($goalOvertime = null)
    {
        if (!is_null($goalOvertime) && !is_bool($goalOvertime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($goalOvertime, true), gettype($goalOvertime)), __LINE__);
        }
        $this->goalOvertime = $goalOvertime;
        return $this;
    }

    /**
     * Get goalComment value
     * @return string|null
     */
    public function getGoalComment()
    {
        return $this->goalComment;
    }

    /**
     * Set goalComment value
     * @param string $goalComment
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalComment($goalComment = null)
    {
        if (!is_null($goalComment) && !is_string($goalComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($goalComment, true), gettype($goalComment)), __LINE__);
        }
        $this->goalComment = $goalComment;
        return $this;
    }

    /**
     * Get goalGetterName value
     * @return string|null
     */
    public function getGoalGetterName()
    {
        return $this->goalGetterName;
    }

    /**
     * Set goalGetterName value
     * @param string $goalGetterName
     * @return \RrGeng\OpenligaDB\StructType\Goal
     */
    public function setGoalGetterName($goalGetterName = null)
    {
        if (!is_null($goalGetterName) && !is_string($goalGetterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($goalGetterName, true), gettype($goalGetterName)), __LINE__);
        }
        $this->goalGetterName = $goalGetterName;
        return $this;
    }
}
