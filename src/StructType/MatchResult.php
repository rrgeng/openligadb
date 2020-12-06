<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for matchResult StructType
 * @subpackage Structs
 */
class MatchResult extends AbstractStructBase
{
    /**
     * The pointsTeam1
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $pointsTeam1;

    /**
     * The pointsTeam2
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $pointsTeam2;

    /**
     * The resultOrderID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $resultOrderID;

    /**
     * The resultTypeId
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $resultTypeId;

    /**
     * The resultName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $resultName;

    /**
     * The resultTypeName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $resultTypeName;

    /**
     * Constructor method for matchResult
     * @uses MatchResult::setPointsTeam1()
     * @uses MatchResult::setPointsTeam2()
     * @uses MatchResult::setResultOrderID()
     * @uses MatchResult::setResultTypeId()
     * @uses MatchResult::setResultName()
     * @uses MatchResult::setResultTypeName()
     * @param int $pointsTeam1
     * @param int $pointsTeam2
     * @param int $resultOrderID
     * @param int $resultTypeId
     * @param string $resultName
     * @param string $resultTypeName
     */
    public function __construct($pointsTeam1 = null, $pointsTeam2 = null, $resultOrderID = null, $resultTypeId = null, $resultName = null, $resultTypeName = null)
    {
        $this
            ->setPointsTeam1($pointsTeam1)
            ->setPointsTeam2($pointsTeam2)
            ->setResultOrderID($resultOrderID)
            ->setResultTypeId($resultTypeId)
            ->setResultName($resultName)
            ->setResultTypeName($resultTypeName);
    }

    /**
     * Get pointsTeam1 value
     * @return int
     */
    public function getPointsTeam1()
    {
        return $this->pointsTeam1;
    }

    /**
     * Set pointsTeam1 value
     * @param int $pointsTeam1
     * @return \RrGeng\OpenligaDB\StructType\MatchResult
     */
    public function setPointsTeam1($pointsTeam1 = null)
    {
        if (!is_null($pointsTeam1) && !(is_int($pointsTeam1) || ctype_digit($pointsTeam1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pointsTeam1, true), gettype($pointsTeam1)), __LINE__);
        }
        $this->pointsTeam1 = $pointsTeam1;
        return $this;
    }

    /**
     * Get pointsTeam2 value
     * @return int
     */
    public function getPointsTeam2()
    {
        return $this->pointsTeam2;
    }

    /**
     * Set pointsTeam2 value
     * @param int $pointsTeam2
     * @return \RrGeng\OpenligaDB\StructType\MatchResult
     */
    public function setPointsTeam2($pointsTeam2 = null)
    {
        if (!is_null($pointsTeam2) && !(is_int($pointsTeam2) || ctype_digit($pointsTeam2))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pointsTeam2, true), gettype($pointsTeam2)), __LINE__);
        }
        $this->pointsTeam2 = $pointsTeam2;
        return $this;
    }

    /**
     * Get resultOrderID value
     * @return int
     */
    public function getResultOrderID()
    {
        return $this->resultOrderID;
    }

    /**
     * Set resultOrderID value
     * @param int $resultOrderID
     * @return \RrGeng\OpenligaDB\StructType\MatchResult
     */
    public function setResultOrderID($resultOrderID = null)
    {
        if (!is_null($resultOrderID) && !(is_int($resultOrderID) || ctype_digit($resultOrderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($resultOrderID, true), gettype($resultOrderID)), __LINE__);
        }
        $this->resultOrderID = $resultOrderID;
        return $this;
    }

    /**
     * Get resultTypeId value
     * @return int
     */
    public function getResultTypeId()
    {
        return $this->resultTypeId;
    }

    /**
     * Set resultTypeId value
     * @param int $resultTypeId
     * @return \RrGeng\OpenligaDB\StructType\MatchResult
     */
    public function setResultTypeId($resultTypeId = null)
    {
        if (!is_null($resultTypeId) && !(is_int($resultTypeId) || ctype_digit($resultTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($resultTypeId, true), gettype($resultTypeId)), __LINE__);
        }
        $this->resultTypeId = $resultTypeId;
        return $this;
    }

    /**
     * Get resultName value
     * @return string|null
     */
    public function getResultName()
    {
        return $this->resultName;
    }

    /**
     * Set resultName value
     * @param string $resultName
     * @return \RrGeng\OpenligaDB\StructType\MatchResult
     */
    public function setResultName($resultName = null)
    {
        if (!is_null($resultName) && !is_string($resultName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resultName, true), gettype($resultName)), __LINE__);
        }
        $this->resultName = $resultName;
        return $this;
    }

    /**
     * Get resultTypeName value
     * @return string|null
     */
    public function getResultTypeName()
    {
        return $this->resultTypeName;
    }

    /**
     * Set resultTypeName value
     * @param string $resultTypeName
     * @return \RrGeng\OpenligaDB\StructType\MatchResult
     */
    public function setResultTypeName($resultTypeName = null)
    {
        if (!is_null($resultTypeName) && !is_string($resultTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resultTypeName, true), gettype($resultTypeName)), __LINE__);
        }
        $this->resultTypeName = $resultTypeName;
        return $this;
    }
}
