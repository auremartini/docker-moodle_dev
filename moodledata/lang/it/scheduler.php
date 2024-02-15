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
 * Strings for component 'scheduler', language 'it', version '4.1'.
 *
 * @package     scheduler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Azione';
$string['actions'] = 'Azioni';
$string['addappointment'] = 'Aggiungi studente';
$string['addcommands'] = 'Aggiungi fasce orarie';
$string['addondays'] = 'Aggiungi appuntamenti su';
$string['addsession'] = 'Aggiungi fasce orarie ripetute';
$string['addsingleslot'] = 'Aggiungi singola fascia oraria';
$string['addslot'] = 'È possibile aggiungere date aggiuntive in qualsiasi momento.';
$string['addstudenttogroup'] = 'Aggiunti questo studente all\'appuntamento di gruppo';
$string['allappointments'] = 'Tutti gli appuntamenti';
$string['allononepage'] = 'Tutte le fasce orarie su una pagina';
$string['allowgroup'] = 'Fascia oraria per 1 solo - clicca per cambiare';
$string['alreadyappointed'] = 'Impossibile prenotare. Fascia oraria completa.';
$string['appointagroup_help'] = 'Scegliere se si desidera rendere l\'appuntamento unico, o per un intero gruppo.';
$string['appointfor'] = 'Prenota per';
$string['appointforgroup'] = 'Prenota per: {$a}';
$string['appointingstudent'] = 'Appuntamento per fascia oraria';
$string['appointingstudentinnew'] = 'Appuntamento per un nuova fascia oraria';
$string['appointment'] = 'Appuntamento';
$string['appointmentmode'] = 'Imposta modalità di appuntamento';
$string['appointmentmode_help'] = '<p>Ci sono modalità in cui gli appuntamenti possono essere selezionati. </p>
<p><ul>
<li><strong>"<emph>n</emph> appuntamenti in questa agenda":</strong> Lo studente può prenotare solo un numero fisso di appuntamenti in questa attività. Anche se il docente lo contrassegna come "visto", non sarà permesso di prenotare ulteriori appuntamenti. L\'unico modo per ripristinare la capacità di uno studente di prenotare è quello di eliminare gli altri.</li>
<li><strong>"<emph>n</emph> appuntamenti nella fascia oraria":</strong> Lo studente può prenotare un numero fisso di appuntamenti. Una volta che l\'appuntamento è finito e il docente ha segnato lo studente come "visto", lo studente può prenotare ulteriori appuntamenti. Tuttavia lo studente è limitato ad un <em> n° </em> "aperto" (invisibile) fasce orarie in un dato momento.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Appuntamento {$a}';
$string['appointmentnote'] = 'Note per l\'ppuntamento (visibile allo studente)';
$string['appointments'] = 'Appuntamenti';
$string['appointmentsgrouped'] = 'Appuntamenti raggruppati per fascia oraria';
$string['appointmentsummary'] = 'Appuntamento il {$a->startdate} dalle {$a->starttime} alle {$a->endtime} con il {$a->teacher}';
$string['appointsolo'] = 'Solo io';
$string['appointsomeone'] = 'Aggiungi appuntamento';
$string['areaappointmentnote'] = 'File nelle Note appuntamento';
$string['areaslotnote'] = 'File nelle Note della fascia oraria';
$string['areateachernote'] = 'File nelle Note confidenziali';
$string['attendable'] = 'Appuntamenti possibili';
$string['attendablelbl'] = 'Candidati totali per agenda';
$string['attended'] = 'Appuntamenti presenziati';
$string['attendedlbl'] = 'Numero di studenti che hanno presenziato';
$string['attendedslots'] = 'Fasce orarie presenziate';
$string['availableslots'] = 'Orari disponibili';
$string['availableslotsall'] = 'Tutte le fasce orarie';
$string['availableslotsnotowned'] = 'Non di proprietà';
$string['availableslotsowned'] = 'Di tua proprietà';
$string['bookaslot'] = 'Prenota';
$string['bookingdetails'] = 'Dettagli prenotazione';
$string['bookingformoptions'] = 'Modulo di prenotazione e dati forniti dagli studenti';
$string['bookinginstructions'] = 'Istruzioni per la prenotazione';
$string['bookinginstructions_help'] = 'Questo testo verrà visualizzato agli studenti prima di effettuare una prenotazione. Ad esempio, può indicare agli studenti come compilare il campo del messaggio opzionale o quali file caricare.';
$string['bookslot'] = 'Prenota';
$string['bookwithteacher'] = 'Docente';
$string['bookwithteacher_help'] = 'Scegli un docente per l\'appuntamento.';
$string['break'] = 'Intervallo tra fasce orarie';
$string['breaknotnegative'] = 'La durata dell\'Intervallo non deve essere negativa';
$string['canbook1appointment'] = 'L\'agenda consente di prenotare ulteriori appuntamenti.';
$string['canbooknappointments'] = 'L\'agenda consente di prenotare {$a} appuntamenti.';
$string['canbooknofurtherappointments'] = 'Non è possibile prenotare ulteriori appuntamenti in questa agenda.';
$string['canbooksingleappointment'] = 'È possibile prenotare un appuntamento in questa agenda.';
$string['canbookunlimitedappointments'] = 'È possibile prenotare qualsiasi numero di appuntamenti in questa agenda.';
$string['cancelbooking'] = 'Elimina prenotazione';
$string['chooseexisting'] = 'Scegli tra quelli esistenti';
$string['choosingslotstart'] = 'Scelta dell\'ora di inizio';
$string['choosingslotstart_help'] = 'Cambiare (o scegliere) l\\ora di inizio dell\'appuntamento. Se questo appuntamento è in conflitto con altri in altre fasce orarie, verrà chiesto
se questa fascia oraria sostituisce tutti gli appuntamenti in conflitto. Nota che i nuovi parametri di fascia oraria sostituiranno tutte le precedenti
impostazioni.';
$string['comments'] = 'Commenti';
$string['complete'] = 'Prenotato';
$string['confirmbooking'] = 'Conferma prenotazione';
$string['confirmdelete-all'] = 'Saranno eliminate <b>tutte</b> le fasce orarie in questa agenda. L\'eliminazione non può essere annullata. Continuare?';
$string['confirmdelete-mine'] = 'Saranno eliminate tutte le fasce orarie in questa agenda. L\'eliminazione non può essere annullata. Continuare?';
$string['confirmdelete-myunused'] = 'Saranno eliminate tutte le fasce orarie non utilizzate in questa agenda. L\'eliminazione non può essere annullata. Continuare?';
$string['confirmdelete-one'] = 'Eliminare fascia oraria?';
$string['confirmdelete-selected'] = 'Saranno eliminate tutte le fasce orarie selezionate in questa agenda. L\'eliminazione non può essere annullata. Continuare?';
$string['confirmdelete-unused'] = 'Saranno eliminate tutte le fasce orarie non selezionate in questa agenda. L\'eliminazione non può essere annullata. Continuare?';
$string['confirmrevoke'] = 'Revocare tutti gli appuntamenti nella fascia oraria corrente?';
$string['conflictingslots'] = 'La fascia oraria su {$a} non può essere creata a causa di altre contrastanti:';
$string['conflictlocal'] = '{$a->datetime} ({$a->duration} minuti) in questa agenda';
$string['conflictremote'] = '{$a->datetime} ({$a->duration} minuti) nel corso {$a->courseshortname}, agenda {$a->schedulername}';
$string['contentformat'] = 'Formato';
$string['contentformat_help'] = '<p>Ci sono 3 opzioni di base per il formato di esportazione,
      differiscono nel modo in cui fasce orarie gestiscono diversi appuntamenti.
     <dl>
         <dt>1 linea per fascia oraria</dt>:
         <dd>
            Il file di output conterrà una riga per ogni fascia oraria. Se una fascia oraria ha più appuntamenti, invece del nome dello studente(i) \\, ecc, verranno visualizzati indicatori "(multipli)".
         </dd>
         <dt>1 linea per appuntamento</dt>:
         <dd>
             Il file di output conterrà una riga per ogni appuntamento. Se una fascia oraria contiene più appuntamenti, allora apparirà più volte nella lista (con ripetuti i propri dati).
         </dd>
         <dt>Appuntamenti raggruppati per fascia oraria</dt>:
         <dd>
              Tutti gli appuntamenti di una fascia oraria sono raggruppati insieme, preceduti da una riga di intestazione che indica la fascia oraria in questione. Questo potrebbe non funzionare bene con il formato del file di output CSV, dove il numero di colonne non è costante.
         </dd>
    </dl>
    È possibile visualizzare l\'anteprima di queste opzioni utilizzando il pulsante "Anteprima".</p>';
$string['copytomyself'] = 'Invia una copia anche a me';
$string['course'] = 'Corso';
$string['createexport'] = 'Crea file di esportazione';
$string['csvfieldseparator'] = 'Separatore di campo CSV';
$string['csvformat'] = 'CSV';
$string['cumulatedduration'] = 'Durata degli appuntamenti';
$string['datatoinclude'] = 'Dati da includere';
$string['datatoinclude_help'] = 'Seleziona i campi che da includere nell\'esportazione. Ognuno di questi apparirà in una colonna del file di output.';
$string['date'] = 'Data';
$string['datelist'] = 'Panoramica';
$string['defaultslotduration'] = 'Durata di default della fascia oraria';
$string['defaultslotduration_help'] = 'La durata predefinita (in minuti) per le fasce orarie';
$string['deleteallslots'] = 'Elimina tutte le fasce orarie';
$string['deleteallunusedslots'] = 'Elimina le fasce orarie non utilizzate';
$string['deletecommands'] = 'Elimina le fasce orarie';
$string['deletedconflictingslots'] = 'Per la fascia oraria {$a} sono state eliminate le seguenti fasce orarie in conflitto:';
$string['deletemyslots'] = 'Elimina tutte le mie fasce orarie';
$string['deleteonsave'] = 'Elimina questo appuntamento (quando si salva il modulo)';
$string['deleteselection'] = 'Elimina le fasce orarie selezionae';
$string['deletetheseslots'] = 'Elimina fasce orarie';
$string['deleteunusedslots'] = 'Elimina le mie fasce orarie non usate';
$string['department'] = 'Da dove?';
$string['disengage'] = 'Elimina il mio appuntamento';
$string['displayfrom'] = 'Visualizza fasce orarie per studenti dal';
$string['distributetoslot'] = 'Distribuisci a tutto il gruppo';
$string['divide'] = 'Dividere in fasce orarie?';
$string['duration'] = 'Durata';
$string['durationrange'] = 'La durata della fascia oraria deve essere compresa tra {$a->min} e {$a->max} minuti.';
$string['editbooking'] = 'Modifica prenotazione';
$string['email_applied_html'] = '<p>Un appuntamento è stato applicato per il {$a->date} alle {$a->time},<br/>
dallo studente <a href="{$a->attendee_url}">{$a->attendee}</a> per il corso:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

utilizzando l\'agenda dal titolo "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" sul sito: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Un appuntamento è stato applicato per il {$a->date} alle {$a->time},
dallo studente {$a->attendee} per il corso:

{$a->course_short}: {$a->course}

utilizzando l\'agenda dal titolo "{$a->module}" sul sito: {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: Nuovo appuntamento';
$string['email_cancelled_html'] = '<p>Il tuo appuntamento del <strong>{$a->date}</strong> alle <strong>{$a->time}</strong>,<br/>
con lo studente <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> per il corso:</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>nell\'agenda dal titolo "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" sul sito: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">è stato eliminato o spostato.</span></strong>.</p>';
$string['email_cancelled_plain'] = 'L\'appuntamento del {$a->date} alle {$a->time},
con lo studente {$a->attendee} per il corso:

{$a->course_short} : {$a->course}

nell\'agenda dal titolo "{$a->module}" sul sito: {$a->site}

è stato eliminato o spostato.';
$string['email_cancelled_subject'] = '{$a->course_short}: Appuntamento eliminato o spostato da uno studente';
$string['email_invite_html'] = '<p>Scegliere una fascia oraria di tempo il prima possibile, nel corso:</p> <p>{$a->scheduler_url}</p>';
$string['email_invite_subject'] = 'Invito: {$a->module}';
$string['email_invitereminder_html'] = '<p>Questo è solo un promemoria perchè non hai ancora impostato un\'appuntamento. Scegliere una fascia oraria di tempo il prima possibile, nel corso:</p><p>{$a->scheduler_url}</p>';
$string['email_invitereminder_subject'] = 'Promemoria: {$a->module}';
$string['email_reminder_html'] = '<p>Hai un appuntamento imminente il <strong>{$a->date}</strong>
dalle <strong>{$a->time}</strong> alle <strong>{$a->endtime}</strong><br/>
con <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p>

<p>Luogo: <strong>{$a->location}</strong></p>';
$string['email_reminder_plain'] = 'Hai un appuntamento imminente
il {$a->date} dalle {$a->time} alle {$a->endtime}
con {$a->attendant}.

Luogo: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Promemoria di appuntamento';
$string['email_teachercancelled_html'] = '<p>Il tuo appuntamento del <strong>{$a->date}</strong> alle <strong>{$a->time} </strong>,<br/>
con {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> for course:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>nell\'agenda dal titolo "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" sul sito: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">è stato eliminato</span></strong>. Si prega di inserire una nuova fascia oraria.</p>';
$string['email_teachercancelled_plain'] = 'Il tuo appuntamento del {$a->date} alle {$a->time},
con {$a->staffrole} {$a->attendant} per il corso:

{$a->course_short}: {$a->course}

nell\'agenda dal titolo "{$a->module}" sul sito: {$a->site}

è stato eliminato. Si prega di inserire una nuova fascia oraria.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: Appuntamento annullato dal docente';
$string['emailreminder'] = 'Invia un prememoria';
$string['emailreminderondate'] = 'Invia un prememoria:';
$string['end'] = 'Fine';
$string['enddate'] = 'Fino a';
$string['event_appointmentlistviewed'] = 'Lista Agenda appuntamenti visto';
$string['event_bookingadded'] = 'Prenotazione Agenda aggiunta';
$string['event_bookingformviewed'] = 'Prenotazione Agenda vista';
$string['event_bookingremoved'] = 'Prenotazione Agenda eliminata';
$string['event_slotadded'] = 'Fascia oraria Agenda aggiunta';
$string['event_slotdeleted'] = 'Fascia oraria Agenda eliminato';
$string['everyone'] = 'Tutti';
$string['excelformat'] = 'Excel';
$string['exclusive'] = 'Esclusivo';
$string['exclusivity'] = 'Esclusività';
$string['exclusivity_help'] = '<p>È possibile impostare un limite al numero di studenti che si possono applicare per una determinata fascia oraria. </p>
<p>Impostando un limite di 1 (default) vuol dire che la fascia oraria è esclusiva di un singolo studente.</p>
<p>Impostando un limite di, es., 3  vuol dire che possono prenotarsi fino a 3 studenti nella fascia oraria.</p>
<p>Se disabilitato, il numero di studenti che possono prenotare nella fascia oraria è illimitato; non potrà mai essere considerato "pieno".</p>';
$string['exclusivityoverload'] = 'La fascia oraria {$a} ha designato più studenti di quanto consentito da questa impostazione.';
$string['exclusivitypositive'] = 'Il numero di studenti per fascia oraria deve essere 1 o più.';
$string['explaingeneralconfig'] = 'Queste opzioni possono essere impostate solo a livello di sito e si applicheranno a tutte le agende di questa installazione di Moodle.';
$string['export'] = 'Esporta';
$string['exporthdr'] = 'Esporta fasce orarie e appuntamenti';
$string['exporttimerange'] = 'Intervallo di tempo';
$string['exporttimerangeall'] = 'Fasce orarie future e passate';
$string['exporttimerangefuture'] = 'Solo fasce orarie future';
$string['exporttimerangepast'] = 'Solo fasce orarie passate';
$string['field-appointmentnote'] = 'Note appuntamento (per studente)';
$string['field-attended'] = 'Partecipato';
$string['field-date'] = 'Data';
$string['field-endtime'] = 'Ora fine';
$string['field-filecount'] = 'Numero di file caricati';
$string['field-grade'] = 'Valutazione';
$string['field-groupsmulti'] = 'Gruppi (diverse colonne)';
$string['field-groupssingle'] = 'Gruppi';
$string['field-groupssingle-label'] = 'Gruppi (una colonna)';
$string['field-location'] = 'Luogo';
$string['field-maxstudents'] = 'Numero massimo di studenti';
$string['field-slotnotes'] = 'Note fascia oraria';
$string['field-starttime'] = 'Ora inizio';
$string['field-studentemail'] = 'E-mail studente';
$string['field-studentfirstname'] = 'Nome studente';
$string['field-studentfullname'] = 'Nome completo studente';
$string['field-studentidnumber'] = 'Codice identificativo studente';
$string['field-studentlastname'] = 'Cognome studente';
$string['field-studentnote'] = 'Messaggio dello studente';
$string['field-studentusername'] = 'Username studente';
$string['field-teachernote'] = 'Nota confidenziale (solo docente)';
$string['fileformat'] = 'Formato File';
$string['fileformat_help'] = 'I seguenti formati di file sono disponibili:
     <ul>
          <li>Comma Separated Value (CSV) file di testo. Il separatore di campo, di default è la virgola, può essere scelto altro.
                 I file CSV possono essere aperti nella maggior parte delle applicazioni spreadshet;</li>
          <li>Microsoft Excel file (formato Excel 2007);</li>
          <li>Open Document spreadsheets (ODS);</li>
          <li>HTML format - una pagina web che visualizza la tabella di output,
                 che può essere stampata utilizzando la funzione di stampa del browser ;</li>
          <li>Documenti PDF. Si può scegliere tra Orizzontale e Verticale.</li>
     </ul>';
$string['finalgrade'] = 'Valutazione finale';
$string['firstslotavailable'] = 'La prima fascia oraria sarà aperta: {$a}';
$string['forbidgroup'] = 'Fascia oraria di gruppo - clicca per cambiare';
$string['forcewhenoverlap'] = 'Forza se sovrapposto';
$string['forcewhenoverlap_help'] = '<h3>Forzare la creazione di una fascia oraria che si sovrappone ad un altra</h3>
<p>Questo impostazione determina la gestione di una nuova fascia oraria che si sovrappone ad un altra.</p>
<p>Se abilitato, la nuova fascia oraria eliminerà la vecchia.</p>
<p>Se disabilitato, a nuova fascia oraria <em>non</em> sarà creata e rimarrà quella vecchia.</p>';
$string['forcewhenoverlap_link'] = 'mod/scheduler/conflict';
$string['forcourses'] = 'Scegli gli studenti nei corsi';
$string['friday'] = 'Venerdì';
$string['generalconfig'] = 'Configurazione generale';
$string['grade'] = 'Valutazione';
$string['gradeingradebook'] = 'Valutazione nel registro';
$string['gradingstrategy'] = 'Metodo di valutazione';
$string['gradingstrategy_help'] = 'In un\'agenda dove gli studenti possono avere diversi appuntamenti, selezionare il metodo di valutazione aggregato.
    Il registro può mostrare <ul><li>voto medio o</li><li>voto più alto</li></ul> che lo studente ha raggiunto.';
$string['group'] = 'gruppo';
$string['groupbookings'] = 'Prenotazione in gruppi';
$string['groupbookings_help'] = 'Consentire agli studenti di prenotare 1 fascia oraria per tutti i membri del loro gruppo.<br>
(<b>Nota</b> - questo è separato dalla impostazione "modalità di gruppo", che controlla le fasce orarie che uno studente può vedere.)';
$string['groupbreakdown'] = 'Per dimensione del gruppo';
$string['groupmodeyourgroups'] = 'Modalità gruppo: {$a->groupmode}. Solo studenti in {$a->grouplist} possono prenotare appuntamenti con te.';
$string['groupmodeyourgroupsempty'] = 'Modalità gruppo: {$a->groupmode}. Se non fai parte di nessun gruppo, gli studenti non possono prenotare appuntamenti con te';
$string['groupscheduling'] = 'Abilita Schedulazione per gruppo';
$string['groupscheduling_desc'] = 'Permette di abilitare interi gruppi in un\'unica schedulazione. Permette ad interi gruppi di essere schedulati in una sola volta.
 (A parte l\'opzione globale, l\'impostazione "Prenotazione in gruppi" deve essere abilitato nel rispettivo caso dell\'agenda.)';
$string['groupsession'] = 'Sessione di gruppo';
$string['groupsize'] = 'Dimensione del gruppo';
$string['guardtime'] = 'Scadenza per cambio prenotazione';
$string['guardtime_help'] = 'Un blocco impedisce agli studenti di cambiare la loro prenotazione poco prima dell\'appuntamento.
<p>Se abilitato e impostato, per esempio, 2 ore, poi studenti saranno in grado di prenotare una fascia oraria che inizia tra meno di 2 ore (da ora),
e saranno in grado di <b>eliminare</b> un appuntamento se iniziare in meno di 2 ore.</p>';
$string['guestscantdoanything'] = 'Gli ospiti possono fare nulla qui.';
$string['howtoaddstudents'] = 'Per aggiungere studenti di un\'agenda in ambito globale, utilizzare l\'impostazione per il ruolo nel modulo.<br/>Si può anche utilizzare ruoli modulo per definire studenti frequentatori.';
$string['htmlformat'] = 'HTML';
$string['ignoreconflicts'] = 'Ignora conflitti di schedulazione';
$string['ignoreconflicts_help'] = 'Se selezionata, la fascia oraria sarà spostata all\'orario e data richiesti, anche se esistono altre fasce orarie nello stesso periodo. Questo può portare a una sovrapposizione di appuntamenti per alcuni docenti o studenti, quindi deve essere usato con cautela.';
$string['ignoreconflicts_link'] = 'mod/scheduler/conflict';
$string['includeemptyslots'] = 'Includi fasce orarie orarie vuote';
$string['includeslotsfor'] = 'Includi fasce orarie per';
$string['incourse'] = 'nel corso';
$string['introduction'] = 'Introduzione';
$string['isnonexclusive'] = 'Non esclusivo';
$string['landscape'] = 'Orizzontale';
$string['lengthbreakdown'] = 'Per durata fascia oraria';
$string['limited'] = 'Limitata ({$a} sinistra)';
$string['location'] = 'Luogo';
$string['location_help'] = 'Scrivere la posizione dove si svolgerà l\'appuntamento.';
$string['markasseennow'] = 'Aggiungi \'Ora\' la prenotazione ed imposta come \'Visto\\';
$string['markseen'] = 'Dopo aver visualizzato un appuntamento di uno studente si prega di contrassegnarli come "Visto" facendo clic sulla casella di controllo vicino alla loro immagine utente sopra.';
$string['maxgrade'] = 'Voto più alto';
$string['maxstudentlistsize'] = 'Lunghezza massima della lista degli studenti';
$string['maxstudentlistsize_desc'] = 'La lunghezza massima della lista degli studenti che hanno bisogno di prendere un appuntamento, come mostrato nella vista docente dell\'agenda. Se ci sono più studenti rispetto a questo, non sarà visualizzata nessuna lista.';
$string['maxstudentsperslot'] = 'Numero massimo di studenti per fascia oraria';
$string['maxstudentsperslot_desc'] = 'fasce orarie di gruppo / fasce orarie non esclusive possono avere al massimo questo numero di studenti. Nota, in aggiunta, l\'impostazione "illimitato" può sempre essere scelto per una fascia oraria.';
$string['meangrade'] = 'Voto medio';
$string['meetingwith'] = 'Incontro con il tuo';
$string['meetingwithplural'] = 'Incontro con il tuo';
$string['message'] = 'Messaggio';
$string['messagebody'] = 'Messaggio';
$string['messageprovider:bookingnotification'] = 'Notifica quando una prenotazione viene effettuata o eliminata';
$string['messageprovider:invitation'] = 'Invito per prenotare una fascia oraria';
$string['messageprovider:reminder'] = 'Promemoria dei prossimi appuntamenti';
$string['messagesent'] = 'Messaggio inviato a  {$a} destinatari';
$string['messagesubject'] = 'Oggetto';
$string['minutes'] = 'minuti';
$string['minutesperslot'] = 'minuti per fascia oraria';
$string['missingstudents'] = '{$a} Studenti devono ancora prenotarsi ad un appuntamento';
$string['missingstudentsmany'] = '{$a} Studenti devono ancora prendere un appuntamento. Nessun elenco viene visualizzato a causa delle dimensioni.';
$string['mixindivgroup'] = 'Mescola le prenotazioni individuali e di gruppo';
$string['mixindivgroup_desc'] = 'Laddove la pianificazione di gruppo è abilitata, consentire anche le prenotazioni individuali.';
$string['mode'] = 'Modalità';
$string['modeappointments'] = 'appuntamento(i)';
$string['modeintro'] = 'Studenti posso prenotare';
$string['modeoneatatime'] = 'Nella fascia oraria';
$string['modeoneonly'] = 'In questa agenda';
$string['modulename'] = 'Agenda';
$string['modulename_help'] = 'L\'attività Agenda aiuta ad organizzare gli appuntamenti con i tuoi studenti.

Il docente specifica la fascia oraria per gli incontri, gli studenti possono scegliere uno di loro su Moodle.
Il docente può registrare, comunque, la prenotazione all\'interno dell\'Agenda.

La pianificazione di gruppo è supportato, ovvero, ogni fascia oraria può ospitare diversi studenti, ed eventualmente è possibile programmare appuntamenti per interi gruppi contemporaneamente.';
$string['modulename_link'] = 'mod/scheduler/view';
$string['modulenameplural'] = 'Schedulatori';
$string['monday'] = 'Lunedì';
$string['multiple'] = '(multiplo)';
$string['myappointments'] = 'I miei appuntamenti';
$string['myself'] = 'Me stesso';
$string['name'] = 'Nome agenda';
$string['needteachers'] = 'Impossibile aggiungere fasce orarie se non ci sono docenti';
$string['negativerange'] = 'Non può esserci una differenza negativa';
$string['never'] = 'Mai';
$string['nfiles'] = '{$a} file';
$string['noappointments'] = 'Nessun appuntamento';
$string['noexistingstudents'] = 'Nessun studente disponibile per la pianificazione';
$string['nogroups'] = 'Nessun gruppo disponibile per la pianificazione.';
$string['noresults'] = 'Nessun risultato.';
$string['noschedulers'] = 'Non ci sono agende';
$string['noslots'] = 'Non ci sono date disponibili.';
$string['noslotsavailable'] = 'Non ci sono fasce orarie di prenotazioni disponibili';
$string['noslotsopennow'] = 'Non ci sono fasce orarie aperte per la prenotazione al momento.';
$string['nostudents'] = 'Nessuno studente';
$string['nostudenttobook'] = 'Nessuno studente ha prenotato';
$string['note'] = 'Valutazione';
$string['noteacherforslot'] = 'Nessun docente per le fasce orarie';
$string['noteachershere'] = 'Nessun docente disponibile';
$string['notenoughplaces'] = 'Spiacenti, non ci sono abbastanza appuntamenti liberi in questa fascia oraria.';
$string['notesrequired'] = 'È necessario inserire il testo in questo campo prima di prenotare una fascia oraria.';
$string['notifications'] = 'Notifiche';
$string['notifications_help'] = 'Quando questa opzione è abilitata, docenti e studenti riceveranno notifiche quando gli appuntamenti sono attivati o eliminati.';
$string['notseen'] = 'Non visto';
$string['now'] = 'Ora';
$string['occurrences'] = 'Presenze';
$string['odsformat'] = 'ODS';
$string['on'] = 'on';
$string['onedaybefore'] = '1 giorno prima della fascia oraria';
$string['onelineperappointment'] = 'Una linea per appuntamento';
$string['onelineperslot'] = 'Una linea per fascia oraria';
$string['oneslotadded'] = '1 fascia oraria aggiunto';
$string['oneslotdeleted'] = '1 fascia oraria eliminato';
$string['oneweekbefore'] = '1 settimana prima della fascia oraria';
$string['onthemorningofappointment'] = 'La mattina dell\'appuntamento';
$string['options'] = 'Opzioni';
$string['otherstudents'] = 'Altri partecipanti';
$string['outlineappointments'] = '{$a->attended} appuntamenti frequentati, {$a->upcoming} prossimi.';
$string['outlinegrade'] = 'Valutazione: {$a}.';
$string['overall'] = 'Generale';
$string['overlappings'] = 'Alcune fasce orarie si sovrappongono';
$string['pageperteacher'] = 'Una pagina per ogni {$a}';
$string['pagination'] = 'Impaginazione';
$string['pagination_help'] = 'Scegliere se l\'esportazione deve contenere una pagina separata per ogni docente. In Excel e in formato ODS, queste pagine corrispondono alle schede (fogli di lavoro) nella cartella di lavoro.';
$string['pdfformat'] = 'PDF';
$string['pdforientation'] = 'Orientazione pagina PDF';
$string['pluginadministration'] = 'Amministrazione Agenda';
$string['pluginname'] = 'Agenda';
$string['portrait'] = 'Verticale';
$string['preview'] = 'Precedente';
$string['previewlimited'] = '(Anteprima limitata a {$a} righe.)';
$string['privacy:metadata:filepurpose'] = 'File utilizzato nelle note per la fascia oraria o l\'appuntamento';
$string['privacy:metadata:scheduler_appointment'] = 'Rappresenta un appuntamento dello studente nella schedulazione';
$string['privacy:metadata:scheduler_appointment:appointmentnote'] = 'Nota per l\'insegnante (visibile allo studente)';
$string['privacy:metadata:scheduler_appointment:appointmentnoteformat'] = 'Formato della nota dell\'insegnante';
$string['privacy:metadata:scheduler_appointment:attended'] = 'Se l\'appuntamento è stato frequentato';
$string['privacy:metadata:scheduler_appointment:grade'] = 'Voto per l\'appuntamento';
$string['privacy:metadata:scheduler_appointment:studentid'] = 'Studente che ha prenotato l\'appuntamento';
$string['privacy:metadata:scheduler_appointment:studentnote'] = 'Nota dello studente';
$string['privacy:metadata:scheduler_appointment:studentnoteformat'] = 'Formato della nota dello studente';
$string['privacy:metadata:scheduler_appointment:teachernote'] = 'Nota dell\'insegnante (privato)';
$string['privacy:metadata:scheduler_appointment:teachernoteformat'] = 'Formato della nota privata dell\'insegnante';
$string['privacy:metadata:scheduler_slots'] = 'Rappresenta una fascia oraria in uno schedulatore';
$string['privacy:metadata:scheduler_slots:appointmentlocation'] = 'Luogo dell\'appuntamento';
$string['privacy:metadata:scheduler_slots:duration'] = 'Durata della fascia oraria in minuti';
$string['privacy:metadata:scheduler_slots:exclusivity'] = 'Numero massimo di studenti nella fascia oraria';
$string['privacy:metadata:scheduler_slots:notes'] = 'Note sulla fascia oraria';
$string['privacy:metadata:scheduler_slots:notesformat'] = 'Formato delle note';
$string['privacy:metadata:scheduler_slots:starttime'] = 'Ora di inizio della fascia oraria';
$string['privacy:metadata:scheduler_slots:teacherid'] = 'Docente associato alla fascia oraria';
$string['purgeunusedslots'] = 'Pulisci fasce orarie inutilizzate vecchie';
$string['recipients'] = 'Destinatari';
$string['registeredlbl'] = 'Studente(i) che ha prenotato, ma non accettato(i)';
$string['reminder'] = 'Promemoria';
$string['requireupload'] = 'Caricamento del file richiesto';
$string['resetappointments'] = 'Eliminare appuntamenti e valutazioni';
$string['resetslots'] = 'Eliminare fasce orarie';
$string['return'] = 'Torna al corso';
$string['revealteachernotes'] = 'Rivela le note degli insegnanti nelle esportazioni di privacy';
$string['revealteachernotes_desc'] = 'Se questa opzione è selezionata, le note riservate dell\'insegnante (che normalmente non sono visibili agli studenti)
verrà rivelato agli studenti nelle richieste di esportazione dei dati, ad es. tramite l\'API della privacy. È necessario decidere in base all\'utilizzo individuale di questo campo
se deve essere incluso nelle esportazioni di dati per gli studenti ai sensi del GDPR.';
$string['revoke'] = 'Revoca la prenotazione';
$string['saturday'] = 'Sabato';
$string['save'] = 'Salva';
$string['savechoice'] = 'Salva la mia scelta';
$string['saveseen'] = 'Salva Visto';
$string['schedule'] = 'Prenota';
$string['scheduleappointment'] = 'Prenota appuntamento per {$a}';
$string['schedulecancelled'] = '{$a} :I tuoi appuntamenti sono eliminati o spostati';
$string['schedulegroups'] = 'Visualizza per gruppo';
$string['scheduleinnew'] = 'Prenotazione in una nuova fascia oraria';
$string['scheduleinslot'] = 'Prenota a fasce orarie';
$string['scheduler'] = 'Agenda';
$string['scheduler:addinstance'] = 'Aggiungere Agenda';
$string['scheduler:appoint'] = 'Prenotare fasce orarie';
$string['scheduler:attend'] = 'Presenziare studenti';
$string['scheduler:canscheduletootherteachers'] = 'Pianificare appuntamenti per gli altri membri dello staff';
$string['scheduler:canseeotherteachersbooking'] = 'Visualizzare e sfogliare le prenotazioni degli altri docenti';
$string['scheduler:disengage'] = 'Questa azione è deprecata e non fa nulla';
$string['scheduler:editallattended'] = 'Segna gli studenti in tutti gli appuntamenti come frequentati / non frequentati.';
$string['scheduler:editallgrades'] = 'Modifica i voti in tutti gli appuntamenti.';
$string['scheduler:editallnotes'] = 'Modifica le note sugli appuntamenti in tutti gli appuntamenti.';
$string['scheduler:manage'] = 'Gestire le tue fasce orarie e appuntamenti';
$string['scheduler:manageallappointments'] = 'Gestire tutti gli appuntamenti';
$string['scheduler:seeotherstudentsbooking'] = 'Visualizzare altri studenti prenotati in quella fascia oraria';
$string['scheduler:seeotherstudentsresults'] = 'Visualizzare i risultati di altri studenti in quella fascia oraria';
$string['scheduler:seeoverviewoutsideactivity'] = 'Utilizzare la schermata panoramica per vedere le fasce orarie dell\'attività.';
$string['scheduler:viewfullslots'] = 'Visualizzare le fasce orarie anche se sono al completo (schermata studente)';
$string['scheduler:viewslots'] = 'Visualizzare le fasce orarie che sono aperte per la prenotazione (schermata studente)';
$string['schedulestudents'] = 'Visualizza per Studente';
$string['scopemenu'] = 'Visualizza fasce orarie in: {$a}';
$string['scopemenuself'] = 'Visualizza le mie fasce orarie in: {$a}';
$string['search:activity'] = 'Agenda - informazioni attività';
$string['seen'] = 'Visualizzato';
$string['selectedtoomany'] = 'Hai selezionato troppe fasce orarie. È possibile selezionarne non più di {$a}.';
$string['sendinvitation'] = 'Invia un invito';
$string['sendmessage'] = 'Invia un messaggio';
$string['sendreminder'] = 'Invia un promemoria';
$string['sendreminders'] = 'Invia e-mail di promemoria per i prossimi appuntamenti';
$string['sepcolon'] = 'Due punti';
$string['sepcomma'] = 'Virgola';
$string['sepsemicolon'] = 'Punto e virgola';
$string['septab'] = 'Tabulatore';
$string['showemailplain'] = 'Visualizza indirizzi e-mail in formato testo';
$string['showemailplain_desc'] = 'Nella vista docente dell\'agenda, mostrare gli indirizzi e-mail di studenti che necessitano di un appuntamento in formato testo, oltre a mailto: link.';
$string['showparticipants'] = 'Visualizza partecipanti';
$string['slot'] = 'Fascia oraria';
$string['slot_is_just_in_use'] = 'Siamo spiacenti, l\'appuntamento è appena stato scelto da un altro studente! Riprova.';
$string['slotdatetime'] = '{$a->shortdatetime} for {$a->duration} minuti';
$string['slotdatetimelabel'] = 'Data e ora';
$string['slotdatetimelong'] = '{$a->date}, {$a->starttime} &ndash; {$a->endtime}';
$string['slotdescription'] = '{$a->status} il {$a->startdate} dalle {$a->starttime} alle {$a->endtime} a {$a->location} con {$a->facilitator}.';
$string['slots'] = 'fasce orarie';
$string['slotsadded'] = '{$a} fasce orarie sono state aggiunte';
$string['slotsdeleted'] = '{$a} fasce orarie sono state eliminate';
$string['slottype'] = 'Tipi fascia oraria';
$string['slotupdated'] = '1 fascia oraria aggiornata';
$string['slotwarning'] = '<strong>Errore:</strong> Spostare questa fascia oraria che è in conflitto di tempo con la fascia oraria(e) elencate di seguito. Abilita "Ignora conflitti di schedulazione", se si desidera forzare l\'aggiunta della fascia oraria.';
$string['staffbreakdown'] = 'Per {$a}';
$string['staffrolename'] = 'Nome ruolo del docente';
$string['staffrolename_help'] = 'Etichetta per il ruolo che gestisce gli studenti. Questo non è necessariamente un "docente".';
$string['start'] = 'Inizio';
$string['startpast'] = 'Non è possibile avviare una fascia oraria con appuntamento vuoto passato';
$string['statistics'] = 'Statistiche';
$string['student'] = 'Studente';
$string['studentbreakdown'] = 'Per studente';
$string['studentcomments'] = 'Messaggio dello studente';
$string['studentdetails'] = 'Dettagli Studente';
$string['studentfiles'] = 'File caricati';
$string['studentmultiselect'] = 'Ogni studente può essere selezionato solo una volta in questa fascia oraria';
$string['studentnote'] = 'Messaggio dello studente';
$string['studentprovided'] = 'Studente fornito: {$ a}';
$string['students'] = 'Studenti';
$string['sunday'] = 'Domenica';
$string['tab-otherappointments'] = 'Tutti gli appuntamenti di questo studente';
$string['tab-otherstudents'] = 'Studenti in questa fascia oraria';
$string['tab-thisappointment'] = 'Questo appuntamento';
$string['teacher'] = 'Docente';
$string['teachernote'] = 'Note confidenziali (visibili solo al docente)';
$string['teachersmenu'] = 'Visualizza fasce orarie per: {$a}';
$string['thiscourse'] = 'questo corso';
$string['thisscheduler'] = 'questa agenda';
$string['thissite'] = 'l\'intero sito';
$string['thursday'] = 'Giovedì';
$string['timefrom'] = 'Da:';
$string['timerange'] = 'Intervallo di tempo';
$string['timeto'] = 'A:';
$string['totalgrade'] = 'Valutazione totale';
$string['tuesday'] = 'Martedì';
$string['unattended'] = 'Appuntamenti nulli';
$string['unlimited'] = 'Illimitati';
$string['unregisteredlbl'] = 'Studente(i) che non ha prenotato';
$string['upcomingslots'] = 'Prossime fasce orarie';
$string['updategrades'] = 'Aggiorna valutazioni';
$string['updatesingleslot'] = '';
$string['uploadmaxfiles'] = 'Numero massimo di file caricati';
$string['uploadmaxfiles_help'] = 'Il numero massimo di file che uno studente può caricare nel modulo di prenotazione. Il caricamento del file è facoltativo a meno che la casella "Caricamento file richiesto" non sia selezionata. Se impostato a 0, gli studenti non vedranno una casella dedicata al caricamento dei file.';
$string['uploadmaxfilesglobal'] = 'Numero massimo di file caricati';
$string['uploadmaxfilesglobal_desc'] = 'Il numero massimo di file che uno studente può caricare in un modulo di prenotazione. Questo può essere ulteriormente ridotto a livello di singole schedulazioni.';
$string['uploadmaxsize'] = 'Dimensione massima del file';
$string['uploadmaxsize_help'] = 'Dimensione massima del file per i caricamenti degli studenti. Questo limite si applica per singolo file.';
$string['uploadrequired'] = 'Devi caricare i file qui prima di prenotare la fascia oraria.';
$string['uploadstudentfiles'] = 'Caricare files';
$string['usebookingform'] = 'Usare il modulo di prenotazione';
$string['usebookingform_help'] = 'Se abilitato, allo studente prima effettuare la prenotazione verrà visualizzata un\'ulteriore pagina, in cui possono essere richieste informazioni aggiuntive, caricare dei file o risolvere dei CAPTCHA (vedi opzioni successive).';
$string['usebookingform_link'] = 'mod/scheduler/bookingform';
$string['usecaptcha'] = 'Usa il CAPTCHA per le nuove prenotazioni';
$string['usecaptcha_help'] = 'Se abilitato, gli studenti dovranno risolvere una domanda di sicurezza CAPTCHA prima di effettuare la prenotazione.
Utilizzare questa impostazione se si sospetta che gli studenti stiano utilizzando dei programmi automatizzati per occupare posti liberi. In caso di modifica di una precedente prenotazione, il captcha non verrà visualizzato.';
$string['usenotes'] = 'Utilizzare le note per gli appuntamenti';
$string['usenotesboth'] = 'Entrambi i tipi di note';
$string['usenotesnone'] = 'Nessuna';
$string['usenotesstudent'] = 'Nota appuntamento, visibile a docente e studente';
$string['usenotesteacher'] = 'Nota confidenziale, visibile solo ai docenti';
$string['usestudentnotes'] = 'Consenti agli studenti di inserire un messaggio';
$string['usestudentnotes_help'] = 'Se abilitato, la schermata di prenotazione conterrà una casella di testo in cui gli studenti possono inserire un messaggio. Utilizzare le "istruzioni per la prenotazione" sopra riportate per indicare agli studenti quali informazioni devono fornire.';
$string['viewbooking'] = 'Mostra dettagli';
$string['wednesday'] = 'Mercoledì';
$string['welcomebackstudent'] = 'È possibile prenotare fasce orarie aggiuntive facendo clic sul pulsante corrispondente "Prenota fascia oraria" di seguito.';
$string['welcomenewstudent'] = 'La tabella seguente mostra tutte le fasce orarie disponibili per un appuntamento. Scegli cliccando sul pulsante corrispondente "Prenota". Se avete bisogno di fare un cambiamento in seguito è possibile rivisitare questa pagina.';
$string['welcomenewteacher'] = 'Fare clic sul pulsante qui sotto per aggiungere fasce orarie.';
$string['what'] = 'Cosa?';
$string['whathappened'] = 'Cosa è successo?';
$string['whatresulted'] = 'Quali risultati?';
$string['when'] = 'Quando?';
$string['where'] = 'Dove?';
$string['who'] = 'Con chi?';
$string['whosthere'] = 'Chi c\'è ?';
$string['xdaysbefore'] = '{$a} giorni prima della fascia oraria';
$string['xweeksbefore'] = '{$a} settimane prima della fascia oraria';
$string['yesallgroups'] = 'Sì, per tutti i gruppi';
$string['yesingrouping'] = 'Sì, nel gruppo {$a}';
$string['yesoptional'] = 'Sì, facoltativo per lo studente';
$string['yesrequired'] = 'Sì, lo studente deve inserire un messaggio';
$string['yourappointmentnote'] = 'Comments for your eyes';
$string['yourslotnotes'] = 'Commenti sull\'appuntamento';
$string['yourstudentnote'] = 'Il tuo messaggio';
$string['yourtotalgrade'] = 'Il tua valutazione complessiva in questa attività è <strong>{$a}</strong>.';
