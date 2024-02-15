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
 * Strings for component 'qtype_mtf', language 'it', version '4.1'.
 *
 * @package     qtype_mtf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answernumbering'] = 'Numerazione delle alternative';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'Nessuna';
$string['answersingleno'] = 'Risposte multiple';
$string['configintro'] = 'Valori di default per domande Vero/Falso multiple.';
$string['configscoringmethod'] = 'Metodo di valutazione di default per domande Vero/Falso multiple.';
$string['configshuffleanswers'] = 'Impostazione di default per l\'opzione di ordinamento casuale per le domande Vero/Falso multiple.';
$string['correctresponse'] = 'Risposta corretta';
$string['deletedchoice'] = 'Questa scelta è stata eliminata dopo l\'inizio del tentativo.';
$string['deleterawswarning'] = 'Diminuendo il numero di sotto-domande, le sotto-domande in eccesso verranno eliminate. Sei sicuro di proseguire?';
$string['enterfeedbackhere'] = 'Inserisci qui il feedback.';
$string['entergeneralfeedbackhere'] = 'Inserisci qui il feedback generale.';
$string['enterstemhere'] = 'Inserire qui il testo principale della domanda.';
$string['false'] = 'Falso';
$string['feedbackforoption'] = 'Feedback per';
$string['generalfeedback'] = 'Feedback generale.';
$string['generalfeedback_help'] = 'Indipendentemente dalla risposta scelta, viene dato lo stesso feedback generale.<br/>
Puoi, ad esempio, utilizzare il feedback generale per spiegare quali erano le risposte corrette o per offrire agli studenti dei collegamenti ad informazioni aggiuntive.';
$string['incorrect'] = 'Sbagliato';
$string['maxpoints'] = 'Punteggio massimo';
$string['mustdeleteextrarows'] = 'Si possono fare al massimo 5 sotto-domande.  {$a} sotto-domande verranno cancellate. Se annulli la modifica senza salvare, le sotto-domande in eccesso rimarranno.';
$string['mustsupplyresponses'] = 'Devi fornire una scelta per ogni risposta.';
$string['mustsupplyvalue'] = 'Devi fornire una scelta.';
$string['notenoughanswers'] = 'Questo tipo di domanda richiede al minimo {$a} sotto-domande';
$string['numberofrows'] = 'Numero di opzioni';
$string['numberofrows_help'] = 'Indica il numero di sotto-domande. Se si sceglie un valore minore rispetto al numero di sotto-domande attuali, quando si salva le sotto-domande in eccesso verranno cancellate.';
$string['oneanswerperrow'] = 'Per favore rispondi a tutte le sotto-domande';
$string['optionno'] = 'Sotto-domanda {$a}';
$string['optionsandfeedback'] = 'Sotto-domande';
$string['pluginname'] = 'Vero Falso Multipla (ETH)';
$string['pluginname_help'] = 'A seguito di una domanda principale o ad un testo, i partecipanti indicano se delle sotto-domande sono classificabili come "vere" o "false" (i due criteri di classificazione sono configurabili).';
$string['pluginname_link'] = 'question/type/mtf';
$string['pluginnameadding'] = 'Aggiungere una domanda Vero/Falso multipla';
$string['pluginnameediting'] = 'Modificare una domanda Vero/Falso multipla';
$string['pluginnamesummary'] = 'Nelle domande Vero/Falso multiple ("Tipo X") un certo numero di sotto-domande deve essere classificato come "vero" o "falso".';
$string['privacy:metadata'] = 'Il plugin domande MTF non memorizza nessun dato personale.';
$string['responsedesc'] = 'Il testo usato come default per la risposta {$a}';
$string['responseno'] = 'Risposta {$a}';
$string['responsetext'] = 'Testo di risposta {$a}';
$string['responsetext1'] = 'Vero';
$string['responsetext2'] = 'Falso';
$string['responsetexts'] = 'Opzioni per "vero" e "falso"';
$string['save'] = 'Salva';
$string['scoringmethod'] = 'Metodo di valutazione';
$string['scoringmethod_help'] = 'Ci sono due modi alternativi di valutazione. <br/>
<strong>Sotto-punti</strong> (raccomandato): Lo studente riceve punti per ogni risposta corretta ad una sotto-domanda.<br/><strong>MTF1/0</strong>: Lo studente riceve tutti i punti se tutte le risposte alle sotto-domande sono corrette e nessun punto se almeno una risposta è sbagliata.';
$string['scoringmtfonezero'] = 'MTF1/0';
$string['scoringmtfonezero_help'] = 'Lo studente riceve tutti i punti se tutte le risposte sono corrette e nessun punto se almeno una risposta è sbagliata.';
$string['scoringsubpoints'] = 'Sotto-punti';
$string['scoringsubpoints_help'] = 'Lo studente riceve dei sotto-punti per ogni risposta corretta.';
$string['showscoringmethod'] = 'Mostra il metodo di valutazione';
$string['showscoringmethod_help'] = 'Se abilitato gli studenti visualizzeranno il metodo di valutazione nel test.';
$string['shuffleanswers'] = 'Sotto-domande in ordine casuale';
$string['shuffleanswers_help'] = 'Se abilitato, l\'ordine di presentazione delle sotto-domande è variato in modo casuale ad ogni tentativo, assunto che pure "Alternative in ordine casuale" sia abilitato a livello di impostazioni dell\'attività.';
$string['stem'] = 'Testo/Domanda principale';
$string['tasktitle'] = 'Titolo della domanda';
$string['true'] = 'Corretto';
