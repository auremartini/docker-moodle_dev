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
 * Strings for component 'assignfeedback_file', language 'it_wp', version '4.1'.
 *
 * @package     assignfeedback_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enabled_help'] = 'Consente al trainer di caricare file con i propri commenti durante la valutazione dei compiti. Tali file possono essere i compiti dei corsisti valutati, documenti, o file audio con il commento parlato.';
$string['feedbackfileadded'] = 'Nuovo file di commento "{$a->filename}" per il corsista "{$a->student}"';
$string['feedbackfileupdated'] = 'Modificato file di commento "{$a->filename}" per il corsista "{$a->student}"';
$string['feedbackzip_help'] = 'Un file zip contenente un elenco di file di commento per i corsisti. I file di commento saranno distribuiti tra i partecipanti in base alla loro id, da inserire nella seconda parte di ciascun nome di file subito dopo il nome e cognome dell\'utente. Questa convenzione viene usata all\'atto dello scaricamento delle consegne, in questo modo è possibile aggiungere commenti su alcuni file, comprimere il tutto in zip, e ricaricare i file. I file senza modifiche saranno ignorati.';
$string['privacy:metadata:filepurpose'] = 'File di feedback inviati dal trainer al corsista.';
