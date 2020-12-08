<?php
namespace RrGeng\OpenligaDB\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGroup ArrayType
 * @subpackage Arrays
 */
class ArrayOfGroup extends AbstractStructArrayBase
{
    /**
     * The Group
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\StructType\Group[]
     */
    public $Group;

    /**
     * Constructor method for ArrayOfGroup
     * @uses ArrayOfGroup::setGroup()
     * @param \RrGeng\OpenligaDB\StructType\Group[] $group
     */
    public function __construct(array $group = array())
    {
        $this
            ->setGroup($group);
    }

    /**
     * Get Group value
     * @return \RrGeng\OpenligaDB\StructType\Group[]|null
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * This method is responsible for validating the values passed to the setGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupForArrayConstraintsFromSetGroup(array $values = array())
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGroupGroupItem) {
            if (!$arrayOfGroupGroupItem instanceof \RrGeng\OpenligaDB\StructType\Group) {
                $invalidValues[] = is_object($arrayOfGroupGroupItem) ? get_class($arrayOfGroupGroupItem) : sprintf('%s(%s)', gettype($arrayOfGroupGroupItem), var_export($arrayOfGroupGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Group property can only contain items of type \RrGeng\OpenligaDB\StructType\Group, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Group value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Group[] $group
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGroup
     */
    public function setGroup(array $group = array())
    {
        if ('' !== ($groupArrayErrorMessage = self::validateGroupForArrayConstraintsFromSetGroup($group))) {
            throw new \InvalidArgumentException($groupArrayErrorMessage, __LINE__);
        }
        $this->Group = $group;
        return $this;
    }

    /**
     * Add item to Group value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Group $item
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGroup
     */
    public function addToGroup(\RrGeng\OpenligaDB\StructType\Group $item)
    {
        if (!$item instanceof \RrGeng\OpenligaDB\StructType\Group) {
            throw new \InvalidArgumentException(sprintf('The Group property can only contain items of type \RrGeng\OpenligaDB\StructType\Group, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Group[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \RrGeng\OpenligaDB\StructType\Group|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \RrGeng\OpenligaDB\StructType\Group|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \RrGeng\OpenligaDB\StructType\Group|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \RrGeng\OpenligaDB\StructType\Group|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \RrGeng\OpenligaDB\StructType\Group|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Group
     */
    public function getAttributeName()
    {
        return 'Group';
    }
}
