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
 * Strings for component 'cachestore_apcu', language 'it', version '4.1'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Da notare che APCu è una scelta appropriata solo per siti composti da un singolo nodo o cache che possono essere memorizzate localmente. Per maggiori informazioni consultare la  <a href="{$a}">documentazione utente della cache APC</a>.';
$string['notice'] = 'Avviso';
$string['pluginname'] = 'Cache utente APC (APCu)';
$string['prefix'] = 'Prefisso';
$string['prefix_help'] = 'Il prefisso soprastante verrà utilizzato per tutte le chiavi memorizzate nell\'istanza APC.  di default viene utilizzato il prefisso del database.';
$string['prefixinvalid'] = 'Il prefisso contiene caratteri non validi. Sono consentiti solamente i caratteri a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'Il prefisso non è univoco. Per favore utilizza un prefisso univoco.';
$string['privacy:metadata'] = 'Il plugin "Cache utente APC (APCu)" memorizza dati per breve tempo in quanto può fungere da cache. Tali dati vengono eliminati regolarmente e non vengono diffusi esternamente in nessun modo.';
$string['testperformance'] = 'Test prestazioni';
$string['testperformance_desc'] = 'Consente di includere le performance di APCu nella pagina di test delle prestazioni. Si raccomanda di non abilitare la funzionalità nei siti in produzione.';
