<?php

namespace RrGeng\OpenligaDB\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location StructType
 * @subpackage Structs
 */
class Location extends AbstractStructBase
{
    /**
     * The locationID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $locationID;
    /**
     * The locationCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $locationCity;
    /**
     * The locationStadium
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $locationStadium;
    /**
     * Constructor method for Location
     * @uses Location::setLocationID()
     * @uses Location::setLocationCity()
     * @uses Location::setLocationStadium()
     * @param int $locationID
     * @param string $locationCity
     * @param string $locationStadium
     */
    public function __construct($locationID = null, $locationCity = null, $locationStadium = null)
    {
        $this
            ->setLocationID($locationID)
            ->setLocationCity($locationCity)
            ->setLocationStadium($locationStadium);
    }
    /**
     * Get locationID value
     * @return int
     */
    public function getLocationID()
    {
        return $this->locationID;
    }
    /**
     * Set locationID value
     * @param int $locationID
     * @return \RrGeng\OpenligaDB\StructType\Location
     */
    public function setLocationID($locationID = null)
    {
        // validation for constraint: int
        if (!is_null($locationID) && !(is_int($locationID) || ctype_digit($locationID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($locationID, true), gettype($locationID)), __LINE__);
        }
        $this->locationID = $locationID;
        return $this;
    }
    /**
     * Get locationCity value
     * @return string|null
     */
    public function getLocationCity()
    {
        return $this->locationCity;
    }
    /**
     * Set locationCity value
     * @param string $locationCity
     * @return \RrGeng\OpenligaDB\StructType\Location
     */
    public function setLocationCity($locationCity = null)
    {
        // validation for constraint: string
        if (!is_null($locationCity) && !is_string($locationCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCity, true), gettype($locationCity)), __LINE__);
        }
        $this->locationCity = $locationCity;
        return $this;
    }
    /**
     * Get locationStadium value
     * @return string|null
     */
    public function getLocationStadium()
    {
        return $this->locationStadium;
    }
    /**
     * Set locationStadium value
     * @param string $locationStadium
     * @return \RrGeng\OpenligaDB\StructType\Location
     */
    public function setLocationStadium($locationStadium = null)
    {
        // validation for constraint: string
        if (!is_null($locationStadium) && !is_string($locationStadium)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationStadium, true), gettype($locationStadium)), __LINE__);
        }
        $this->locationStadium = $locationStadium;
        return $this;
    }
}
