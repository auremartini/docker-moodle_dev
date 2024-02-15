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
 * Strings for component 'enrol_fee', language 'it', version '4.1'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Ruolo da assegnare';
$string['cost'] = 'Costo di iscrizione';
$string['costerror'] = 'Il costo di iscrizione deve essere un numero';
$string['currency'] = 'Vauta';
$string['defaultrole'] = 'Ruolo di default da assegnare';
$string['defaultrole_desc'] = 'Il ruolo da assegnare all\'utente dopo che avrà effettuato il pagamento.';
$string['enrolenddate'] = 'Data di fine';
$string['enrolenddate_help'] = 'Consente di definire la data di fine dell\'iscrizione';
$string['enrolenddaterror'] = 'La data di fine iscrizione non può essere anteriore alla data di inizio.';
$string['enrolperiod'] = 'Durata dell\'iscrizione';
$string['enrolperiod_desc'] = 'La durata di default dell\'iscrizione. Impostandola a zero la durata sarà illimitata.';
$string['enrolperiod_help'] = 'La durata dell\'iscrizione, calcolata a partire dalla data di iscrizione dell\'utente. Impostandola a zero la durata sarà illimitata.';
$string['enrolstartdate'] = 'Data di inizio';
$string['enrolstartdate_help'] = 'Gli utenti potranno iscriversi a partire dalla data di inizio.';
$string['expiredaction'] = 'Azione alla scadenza dell\'iscrizione';
$string['expiredaction_help'] = 'L\'azione da svolgere quando l\'iscrizione di un utente scade. Da notare che in caso di disiscrizione saranno eliminati alcuni dati e impostazioni dell\'utente.';
$string['fee:config'] = 'Configurare istanze pluign Iscrizione a pagamento';
$string['fee:manage'] = 'Gestire utenti iscritti';
$string['fee:unenrol'] = 'Disiscrivere utenti dal corso';
$string['fee:unenrolself'] = 'Disiscriversi dal corso';
$string['nocost'] = 'Questo corso è gratuito.';
$string['paymentaccount'] = 'Account di pagamento.';
$string['paymentaccount_help'] = 'I pagamenti saranno accreditati a questo account.';
$string['pluginname'] = 'Iscrizione a pagamento';
$string['pluginname_desc'] = 'Il metodo di iscrizione "Iscrizione a pagamento" consente di attivare corsi che richiedono un costo di iscrizione. È anche possibile impostare il costo di iscrizione a zero, nel qual caso il corso sarà gratuito. È possibile impostare un costo di iscrizione di default valido per tutto il sito e modificare tale valore corso per corso. Il costo di iscrizione impostato nel corso prevale su quello di default del sito.';
$string['privacy:metadata'] = 'Il plugin di iscrizione "Iscrizione a pagamento" non memorizza dati personali.';
$string['purchasedescription'] = 'Iscrizioni nel corso {$a}';
$string['sendpaymentbutton'] = 'Seleziona tipo di pagamento';
$string['status'] = 'Consenti iscrizioni a pagamento';
$string['status_desc'] = 'Gli utenti potranno iscriversi pagando il costo di iscrizione.';
