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
 * Strings for component 'local_eledia_webservicesuite', language 'it', version '4.1'.
 *
 * @package     local_eledia_webservicesuite
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['back'] = 'Indietro';
$string['eledia_desc'] = 'Formulario per testare le funzionalità di base del servizio.<br />
    Tieni presente che i servizi che chiami qui sono tutti eseguiti sul sistema.<br />
<br />
Per utilizzare questo formulare è necessario attivare e configurare il servizio soap.<br />
Puoi trovare le impostazioni generali del servizio web qui: <a href={$a}>{$a}</a><br />
Il token generato per l\'utente del servizio web deve essere fornito nella configurazione di questo plugin.<br />
<br />';
$string['eledia_desc_header'] = 'Eledia Web Service Siute';
$string['eledia_header'] = 'Eledia Web Service Siute';
$string['eledia_webservicesuite:access'] = 'Diritto di accesso a tutte le funzioni del WebService';
$string['idnumbercourse'] = 'Identificativo Corso';
$string['idnumberuser'] = 'Identificativo Utente';
$string['missing_token'] = 'Manca il token del servizio Web nella configurazione del plug-in.';
$string['pluginname'] = 'Manca il token del servizio Web nella configurazione del plug-in.';
$string['privacy:metadata'] = 'Il plugin eledia webservicesuite non memorizza alcun dato personale.';
$string['service_choose'] = 'Scegli la Funzione';
$string['start'] = 'Chiama la Funzione';
$string['test_form_desc'] = 'Trova il modulo per i test <a href={$a}>qui</a>.';
$string['test_header'] = 'tester di funzione eledia webservicesuite';
$string['test_token'] = 'token per script di test';
$string['wscannotenrol'] = 'L\'istanza del plugin non può iscrivere manualmente un utente al corso id = {$a->courseid}';
$string['wscoursenotfound'] = 'Corso con idnumber = {$a->idnumber} non trovato.';
$string['wsidnumbersnotfound'] = 'Numero ID {$a->numero ID} non trovato.';
$string['wsmultiplecoursesfound'] = 'Trovati più corsi con idnumber = {$a->idnumber}. Il numero di identificazione deve essere univoco';
$string['wsmultipleidnumbersfound'] = 'Idnumber {$a->idnumber} non è univoco.';
$string['wsmultipleusersfound'] = 'Trovati più utenti con idnumber = {$a->idnumber}. Il numero di identificazione deve essere univoco';
$string['wsnoinstance'] = 'L\'istanza del plug-in di iscrizione manuale non esiste o è disabilitata per il corso (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Non hai l\'autorizzazione per assegnare questo ruolo ({$a->roleid}) a questo utente ({$a->userid}) in questo corso ({$a->courseid}).';
$string['wsusernotfound'] = 'Utente con idnumber = {$a->idnumber} non trovato.';
