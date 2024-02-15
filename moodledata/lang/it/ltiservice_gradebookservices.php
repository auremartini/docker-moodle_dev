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
 * Strings for component 'ltiservice_gradebookservices', language 'it', version '4.1'.
 *
 * @package     ltiservice_gradebookservices
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysgs'] = 'Utilizza il servizio per la sincronizzazione delle valutazioni e la gestione delle colonne';
$string['grade_synchronization'] = 'Servizi IMS  LTI per compiti e valutazioni';
$string['grade_synchronization_help'] = 'Consente di scegliere se utilizzare i Servizi LTI IMS di Compiti e Valutazioni per sincronizzare i voti anziché il servizio Basic Outcomes.
* **Non utilizzare questo servizio** - saranno utilizzate la funzionalità e la configurazione Basic Outcomes
* **Utilizzare questo servizio solo per la sincronizzazione dei voti** - Il servizio popolerà i voti in una colonna già esistente del registro delle valutazioni, ma non sarà in grado di creare nuove colonne.
* **Utilizzare questo servizio per la sincronizzazione dei voti e la gestione delle colonne** - Il servizio sarà in grado di creare e aggiornare colonne dei voti e gestire i voti.';
$string['ltiservice_gradebookservices'] = 'Servizi IMS  LTI per compiti e valutazioni';
$string['modulename'] = 'Valutazioni LTI';
$string['nevergs'] = 'Non utilizzare il servizio';
$string['partialgs'] = 'Utilizza il servizio solo per la sincronizzazione delle valutazioni';
$string['pluginname'] = 'Servizi LTI per compiti e valutazioni';
$string['privacy:metadata:externalpurpose'] = 'Informazioni inviate a un provider LTI esterno.';
$string['privacy:metadata:feedback'] = 'Feedback ricevuto dall\'utente per l\'attività LTI.';
$string['privacy:metadata:grade'] = 'Valutazione ricevuta dall\'utente su Moodle per l\'attività LTI.';
$string['privacy:metadata:maxgrade'] = 'Valutazione massima dell\'attività LTI.';
$string['privacy:metadata:timemodified'] = 'Ultima volta che la valutazione è stata modificata.';
$string['privacy:metadata:userid'] = 'ID dell\'utente che utilizza LTI Consumer.';
$string['taskcleanup'] = 'Pulizia tabelle servizi Compito e Valutazione LTI';
