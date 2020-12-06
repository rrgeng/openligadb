<?php
namespace RrGeng\OpenligaDB\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTeam ArrayType
 * @subpackage Arrays
 */
class ArrayOfTeam extends AbstractStructArrayBase
{

    /**
     * The Team
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\StructType\Team[]
     */
    public $Team;

    /**
     * Constructor method for ArrayOfTeam
     * @uses ArrayOfTeam::setTeam()
     * @param \RrGeng\OpenligaDB\StructType\Team[] $team
     */
    public function __construct(array $team = array())
    {
        $this->setTeam($team);
    }

    /**
     * Get Team value
     * @return \RrGeng\OpenligaDB\StructType\Team[]|null
     */
    public function getTeam()
    {
        return $this->Team;
    }

    /**
     * This method is responsible for validating the values passed to the setTeam method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTeam method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTeamForArrayConstraintsFromSetTeam(array $values = array())
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTeamTeamItem) {
            if (!$arrayOfTeamTeamItem instanceof \RrGeng\OpenligaDB\StructType\Team) {
                $invalidValues[] = is_object($arrayOfTeamTeamItem) ? get_class($arrayOfTeamTeamItem) : sprintf('%s(%s)', gettype($arrayOfTeamTeamItem), var_export($arrayOfTeamTeamItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Team property can only contain items of type \RrGeng\OpenligaDB\StructType\Team, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Team value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Team[] $team
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfTeam
     */
    public function setTeam(array $team = array())
    {
        if ('' !== ($teamArrayErrorMessage = self::validateTeamForArrayConstraintsFromSetTeam($team))) {
            throw new \InvalidArgumentException($teamArrayErrorMessage, __LINE__);
        }
        $this->Team = $team;
        return $this;
    }

    /**
     * Add item to Team value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Team $item
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfTeam
     */
    public function addToTeam(\RrGeng\OpenligaDB\StructType\Team $item)
    {
        if (!$item instanceof \RrGeng\OpenligaDB\StructType\Team) {
            throw new \InvalidArgumentException(sprintf('The Team property can only contain items of type \RrGeng\OpenligaDB\StructType\Team, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Team[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \RrGeng\OpenligaDB\StructType\Team|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \RrGeng\OpenligaDB\StructType\Team|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \RrGeng\OpenligaDB\StructType\Team|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \RrGeng\OpenligaDB\StructType\Team|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \RrGeng\OpenligaDB\StructType\Team|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Team
     */
    public function getAttributeName()
    {
        return 'Team';
    }
}
