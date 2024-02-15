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
 * Strings for component 'format_periods', language 'it', version '4.1'.
 *
 * @package     format_periods
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['automaticenddate'] = 'Calcola la data di fine del corso dalla data di fine dell\'ultimo periodo';
$string['automaticenddate_help'] = 'Se abilitato, la data di fine del corso sarà calcolata automaticamente dalla data di fine dell\'ultimo periodo';
$string['currentsection'] = 'Questo periodo';
$string['customdatesformat'] = 'Personalizzato';
$string['datesformat'] = 'Formato delle date';
$string['datesformat_help'] = 'Seleziona il formato delle date usato nel nome predefinito del periodo';
$string['datesformatcustom'] = 'Formato delle date personalizzato';
$string['datesformatcustom_help'] = 'Specifica il formato personalizzato delle date. Per la sintassi vedere il <a href="http://php.net/manual/en/function.strftime.php" target="_blank">manuale php</a>.';
$string['deletesection'] = 'Elimina periodo';
$string['editsection'] = 'Modifica periodo';
$string['editsectionname'] = 'Modifica il nome del periodo';
$string['futuresneakpeek'] = 'Anteprima periodi successivi';
$string['futuresneakpeek_help'] = 'Considera i periodi che iniziano prima di questo intervallo di tempo come correnti (per esempio si potrebbe permettere agli studenti di vedere la settimana successiva due giorni prima della fine della settimana corrente).';
$string['hidecompletely'] = 'Nascondi completamente';
$string['hidefromcourseview'] = 'Nascondi nella pagina del corso';
$string['hidefromothers'] = 'Nascondi periodo';
$string['newsectionname'] = 'Nuovo nome del periodo {$a}';
$string['notavailable'] = 'Non ancora disponibile';
$string['numberperiods'] = 'Numero dei periodi';
$string['page-course-view-periods'] = 'Qualsiasi tipo di pagina principale del corso in formato a periodi';
$string['page-course-view-periods-x'] = 'Qualsiasi tipo di pagina del corso in formato a periodi';
$string['perioddurationdefault'] = 'Durata predefinita del periodo';
$string['perioddurationdefault_help'] = 'Imposta la durata di un periodo. Può essere modificato per periodi singoli.';
$string['perioddurationoverride'] = 'Modifica durata del periodo';
$string['perioddurationoverride_help'] = 'Imposta la durata di questo periodo. Se non impostata sarà usato il periodo di default di questo corso.';
$string['pluginname'] = 'Formato a periodi';
$string['sameascurrent'] = 'Lo stesso dei periodi correnti';
$string['sameaspast'] = 'Lo stesso dei periodi precedenti';
$string['section0name'] = 'Generale';
$string['sectiondates'] = 'Date del periodo: <b>{$a->dates}</b>';
$string['sectiondatesduration'] = 'Date del periodo: <b>{$a->dates}</b>; durata del periodo: <b>{$a->duration}</b>';
$string['sectionduration'] = 'Durata del periodo: <b>{$a->duration}</b>';
$string['sectionname'] = 'Periodo';
$string['showcollapsed'] = 'Visualizza ogni periodo come link alla propria pagina';
$string['showexpanded'] = 'Visualizza tutti i periodi in una pagina';
$string['showfromothers'] = 'Visualizza periodi';
$string['showfutureperiods'] = 'Visualizza periodi successivi';
$string['showfutureperiods_help'] = 'Permette di mostrare automaticamente periodi successivi come link, come non disponibili o nascosti completamente';
$string['shownotavailable'] = 'Visualizza come non disponibile';
$string['showpastcompleted'] = 'Visualizza le sezioni precedenti complete';
$string['showpastcompleted_help'] = 'Definisce come visualizzare i periodi precedenti dove tutte le attività sono state completate. Il completamento deve essere abilitato per tutti i moduli della sezione.';
$string['showpastperiods'] = 'Visualizza periodi precedenti';
$string['showpastperiods_help'] = 'Definisce se visualizzare o nascondere le sezioni che hanno la data di fine nel passato. "Nascondere dalla pagina del corso" significa che le attività non saranno visualizzate sulla pagina del corso ma saranno visibili nel registro del valutatore e in altri report.';
$string['showperiods'] = 'Mostra i periodi correnti';
$string['showperiods_help'] = 'Definisci come la visualizzazione predefinita dei periodi. Può essere modificato di seguito per i periodi precedenti e successivi.';
