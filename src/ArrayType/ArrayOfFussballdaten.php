<?php
namespace RrGeng\OpenligaDB\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFussballdaten ArrayType
 * @subpackage Arrays
 */
class ArrayOfFussballdaten extends AbstractStructArrayBase
{

    /**
     * The Fussballdaten
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\StructType\Fussballdaten[]
     */
    public $Fussballdaten;

    /**
     * Constructor method for ArrayOfFussballdaten
     * @uses ArrayOfFussballdaten::setFussballdaten()
     * @param \RrGeng\OpenligaDB\StructType\Fussballdaten[] $fussballdaten
     */
    public function __construct(array $fussballdaten = array())
    {
        $this->setFussballdaten($fussballdaten);
    }

    /**
     * Get Fussballdaten value
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten[]|null
     */
    public function getFussballdaten()
    {
        return $this->Fussballdaten;
    }

    /**
     * This method is responsible for validating the values passed to the setFussballdaten method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFussballdaten method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFussballdatenForArrayConstraintsFromSetFussballdaten(array $values = array())
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFussballdatenFussballdatenItem) {
            // validation for constraint: itemType
            if (!$arrayOfFussballdatenFussballdatenItem instanceof \RrGeng\OpenligaDB\StructType\Fussballdaten) {
                $invalidValues[] = is_object($arrayOfFussballdatenFussballdatenItem) ? get_class($arrayOfFussballdatenFussballdatenItem) : sprintf('%s(%s)', gettype($arrayOfFussballdatenFussballdatenItem), var_export($arrayOfFussballdatenFussballdatenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Fussballdaten property can only contain items of type \RrGeng\OpenligaDB\StructType\Fussballdaten, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set Fussballdaten value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Fussballdaten[] $fussballdaten
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfFussballdaten
     */
    public function setFussballdaten(array $fussballdaten = array())
    {
        // validation for constraint: array
        if ('' !== ($fussballdatenArrayErrorMessage = self::validateFussballdatenForArrayConstraintsFromSetFussballdaten($fussballdaten))) {
            throw new \InvalidArgumentException($fussballdatenArrayErrorMessage, __LINE__);
        }
        $this->Fussballdaten = $fussballdaten;
        return $this;
    }

    /**
     * Add item to Fussballdaten value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\Fussballdaten $item
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfFussballdaten
     */
    public function addToFussballdaten(\RrGeng\OpenligaDB\StructType\Fussballdaten $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \RrGeng\OpenligaDB\StructType\Fussballdaten) {
            throw new \InvalidArgumentException(sprintf('The Fussballdaten property can only contain items of type \RrGeng\OpenligaDB\StructType\Fussballdaten, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Fussballdaten[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Fussballdaten
     */
    public function getAttributeName()
    {
        return 'Fussballdaten';
    }
}
