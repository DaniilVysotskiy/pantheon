<?php
/*  Rheda: visualizer and control panel
 *  Copyright (C) 2016  o.klimenko aka ctizen
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace Rheda;

require_once __DIR__ . '/../helpers/Url.php';
require_once __DIR__ . '/../helpers/Array.php';
require_once __DIR__ . '/../helpers/GameFormatter.php';

class TableStatus extends Controller
{
    protected $_mainTemplate = 'TableStatus';

    protected function _pageTitle()
    {
        return _t('Event tables status');
    }

    protected function _run()
    {
        $formatter = new GameFormatter();

        $errCode = null;

        // Slight cache to avoid huge load
        $cacheKey = 'tables_status_cache';
        if (apcu_exists($cacheKey)) {
            $tablesFormatted = apcu_fetch($cacheKey);
        } else {
            $tables = $this->_api->execute('getTablesState', [$this->_mainEventId, true]);
            $tablesFormatted = $formatter->formatTables($tables, $this->_mainEventRules->gamesWaitingForTimer());
            apcu_add($cacheKey, $tablesFormatted, 120); // 2 minutes cache
        }

        $timerState = $this->_api->execute('getTimerState', [$this->_mainEventId]);
        if ($timerState['started'] && $timerState['time_remaining']) {
            $formattedTime = (int)($timerState['time_remaining'] / 60) . ':'
                . (floor(($timerState['time_remaining'] % 60) / 10) * 10);
        } else {
            $formattedTime = '00:00';
        }

        return [
            'error' => null,
            'tables' => $tablesFormatted,

            // timer related
            'redZoneLength' => $this->_mainEventRules->redZone() / 60,
            'yellowZoneLength' => $this->_mainEventRules->yellowZone() / 60,
            'redZone' => $this->_mainEventRules->timerPolicy() === 'redZone',
            'yellowZone' => $this->_mainEventRules->timerPolicy() === 'yellowZone',
            'gameDuration' => $this->_mainEventRules->gameDuration(), // already in minutes
            'initialTime' => $formattedTime
        ];
    }
}
