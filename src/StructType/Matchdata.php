<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Matchdata StructType
 * @subpackage Structs
 */
class Matchdata extends AbstractStructBase
{
    /**
     * The matchDateTime
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $matchDateTime;

    /**
     * The groupID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $groupID;

    /**
     * The leagueID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $leagueID;

    /**
     * The matchDateTimeUTC
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $matchDateTimeUTC;

    /**
     * The groupOrderID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $groupOrderID;

    /**
     * The idTeam1
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $idTeam1;

    /**
     * The idTeam2
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $idTeam2;

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
     * The lastUpdate
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $lastUpdate;

    /**
     * The NumberOfViewers
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $NumberOfViewers;

    /**
     * The matchID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $matchID;

    /**
     * The matchIsFinished
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $matchIsFinished;

    /**
     * The location
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \RrGeng\OpenligaDB\StructType\Location
     */
    public $location;

    /**
     * The nameTeam1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $nameTeam1;

    /**
     * The nameTeam2
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $nameTeam2;

    /**
     * The iconUrlTeam1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $iconUrlTeam1;

    /**
     * The iconUrlTeam2
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $iconUrlTeam2;

    /**
     * The TimeZoneID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TimeZoneID;

    /**
     * The groupName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $groupName;

    /**
     * The leagueSaison
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $leagueSaison;

    /**
     * The leagueShortcut
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $leagueShortcut;

    /**
     * The matchResults
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchResult
     */
    public $matchResults;

    /**
     * The leagueName
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $leagueName;

    /**
     * The goals
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal
     */
    public $goals;

    /**
     * Constructor method for Matchdata
     * @uses Matchdata::setMatchDateTime()
     * @uses Matchdata::setGroupID()
     * @uses Matchdata::setLeagueID()
     * @uses Matchdata::setMatchDateTimeUTC()
     * @uses Matchdata::setGroupOrderID()
     * @uses Matchdata::setIdTeam1()
     * @uses Matchdata::setIdTeam2()
     * @uses Matchdata::setPointsTeam1()
     * @uses Matchdata::setPointsTeam2()
     * @uses Matchdata::setLastUpdate()
     * @uses Matchdata::setNumberOfViewers()
     * @uses Matchdata::setMatchID()
     * @uses Matchdata::setMatchIsFinished()
     * @uses Matchdata::setLocation()
     * @uses Matchdata::setNameTeam1()
     * @uses Matchdata::setNameTeam2()
     * @uses Matchdata::setIconUrlTeam1()
     * @uses Matchdata::setIconUrlTeam2()
     * @uses Matchdata::setTimeZoneID()
     * @uses Matchdata::setGroupName()
     * @uses Matchdata::setLeagueSaison()
     * @uses Matchdata::setLeagueShortcut()
     * @uses Matchdata::setMatchResults()
     * @uses Matchdata::setLeagueName()
     * @uses Matchdata::setGoals()
     * @param string $matchDateTime
     * @param int $groupID
     * @param int $leagueID
     * @param string $matchDateTimeUTC
     * @param int $groupOrderID
     * @param int $idTeam1
     * @param int $idTeam2
     * @param int $pointsTeam1
     * @param int $pointsTeam2
     * @param string $lastUpdate
     * @param int $numberOfViewers
     * @param int $matchID
     * @param bool $matchIsFinished
     * @param \RrGeng\OpenligaDB\StructType\Location $location
     * @param string $nameTeam1
     * @param string $nameTeam2
     * @param string $iconUrlTeam1
     * @param string $iconUrlTeam2
     * @param string $timeZoneID
     * @param string $groupName
     * @param string $leagueSaison
     * @param string $leagueShortcut
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchResult $matchResults
     * @param string $leagueName
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $goals
     */
    public function __construct($matchDateTime = null, $groupID = null, $leagueID = null, $matchDateTimeUTC = null, $groupOrderID = null, $idTeam1 = null, $idTeam2 = null, $pointsTeam1 = null, $pointsTeam2 = null, $lastUpdate = null, $numberOfViewers = null, $matchID = null, $matchIsFinished = null, \RrGeng\OpenligaDB\StructType\Location $location = null, $nameTeam1 = null, $nameTeam2 = null, $iconUrlTeam1 = null, $iconUrlTeam2 = null, $timeZoneID = null, $groupName = null, $leagueSaison = null, $leagueShortcut = null, \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchResult $matchResults = null, $leagueName = null, \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $goals = null)
    {
        $this
            ->setMatchDateTime($matchDateTime)
            ->setGroupID($groupID)
            ->setLeagueID($leagueID)
            ->setMatchDateTimeUTC($matchDateTimeUTC)
            ->setGroupOrderID($groupOrderID)
            ->setIdTeam1($idTeam1)
            ->setIdTeam2($idTeam2)
            ->setPointsTeam1($pointsTeam1)
            ->setPointsTeam2($pointsTeam2)
            ->setLastUpdate($lastUpdate)
            ->setNumberOfViewers($numberOfViewers)
            ->setMatchID($matchID)
            ->setMatchIsFinished($matchIsFinished)
            ->setLocation($location)
            ->setNameTeam1($nameTeam1)
            ->setNameTeam2($nameTeam2)
            ->setIconUrlTeam1($iconUrlTeam1)
            ->setIconUrlTeam2($iconUrlTeam2)
            ->setTimeZoneID($timeZoneID)
            ->setGroupName($groupName)
            ->setLeagueSaison($leagueSaison)
            ->setLeagueShortcut($leagueShortcut)
            ->setMatchResults($matchResults)
            ->setLeagueName($leagueName)
            ->setGoals($goals);
    }

    /**
     * Get matchDateTime value
     * @return string
     */
    public function getMatchDateTime()
    {
        return $this->matchDateTime;
    }

    /**
     * Set matchDateTime value
     * @param string $matchDateTime
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setMatchDateTime($matchDateTime = null)
    {
        if (!is_null($matchDateTime) && !is_string($matchDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchDateTime, true), gettype($matchDateTime)), __LINE__);
        }
        $this->matchDateTime = $matchDateTime;
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
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
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
     * Get leagueID value
     * @return int
     */
    public function getLeagueID()
    {
        return $this->leagueID;
    }

    /**
     * Set leagueID value
     * @param int $leagueID
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setLeagueID($leagueID = null)
    {
        if (!is_null($leagueID) && !(is_int($leagueID) || ctype_digit($leagueID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($leagueID, true), gettype($leagueID)), __LINE__);
        }
        $this->leagueID = $leagueID;
        return $this;
    }

    /**
     * Get matchDateTimeUTC value
     * @return string
     */
    public function getMatchDateTimeUTC()
    {
        return $this->matchDateTimeUTC;
    }

    /**
     * Set matchDateTimeUTC value
     * @param string $matchDateTimeUTC
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setMatchDateTimeUTC($matchDateTimeUTC = null)
    {
        if (!is_null($matchDateTimeUTC) && !is_string($matchDateTimeUTC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchDateTimeUTC, true), gettype($matchDateTimeUTC)), __LINE__);
        }
        $this->matchDateTimeUTC = $matchDateTimeUTC;
        return $this;
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
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
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
     * Get idTeam1 value
     * @return int
     */
    public function getIdTeam1()
    {
        return $this->idTeam1;
    }

    /**
     * Set idTeam1 value
     * @param int $idTeam1
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setIdTeam1($idTeam1 = null)
    {
        if (!is_null($idTeam1) && !(is_int($idTeam1) || ctype_digit($idTeam1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idTeam1, true), gettype($idTeam1)), __LINE__);
        }
        $this->idTeam1 = $idTeam1;
        return $this;
    }

    /**
     * Get idTeam2 value
     * @return int
     */
    public function getIdTeam2()
    {
        return $this->idTeam2;
    }

    /**
     * Set idTeam2 value
     * @param int $idTeam2
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setIdTeam2($idTeam2 = null)
    {
        if (!is_null($idTeam2) && !(is_int($idTeam2) || ctype_digit($idTeam2))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idTeam2, true), gettype($idTeam2)), __LINE__);
        }
        $this->idTeam2 = $idTeam2;
        return $this;
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
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
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
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
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
     * Get lastUpdate value
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set lastUpdate value
     * @param string $lastUpdate
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setLastUpdate($lastUpdate = null)
    {
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdate, true), gettype($lastUpdate)), __LINE__);
        }
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    /**
     * Get NumberOfViewers value
     * @return int
     */
    public function getNumberOfViewers()
    {
        return $this->NumberOfViewers;
    }

    /**
     * Set NumberOfViewers value
     * @param int $numberOfViewers
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setNumberOfViewers($numberOfViewers = null)
    {
        if (!is_null($numberOfViewers) && !(is_int($numberOfViewers) || ctype_digit($numberOfViewers))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfViewers, true), gettype($numberOfViewers)), __LINE__);
        }
        $this->NumberOfViewers = $numberOfViewers;
        return $this;
    }

    /**
     * Get matchID value
     * @return int
     */
    public function getMatchID()
    {
        return $this->matchID;
    }

    /**
     * Set matchID value
     * @param int $matchID
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setMatchID($matchID = null)
    {
        if (!is_null($matchID) && !(is_int($matchID) || ctype_digit($matchID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($matchID, true), gettype($matchID)), __LINE__);
        }
        $this->matchID = $matchID;
        return $this;
    }

    /**
     * Get matchIsFinished value
     * @return bool
     */
    public function getMatchIsFinished()
    {
        return $this->matchIsFinished;
    }

    /**
     * Set matchIsFinished value
     * @param bool $matchIsFinished
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setMatchIsFinished($matchIsFinished = null)
    {
        if (!is_null($matchIsFinished) && !is_bool($matchIsFinished)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($matchIsFinished, true), gettype($matchIsFinished)), __LINE__);
        }
        $this->matchIsFinished = $matchIsFinished;
        return $this;
    }

    /**
     * Get location value
     * @return \RrGeng\OpenligaDB\StructType\Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set location value
     * @param \RrGeng\OpenligaDB\StructType\Location $location
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setLocation(\RrGeng\OpenligaDB\StructType\Location $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Get nameTeam1 value
     * @return string|null
     */
    public function getNameTeam1()
    {
        return $this->nameTeam1;
    }

    /**
     * Set nameTeam1 value
     * @param string $nameTeam1
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setNameTeam1($nameTeam1 = null)
    {
        if (!is_null($nameTeam1) && !is_string($nameTeam1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameTeam1, true), gettype($nameTeam1)), __LINE__);
        }
        $this->nameTeam1 = $nameTeam1;
        return $this;
    }

    /**
     * Get nameTeam2 value
     * @return string|null
     */
    public function getNameTeam2()
    {
        return $this->nameTeam2;
    }

    /**
     * Set nameTeam2 value
     * @param string $nameTeam2
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setNameTeam2($nameTeam2 = null)
    {
        if (!is_null($nameTeam2) && !is_string($nameTeam2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameTeam2, true), gettype($nameTeam2)), __LINE__);
        }
        $this->nameTeam2 = $nameTeam2;
        return $this;
    }

    /**
     * Get iconUrlTeam1 value
     * @return string|null
     */
    public function getIconUrlTeam1()
    {
        return $this->iconUrlTeam1;
    }

    /**
     * Set iconUrlTeam1 value
     * @param string $iconUrlTeam1
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setIconUrlTeam1($iconUrlTeam1 = null)
    {
        if (!is_null($iconUrlTeam1) && !is_string($iconUrlTeam1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iconUrlTeam1, true), gettype($iconUrlTeam1)), __LINE__);
        }
        $this->iconUrlTeam1 = $iconUrlTeam1;
        return $this;
    }

    /**
     * Get iconUrlTeam2 value
     * @return string|null
     */
    public function getIconUrlTeam2()
    {
        return $this->iconUrlTeam2;
    }

    /**
     * Set iconUrlTeam2 value
     * @param string $iconUrlTeam2
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setIconUrlTeam2($iconUrlTeam2 = null)
    {
        if (!is_null($iconUrlTeam2) && !is_string($iconUrlTeam2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iconUrlTeam2, true), gettype($iconUrlTeam2)), __LINE__);
        }
        $this->iconUrlTeam2 = $iconUrlTeam2;
        return $this;
    }

    /**
     * Get TimeZoneID value
     * @return string|null
     */
    public function getTimeZoneID()
    {
        return $this->TimeZoneID;
    }

    /**
     * Set TimeZoneID value
     * @param string $timeZoneID
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setTimeZoneID($timeZoneID = null)
    {
        if (!is_null($timeZoneID) && !is_string($timeZoneID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZoneID, true), gettype($timeZoneID)), __LINE__);
        }
        $this->TimeZoneID = $timeZoneID;
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
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setGroupName($groupName = null)
    {
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * Get leagueSaison value
     * @return string|null
     */
    public function getLeagueSaison()
    {
        return $this->leagueSaison;
    }

    /**
     * Set leagueSaison value
     * @param string $leagueSaison
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setLeagueSaison($leagueSaison = null)
    {
        if (!is_null($leagueSaison) && !is_string($leagueSaison)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leagueSaison, true), gettype($leagueSaison)), __LINE__);
        }
        $this->leagueSaison = $leagueSaison;
        return $this;
    }

    /**
     * Get leagueShortcut value
     * @return string|null
     */
    public function getLeagueShortcut()
    {
        return $this->leagueShortcut;
    }

    /**
     * Set leagueShortcut value
     * @param string $leagueShortcut
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setLeagueShortcut($leagueShortcut = null)
    {
        if (!is_null($leagueShortcut) && !is_string($leagueShortcut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leagueShortcut, true), gettype($leagueShortcut)), __LINE__);
        }
        $this->leagueShortcut = $leagueShortcut;
        return $this;
    }

    /**
     * Get matchResults value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchResult|null
     */
    public function getMatchResults()
    {
        return $this->matchResults;
    }

    /**
     * Set matchResults value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfMatchResult $matchResults
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setMatchResults(\RrGeng\OpenligaDB\ArrayType\ArrayOfMatchResult $matchResults = null)
    {
        $this->matchResults = $matchResults;
        return $this;
    }

    /**
     * Get leagueName value
     * @return string|null
     */
    public function getLeagueName()
    {
        return $this->leagueName;
    }

    /**
     * Set leagueName value
     * @param string $leagueName
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setLeagueName($leagueName = null)
    {
        if (!is_null($leagueName) && !is_string($leagueName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leagueName, true), gettype($leagueName)), __LINE__);
        }
        $this->leagueName = $leagueName;
        return $this;
    }

    /**
     * Get goals value
     * @return \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal|null
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * Set goals value
     * @param \RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $goals
     * @return \RrGeng\OpenligaDB\StructType\Matchdata
     */
    public function setGoals(\RrGeng\OpenligaDB\ArrayType\ArrayOfGoal $goals = null)
    {
        $this->goals = $goals;
        return $this;
    }
}
