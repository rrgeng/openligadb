<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Group StructType
 * @subpackage Structs
 */
class Group extends AbstractStructBase
{
    /**
     * The groupOrderID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $groupOrderID;

    /**
     * The groupID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $groupID;

    /**
     * The groupName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $groupName;

    /**
     * Constructor method for Group
     * @uses Group::setGroupOrderID()
     * @uses Group::setGroupID()
     * @uses Group::setGroupName()
     * @param int $groupOrderID
     * @param int $groupID
     * @param string $groupName
     */
    public function __construct($groupOrderID = null, $groupID = null, $groupName = null)
    {
        $this
            ->setGroupOrderID($groupOrderID)
            ->setGroupID($groupID)
            ->setGroupName($groupName);
    }

    /**
     * Get groupOrderID value
     * @return int
     */
    public function getGroupOrderID()
    {
        return $this->groupOrderID;
    }

    /**
     * Set groupOrderID value
     * @param int $groupOrderID
     * @return \RrGeng\OpenligaDB\StructType\Group
     */
    public function setGroupOrderID($groupOrderID = null)
    {
        if (!is_null($groupOrderID) && !(is_int($groupOrderID) || ctype_digit($groupOrderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupOrderID, true), gettype($groupOrderID)), __LINE__);
        }
        $this->groupOrderID = $groupOrderID;
        return $this;
    }

    /**
     * Get groupID value
     * @return int
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Set groupID value
     * @param int $groupID
     * @return \RrGeng\OpenligaDB\StructType\Group
     */
    public function setGroupID($groupID = null)
    {
        if (!is_null($groupID) && !(is_int($groupID) || ctype_digit($groupID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupID, true), gettype($groupID)), __LINE__);
        }
        $this->groupID = $groupID;
        return $this;
    }

    /**
     * Get groupName value
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set groupName value
     * @param string $groupName
     * @return \RrGeng\OpenligaDB\StructType\Group
     */
    public function setGroupName($groupName = null)
    {
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        $this->groupName = $groupName;
        return $this;
    }
}
