<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fussballdaten StructType
 * @subpackage Structs
 */
class Fussballdaten extends AbstractStructBase
{
    /**
     * The SpielID
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SpielID;

    /**
     * The Spieltag
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Spieltag;

    /**
     * The Spieldatum
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Spieldatum;

    /**
     * The ErgebnisTeam1
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ErgebnisTeam1;

    /**
     * The ErgebnisTeam2
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ErgebnisTeam2;

    /**
     * The lastUpdate
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $lastUpdate;

    /**
     * The Team1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Team1;

    /**
     * The Team2
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Team2;

    /**
     * Constructor method for Fussballdaten
     * @uses Fussballdaten::setSpielID()
     * @uses Fussballdaten::setSpieltag()
     * @uses Fussballdaten::setSpieldatum()
     * @uses Fussballdaten::setErgebnisTeam1()
     * @uses Fussballdaten::setErgebnisTeam2()
     * @uses Fussballdaten::setLastUpdate()
     * @uses Fussballdaten::setTeam1()
     * @uses Fussballdaten::setTeam2()
     * @param int $spielID
     * @param int $spieltag
     * @param string $spieldatum
     * @param int $ergebnisTeam1
     * @param int $ergebnisTeam2
     * @param string $lastUpdate
     * @param string $team1
     * @param string $team2
     */
    public function __construct($spielID = null, $spieltag = null, $spieldatum = null, $ergebnisTeam1 = null, $ergebnisTeam2 = null, $lastUpdate = null, $team1 = null, $team2 = null)
    {
        $this
            ->setSpielID($spielID)
            ->setSpieltag($spieltag)
            ->setSpieldatum($spieldatum)
            ->setErgebnisTeam1($ergebnisTeam1)
            ->setErgebnisTeam2($ergebnisTeam2)
            ->setLastUpdate($lastUpdate)
            ->setTeam1($team1)
            ->setTeam2($team2);
    }

    /**
     * Get SpielID value
     * @return int
     */
    public function getSpielID()
    {
        return $this->SpielID;
    }

    /**
     * Set SpielID value
     * @param int $spielID
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten
     */
    public function setSpielID($spielID = null)
    {
        if (!is_null($spielID) && !(is_int($spielID) || ctype_digit($spielID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($spielID, true), gettype($spielID)), __LINE__);
        }
        $this->SpielID = $spielID;
        return $this;
    }

    /**
     * Get Spieltag value
     * @return int
     */
    public function getSpieltag()
    {
        return $this->Spieltag;
    }

    /**
     * Set Spieltag value
     * @param int $spieltag
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten
     */
    public function setSpieltag($spieltag = null)
    {
        if (!is_null($spieltag) && !(is_int($spieltag) || ctype_digit($spieltag))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($spieltag, true), gettype($spieltag)), __LINE__);
        }
        $this->Spieltag = $spieltag;
        return $this;
    }

    /**
     * Get Spieldatum value
     * @return string
     */
    public function getSpieldatum()
    {
        return $this->Spieldatum;
    }

    /**
     * Set Spieldatum value
     * @param string $spieldatum
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten
     */
    public function setSpieldatum($spieldatum = null)
    {
        if (!is_null($spieldatum) && !is_string($spieldatum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spieldatum, true), gettype($spieldatum)), __LINE__);
        }
        $this->Spieldatum = $spieldatum;
        return $this;
    }

    /**
     * Get ErgebnisTeam1 value
     * @return int
     */
    public function getErgebnisTeam1()
    {
        return $this->ErgebnisTeam1;
    }

    /**
     * Set ErgebnisTeam1 value
     * @param int $ergebnisTeam1
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten
     */
    public function setErgebnisTeam1($ergebnisTeam1 = null)
    {
        if (!is_null($ergebnisTeam1) && !(is_int($ergebnisTeam1) || ctype_digit($ergebnisTeam1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ergebnisTeam1, true), gettype($ergebnisTeam1)), __LINE__);
        }
        $this->ErgebnisTeam1 = $ergebnisTeam1;
        return $this;
    }

    /**
     * Get ErgebnisTeam2 value
     * @return int
     */
    public function getErgebnisTeam2()
    {
        return $this->ErgebnisTeam2;
    }

    /**
     * Set ErgebnisTeam2 value
     * @param int $ergebnisTeam2
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten
     */
    public function setErgebnisTeam2($ergebnisTeam2 = null)
    {
        if (!is_null($ergebnisTeam2) && !(is_int($ergebnisTeam2) || ctype_digit($ergebnisTeam2))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ergebnisTeam2, true), gettype($ergebnisTeam2)), __LINE__);
        }
        $this->ErgebnisTeam2 = $ergebnisTeam2;
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
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten
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
     * Get Team1 value
     * @return string|null
     */
    public function getTeam1()
    {
        return $this->Team1;
    }

    /**
     * Set Team1 value
     * @param string $team1
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten
     */
    public function setTeam1($team1 = null)
    {
        if (!is_null($team1) && !is_string($team1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($team1, true), gettype($team1)), __LINE__);
        }
        $this->Team1 = $team1;
        return $this;
    }

    /**
     * Get Team2 value
     * @return string|null
     */
    public function getTeam2()
    {
        return $this->Team2;
    }

    /**
     * Set Team2 value
     * @param string $team2
     * @return \RrGeng\OpenligaDB\StructType\Fussballdaten
     */
    public function setTeam2($team2 = null)
    {
        // validation for constraint: string
        if (!is_null($team2) && !is_string($team2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($team2, true), gettype($team2)), __LINE__);
        }
        $this->Team2 = $team2;
        return $this;
    }
}
