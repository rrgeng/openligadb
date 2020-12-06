<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Team StructType
 * @subpackage Structs
 */
class Team extends AbstractStructBase
{
    /**
     * The teamID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $teamID;

    /**
     * The teamName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $teamName;

    /**
     * The teamIconURL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $teamIconURL;

    /**
     * Constructor method for Team
     * @uses Team::setTeamID()
     * @uses Team::setTeamName()
     * @uses Team::setTeamIconURL()
     * @param int $teamID
     * @param string $teamName
     * @param string $teamIconURL
     */
    public function __construct($teamID = null, $teamName = null, $teamIconURL = null)
    {
        $this
            ->setTeamID($teamID)
            ->setTeamName($teamName)
            ->setTeamIconURL($teamIconURL);
    }

    /**
     * Get teamID value
     * @return int
     */
    public function getTeamID()
    {
        return $this->teamID;
    }

    /**
     * Set teamID value
     * @param int $teamID
     * @return \RrGeng\OpenligaDB\StructType\Team
     */
    public function setTeamID($teamID = null)
    {
        if (!is_null($teamID) && !(is_int($teamID) || ctype_digit($teamID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($teamID, true), gettype($teamID)), __LINE__);
        }
        $this->teamID = $teamID;
        return $this;
    }

    /**
     * Get teamName value
     * @return string|null
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Set teamName value
     * @param string $teamName
     * @return \RrGeng\OpenligaDB\StructType\Team
     */
    public function setTeamName($teamName = null)
    {
        if (!is_null($teamName) && !is_string($teamName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($teamName, true), gettype($teamName)), __LINE__);
        }
        $this->teamName = $teamName;
        return $this;
    }

    /**
     * Get teamIconURL value
     * @return string|null
     */
    public function getTeamIconURL()
    {
        return $this->teamIconURL;
    }

    /**
     * Set teamIconURL value
     * @param string $teamIconURL
     * @return \RrGeng\OpenligaDB\StructType\Team
     */
    public function setTeamIconURL($teamIconURL = null)
    {
        if (!is_null($teamIconURL) && !is_string($teamIconURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($teamIconURL, true), gettype($teamIconURL)), __LINE__);
        }
        $this->teamIconURL = $teamIconURL;
        return $this;
    }
}
