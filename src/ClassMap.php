<?php

namespace RrGeng\OpenligaDB;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetAvailLeagues' => '\\RrGeng\\OpenligaDB\\StructType\\GetAvailLeagues',
            'GetAvailLeaguesResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetAvailLeaguesResponse',
            'ArrayOfLeague' => '\\RrGeng\\OpenligaDB\\ArrayType\\ArrayOfLeague',
            'League' => '\\RrGeng\\OpenligaDB\\StructType\\League',
            'GetNextMatch' => '\\RrGeng\\OpenligaDB\\StructType\\GetNextMatch',
            'GetNextMatchResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetNextMatchResponse',
            'Matchdata' => '\\RrGeng\\OpenligaDB\\StructType\\Matchdata',
            'ArrayOfMatchResult' => '\\RrGeng\\OpenligaDB\\ArrayType\\ArrayOfMatchResult',
            'matchResult' => '\\RrGeng\\OpenligaDB\\StructType\\MatchResult',
            'ArrayOfGoal' => '\\RrGeng\\OpenligaDB\\ArrayType\\ArrayOfGoal',
            'Goal' => '\\RrGeng\\OpenligaDB\\StructType\\Goal',
            'Location' => '\\RrGeng\\OpenligaDB\\StructType\\Location',
            'GetLastMatch' => '\\RrGeng\\OpenligaDB\\StructType\\GetLastMatch',
            'GetLastMatchResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetLastMatchResponse',
            'GetNextMatchByLeagueTeam' => '\\RrGeng\\OpenligaDB\\StructType\\GetNextMatchByLeagueTeam',
            'GetNextMatchByLeagueTeamResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetNextMatchByLeagueTeamResponse',
            'GetLastMatchByLeagueTeam' => '\\RrGeng\\OpenligaDB\\StructType\\GetLastMatchByLeagueTeam',
            'GetLastMatchByLeagueTeamResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetLastMatchByLeagueTeamResponse',
            'GetCurrentGroupOrderID' => '\\RrGeng\\OpenligaDB\\StructType\\GetCurrentGroupOrderID',
            'GetCurrentGroupOrderIDResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetCurrentGroupOrderIDResponse',
            'GetCurrentGroup' => '\\RrGeng\\OpenligaDB\\StructType\\GetCurrentGroup',
            'GetCurrentGroupResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetCurrentGroupResponse',
            'Group' => '\\RrGeng\\OpenligaDB\\StructType\\Group',
            'GetMatchdataByGroupLeagueSaison' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByGroupLeagueSaison',
            'GetMatchdataByGroupLeagueSaisonResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByGroupLeagueSaisonResponse',
            'ArrayOfMatchdata' => '\\RrGeng\\OpenligaDB\\ArrayType\\ArrayOfMatchdata',
            'GetMatchdataByLeagueDateTime' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByLeagueDateTime',
            'GetMatchdataByLeagueDateTimeResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByLeagueDateTimeResponse',
            'GetMatchdataByTeams' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByTeams',
            'GetMatchdataByTeamsResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByTeamsResponse',
            'GetMatchdataByLeagueSaison' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByLeagueSaison',
            'GetMatchdataByLeagueSaisonResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByLeagueSaisonResponse',
            'GetMatchdataByGroupLeagueSaisonJSON' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByGroupLeagueSaisonJSON',
            'GetMatchdataByGroupLeagueSaisonJSONResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchdataByGroupLeagueSaisonJSONResponse',
            'GetFusballdaten' => '\\RrGeng\\OpenligaDB\\StructType\\GetFusballdaten',
            'GetFusballdatenResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetFusballdatenResponse',
            'ArrayOfFussballdaten' => '\\RrGeng\\OpenligaDB\\ArrayType\\ArrayOfFussballdaten',
            'Fussballdaten' => '\\RrGeng\\OpenligaDB\\StructType\\Fussballdaten',
            'GetMatchByMatchID' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchByMatchID',
            'GetMatchByMatchIDResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetMatchByMatchIDResponse',
            'GetTeamsByLeagueSaison' => '\\RrGeng\\OpenligaDB\\StructType\\GetTeamsByLeagueSaison',
            'GetTeamsByLeagueSaisonResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetTeamsByLeagueSaisonResponse',
            'ArrayOfTeam' => '\\RrGeng\\OpenligaDB\\ArrayType\\ArrayOfTeam',
            'Team' => '\\RrGeng\\OpenligaDB\\StructType\\Team',
            'GetAvailGroups' => '\\RrGeng\\OpenligaDB\\StructType\\GetAvailGroups',
            'GetAvailGroupsResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetAvailGroupsResponse',
            'ArrayOfGroup' => '\\RrGeng\\OpenligaDB\\ArrayType\\ArrayOfGroup',
            'GetAvailSports' => '\\RrGeng\\OpenligaDB\\StructType\\GetAvailSports',
            'GetAvailSportsResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetAvailSportsResponse',
            'ArrayOfSport' => '\\RrGeng\\OpenligaDB\\ArrayType\\ArrayOfSport',
            'Sport' => '\\RrGeng\\OpenligaDB\\StructType\\Sport',
            'GetAvailLeaguesBySports' => '\\RrGeng\\OpenligaDB\\StructType\\GetAvailLeaguesBySports',
            'GetAvailLeaguesBySportsResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetAvailLeaguesBySportsResponse',
            'GetGoalsByMatch' => '\\RrGeng\\OpenligaDB\\StructType\\GetGoalsByMatch',
            'GetGoalsByMatchResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetGoalsByMatchResponse',
            'GetGoalsByLeagueSaison' => '\\RrGeng\\OpenligaDB\\StructType\\GetGoalsByLeagueSaison',
            'GetGoalsByLeagueSaisonResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetGoalsByLeagueSaisonResponse',
            'GetGoalGettersByLeagueSaison' => '\\RrGeng\\OpenligaDB\\StructType\\GetGoalGettersByLeagueSaison',
            'GetGoalGettersByLeagueSaisonResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetGoalGettersByLeagueSaisonResponse',
            'ArrayOfGoalGetter' => '\\RrGeng\\OpenligaDB\\ArrayType\\ArrayOfGoalGetter',
            'GoalGetter' => '\\RrGeng\\OpenligaDB\\StructType\\GoalGetter',
            'GetLastChangeDateByLeagueSaison' => '\\RrGeng\\OpenligaDB\\StructType\\GetLastChangeDateByLeagueSaison',
            'GetLastChangeDateByLeagueSaisonResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetLastChangeDateByLeagueSaisonResponse',
            'GetLastChangeDateByGroupLeagueSaison' => '\\RrGeng\\OpenligaDB\\StructType\\GetLastChangeDateByGroupLeagueSaison',
            'GetLastChangeDateByGroupLeagueSaisonResponse' => '\\RrGeng\\OpenligaDB\\StructType\\GetLastChangeDateByGroupLeagueSaisonResponse',
        );
    }
}
