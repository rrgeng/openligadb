<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMatchdataByTeams StructType
 * @subpackage Structs
 */
class GetMatchdataByTeams extends AbstractStructBase
{
    /**
     * The teamID1
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $teamID1;

    /**
     * The teamID2
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $teamID2;

    /**
     * Constructor method for GetMatchdataByTeams
     * @uses GetMatchdataByTeams::setTeamID1()
     * @uses GetMatchdataByTeams::setTeamID2()
     * @param int $teamID1
     * @param int $teamID2
     */
    public function __construct($teamID1 = null, $teamID2 = null)
    {
        $this
            ->setTeamID1($teamID1)
            ->setTeamID2($teamID2);
    }

    /**
     * Get teamID1 value
     * @return int
     */
    public function getTeamID1()
    {
        return $this->teamID1;
    }

    /**
     * Set teamID1 value
     * @param int $teamID1
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByTeams
     */
    public function setTeamID1($teamID1 = null)
    {
        // validation for constraint: int
        if (!is_null($teamID1) && !(is_int($teamID1) || ctype_digit($teamID1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($teamID1, true), gettype($teamID1)), __LINE__);
        }
        $this->teamID1 = $teamID1;
        return $this;
    }

    /**
     * Get teamID2 value
     * @return int
     */
    public function getTeamID2()
    {
        return $this->teamID2;
    }

    /**
     * Set teamID2 value
     * @param int $teamID2
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByTeams
     */
    public function setTeamID2($teamID2 = null)
    {
        if (!is_null($teamID2) && !(is_int($teamID2) || ctype_digit($teamID2))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($teamID2, true), gettype($teamID2)), __LINE__);
        }
        $this->teamID2 = $teamID2;
        return $this;
    }
}
