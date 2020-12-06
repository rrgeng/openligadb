<?php
namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFusballdaten StructType
 * @subpackage Structs
 */
class GetFusballdaten extends AbstractStructBase
{
    /**
     * The Spieltag
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Spieltag;

    /**
     * The Saison
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Saison;

    /**
     * The Liga
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Liga;

    /**
     * The Userkennung
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Userkennung;

    /**
     * Constructor method for GetFusballdaten
     * @uses GetFusballdaten::setSpieltag()
     * @uses GetFusballdaten::setSaison()
     * @uses GetFusballdaten::setLiga()
     * @uses GetFusballdaten::setUserkennung()
     * @param int $spieltag
     * @param int $saison
     * @param string $liga
     * @param string $userkennung
     */
    public function __construct($spieltag = null, $saison = null, $liga = null, $userkennung = null)
    {
        $this
            ->setSpieltag($spieltag)
            ->setSaison($saison)
            ->setLiga($liga)
            ->setUserkennung($userkennung);
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
     * @return \RrGeng\OpenligaDB\StructType\GetFusballdaten
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
     * Get Saison value
     * @return int
     */
    public function getSaison()
    {
        return $this->Saison;
    }

    /**
     * Set Saison value
     * @param int $saison
     * @return \RrGeng\OpenligaDB\StructType\GetFusballdaten
     */
    public function setSaison($saison = null)
    {
        if (!is_null($saison) && !(is_int($saison) || ctype_digit($saison))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saison, true), gettype($saison)), __LINE__);
        }
        $this->Saison = $saison;
        return $this;
    }

    /**
     * Get Liga value
     * @return string|null
     */
    public function getLiga()
    {
        return $this->Liga;
    }

    /**
     * Set Liga value
     * @param string $liga
     * @return \RrGeng\OpenligaDB\StructType\GetFusballdaten
     */
    public function setLiga($liga = null)
    {
        if (!is_null($liga) && !is_string($liga)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($liga, true), gettype($liga)), __LINE__);
        }
        $this->Liga = $liga;
        return $this;
    }

    /**
     * Get Userkennung value
     * @return string|null
     */
    public function getUserkennung()
    {
        return $this->Userkennung;
    }

    /**
     * Set Userkennung value
     * @param string $userkennung
     * @return \RrGeng\OpenligaDB\StructType\GetFusballdaten
     */
    public function setUserkennung($userkennung = null)
    {
        if (!is_null($userkennung) && !is_string($userkennung)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userkennung, true), gettype($userkennung)), __LINE__);
        }
        $this->Userkennung = $userkennung;
        return $this;
    }
}
