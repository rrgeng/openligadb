<?php
namespace RrGeng\OpenligaDB\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLeague ArrayType
 * @subpackage Arrays
 */
class ArrayOfLeague extends AbstractStructArrayBase
{
    /**
     * The League
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\StructType\League[]
     */
    public $League;

    /**
     * Constructor method for ArrayOfLeague
     * @uses ArrayOfLeague::setLeague()
     * @param \RrGeng\OpenligaDB\StructType\League[] $league
     */
    public function __construct(array $league = array())
    {
        $this
            ->setLeague($league);
    }

    /**
     * Get League value
     * @return \RrGeng\OpenligaDB\StructType\League[]|null
     */
    public function getLeague()
    {
        return $this->League;
    }

    /**
     * This method is responsible for validating the values passed to the setLeague method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLeague method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLeagueForArrayConstraintsFromSetLeague(array $values = array())
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLeagueLeagueItem) {
            if (!$arrayOfLeagueLeagueItem instanceof \RrGeng\OpenligaDB\StructType\League) {
                $invalidValues[] = is_object($arrayOfLeagueLeagueItem) ? get_class($arrayOfLeagueLeagueItem) : sprintf('%s(%s)', gettype($arrayOfLeagueLeagueItem), var_export($arrayOfLeagueLeagueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The League property can only contain items of type \RrGeng\OpenligaDB\StructType\League, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set League value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\League[] $league
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague
     */
    public function setLeague(array $league = array())
    {
        if ('' !== ($leagueArrayErrorMessage = self::validateLeagueForArrayConstraintsFromSetLeague($league))) {
            throw new \InvalidArgumentException($leagueArrayErrorMessage, __LINE__);
        }
        $this->League = $league;
        return $this;
    }

    /**
     * Add item to League value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\League $item
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfLeague
     */
    public function addToLeague(\RrGeng\OpenligaDB\StructType\League $item)
    {
        if (!$item instanceof \RrGeng\OpenligaDB\StructType\League) {
            throw new \InvalidArgumentException(sprintf('The League property can only contain items of type \RrGeng\OpenligaDB\StructType\League, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->League[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \RrGeng\OpenligaDB\StructType\League|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \RrGeng\OpenligaDB\StructType\League|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \RrGeng\OpenligaDB\StructType\League|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \RrGeng\OpenligaDB\StructType\League|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \RrGeng\OpenligaDB\StructType\League|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string League
     */
    public function getAttributeName()
    {
        return 'League';
    }
}
