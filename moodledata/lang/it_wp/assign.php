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
 * Strings for component 'assign', language 'it_wp', version '4.1'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowsubmissionsfromdate_help'] = 'Impedisce ai corsisti di consegnare il compito prima della data di inizio consegne.';
$string['assign:revealidentities'] = 'Rivelare l\'identità dei corsisti';
$string['assign:viewblinddetails'] = 'Visualizzare l\'identità dei corsisti durante la valutazione cieca';
$string['attemptreopenmethod_help'] = 'Imposta la modalità di riapertura dei tentativi di consegna. Opzioni disponibili:
<ul><li>Mai - Il tentativo di consegna non potrà essere riaperto.</li><li>Manualmente - Il tentativo di consegna potrà essere riaperto da un trainer.</li><li>Automaticamente fino al superamento - Il tentativo di consegna verrà riaperto automaticamente fino al raggiungimento della sufficienza impostata per il compito nel Registro valutatore. (Sezione Impostazione registro valutatore).</li></ul>';
$string['blindmarking_help'] = 'La valutazione cieca nasconde l\'identità dei corsisti ai valutatori. L\'impostazione Valutazione cieca sarà bloccata non appena sarà presente una consegna o una valutazione del compito.';
$string['completionsubmit'] = 'Il corsista deve consegnare per completare l\'attività';
$string['confirmbatchgradingoperation'] = 'Sei sicuro di eseguire {$a->operation} per {$a->count} corsisti?';
$string['gradeoutofhelp_help'] = 'Inserire valutazione da assegnare al compito del corsista. E\' possibile usare cifre decimali.';
$string['gradestudent'] = 'Valutazione corsista: (id={$a->id}, Nome={$a->fullname}).';
$string['gradingstudent'] = 'Valutazione corsista';
$string['grantextensionforusers'] = 'Concedi proroga a {$a} corsisti';
$string['hidegrader'] = 'Nascondi ai corsisti l\'identità del valutatore';
$string['hidegrader_help'] = 'I corsisiti non potranno visualizzare chi ha valutato la loro consegna.';
$string['inactiveoverridehelp'] = '* I corsisti non appartengono al gruppo corretto o non hanno un ruolo idoneo per consegnare il compito.';
$string['indicator:cognitivedepth_help'] = 'L\'indicatore è basato sulla profondità cognitiva toccata dal corsista svolgendo attività \'compito\'.';
$string['indicator:socialbreadth_help'] = 'L\'indicatore è basato sulla dimensione sociale raggiunta dal corsista svolgendo attività \'compito\'.';
$string['locksubmissionforstudent'] = 'Blocca le consegne del corsista (id={$a->id}, fullname={$a->fullname})';
$string['markingallocation_help'] = 'Consente di assegnare valutatori a singoli corsisti. Richiede l\'attivazione del flusso di lavoro della valutazione.';
$string['markingworkflow_help'] = 'Le valutazioni seguiranno un flusso di lavoro prima di essere rilasciate agi corsisti, consentendo di valutare in diversi cicli e rilasciare le valutazioni a tutti i corsisti in una sola volta.';
$string['markingworkflowstate_help'] = 'I possibili stati del flusso di lavoro, in funzione dei privilegi posseduti, possono essere i seguenti:

* Non valutata - la valutazione non è iniziata
* In valutazione - la valutazione è iniziata ma non è ancora terminata
* Valutazione completata - la valutazione è stata terminata ma il valutatore potrebbe volerla rivedere
* In revisione - la valutazione è in carico al trainer responsabile per il controllo di qualità
* Pronta per il rilascio - il trainer responsabile ha validato la valutazione ma non le ha ancora rese disponibili
* Rilasciata - il corsista può visualizzare la valutazione/feedback.';
$string['maxattempts_help'] = 'Il numero massimo di tentativi consegna di un corsista. Raggiunto il numero massimo impostato non sarà più possibile riaprire i tentativi.';
$string['modulename_help'] = 'Il modulo di attività compito consente al trainer di valutare l\'apprendimento dei corsisti assegnando loro un lavoro che potrà poi valutare e commentare.

I corsisti possono consegnare qualsiasi tipo di contenuto digitale, come ad esempio documenti di testo, immagini, clip audio e clip video. Il compito può anche prevedere la compilazione online di un testo sia in alternativa sia in aggiunta al caricamento di file. E\' anche possibile usare il compito per attività da svolgere al di fuori di Moodle, dove non sono richiesti contenuti digitali. I corsisti possono consegnare i lavori individualmente oppure come membri di un gruppo.

I trainer possono commentare le consegne dei corsisti e caricare file a loro volta, ad esempio i compiti corretti e valutati o file audio di commento. I compiti possono essere valutati utilizzando sia voti numerici, sia metodi di valutazione avanzata tipo rubric. Le valutazioni vengono memorizzate nel registro valutatore';
$string['privacy:metadata:assignmessageexplanation'] = 'Messaggi inviati ai corsisti attraverso il sistema di messaggistica.';
$string['removesubmissionconfirmforstudent'] = 'Sei sicuro di eliminare i dati della consegna del corsista {$a}?';
$string['removesubmissionforstudent'] = 'Eliminazione consegna del corsista  (id={$a->id}, nome e cognome={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'L\'opzione "Automaticamente fino al superamento" non è compatibile con la valutazione cieca poiché le valutazioni non verranno trasferite nel registro valutatore finché non sarà stata rivelata l\'identità dei corsisti.';
$string['requireallteammemberssubmit_help'] = 'Tutti i corsisti appartenenti al gruppo dovranno premere il pulsante consegna affinché la consegna venga presa in considerazione. Se l\'impostazione è disabilitata, sarà considerata la consegna di qualsiasi membro del gruppo.';
$string['requiresubmissionstatement'] = 'Obbliga i corsisti ad accettare la dichiarazione sulla consegna';
$string['requiresubmissionstatement_help'] = 'I corsisti saranno obbligati ad accettare la dichiarazione sulla consegna per tutte le consegne del compito.';
$string['revealidentities'] = 'Rivela l\'identità dei corsisiti';
$string['revealidentitiesconfirm'] = 'Sei sicuro di rivelare l\'identità dei corsisti? L\'operazione non può essere annullata. Dopo aver rivelato l\'identità dei corsisti, le valutazioni saranno trasferite nel registro valutatore.';
$string['reverttodraftforstudent'] = 'Riporta le consegne allo stato di bozza per il corsista (id={$a->id}, nome={$a->fullname}).';
$string['sendlatenotifications_help'] = 'I valutatori (di solito i trainer) riceveranno una notifica tutte le volte che un corsista avrà consegnato un compito in ritardo. I metodi di notifica sono configurabili.';
$string['sendnotifications_help'] = 'I valutatori (di solito i trainer) riceveranno una notifica tutte le volte che un corsista avrà consegnato un compito, sia che la consegna avvenga in anticipo, sia nelle date previste, sia in ritardo. I metodi di notifica sono configurabili.';
$string['sendstudentnotifications'] = 'Notifica ai corsisti';
$string['sendstudentnotifications_help'] = 'I corsisiti riceveranno notifiche delle modifiche alle valutazioni o dei feedback. Se è abilitato il flusso di valutazione, le notifiche saranno inviate fino a quando la valutazione risulterà "Rilasciata".';
$string['sendstudentnotificationsdefault'] = 'Impostazione di default per "Notifica ai corsisti"';
$string['sendstudentnotificationsdefault_help'] = 'Imposta il valore di default per la casella di spunta "Notifica ai corsisti" presente nella pagina di valutazione.';
$string['sendsubmissionreceipts'] = 'Invia ricevuta di consegna ai corsisiti';
$string['sendsubmissionreceipts_help'] = 'Consente di inviare ai corsisiti una ricevuta di consegna. La ricevuta sarà invita ad ogni consegna avvenuta correttamente.';
$string['studentnotificationworkflowstateerror'] = 'Il flusso di lavoro deve avere la valutazione con lo stato di \'Rilasciata\' affinché siano inviate le notifiche ai corsisti.';
$string['submissiondrafts'] = 'I corsisti devono premere il pulsante di consegna';
$string['submissiondrafts_help'] = 'L\'impostazione obbliga i corsisti a premere il pulsante di consegna per confermare che la consegna del  proprio compito è definitiva. In questo modo i corsisiti possono mantenere il compito in bozza prima di consegnarlo definitivamente. Cambiare l\'impostazione da "No" a "Si" dopo la consegna dei corsisiti  renderà definitive le consegne già effettuate.';
$string['submissioneditable'] = 'Il corsista può modificare la consegna';
$string['submissionlog'] = 'Corsista: {$a->fullname}, Stato: {$a->status}';
$string['submissionnoteditable'] = 'I corsisti non possono modificare la consegna';
$string['submissionstatement_help'] = 'Il testo della dichiarazione sulla consegna che dovrà essere accertato dal corsista prima di consegnare il compito.';
$string['submissionstatementteamsubmission_help'] = 'Il testo della dichiarazione sulla consegna che dovrà essere accertato dal corsista prima di consegnare il compito del proprio gruppo.';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Il testo della dichiarazione sulla consegna che dovrà essere accertato dal corsista prima di consegnare il compito come membro di un gruppo.';
$string['teamsubmission_help'] = 'Consente la suddivisone dei corsisti in gruppi secondo i gruppi disponibili oppure in base ad un raggruppamento personalizzato. Una consegna di gruppo sarà condivisa tra tutti gli appartenenti al gruppo e ciascuno membro potrà visualizzare le modifiche apportate alla consegna dagli altri membri del gruppo.';
$string['teamsubmissiongroupingid_help'] = 'Il raggruppamento da utilizzare per circoscrivere i gruppi di corsisiti. Se non impostato, verranno utilizzati i gruppi disponibili.';
$string['unlocksubmissionforstudent'] = 'Consenti consegna del corsista (id={$a->id}, fullname={$a->fullname}).';
$string['usersnone'] = 'Nessuno corsista può accedere al compito.';
$string['viewgradingformforstudent'] = 'Visualizza pagina di valutazione del corsista (id={$a->id}, fullname={$a->fullname}).';
$string['viewrevealidentitiesconfirm'] = 'Visualizza pagina di conferma per rivelare l\'identità dei corsisti';
