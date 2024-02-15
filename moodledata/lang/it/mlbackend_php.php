<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'mlbackend_php', language 'it', version '4.1'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'A causa della sua dimensione, è stata valutata solo una parte del dataset. Se il sistema può gestire con un dataset {$a}, impostare $CFG->mlbackend_php_no_memory_limit.';
$string['errorcantloadmodel'] = 'Il file del modello {$a} non esiste. È necessario addestrare il modello prima di utilizzarlo per i pronostici.';
$string['errorlowscore'] = 'L\'accuratezza calcolata del modello non è molto alta, alcuni pronostici non saranno precisi. Punteggio del modello = {$a->score}, punteggio minimo = {$a->minscore}';
$string['errornotenoughdata'] = 'Non sono disponibili dati sufficientei per valutare il modello con intervallo di analisi.';
$string['errornotenoughdatadev'] = 'i risultati dalla valutazione sono variegati. Si raccomanda di raccogliere altri dati per garantire la validità del modello. Deviazione standard dei risultati della valutazione = {$a->deviation}, deviazione standard massima consigliata: {$a->accepteddeviation}';
$string['errorphp7required'] = 'Il backend PHP di machine learning richiede PHP 7';
$string['pluginname'] = 'Backend PHP di machine learning';
$string['privacy:metadata'] = 'Il plugin \'Backend PHP di machine learning\' non memorizza dati personali.';
