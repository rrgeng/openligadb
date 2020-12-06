<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GoalGetter StructType
 * @subpackage Structs
 */
class GoalGetter extends AbstractStructBase
{
    /**
     * The goalGetterBirthday
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $goalGetterBirthday;

    /**
     * The goalGetterGoalCount
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $goalGetterGoalCount;

    /**
     * The goalGetterID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $goalGetterID;

    /**
     * The goalGetterName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $goalGetterName;

    /**
     * The goalGetterNationality
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $goalGetterNationality;

    /**
     * Constructor method for GoalGetter
     * @uses GoalGetter::setGoalGetterBirthday()
     * @uses GoalGetter::setGoalGetterGoalCount()
     * @uses GoalGetter::setGoalGetterID()
     * @uses GoalGetter::setGoalGetterName()
     * @uses GoalGetter::setGoalGetterNationality()
     * @param string $goalGetterBirthday
     * @param int $goalGetterGoalCount
     * @param int $goalGetterID
     * @param string $goalGetterName
     * @param string $goalGetterNationality
     */
    public function __construct($goalGetterBirthday = null, $goalGetterGoalCount = null, $goalGetterID = null, $goalGetterName = null, $goalGetterNationality = null)
    {
        $this
            ->setGoalGetterBirthday($goalGetterBirthday)
            ->setGoalGetterGoalCount($goalGetterGoalCount)
            ->setGoalGetterID($goalGetterID)
            ->setGoalGetterName($goalGetterName)
            ->setGoalGetterNationality($goalGetterNationality);
    }

    /**
     * Get goalGetterBirthday value
     * @return string
     */
    public function getGoalGetterBirthday()
    {
        return $this->goalGetterBirthday;
    }

    /**
     * Set goalGetterBirthday value
     * @param string $goalGetterBirthday
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter
     */
    public function setGoalGetterBirthday($goalGetterBirthday = null)
    {
        if (!is_null($goalGetterBirthday) && !is_string($goalGetterBirthday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($goalGetterBirthday, true), gettype($goalGetterBirthday)), __LINE__);
        }
        $this->goalGetterBirthday = $goalGetterBirthday;
        return $this;
    }

    /**
     * Get goalGetterGoalCount value
     * @return int
     */
    public function getGoalGetterGoalCount()
    {
        return $this->goalGetterGoalCount;
    }

    /**
     * Set goalGetterGoalCount value
     * @param int $goalGetterGoalCount
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter
     */
    public function setGoalGetterGoalCount($goalGetterGoalCount = null)
    {
        if (!is_null($goalGetterGoalCount) && !(is_int($goalGetterGoalCount) || ctype_digit($goalGetterGoalCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goalGetterGoalCount, true), gettype($goalGetterGoalCount)), __LINE__);
        }
        $this->goalGetterGoalCount = $goalGetterGoalCount;
        return $this;
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
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter
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
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter
     */
    public function setGoalGetterName($goalGetterName = null)
    {
        if (!is_null($goalGetterName) && !is_string($goalGetterName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($goalGetterName, true), gettype($goalGetterName)), __LINE__);
        }
        $this->goalGetterName = $goalGetterName;
        return $this;
    }

    /**
     * Get goalGetterNationality value
     * @return string|null
     */
    public function getGoalGetterNationality()
    {
        return $this->goalGetterNationality;
    }

    /**
     * Set goalGetterNationality value
     * @param string $goalGetterNationality
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter
     */
    public function setGoalGetterNationality($goalGetterNationality = null)
    {
        if (!is_null($goalGetterNationality) && !is_string($goalGetterNationality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($goalGetterNationality, true), gettype($goalGetterNationality)), __LINE__);
        }
        $this->goalGetterNationality = $goalGetterNationality;
        return $this;
    }
}
