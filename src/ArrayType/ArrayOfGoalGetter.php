<?php
namespace RrGeng\OpenligaDB\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGoalGetter ArrayType
 * @subpackage Arrays
 */
class ArrayOfGoalGetter extends AbstractStructArrayBase
{
    /**
     * The GoalGetter
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\StructType\GoalGetter[]
     */
    public $GoalGetter;

    /**
     * Constructor method for ArrayOfGoalGetter
     * @uses ArrayOfGoalGetter::setGoalGetter()
     * @param \RrGeng\OpenligaDB\StructType\GoalGetter[] $goalGetter
     */
    public function __construct(array $goalGetter = array())
    {
        $this->setGoalGetter($goalGetter);
    }

    /**
     * Get GoalGetter value
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter[]|null
     */
    public function getGoalGetter()
    {
        return $this->GoalGetter;
    }

    /**
     * This method is responsible for validating the values passed to the setGoalGetter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGoalGetter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGoalGetterForArrayConstraintsFromSetGoalGetter(array $values = array())
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGoalGetterGoalGetterItem) {
            if (!$arrayOfGoalGetterGoalGetterItem instanceof \RrGeng\OpenligaDB\StructType\GoalGetter) {
                $invalidValues[] = is_object($arrayOfGoalGetterGoalGetterItem) ? get_class($arrayOfGoalGetterGoalGetterItem) : sprintf('%s(%s)', gettype($arrayOfGoalGetterGoalGetterItem), var_export($arrayOfGoalGetterGoalGetterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GoalGetter property can only contain items of type \RrGeng\OpenligaDB\StructType\GoalGetter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set GoalGetter value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\GoalGetter[] $goalGetter
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGoalGetter
     */
    public function setGoalGetter(array $goalGetter = array())
    {
        if ('' !== ($goalGetterArrayErrorMessage = self::validateGoalGetterForArrayConstraintsFromSetGoalGetter($goalGetter))) {
            throw new \InvalidArgumentException($goalGetterArrayErrorMessage, __LINE__);
        }
        $this->GoalGetter = $goalGetter;
        return $this;
    }

    /**
     * Add item to GoalGetter value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\GoalGetter $item
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGoalGetter
     */
    public function addToGoalGetter(\RrGeng\OpenligaDB\StructType\GoalGetter $item)
    {
        if (!$item instanceof \RrGeng\OpenligaDB\StructType\GoalGetter) {
            throw new \InvalidArgumentException(sprintf('The GoalGetter property can only contain items of type \RrGeng\OpenligaDB\StructType\GoalGetter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GoalGetter[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \RrGeng\OpenligaDB\StructType\GoalGetter|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GoalGetter
     */
    public function getAttributeName()
    {
        return 'GoalGetter';
    }
}
