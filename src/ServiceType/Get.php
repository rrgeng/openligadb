<?php
namespace RrGeng\OpenligaDB\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetAvailLeagues
     * - Gibt eine Struktur aller verfügbaren Ligen zurück! Erwartet keine Parameter.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetAvailLeagues $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetAvailLeaguesResponse|bool
     */
    public function GetAvailLeagues(\RrGeng\OpenligaDB\StructType\GetAvailLeagues $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAvailLeagues($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetNextMatch
     * - Gibt eine Struktur des nächsten anstehenden Spieles der als Parameter zu übergebenden Liga zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetNextMatch $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetNextMatchResponse|bool
     */
    public function GetNextMatch(\RrGeng\OpenligaDB\StructType\GetNextMatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNextMatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLastMatch
     * - Gibt eine Struktur des zuletzt ausgetragenen Spieles der als Parameter zu übergebenden Liga zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetLastMatch $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetLastMatchResponse|bool
     */
    public function GetLastMatch(\RrGeng\OpenligaDB\StructType\GetLastMatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLastMatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetNextMatchByLeagueTeam
     * - Gibt eine Struktur des nächsten anstehenden Spieles des als Parameter zu übergebenden Teams der ebenfalls zu übergebenen Liga zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetNextMatchByLeagueTeam $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetNextMatchByLeagueTeamResponse|bool
     */
    public function GetNextMatchByLeagueTeam(\RrGeng\OpenligaDB\StructType\GetNextMatchByLeagueTeam $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNextMatchByLeagueTeam($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLastMatchByLeagueTeam
     * - Gibt eine Struktur des zuletzt ausgetragenen Spieles des als Parameter zu übergebenden Teams der ebenfalls zu übergebenen Liga zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetLastMatchByLeagueTeam $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetLastMatchByLeagueTeamResponse|bool
     */
    public function GetLastMatchByLeagueTeam(\RrGeng\OpenligaDB\StructType\GetLastMatchByLeagueTeam $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLastMatchByLeagueTeam($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetCurrentGroupOrderID
     * - Gibt die aktuelle groupOrderID (entspricht z.B. bei der Fussball-Bundesliga dem 'Spieltag') des als Parameter zu übergebenden leagueShortcuts (z.B. 'bl1') aus. Der aktuelle Spieltag wird jeweils zur Hälfte der Zeit zwischen dem
     * letzten Spiel des letzten Spieltages und dem ersten Spiel des nächsten Spieltages erhöht.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetCurrentGroupOrderID $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetCurrentGroupOrderIDResponse|bool
     */
    public function GetCurrentGroupOrderID(\RrGeng\OpenligaDB\StructType\GetCurrentGroupOrderID $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCurrentGroupOrderID($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetCurrentGroup
     * - Gibt die aktuelle Group (entspricht z.B. bei der Fussball-Bundesliga dem 'Spieltag') des als Parameter zu übergebenden leagueShortcuts (z.B. 'bl1') aus. Der aktuelle Spieltag wird jeweils zur Hälfte der Zeit zwischen dem letzten Spiel des letzten Spieltages und dem ersten Spiel des nächsten Spieltages erhöht.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetCurrentGroup $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetCurrentGroupResponse|bool
     */
    public function GetCurrentGroup(\RrGeng\OpenligaDB\StructType\GetCurrentGroup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCurrentGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetMatchdataByGroupLeagueSaison
     * - Gibt eine Struktur von Sport-Spieldaten zurueck. Als Parameter werden eine groupOrderID (zu entnehmen aus GetAvailGroups, entspricht z.B. bei der Fussball-Bundesliga dem Spieltag), der Liga-Shortcut (z.B. 'bl1') sowie die Saison (aus GetAvailLeagues, z.B. '2009') erwartet.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaison $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaisonResponse|bool
     */
    public function GetMatchdataByGroupLeagueSaison(\RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaison $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMatchdataByGroupLeagueSaison($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetMatchdataByLeagueDateTime
     * - Gibt eine Struktur von Sport-Spieldaten zurueck. Die Beginn-Zeit der ausgegebenen Spieldaten liegt zwischen den als Parameter zu übergebenen DateTime-Werten. (fromDateTime <= matchBeginDateTime < toDateTime)Als weiterer Parameter wird der Liga-Shortcut (z.B. 'bl1') erwartet.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueDateTime $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueDateTimeResponse|bool
     */
    public function GetMatchdataByLeagueDateTime(\RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueDateTime $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMatchdataByLeagueDateTime($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetMatchdataByTeams
     * - Gibt eine Struktur von Matches zurück, bei welchen die als Parameter übergebenen Teams gegeneinander spielten.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetMatchdataByTeams $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByTeamsResponse|bool
     */
    public function GetMatchdataByTeams(\RrGeng\OpenligaDB\StructType\GetMatchdataByTeams $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMatchdataByTeams($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetMatchdataByLeagueSaison
     * - Gibt eine Struktur von Sport-Spieldaten aller Spiele der Liga pro Saison zurueck. Als Parameter werden der Liga-Shortcut (z.B. 'bl1') sowie die Saison (aus GetAvailLeagues, z.B. '2007') erwartet.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueSaison $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueSaisonResponse|bool
     */
    public function GetMatchdataByLeagueSaison(\RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueSaison $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMatchdataByLeagueSaison($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * GetMatchdataByGroupLeagueSaisonJSON
     * - Gibt einen serialisiertes JSON-Objekt von Sport-Spieldaten zurueck. Als Parameter werden eine groupOrderID (zu entnehmen aus GetAvailGroups, entspricht z.B. bei der Fussball-Bundesliga dem Spieltag), der Liga-Shortcut (z.B. 'bl1') sowie die Saison (aus GetAvailLeagues, z.B. '2009') erwartet.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaisonJSON $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaisonJSONResponse|bool
     */
    public function GetMatchdataByGroupLeagueSaisonJSON(\RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaisonJSON $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMatchdataByGroupLeagueSaisonJSON($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetFusballdaten
     * - Gibt eine Struktur deutscher Fussball-Spieldaten zurueck. Diese Methode steht nur noch aus Gründen der Kompatibilität zu älteren Applikationen zur Verfügung. Bitte nutzen sie vorrangig die GetMatchdata... - Methoden!
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetFusballdaten $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetFusballdatenResponse|bool
     */
    public function GetFusballdaten(\RrGeng\OpenligaDB\StructType\GetFusballdaten $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFusballdaten($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetMatchByMatchID
     * - Gibt eine Struktur des Spieles der als Parameter zu übergebenden MatchID zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetMatchByMatchID $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetMatchByMatchIDResponse|bool
     */
    public function GetMatchByMatchID(\RrGeng\OpenligaDB\StructType\GetMatchByMatchID $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMatchByMatchID($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetTeamsByLeagueSaison
     * - Gibt eine Liste aller Teams der als Parameter zu übergebenden Liga + Saison zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetTeamsByLeagueSaison $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetTeamsByLeagueSaisonResponse|bool
     */
    public function GetTeamsByLeagueSaison(\RrGeng\OpenligaDB\StructType\GetTeamsByLeagueSaison $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTeamsByLeagueSaison($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetAvailGroups
     * - Gibt eine Liste der bereits eingetragenen Spiel-Einteilungen (Spieltag, Vorrunde, Finale, ...) der als Parameter zu übergebenden Liga + Saison zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetAvailGroups $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetAvailGroupsResponse|bool
     */
    public function GetAvailGroups(\RrGeng\OpenligaDB\StructType\GetAvailGroups $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAvailGroups($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetAvailSports
     * - Gibt eine Liste der verfügbaren Sportarten, für welche gültige Ligen bestehen, zurück. Erwartet keine Parameter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetAvailSports $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetAvailSportsResponse|bool
     */
    public function GetAvailSports(\RrGeng\OpenligaDB\StructType\GetAvailSports $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAvailSports($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetAvailLeaguesBySports
     * - Gibt eine Struktur aller verfügbaren Ligen für die zu übergebende SportID zurück. Diese ist aus 'GetAvailSports()' zu entnehmen!
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetAvailLeaguesBySports $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetAvailLeaguesBySportsResponse|bool
     */
    public function GetAvailLeaguesBySports(\RrGeng\OpenligaDB\StructType\GetAvailLeaguesBySports $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAvailLeaguesBySports($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetGoalsByMatch
     * - Gibt eine Liste aller Goals des als Parameter zu übergebenden Match zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetGoalsByMatch $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetGoalsByMatchResponse|bool
     */
    public function GetGoalsByMatch(\RrGeng\OpenligaDB\StructType\GetGoalsByMatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetGoalsByMatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetGoalsByLeagueSaison
     * - Gibt eine Liste aller Goals der als Parameter zu übergebenden Liga + Saison zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetGoalsByLeagueSaison $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetGoalsByLeagueSaisonResponse|bool
     */
    public function GetGoalsByLeagueSaison(\RrGeng\OpenligaDB\StructType\GetGoalsByLeagueSaison $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetGoalsByLeagueSaison($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetGoalGettersByLeagueSaison
     * - Gibt eine Liste der GoalGetter der als Parameter zu übergebenden Liga + Saison zurueck.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetGoalGettersByLeagueSaison $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetGoalGettersByLeagueSaisonResponse|bool
     */
    public function GetGoalGettersByLeagueSaison(\RrGeng\OpenligaDB\StructType\GetGoalGettersByLeagueSaison $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetGoalGettersByLeagueSaison($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLastChangeDateByLeagueSaison
     * - Gibt das Datum der letzten Änderung in der als Parameter zu übergebenden Liga + Saison zurueck. Kann verwendet werden, um clientseitg unnötige Abfragen zu vermeiden (Cache)
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetLastChangeDateByLeagueSaison $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetLastChangeDateByLeagueSaisonResponse|bool
     */
    public function GetLastChangeDateByLeagueSaison(\RrGeng\OpenligaDB\StructType\GetLastChangeDateByLeagueSaison $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLastChangeDateByLeagueSaison($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * GetLastChangeDateByGroupLeagueSaison
     * - Gibt das Datum der letzten Änderung in der als Parameter zu übergebenden Liga + Saison zurueck. Kann verwendet werden, um clientseitg unnötige Abfragen zu vermeiden (Cache)
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \RrGeng\OpenligaDB\StructType\GetLastChangeDateByGroupLeagueSaison $parameters
     * @return \RrGeng\OpenligaDB\StructType\GetLastChangeDateByGroupLeagueSaisonResponse|bool
     */
    public function GetLastChangeDateByGroupLeagueSaison(\RrGeng\OpenligaDB\StructType\GetLastChangeDateByGroupLeagueSaison $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetLastChangeDateByGroupLeagueSaison($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \RrGeng\OpenligaDB\StructType\GetAvailGroupsResponse|\RrGeng\OpenligaDB\StructType\GetAvailLeaguesBySportsResponse|\RrGeng\OpenligaDB\StructType\GetAvailLeaguesResponse|\RrGeng\OpenligaDB\StructType\GetAvailSportsResponse|\RrGeng\OpenligaDB\StructType\GetCurrentGroupOrderIDResponse|\RrGeng\OpenligaDB\StructType\GetCurrentGroupResponse|\RrGeng\OpenligaDB\StructType\GetFusballdatenResponse|\RrGeng\OpenligaDB\StructType\GetGoalGettersByLeagueSaisonResponse|\RrGeng\OpenligaDB\StructType\GetGoalsByLeagueSaisonResponse|\RrGeng\OpenligaDB\StructType\GetGoalsByMatchResponse|\RrGeng\OpenligaDB\StructType\GetLastChangeDateByGroupLeagueSaisonResponse|\RrGeng\OpenligaDB\StructType\GetLastChangeDateByLeagueSaisonResponse|\RrGeng\OpenligaDB\StructType\GetLastMatchByLeagueTeamResponse|\RrGeng\OpenligaDB\StructType\GetLastMatchResponse|\RrGeng\OpenligaDB\StructType\GetMatchByMatchIDResponse|\RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaisonJSONResponse|\RrGeng\OpenligaDB\StructType\GetMatchdataByGroupLeagueSaisonResponse|\RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueDateTimeResponse|\RrGeng\OpenligaDB\StructType\GetMatchdataByLeagueSaisonResponse|\RrGeng\OpenligaDB\StructType\GetMatchdataByTeamsResponse|\RrGeng\OpenligaDB\StructType\GetNextMatchByLeagueTeamResponse|\RrGeng\OpenligaDB\StructType\GetNextMatchResponse|\RrGeng\OpenligaDB\StructType\GetTeamsByLeagueSaisonResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
