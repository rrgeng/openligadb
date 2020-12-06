<?php
namespace RrGeng\OpenligaDB\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGoal ArrayType
 * @subpackage Arrays
 */
class ArrayOfGoal extends AbstractStructArrayBase
{
    /**
     * The Goal
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\StructType\Goal[]
     */
    public $Goal;

    /**
     * Constructor method for ArrayOfGoal
     * @uses ArrayOfGoal::setGoal()
     * @param \RrGeng\OpenligaDB\StructType\Goal[] $goal
     */
    public function __construct(array $goal = array())
    {
        $this->setGoal($goal);
    }

    /**
     * Get Goal value
     * @return \RrGeng\OpenligaDB\StructType\Goal[]|null
     */
    public function getGoal()
    {
        return $this->Goal;
    }

    /**
     * This method is responsible for validating the values passed to the setGoal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGoal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGoalForArrayConstraintsFromSetGoal(array $values = array())
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGoalGoalItem) {
            // validation for constraint: itemType
            if (!$arrayOfGoalGoalItem instanceof \RrGeng\OpenligaDB\StructType\Goal) {
                $invalidValues[] = is_object($arrayOfGoalGoalItem) ? get_class($arrayOfGoalGoalItem) : sprintf('%s(%s)', gettype($arrayOfGoalGoalItem), var_export($arrayOfGoalGoalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Goal property can only contain items of type \RrGeng\OpenligaDB\StructType\Goal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Goal value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Goal[] $goal
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal
     */
    public function setGoal(array $goal = array())
    {
        if ('' !== ($goalArrayErrorMessage = self::validateGoalForArrayConstraintsFromSetGoal($goal))) {
            throw new \InvalidArgumentException($goalArrayErrorMessage, __LINE__);
        }
        $this->Goal = $goal;
        return $this;
    }

    /**
     * Add item to Goal value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Goal $item
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal
     */
    public function addToGoal(\RrGeng\OpenligaDB\StructType\Goal $item)
    {
        if (!$item instanceof \RrGeng\OpenligaDB\StructType\Goal) {
            throw new \InvalidArgumentException(sprintf('The Goal property can only contain items of type \RrGeng\OpenligaDB\StructType\Goal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Goal[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \RrGeng\OpenligaDB\StructType\Goal|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \RrGeng\OpenligaDB\StructType\Goal|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \RrGeng\OpenligaDB\StructType\Goal|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \RrGeng\OpenligaDB\StructType\Goal|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \RrGeng\OpenligaDB\StructType\Goal|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Goal
     */
    public function getAttributeName()
    {
        return 'Goal';
    }
}
