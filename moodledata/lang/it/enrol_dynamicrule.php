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
 * Strings for component 'enrol_dynamicrule', language 'it', version '4.1'.
 *
 * @package     enrol_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Azione';
$string['actiondisableenrolment'] = 'Disabilita iscrizione';
$string['actiondisableenrolmentremoveroles'] = 'Disabilita iscrizione e rimuovi ruoli';
$string['actionunenrol'] = 'Disiscrivi utenti dal corso';
$string['duration'] = 'Durata';
$string['dynamicrule:config'] = 'Configurare istanze di iscrizione tramite regole dinamiche';
$string['dynamicrule:enrol'] = 'Iscrivere utilizzando azioni di iscrizione al corso';
$string['dynamicrule:unenrol'] = 'DIscrivere utilizzando azioni di disiscrizione al corso oppure manualmente';
$string['enddate'] = 'Data di fine';
$string['errorinvalidaction'] = 'Azione non valida';
$string['errorinvalidcoursetoenrol'] = 'Corso dove iscrivere non valido';
$string['errorinvalidcoursetounenrol'] = 'Corso dove disiscrivere non valido';
$string['errorinvaliddurationandenddate'] = 'E\' necessario selezionare la data di fine iscrizione oppure la durata, ma non entrambe.';
$string['errorinvalidrole'] = 'Ruolo non valido';
$string['group'] = 'Nome del gruppo';
$string['group_help'] = 'Il nome del gruppo dove gli utenti saranno inseriti come membri.';
$string['noavailablecoursesenrol'] = 'Non ci sono corsi dove iscrivere gli utenti utilizzando il metodo di iscrizione tramite regole dinamiche.';
$string['noavailablecoursesunenrol'] = 'Non ci sono corsi da dove disiscrivere gli utenti utilizzando il metodo di iscrizione tramite regole dinamiche.';
$string['outcomecourseenrol'] = 'Iscrivi utenti al corso';
$string['outcomecourseenroldescription'] = 'Iscrivi al corso \'{$a->coursename}\'<br />
Ruolo {$a->role}<br />
Gruppo: {$a->groupname}';
$string['outcomecourseenroldescriptionwithduration'] = 'Iscrivi al corso \'{$a->coursename}\'<br />
Ruolo {$a->role}<br />
Gruppo: {$a->groupname}
Durata: {$a->duration} {$a->durationtype}';
$string['outcomecourseenroldescriptionwithenddate'] = 'Iscrivi al corso \'{$a->coursename}\'<br />
Ruolo {$a->role}<br />
Gruppo: {$a->groupname}
Data di fine: {$a->enddate}';
$string['outcomecourseunenrol'] = 'Disiscrivi utenti dal corso';
$string['outcomecourseunenroldescriptionwithmethod'] = 'Disiscrizione dal corso \'{$a->coursename}\'<br />
Metodo di iscrizione: {$a->enrol}<br />
Azione: {$a->action}';
$string['pluginname'] = 'Iscrizione tramite regole dinamiche';
$string['privacy:metadata'] = 'Il pluign Regole dinamiche non memorizza dati personali';
$string['userwithoutcapability'] = 'Devi avere il privilegio per disiscrivere con il metodo \'{$a}\' nei corsi selezionati';
