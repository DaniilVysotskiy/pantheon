<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: atoms.proto

namespace GPBMetadata;

class Atoms
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
ķI
atoms.protoCommon"}
AccessRules-
rules (2.Common.AccessRules.RulesEntry?

RulesEntry
key (	 
value (2.Common.RuleValue:8"Y
	RuleValue
number_value (H 
string_value (	H 

bool_value (H B
kind"B

EventAdmin
ruleId (
personId (

personName (	"<
RuleListItem
default (	
type (	
title (	"
EventRuleListItem
isGlobal (

id ( 
value (2.Common.RuleValue
name (	

ownerTitle (	
allowedValues (	"c
RuleListItemEx

id (
type (	 
value (2.Common.RuleValue
allowedValues (	"
RuleListItemExMap3
rules (2$.Common.RuleListItemExMap.RulesEntryD

RulesEntry
key (	%
value (2.Common.RuleListItemEx:8"C
Person

id (
city (	
tenhouId (	
title (	"
PersonEx

id (
city (	
tenhouId (	
title (	
country (	
email (	
phone (	
groups ("F
Group

id (
title (	
color (	
description (	"`
RulesetGenerated
title (	
description (	
defaultRules (	

fieldTypes (	"%
Country
code (	
name (	"®
Event

id (
title (	
description (	
finished (
isListed (
isRatingShown (
tournamentStarted (
type (2.Common.EventType"K
MyEvent

id (
title (	
description (	
isOnline ("¬

GameConfig
rulesetTitle
 (	

eventTitle (	
eventDescription (	
eventStatHost (	
useTimer (

usePenalty (
gameDuration" (
timezone# (	
isOnline$ (
isTeam% (
autoSeating& (
	syncStart\' (
syncEnd( (
sortByGames) (
allowPlayerAppend* (
seriesLength- (
minGamesCount. (2
gamesStatus/ (2.Common.TournamentGamesStatus
hideResults0 (
hideAddReplayButton1 (
isPrescripted2 (

isFinished4 (,
rulesetConfig5 (2.Common.RulesetConfig"©
PlayerInRating

id (
title (	
tenhouId (	
rating (
chips (

winnerZone (
avgPlace (
avgScore (
gamesPlayed	 ("5
Player

id (
title (	
tenhouId (	"[
FinalResultOfSession
playerId (
score (
ratingDelta (
place ("F
Penalty
who (
amount (
reason (	H B	
_reason"÷
	RonResult

roundIndex (
honba (
winnerId (
loserId (
paoPlayerId (
han (

fu (
yaku (

riichiBets	 (
dora
 (
uradora (
kandora (

kanuradora (
openHand ("±
MultironWin
winnerId (
paoPlayerId (
han (

fu (
yaku (
dora (
uradora (
kandora (

kanuradora	 (
openHand
 ("
MultironResult

roundIndex (
honba (
loserId (
multiRon (!
wins (2.Common.MultironWin

riichiBets ("č
TsumoResult

roundIndex (
honba (
winnerId (
paoPlayerId (
han (

fu (
yaku (

riichiBets (
dora	 (
uradora
 (
kandora (

kanuradora (
openHand ("S

DrawResult

roundIndex (
honba (

riichiBets (
tempai ("D
AbortResult

roundIndex (
honba (

riichiBets ("B
ChomboResult

roundIndex (
honba (
loserId ("g
NagashiResult

roundIndex (
honba (

riichiBets (
tempai (
nagashi ("¢
Round 
ron (2.Common.RonResultH $
tsumo (2.Common.TsumoResultH *
multiron (2.Common.MultironResultH "
draw (2.Common.DrawResultH $
abort (2.Common.AbortResultH &
chombo (2.Common.ChomboResultH (
nagashi (2.Common.NagashiResultH B	
outcome"Ś

GameResult
sessionHash (	
date (	H 

replayLink (	
players (2
finalResults (2.Common.FinalResultOfSession#

penaltyLog (2.Common.Penalty
rounds (2.Common.RoundB
_date"9
PlayerPlaceInSeries
sessionHash (	
place ("¼
SeriesResult
player (2.Common.Player/

bestSeries (2.Common.PlayerPlaceInSeries
bestSeriesScores (
bestSeriesPlaces (
bestSeriesAvgPlace (	2
currentSeries (2.Common.PlayerPlaceInSeries
currentSeriesScores (
currentSeriesPlaces (
currentSeriesAvgPlace	 (	".
ReplacementPlayer

id (
title (	"
PlayerInSession

id (
title (	
score (2

replacedBy (2.Common.ReplacementPlayerH 
ratingDelta (B
_replacedBy"
CurrentSession
sessionHash (	
status (	

tableIndex (H (
players (2.Common.PlayerInSessionB
_tableIndex"ß
RegisteredPlayer

id (
title (	
localId (H 
teamName (	H
tenhouId (	
ignoreSeating (2

replacedBy (2.Common.ReplacementPlayerHB

_localIdB
	_teamNameB
_replacedBy"
SessionHistoryResult
sessionHash (	
eventId (
playerId (
score (
ratingDelta (
place (
title (	"H
SessionHistoryResultTable+
table (2.Common.SessionHistoryResult"1
PlacesSummaryItem
place (
count ("Ž
PlayerWinSummary
ron (
tsumo (
chombo (
feed (
	tsumofeed (
winsWithOpen (
winsWithRiichi (
winsWithDama (
unforcedFeedToOpen	 (
unforcedFeedToRiichi
 (
unforcedFeedToDama (
draw (

drawTempai (
	pointsWon (
pointsLostRon (
pointsLostTsumo ("0
HandValueStat
hanCount (
count (")
YakuStat
yakuId (
count ("O
RiichiSummary
	riichiWon (

riichiLost (
feedUnderRiichi ("-
DoraSummary
count (
average ("j
IntermediateResultOfSession
playerId (
score (
penaltyScore (H B
_penaltyScore"T
PaymentLogItem
from (H 
to (H
amount (B
_fromB
_to"

PaymentLog&
direct (2.Common.PaymentLogItem&
riichi (2.Common.PaymentLogItem%
honba (2.Common.PaymentLogItem"Ń

RoundState
sessionHash (	
dealer (

roundIndex (
riichi (
honba (
	riichiIds (3
scores (2#.Common.IntermediateResultOfSession8
scoresDelta (2#.Common.IntermediateResultOfSession$
payments	 (2.Common.PaymentLog
round
 (2.Common.Round%
outcome (2.Common.RoundOutcome"
	EventData$
type (2.Common.EventTypeH 
title (	
description (	
duration (
ruleset (	
timezone (	
lobbyId (
seriesLength (
minGames	 (
isTeam
 (
isPrescripted (
	autostart (
rulesetChanges (	B
_type"Ü

TableState%
status (2.Common.SessionStatus
mayDefinalize (
sessionHash (	#

penaltyLog (2.Common.Penalty

tableIndex (H %
	lastRound (2.Common.RoundH
currentRoundIndex (3
scores (2#.Common.IntermediateResultOfSession)
players	 (2.Common.RegisteredPlayerB
_tableIndexB

_lastRound";
Achievement
achievementId (	
achieventData (	"3
LocalIdMapping
playerId (
localId ("1
TeamMapping
playerId (
teamName (	"|
PlayerSeating
order (
playerId (
	sessionId (

tableIndex (
rating (
playerTitle (	"6
PlayerSeatingSwiss
playerId (
rating ("=
TableItemSwiss+
players (2.Common.PlayerSeatingSwiss"=
PrescriptedTable)
players (2.Common.RegisteredPlayer"ß
SessionState
dealer (

roundIndex (
riichiCount (

honbaCount (3
scores (2#.Common.IntermediateResultOfSession
finished ("
	penalties (2.Common.Penalty
lastHandStarted ("E
Uma
place1 (
place2 (
place3 (
place4 ("b

ComplexUma
neg1 (2.Common.Uma
neg3 (2.Common.Uma
	otherwise (2.Common.Uma"«
RulesetConfig&

complexUma (2.Common.ComplexUma*
endingPolicy (2.Common.EndingPolicy
uma (2.Common.Uma 
umaType (2.Common.UmaType
doubleronHonbaAtamahane ( 
doubleronRiichiAtamahane (
equalizeUma (
extraChomboPayments (
playAdditionalRounds	 (
riichiGoesToWinner
 (
	tonpuusen (
withAbortives (
withAtamahane (
withButtobi (
	withKazoe (
withKiriageMangan (

withKuitan (!
withLeadingDealerGameOver (
withMultiYakumans (
withNagashiMangan (%
withWinningDealerHonbaSkipped (

chipsValue (
chomboPenalty (
gameExpirationTime (

goalPoints (

maxPenalty (

minPenalty (
oka (
penaltyStep ($
replacementPlayerFixedPoints ($
replacementPlayerOverrideUma (
startPoints  (
startRating! (
allowedYaku" (
yakuWithPao# ("+
Generic_Success_Response
success ("(
Generic_Event_Payload
eventId (*2
	EventType

ONLINE 

TOURNAMENT	
LOCAL*A
TournamentGamesStatus
NONE 
SEATING_READY
STARTED*^
RoundOutcome
RON 	
TSUMO
DRAW	
ABORT

CHOMBO
NAGASHI
MULTIRON*Z
SessionStatus
PLANNED 

INPROGRESS
PREFINISHED
FINISHED
	CANCELLED**
UmaType

UMA_SIMPLE 
UMA_COMPLEX*H
EndingPolicy
EP_NONE 
EP_ONE_MORE_HAND
EP_END_AFTER_HANDbproto3'
        , true);

        static::$is_initialized = true;
    }
}

