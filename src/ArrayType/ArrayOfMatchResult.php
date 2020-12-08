<?php
namespace RrGeng\OpenligaDB\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMatchResult ArrayType
 * @subpackage Arrays
 */
class ArrayOfMatchResult extends AbstractStructArrayBase
{
    /**
     * The matchResult
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\StructType\MatchResult[]
     */
    public $matchResult;

    /**
     * Constructor method for ArrayOfMatchResult
     * @uses ArrayOfMatchResult::setMatchResult()
     * @param \RrGeng\OpenligaDB\StructType\MatchResult[] $matchResult
     */
    public function __construct(array $matchResult = array())
    {
        $this->setMatchResult($matchResult);
    }

    /**
     * Get matchResult value
     * @return \RrGeng\OpenligaDB\StructType\MatchResult[]|null
     */
    public function getMatchResult()
    {
        return $this->matchResult;
    }

    /**
     * This method is responsible for validating the values passed to the setMatchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMatchResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMatchResultForArrayConstraintsFromSetMatchResult(array $values = array())
    {
        $message       = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMatchResultMatchResultItem) {
            if (!$arrayOfMatchResultMatchResultItem instanceof \RrGeng\OpenligaDB\StructType\MatchResult) {
                $invalidValues[] = is_object($arrayOfMatchResultMatchResultItem) ? get_class($arrayOfMatchResultMatchResultItem) : sprintf('%s(%s)', gettype($arrayOfMatchResultMatchResultItem), var_export($arrayOfMatchResultMatchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The matchResult property can only contain items of type \RrGeng\OpenligaDB\StructType\MatchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set matchResult value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\MatchResult[] $matchResult
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchResult
     */
    public function setMatchResult(array $matchResult = array())
    {
        if ('' !== ($matchResultArrayErrorMessage = self::validateMatchResultForArrayConstraintsFromSetMatchResult($matchResult))) {
            throw new \InvalidArgumentException($matchResultArrayErrorMessage, __LINE__);
        }
        $this->matchResult = $matchResult;
        return $this;
    }

    /**
     * Add item to matchResult value
     * @throws \InvalidArgumentException
     * @param \RrGeng\OpenligaDB\StructType\MatchResult $item
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchResult
     */
    public function addToMatchResult(\RrGeng\OpenligaDB\StructType\MatchResult $item)
    {
        if (!$item instanceof \RrGeng\OpenligaDB\StructType\MatchResult) {
            throw new \InvalidArgumentException(sprintf('The matchResult property can only contain items of type \RrGeng\OpenligaDB\StructType\MatchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->matchResult[] = $item;
        return $this;
    }

    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \RrGeng\OpenligaDB\StructType\MatchResult|null
     */
    public function current()
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \RrGeng\OpenligaDB\StructType\MatchResult|null
     */
    public function item($index)
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \RrGeng\OpenligaDB\StructType\MatchResult|null
     */
    public function first()
    {
        return parent::first();
    }

    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \RrGeng\OpenligaDB\StructType\MatchResult|null
     */
    public function last()
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \RrGeng\OpenligaDB\StructType\MatchResult|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string matchResult
     */
    public function getAttributeName()
    {
        return 'matchResult';
    }
}
