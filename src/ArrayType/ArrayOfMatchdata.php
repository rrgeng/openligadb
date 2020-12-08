<?php
namespace RrGeng\OpenligaDB\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMatchdata ArrayType
 * @subpackage Arrays
 */
class ArrayOfMatchdata extends AbstractStructArrayBase
{
    /**
     * The Matchdata
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\StructType\Matchdata[]
     */
    public $Matchdata;

    /**
     * Constructor method for ArrayOfMatchdata
     * @uses ArrayOfMatchdata::setMatchdata()
     * @param \RrGeng\OpenligaDB\StructType\Matchdata[] $matchdata
     */
    public function __construct(array $matchdata = array())
    {
        $this->setMatchdata($matchdata);
    }

    /**
     * Get Matchdata value
     * @return \RrGeng\OpenligaDB\StructType\Matchdata[]|null
     */
    public function getMatchdata()
    {
        return $this->Matchdata;
    }

    /**
     * This method is responsible for validating the values passed to the setMatchdata method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMatchdata method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMatchdataForArrayConstraintsFromSetMatchdata(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMatchdataMatchdataItem) {
            if (!$arrayOfMatchdataMatchdataItem instanceof \RrGeng\OpenligaDB\StructType\Matchdata) {
                $invalidValues[] = is_object($arrayOfMatchdataMatchdataItem) ? get_class($arrayOfMatchdataMatchdataItem) : sprintf('%s(%s)', gettype($arrayOfMatchdataMatchdataItem), var_export($arrayOfMatchdataMatchdataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Matchdata property can only contain items of type \RrGeng\OpenligaDB\StructType\Matchdata, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Matchdata value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Matchdata[] $matchdata
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata
     */
    public function setMatchdata(array $matchdata = array())
    {
        if ('' !== ($matchdataArrayErrorMessage = self::validateMatchdataForArrayConstraintsFromSetMatchdata($matchdata))) {
            throw new \InvalidArgumentException($matchdataArrayErrorMessage, __LINE__);
        }
        $this->Matchdata = $matchdata;
        return $this;
    }

    /**
     * Add item to Matchdata value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Matchdata $item
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchdata
     */
    public function addToMatchdata(\RrGeng\OpenligaDB\StructType\Matchdata $item)
    {
        if (!$item instanceof \RrGeng\OpenligaDB\StructType\Matchdata) {
            throw new \InvalidArgumentException(sprintf('The Matchdata property can only contain items of type \RrGeng\OpenligaDB\StructType\Matchdata, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Matchdata[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \RrGeng\OpenligaDB\StructType\Matchdata|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \RrGeng\OpenligaDB\StructType\Matchdata|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \RrGeng\OpenligaDB\StructType\Matchdata|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \RrGeng\OpenligaDB\StructType\Matchdata|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \RrGeng\OpenligaDB\StructType\Matchdata|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Matchdata
     */
    public function getAttributeName()
    {
        return 'Matchdata';
    }
}
