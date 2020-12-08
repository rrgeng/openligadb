<?php
namespace RrGeng\OpenligaDB\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSport ArrayType
 * @subpackage Arrays
 */
class ArrayOfSport extends AbstractStructArrayBase
{
    /**
     * The Sport
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \RrGeng\OpenligaDB\StructType\Sport[]
     */
    public $Sport;

    /**
     * Constructor method for ArrayOfSport
     * @uses ArrayOfSport::setSport()
     * @param \RrGeng\OpenligaDB\StructType\Sport[] $sport
     */
    public function __construct(array $sport = array())
    {
        $this->setSport($sport);
    }

    /**
     * Get Sport value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \RrGeng\OpenligaDB\StructType\Sport[]|null
     */
    public function getSport()
    {
        return isset($this->Sport) ? $this->Sport : null;
    }

    /**
     * This method is responsible for validating the values passed to the setSport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSportForArrayConstraintsFromSetSport(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSportSportItem) {
            if (!$arrayOfSportSportItem instanceof \RrGeng\OpenligaDB\StructType\Sport) {
                $invalidValues[] = is_object($arrayOfSportSportItem) ? get_class($arrayOfSportSportItem) : sprintf('%s(%s)', gettype($arrayOfSportSportItem), var_export($arrayOfSportSportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Sport property can only contain items of type \RrGeng\OpenligaDB\StructType\Sport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Sport value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Sport[] $sport
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfSport
     */
    public function setSport(array $sport = array())
    {
        if ('' !== ($sportArrayErrorMessage = self::validateSportForArrayConstraintsFromSetSport($sport))) {
            throw new \InvalidArgumentException($sportArrayErrorMessage, __LINE__);
        }
        if (is_null($sport) || (is_array($sport) && empty($sport))) {
            unset($this->Sport);
        } else {
            $this->Sport = $sport;
        }
        return $this;
    }

    /**
     * Add item to Sport value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Sport $item
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfSport
     */
    public function addToSport(\RrGeng\OpenligaDB\StructType\Sport $item)
    {
        if (!$item instanceof \RrGeng\OpenligaDB\StructType\Sport) {
            throw new \InvalidArgumentException(sprintf('The Sport property can only contain items of type \RrGeng\OpenligaDB\StructType\Sport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Sport[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \RrGeng\OpenligaDB\StructType\Sport|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \RrGeng\OpenligaDB\StructType\Sport|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \RrGeng\OpenligaDB\StructType\Sport|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \RrGeng\OpenligaDB\StructType\Sport|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \RrGeng\OpenligaDB\StructType\Sport|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Sport
     */
    public function getAttributeName()
    {
        return 'Sport';
    }
}
