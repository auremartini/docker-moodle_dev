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
 * Strings for component 'tool_httpsreplace', language 'it', version '4.1'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Completato';
$string['count'] = 'Numero di contenuti incorporati';
$string['disclaimer'] = 'Ho compreso i rischi dell\'operazione';
$string['doclink'] = 'Tool di conversione HTTPS';
$string['doit'] = 'Converti';
$string['domain'] = 'Dominio con problemi';
$string['domainexplain'] = 'Quando un sito viene convertito da HTTP a HTTPS tutti i contenuti incorporati in HTTP non funzioneranno più. Questo strumento è in grado di convertire il contenuto HTTP in HTTPS.

Prima dei eseguire la conversione, il contenuto verrà esaminato per individuare URL che potrebbero non funzionare più dopo la conversione. Per questi URL sarà necessario individuare l\'alternativa HTTPS o usare fonti alternative.';
$string['domainexplainhelp'] = 'Sono stati individuati i seguenti domini che non sembrano supportare contenuto HTTPS. Dopo la conversione del sito in HTTPS, utilizzando browser moderni e sicuri il contenuto incorporato dai domini elencati non sarà più visualizzabile in Moodle.  È possibile che questi siti non siano più disponibili o non siano temporaneamente disponibili e che non possano funzionare con impostazioni sicure. Si consiglia di continuare solo dopo aver analizzato i risultati e aver stabilito quanto siano importanti tali contenuti esterni. Da notare che i contenuti provenienti dai siti elencati non funzioneranno comunque dopo la conversione ad HTTPS.';
$string['httpwarning'] = 'L\'installazione gira ancora in HTTP. È possibile lanciare lo strumento per convertire in HTTPS il contenuto incorporato da altri siti ma il contenuto interno rimarrà in HTTP.  Dopo la conversione in HTTPS sarà necessario lanciare di novo lo strumento per convertire il contenuto interno.';
$string['notimplemented'] = 'La funzionalità non è implementata nel database driver utilizzato.';
$string['oktoprocede'] = 'L\'esame del contenuto non ha rilevato problemi. È possibile procedere alla conversione da HTTP a HTTPS.';
$string['pageheader'] = 'Aggiorna da HTTP ad HTTPS il contenuto ospitato esternamente';
$string['pluginname'] = 'Tool di conversione HTTPS';
$string['privacy:metadata'] = 'Il plugin "Tool di conversione HTTPS" non memorizza dati personali.';
$string['replacing'] = 'Sostituzione del contenuto HTTP con HTTPS';
$string['searching'] = 'Ricerca di {$a}';
$string['takeabackupwarning'] = 'Attenzione: dopo aver eseguito lo strumento, le modifiche non potranno essere annullate. Si raccomanda di effettuare un backup del sito prima di proseguire poiché esiste sempre il rischio di conversione errata dei contenuti.';
$string['toolintro'] = 'Se si desidera convertire il sito in HTTPS, è possibile utilizzare lo <a href="{$a}">strumento di conversione HTTPS</a> per convertire il tutto il contenuto incorporato.';
