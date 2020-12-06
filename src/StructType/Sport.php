<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sport StructType
 * @subpackage Structs
 */
class Sport extends AbstractStructBase
{
    /**
     * The sportsID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $sportsID;

    /**
     * The sportsName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $sportsName;

    /**
     * Constructor method for Sport
     * @uses Sport::setSportsID()
     * @uses Sport::setSportsName()
     * @param int $sportsID
     * @param string $sportsName
     */
    public function __construct($sportsID = null, $sportsName = null)
    {
        $this
            ->setSportsID($sportsID)
            ->setSportsName($sportsName);
    }

    /**
     * Get sportsID value
     * @return int
     */
    public function getSportsID()
    {
        return $this->sportsID;
    }

    /**
     * Set sportsID value
     * @param int $sportsID
     * @return \RrGeng\OpenligaDB\StructType\Sport
     */
    public function setSportsID($sportsID = null)
    {
        if (!is_null($sportsID) && !(is_int($sportsID) || ctype_digit($sportsID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sportsID, true), gettype($sportsID)), __LINE__);
        }
        $this->sportsID = $sportsID;
        return $this;
    }

    /**
     * Get sportsName value
     * @return string|null
     */
    public function getSportsName()
    {
        return $this->sportsName;
    }

    /**
     * Set sportsName value
     * @param string $sportsName
     * @return \RrGeng\OpenligaDB\StructType\Sport
     */
    public function setSportsName($sportsName = null)
    {
        if (!is_null($sportsName) && !is_string($sportsName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sportsName, true), gettype($sportsName)), __LINE__);
        }
        $this->sportsName = $sportsName;
        return $this;
    }
}
