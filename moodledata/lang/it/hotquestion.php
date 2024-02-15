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
 * Strings for component 'hotquestion', language 'it', version '4.1'.
 *
 * @package     hotquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ago'] = '{$a} fa';
$string['allowanonymouspost'] = 'Consenti domande anonime';
$string['allowanonymouspost_descr'] = 'Se abilitato, le domande potranno essere anonime e, se approvate, i voti potranno essere dati da tutti.';
$string['allowanonymouspost_help'] = 'Se abilitato, le domande potranno essere anonime e, se approvate, i voti potranno essere dati da tutti.';
$string['allowauthorinfohide'] = 'Consenti di nascondere il nome dell\'autore';
$string['allowauthorinfohide_descr'] = 'Se abilitato, il nome dell\'autore delle domande sarà visibile al docente ma nascosto agli studenti.';
$string['allowauthorinfohide_help'] = 'Se abilitato, il nome dell\'autore delle domande sarà visibile al docente ma nascosto agli studenti.';
$string['allowcomments'] = 'Consenti di commentare gli elementi';
$string['allowcomments_help'] = 'Se abilitato, tutti i partecipanti con il privilegio di creare commenti potranno commentare gli elementi presenti nell\'attività.';
$string['alwaysshowdescription'] = 'Visualizza sempre la descrizione';
$string['alwaysshowdescription_help'] = 'Se disabilitato, la descrizione non sarà visibile agli studenti.';
$string['anonymous'] = 'Anonimo';
$string['approvallabel'] = 'Etichetta colonna approvazione';
$string['approvallabel_descr'] = 'Inserisci l\'etichetta di default per la colonna di approvazione degli elementi';
$string['approvedno'] = 'Non approvato';
$string['approvedyes'] = 'Approvato';
$string['authorinfo'] = 'Inserita da {$a->user} il {$a->time}';
$string['authorinfohide'] = 'Inserita il {$a->time}';
$string['calendarend'] = '{$a} termina';
$string['calendarstart'] = '{$a} inizia';
$string['cnfallowcomments'] = 'Definisci se una nuova hot question accetterà i commenti agli elementi';
$string['completiondetail:pass'] = 'Ottenere la sufficienza ({$a})';
$string['completiondetail:post'] = 'Inserire almeno {$a} domande';
$string['completiondetail:vote'] = 'Dare almeno {$a} voti';
$string['completionpass'] = 'Lo studente deve:';
$string['completionpassdesc'] = 'Lo studente deve ricevere una valutazione sufficiente di {$a}';
$string['completionpassgroup'] = 'Si deve:';
$string['completionpost'] = 'Lo studente deve inserire domande:';
$string['completionpostdesc'] = 'Lo studente deve inserire almeno {$a} domanda/e';
$string['completionpostgroup'] = 'Richiedi l\'inserimento di domande';
$string['completionvote'] = 'Lo studente deve dare un voto:';
$string['completionvotedesc'] = 'Lo studente deve votare almeno {$a} domande';
$string['completionvotegroup'] = 'Richiedi voti';
$string['connectionerror'] = 'Errore di connessione';
$string['content'] = 'Contenuto';
$string['csvexport'] = 'Esporta in .csv';
$string['deleteentryconfirm'] = 'Conferma di voler cancellare l\'elemento';
$string['deleteroundconfirm'] = 'Conferma di voler cancellare il gruppo di domande';
$string['description'] = 'Descrizione';
$string['displayasanonymous'] = 'Inserisci come anonimo';
$string['entries'] = 'Elementi';
$string['eventaddquestion'] = 'Inserita domanda';
$string['eventaddround'] = 'Creato gruppo di domande';
$string['eventdownloadquestions'] = 'Scaricate domande';
$string['eventremovequestion'] = 'Rimossa domanda';
$string['eventremoveround'] = 'Rimosso gruppo di domande';
$string['eventremovevote'] = 'Rimosso voto';
$string['eventupdatevote'] = 'Aggiornato voto';
$string['exportfilename'] = 'domande.csv';
$string['exportfilenamep1'] = 'All_Site';
$string['exportfilenamep2'] = '_HQ_Questions_Exported_On_';
$string['factorheat'] = 'Coefficiente per il voto ricevuto';
$string['factorheat_help'] = 'Un coefficiente da applicare al conteggio delle domande per la valutazione basata sui voti ricevuti.
Più la domanda è votata e più sarà il suo peso nella valutazione.
Una domanda di uno studente conta come 1 più dei crediti aggiuntivi

    crediti = (voti) · coefficiente/100.

Normalmente un coefficiente per i voti del 5% è adeguato, considerando che 20 voti alla domanda ne duplicherebbero il valore.
Potresti avere bisogno di aggiuntare questo valore in base al numero di partecipanti e alla loro partecipazione.';
$string['factorpriority'] = 'Coefficiente per la priorità impostata del docente';
$string['factorpriority_help'] = 'Un coefficiente per contare le domande senza la priorità impostata dal docente.
Ogni domanda dello studente è conteggiata nella somma in base alla propria priorità (1, 2, ...).
Per quelle domande senza priorità (0) sarà utilizzato il valore specificato (in %). <br />
Un coefficiente 100% significa che una domanda senza priorità sarà contate come una domanda con priorità 1.';
$string['factorvote'] = 'Coefficiente per il voto dato';
$string['factorvote_help'] = 'Un coefficiente da applicare al conteggio delle domande per la valutazione basata sui voti dati.
In aggiunta alle domande create, uno studente più ricevere dei crediti di partecipazione votando le domande degli altri studenti.
Questi crediti sono il numero di voti dati moltiplicato per il coefficiente / 100

    crediti = (voti) · coefficiente/100.

Potresti avere bisogno di aggiuntare questo valore in base al numero di voti totali che uno studente può dare e il peso che si vuole dare alla partecipazione.
Per esempio, se uno studente può dare 5 voti, un coefficiente 20% significa che votare 5 domande di altri studenti equivale all\'aggiunta di una nuova domanda. Un coefficiente 100% significa che ogni voto ad altre domande equivale all\'aggiunta di una nuova domanda.';
$string['finalgrade'] = 'Valutazione finale';
$string['for'] = 'per il sito:';
$string['grading'] = 'Valutazione grezza';
$string['heat'] = 'Voti';
$string['heaterror'] = 'Troppi voti';
$string['heatgiven'] = 'Voto dato';
$string['heatlabel'] = 'Etichetta colonna dei voti';
$string['heatlabel_descr'] = 'Inserisci l\'etichetta di default per la colonna dei voti';
$string['heatlimit'] = 'Limite dei voti';
$string['heatlimit_descr'] = 'Inserisci il numero di voti che utenti possono dare, per gruppo. Il valore 0 nasconde la colonna.';
$string['heatlimit_help'] = 'Inserisci il numero di voti che si può dare, per gruppo. Il valore 0 nasconde la colonna.';
$string['heatreceived'] = 'Voto ricevuti';
$string['heatvisibility'] = 'Visibilità colonna dei voti';
$string['heatvisibility_descr'] = 'Se abilitato, la colonna dei voti sarà visibile, altrimenti sarà nascosta.';
$string['heatvisibility_help'] = 'Se abilitato, la colonna dei voti sarà visibile.';
$string['hotquestion'] = 'Hotquestion';
$string['hotquestion:addinstance'] = 'Aggiungere Hot Question';
$string['hotquestion:ask'] = 'Fare domande';
$string['hotquestion:comment'] = 'Scrivere commenti';
$string['hotquestion:manage'] = 'Gestire domande';
$string['hotquestion:manageentries'] = 'Visualizzare elenco delle attività';
$string['hotquestion:rate'] = 'Valutare domande';
$string['hotquestion:view'] = 'Visualizzare domande';
$string['hotquestion:vote'] = 'Votare le domande';
$string['hotquestionclosed'] = 'Questa attività è terminata il {$a}.';
$string['hotquestionclosetime'] = 'Orario di termine';
$string['hotquestionintro'] = 'Argomento';
$string['hotquestionname'] = 'Nome attività';
$string['hotquestionopen'] = 'Questa attività sarà disponibile fino al {$a}';
$string['hotquestionopentime'] = 'Orario di inizio';
$string['id'] = 'ID';
$string['improperuseviewgradesclass'] = 'Uso improprio della classe viewgrade. Non è possibile caricare l\'elemento di valutazione.';
$string['incorrectmodule'] = 'L\'ID del modulo corso non è corretto';
$string['inputapprovallabel'] = 'Approvata';
$string['inputapprovallabel_descr'] = 'Cambia il nome della colonna di approvazione con quello che preferisci.';
$string['inputapprovallabel_help'] = 'Cambia il nome della colonna di approvazione  con il testo più adatto per l\'attività.';
$string['inputheatlabel'] = 'Voto';
$string['inputheatlabel_descr'] = 'Cambia il nome della colonna dei voti con quello che preferisci.';
$string['inputheatlabel_help'] = 'Cambia il nome della colonna dei voti con il testo più adatto per l\'attività.';
$string['inputquestion'] = 'Inserisci la tua domanda qui:';
$string['inputquestion_descr'] = 'Cambia le istruzioni di inserimento con quello che preferisci.';
$string['inputquestion_help'] = 'Cambia le istruzioni di inserimento con quello che preferisci.';
$string['inputquestionlabel'] = 'Domande';
$string['inputquestionlabel_descr'] = 'Cambia il nome della colonna delle domande con quello che preferisci.';
$string['inputquestionlabel_help'] = 'Cambia il nome della colonna delle domande con il testo più adatto per l\'attività.';
$string['inputremovelabel'] = 'Rimuovi';
$string['inputremovelabel_descr'] = 'Cambia il nome della colonna di rimozione con quello che preferisci.';
$string['inputremovelabel_help'] = 'Cambia il nome della colonna di rimozione con il testo più adatto per l\'attività.';
$string['inputteacherprioritylabel'] = 'Priorità';
$string['inputteacherprioritylabel_descr'] = 'Cambia il nome della colonna Priorità con quello che preferisci.';
$string['inputteacherprioritylabel_help'] = 'Cambia il nome della colonna Priorità con il testo più adatto per l\'attività.';
$string['invalidquestion'] = 'Le domanda vuote sono ignorate.';
$string['modulename'] = 'Hot Question';
$string['modulename_help'] = 'L\'attività Hot Question permette agli studenti di inserire domande e di votarle, in risposta a richieste del domande.';
$string['modulename_link'] = 'mod/hotquestion/view';
$string['modulenameplural'] = 'Hot Questions';
$string['newround'] = 'Crea un nuovo gruppo di domande';
$string['newroundconfirm'] = 'Confermi di creare un nuovo gruppo di domande? (Le domande esistenti e i relativi voti saranno archiviati e non sarà più possibile aggiungere nulla)';
$string['newroundsuccess'] = 'Hai creato correttamente nuovo gruppo di domande';
$string['nextround'] = 'Gruppo di domande successivo';
$string['noquestions'] = 'Nessun contenuto';
$string['notapproved'] = '<b>Questo contenuto non è stato ancora approvato.<br></b>';
$string['notavailable'] = '<b>Non disponibile al momento!<br></b>';
$string['pluginadministration'] = 'Amministrazione Hot question';
$string['pluginname'] = 'Hot Question';
$string['postbutton'] = 'Clicca per inserire';
$string['postmaxgrade'] = 'Domande per la valutazione massima';
$string['postmaxgrade_help'] = 'Numero di domande per ottenere la valutazione massima.

Questo è nominalmente il numero di domande, ma il valore assegnato all\'utente potrebbe essere aumentato dal coefficiente dei voti ricevuti (domande con maggiori voti valgono di più) e votando domande di altri (un utente potrebbe aumentare la valutazione partecipando alla votazione delle domande degli altri studenti).';
$string['previousround'] = 'Gruppo di domande precedente';
$string['privacy:metadata:hotquestion_questions'] = 'Informazioni degli elementi di un utente per una specifica attività Hot Question';
$string['privacy:metadata:hotquestion_questions:anonymous'] = 'Elemento inserito in anonimo o meno';
$string['privacy:metadata:hotquestion_questions:approved'] = 'Approvazione della domanda per la visualizzazione';
$string['privacy:metadata:hotquestion_questions:content'] = 'Contenuto della domanda';
$string['privacy:metadata:hotquestion_questions:hotquestion'] = 'ID dell\'attività Ho Question in cui il contenuto è stato inserito.';
$string['privacy:metadata:hotquestion_questions:id'] = 'ID dell\'elemento';
$string['privacy:metadata:hotquestion_questions:time'] = 'Orario in cui la domanda è stata inserita.';
$string['privacy:metadata:hotquestion_questions:tpriority'] = 'Priorità data dal docente all\'elemento.';
$string['privacy:metadata:hotquestion_questions:userid'] = 'ID dell\'utente che ha inserito questo elemento.';
$string['privacy:metadata:hotquestion_votes'] = 'Informazioni sui voti alle domande.';
$string['privacy:metadata:hotquestion_votes:id'] = 'ID dell\'elemento.';
$string['privacy:metadata:hotquestion_votes:question'] = 'ID dell\'elemento per questo voto.';
$string['privacy:metadata:hotquestion_votes:voter'] = 'ID dell\'utente che ha votato.';
$string['question'] = 'Domanda';
$string['questionlabel'] = 'Etichetta della colonna delle domande';
$string['questionlabel_descr'] = 'Inserisci l\'etichetta di default per la colonna delle domande.';
$string['questionremove'] = 'Rimuovi';
$string['questionremovesuccess'] = 'Hai rimosso correttamente la domanda.';
$string['questions'] = 'Domande';
$string['questionsubmitted'] = 'La tua domanda è stata aggiunta correttamente.';
$string['rawgrade'] = 'Valutazione grezza {$a->rawgrade} / {$a->max}';
$string['removedround'] = 'Hai rimosso correttamente il gruppo di domande.';
$string['removelabel'] = 'Etichetta della colonna di rimozione';
$string['removelabel_descr'] = 'Inserisci l\'etichetta di default per la colonna di rimozione.';
$string['removeround'] = 'Rimuovi questo gruppo di domande';
$string['removevote'] = 'Rimuovi il mio voto';
$string['requireapproval'] = 'Approvazione richiesta';
$string['requireapproval_descr'] = 'Se abilitato, le domande dovranno essere se approvate prima di essere visibili a tutti.';
$string['requireapproval_help'] = 'Se abilitato, le domande dovranno essere se approvate prima di essere visibili a tutti.';
$string['resethotquestion'] = 'Elimina tutte le domande e i voti';
$string['returnto'] = 'Torna a {$a}';
$string['round'] = 'Gruppo di domande {$a}';
$string['showrecentactivity'] = 'Mostra attività recenti';
$string['showrecentactivityconfig'] = 'Tutti vedranno le notifiche nel report delle attività recenti';
$string['teacherpriority'] = 'Piorità';
$string['teacherprioritylabel'] = 'Etichetta colonna della priorità';
$string['teacherprioritylabel_descr'] = 'Inserisci l\'etichetta di default per la colonna della priorità.';
$string['teacherpriorityvisibility'] = 'Visibilità colonna della priorità del docente';
$string['teacherpriorityvisibility_descr'] = 'Se abilitato, la colonna della priorità del docente sarà visualizzata, altrimenti sarà nascosta.';
$string['teacherpriorityvisibility_help'] = 'Se abilitato, la colonna della priorità del docente sarà visualizzata';
$string['time'] = 'Orario';
$string['totalcomments'] = 'Commenti totali';
$string['unapprovedquestionhide'] = 'Nascondi domande non approvate';
$string['unapprovedquestionnotset'] = 'Non impostato';
$string['unapprovedquestionsee'] = 'Mostra domande non approvate';
$string['unapprovedquestionvisibility'] = 'Visibilità domande non approvate';
$string['userid'] = 'Userid';
$string['valueinterror'] = 'Il coefficiente deve essere un numero intero positivo';
$string['viewaftertimeclose'] = 'Visualizzazione dopo la data di chiusura';
$string['viewaftertimeclose_help'] = 'Se abilitato, gli studenti potranno vedere, senza possibilità di modifica, le domande e i voti anche dopo la data di chiusura. In caso contrario le domande saranno tutte nascoste.';
$string['viewallentries'] = '{$a->ucount} utenti hanno inserito {$a->qcount} domanda(e).';
$string['viewallhotquestions'] = 'Visualizza tutte le Hot Question';
$string['viewentries'] = 'Partecipazione per gruppo corrente';
$string['viewgrades'] = 'Vedi valutazioni';
$string['vote'] = 'Vota';
$string['xofn'] = 'di';
