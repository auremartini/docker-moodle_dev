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
 * Strings for component 'quizaccess_ipaddresslist', language 'it', version '4.1'.
 *
 * @package     quizaccess_ipaddresslist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = 'Aggiungi luogo';
$string['allowedsubnets'] = 'Luoghi consentiti';
$string['allowedsubnets_help'] = 'L\'accesso al quiz può essere limitato a particolari luoghi in base all\'indirizzo IP dell\'utente. La lista dei luoghi con le corrispettive sottoreti IP è definita dall\'amministratore del sito. Non selezionarne nessuna per disabilitare il controllo del luogo di accesso.';
$string['editsubnet'] = 'Modifica luogo';
$string['managesubnets'] = 'Gestione dei luoghi';
$string['pluginname'] = 'Regola d\'accesso quiz Lista di indirizzi IP';
$string['privacy:metadata'] = 'Il plugin "Regola d\'accesso quiz Lista di indirizzi IP" non memorizza dati personali.';
$string['subnet'] = 'Sottorete IP';
$string['subnet_help'] = 'Inserisci una lista separata da virgole di IP completi o parziali.

Esempi:

* 192.168.10.1
* 192.168.
* 231.54.211.0/20
* 231.3.56.10-20
* 192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20';
$string['subnetwrong'] = 'Il quiz è accessibile solamente da specifici luoghi e questo computer non è nella lista degli abilitati.';
