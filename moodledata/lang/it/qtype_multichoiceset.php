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
 * Strings for component 'qtype_multichoiceset', language 'it', version '4.1'.
 *
 * @package     qtype_multichoiceset
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['correctanswer'] = 'Corretta';
$string['deletedchoice'] = 'Questa risposta è stata cancellata dopo che il tentativo è stato avviato.';
$string['errnocorrect'] = 'Almeno una delle alternative deve essere impostata come corretta per poter ottenere la valutazione massima.';
$string['pluginname'] = 'Risposta multipla Tutto-o-niente';
$string['pluginname_help'] = 'Chi risponde può selezionare una o più risposte. Se le alternative selezionate corrispondono esattamente a quelle definite come "corrette" nella domanda, si ottiene il 100% del punteggio della domanda. Se viene selezionato una qualsiasi risposta "sbagliata" o non vengono selezionate tutte le risposte "corrette", allora si ottiene lo 0% del punteggio della domanda.
Almeno una delle alternative deve essere impostata come "corretta". Per definire domande dove nessuna delle alternative è corretta va definita l\'alternativa "Nessuna delle precedenti" o "Nessuna delle altre".
A differenza della domanda a Risposta multipla, che permette valutazioni frazionarie, nella domanda a Risposta multipla Tutto-o-niente le uniche valutazioni disponibili sono 100% o 0%.';
$string['pluginname_link'] = 'question/type/multichoiceset';
$string['pluginnameadding'] = 'Creazione domanda a Risposta multipla Tutto-o-niente';
$string['pluginnameediting'] = 'Modifica domanda a Risposta multipla Tutto-o-niente';
$string['pluginnamesummary'] = 'Permette l\'utilizzo di domande a risposta multipla con una valutazione tutto-o-niente (100% o 0%).
Le alternative corrette definite nella domanda dovranno essere selezionate tutte per avere una valutazione corretta della domanda.';
$string['privacy:metadata'] = 'Il plugin "Risposta multipla Tutto-o-niente" non memorizza dati personali.';
$string['showeachanswerfeedback'] = 'Visualizza il feedback per le risposte selezionate.';
$string['showstandardinstruction'] = 'Visualizza istruzioni standard';
$string['showstandardinstruction_help'] = 'Consente di mostrare le istruzioni "Scegli una o più alternative:" prima delle risposte.';
