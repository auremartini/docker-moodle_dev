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
 * Strings for component 'reservation', language 'it', version '4.1'.
 *
 * @package     reservation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addparticipant'] = 'Aggiungi prenotazione';
$string['after10min'] = '10 minuti dopo l\'inizio dell\'evento';
$string['after12h'] = '12 ore dopo l\'inizio dell\'evento';
$string['after1d'] = '1 giorno dopo l\'inizio dell\'evento';
$string['after1h'] = '1 ora dopo l\'inizio dell\'evento';
$string['after1w'] = '1 settimana dopo l\'inizio dell\'evento';
$string['after2d'] = '2 giorni dopo l\'inizio dell\'evento';
$string['after2h'] = '2 ore dopo l\'inizio dell\'evento';
$string['after2w'] = '2 settimane dopo l\'inizio dell\'evento';
$string['after30min'] = '30 minuti dopo l\'inizio dell\'evento';
$string['after3w'] = '3 settimane dopo l\'inizio dell\'evento';
$string['after4h'] = '4 ore dopo l\'inizio dell\'evento';
$string['after4w'] = '4 settimane dopo l\'inizio dell\'evento';
$string['after5min'] = '5 minuti dopo l\'inizio dell\'evento';
$string['after6h'] = '6 ore dopo l\'inizio dell\'evento';
$string['alreadybooked'] = 'Prenotazione già effettuata';
$string['alreadyoverbooked'] = 'Sei già in lista di attesa';
$string['atstart'] = 'Dopo l\'inizio dell\'evento';
$string['autohide'] = 'Nascondi le prenotazioni dagli elenchi';
$string['availablerequests'] = 'Posti disponibili';
$string['badcourse'] = 'Il corso non esiste';
$string['badparent'] = 'Questa prenotazione era collegata con un\'altra che non è stata ripristinata adesso. Il collegamento è stato rimosso. Se necessario ricollegarle manualmente.';
$string['badsection'] = 'La sezione non esiste nel corso "{$a}"';
$string['badteachers'] = 'Il docente con indirizzo email ({$a}) non è stato trovato';
$string['badteachersmail'] = 'Indirizzo email ({$a}) non è valido';
$string['badtimeclose'] = 'Il valore del campo "timeclose" non è valido';
$string['badtimeend'] = 'Il valore del campo "timeend" non è valido';
$string['badtimeopen'] = 'Il valore del campo "timeopen" non è valido';
$string['badtimestart'] = 'Il valore del campo "timestart" non è valido';
$string['by'] = 'da';
$string['bydate'] = 'Data dell\'evento';
$string['byname'] = 'Nome';
$string['bysection'] = 'Argomento/Settimana';
$string['cancelledon'] = 'Annullato il';
$string['cancellersmail'] = 'Sei stato rimosso dalla prenotazione \'{$a->reservation}\'.';
$string['cancellersmailhtml'] = 'Sei stato rimosso dalla prenotazione <em>{$a->reservation}</em>.';
$string['checkclashes'] = 'Verifica concomitanze';
$string['clashesfound'] = 'Luogo o orario in concomitanza con altre prenotazioni';
$string['clashesreport'] = 'Resoconto concomitanze';
$string['cleanview'] = 'Visualizza solo gli iscritti';
$string['close'] = 'chiudi';
$string['closed'] = 'Chiusa';
$string['completionreserved'] = 'Lo studente deve effettuare la prenotazione per completare l\'attività';
$string['config'] = 'Impostazioni Prenotazioni';
$string['configautohide'] = 'Definisce quando le prenotazioni devono essere nascoste dalle liste (mod/reservation/index.php). Può essere utile quando si rende le liste pubbliche.';
$string['configcheckclashes'] = 'Visualizza il pulsante "Verifica concomitanze" nella pagina di modifica delle prenotazioni';
$string['configconnectto'] = 'Definisce dove il modulo deve cercare le prenotazioni collegabili';
$string['configdownload'] = 'Formato standard per il download delle liste delle richieste e delle prenotazioni.';
$string['configevents'] = 'Definisce quali eventi del calendario saranno creati per ogni prenotazione';
$string['configfields'] = 'Campi che verranno visualizzati nella tabella delle prenotazioni';
$string['configlocations'] = 'Gestione dei luoghi predefiniti per le prenotazioni di questo sito Moodle';
$string['configmanualusers'] = 'Definisce quale elenco di utenti viene mostrato nel menu a tendina utilizzato per la prenotazione manuale.';
$string['configmaxoverbook'] = 'Percentuale massima di overbooking per le prenotazioni.';
$string['configmaxrequests'] = 'Numero massimo di prenotazioni definito nel menu a tendina nella pagina di modifica';
$string['configminduration'] = 'Durata minima degli eventi delle prenotazioni. Valore utilizzato per il controllo della disponibilità negli eventi senza data di termine.';
$string['confignotifies'] = 'Definisce quali notifiche devono essere inviate';
$string['configoverbookstep'] = 'Granularità della percentuale di ovebooking. Minore il passo, maggiore la granularità';
$string['configpubliclists'] = 'Definisce se le liste delle prenotazioni sono pubbliche (visualizzabili senza effettuare login) o meno.';
$string['configsortby'] = 'Ordinamento delle liste delle prenotazioni.';
$string['configsublimits'] = 'Definisce il numero di righe per le regole dei sottolimiti nella pagina di modifica';
$string['configupload'] = 'Crea più prenotazioni caricandole tramite un file di testo';
$string['confirmdelete'] = 'Sei sicuro di voler rimuovere le prenotazioni selezionate?';
$string['connectedto'] = 'Prenotazione collegata con';
$string['connectto'] = 'Prenotazioni collegabili dal';
$string['crontask'] = 'Invia email per la prenotazione e la richiesta di valutazione';
$string['description'] = 'Descrizione';
$string['downloadas'] = 'Formato predefinito di download';
$string['duration10h'] = '10 ore';
$string['duration10min'] = '10 minuti';
$string['duration11h'] = '11 ore';
$string['duration12h'] = '12 ore';
$string['duration15min'] = '15 minuti';
$string['duration20min'] = '20 minuti';
$string['duration2h'] = '2 ore';
$string['duration30min'] = '30 minuti';
$string['duration3h'] = '3 ore';
$string['duration45min'] = '45 minuti';
$string['duration4h'] = '4 ore';
$string['duration5h'] = '5 ore';
$string['duration5min'] = '5 minuti';
$string['duration60min'] = '60 minuti';
$string['duration6h'] = '6 ore';
$string['duration7h'] = '7 ore';
$string['duration8h'] = '8 ore';
$string['duration90min'] = '90 minuti';
$string['duration9h'] = '9 ore';
$string['enablenote'] = 'Abilita note degli utenti';
$string['equal'] = 'uguale a';
$string['err_sublimitsgreater'] = 'La somma dei sottolimiti è superiore al numero massimo di prenotazioni';
$string['err_timeendlower'] = 'La data di termine dell\'evento è precedente a quella di inizio';
$string['err_timeopengreater'] = 'La data di apertura delle prenotazioni è successiva a quella di chiusura';
$string['eventevent'] = 'Crea un evento del corso dalla data di inizio a quella di fine (l\'evento)';
$string['eventreminder'] = '{$a} (prenotati)';
$string['eventrequestadded'] = 'Aggiunta richiesta di prenotazione';
$string['eventrequestcancelled'] = 'Annullata richiesta di prenotazione';
$string['eventrequestdeleted'] = 'Rimossa richiesta di prenotazione';
$string['events'] = 'Eventi del calendario';
$string['eventsettings'] = 'Impostazioni evento';
$string['explainconfig'] = 'Gli amministratori possono impostare qui alcuni parametri generali per il modulo Prenotazione';
$string['fields'] = 'Campi visualizzati';
$string['fullview'] = 'Visualizza anche le prenotazioni annullate';
$string['gradedmail'] = '{$a->teacher} ha inserito una valutazione per la tua prenotazione \'{$a->reservation}\'

Per visualizzarla puoi accedere qui:

    {$a->url}';
$string['gradedmailhtml'] = '{$a->teacher} ha inserito una valutazione per la tua prenotazione <em>{$a->reservation}</em><br /><br />
Per visualizzarla puoi accedere <a href="{$a->url}">qui</a>.';
$string['importreservations'] = 'Importa prenotazioni';
$string['invalidreservationid'] = 'ID prenotazione non valido';
$string['justbooked'] = 'Posizione nell\'elenco di prenotazione: {$a}';
$string['justoverbooked'] = 'Posizione nella lista di attesa: {$a}';
$string['linenumber'] = '#';
$string['listafterclose'] = 'Elenco dei prenotati dopo la chiusura delle prenotazioni';
$string['listalways'] = 'Elenco dei prenotati alla data';
$string['location'] = 'Luogo';
$string['locations'] = 'Gestione luoghi';
$string['locationslist'] = 'Elenco luoghi';
$string['mail'] = 'La prenotazione \'{$a->reservation}\' si è chiusa.

Per scaricare l\\\'elenco delle prenotazioni puoi accedere a:

    {$a->url}';
$string['mailhtml'] = 'La prenotazione <em>{$a->reservation}</em> si è chiusa.<br /><br />
Per scaricare la lista delle prenotazioni puoi accedere <a href="{$a->url}">qui</a>.';
$string['mailrequest'] = 'La prenotazione \\\'{$a->reservation}\\\' si è chiusa.

Per conoscere il numero della tua prenotazione puoi accedere a:

    {$a->url}';
$string['mailrequesthtml'] = 'La prenotazione <em>{$a->reservation}</em> si è chiusa.<br /><br />
Per conoscere il numero della tua prenotazione puoi accedere <a href="{$a->url}">qui</a>.';
$string['manage'] = 'Gestione prenotazioni';
$string['manualusers'] = 'La prenotazione manuale visualizza gli utenti del';
$string['maxoverbook'] = 'Percentuale massima overbooking';
$string['maxrequest'] = 'Numero massimo prenotazioni';
$string['message'] = 'Messaggio ai partecipanti';
$string['minduration'] = 'Durata minima eventi';
$string['modulename'] = 'Prenotazione';
$string['modulename_help'] = '<p>L\'utilizzo principale di questo modulo è la prenotazione degli studenti alle sessioni di laboratorio e agli esami ma può essere utilizzato per qualunque tipo di prenotazione</p><p> Il docente può limitare il numero di posti disponibili per il determinato evento, la data dello stesso e le date di apertura e chiusura delle prenotazioni.</p><p>Ad ogni prenotazione può essere assegnata una valutazione o una scala di valutazione</p><p>Gli studenti possono prenotarsi e cancellare le proprie prenotazioni aggiungendo eventualmente una nota testuale.</p><p>Dopo l\'inizio dell\'evento il docente potrà attribuire le valutazioni agli utenti prenotati. Una mail di notifica verrà inviata agli studenti.</p><p>La lista delle prenotazioni può essere scaricata in diversi formati di file</p>';
$string['modulenameplural'] = 'Prenotazioni';
$string['newlocation'] = 'Nuovo Luogo';
$string['noclashcheck'] = 'Controllo delle collisioni non abilitato. Chiedi all\'amministratore del sito';
$string['noclashes'] = 'Luogo e orario non in concomitanza con altre prenotazioni';
$string['nocourseswithnsections'] = 'Non esistono corsi con {$a} sezioni';
$string['nolimit'] = 'Nessun limite';
$string['nomorerequest'] = 'Non ci sono posti disponibili';
$string['none'] = 'nessuna informazione relativa all\'ordine di prenotazione';
$string['nooverbook'] = 'Nessun overbooking';
$string['noparent'] = 'Nessuna';
$string['noreservations'] = 'Nessuna prenotazione visualizzabile';
$string['note'] = 'Nota';
$string['noteachers'] = 'Non ci sono docenti';
$string['notequal'] = 'diverso da';
$string['noterequired'] = 'La nota è richiesta, per favore inseriscila prima di procedere con la prenotazione.';
$string['notgraded'] = 'Non valutato';
$string['notifies'] = 'Invio notifiche';
$string['notifycancellers'] = 'Notifica chi ha effettuato la cancellazione che è stata annullata con successo una prenotazione';
$string['notifygrades'] = 'Notifica la modifica della valutazione agli studenti';
$string['notifyoverbookers'] = 'Notifica gli studenti che erano in lista di overbooking che ora la prenotazione è confermata';
$string['notifyreservers'] = 'Notifica i prenotati quando hanno effettuato con successo una richiesta di prenotazione';
$string['notifystudents'] = 'Notifica la chiusura delle prenotazioni agli studenti';
$string['notifyteachers'] = 'Notifica la chiusura delle prenotazioni ai docenti';
$string['notopened'] = 'Non aperta';
$string['notreserved'] = 'Non prenotato';
$string['novalues'] = 'Il campo selezionato non è stato definito per nessun utente';
$string['number'] = 'Numero prenotazione';
$string['numberafterclose'] = 'Posizione nell\'elenco dei prenotati dopo la chiusura delle prenotazioni';
$string['numberalways'] = 'Posizione nell\'elenco dei prenotati alla data';
$string['optional'] = 'Opzionali';
$string['otherlocation'] = 'Specifica luogo non in elenco';
$string['overbook'] = 'Overbooking';
$string['overbookonly'] = 'Disponibili solo posti in overbooking';
$string['overbookstep'] = 'Passo overbooking';
$string['overview'] = 'Informazioni generali';
$string['parent'] = 'Collega questa prenotazione con';
$string['pluginadministration'] = 'Amministrazione prenotazione';
$string['pluginname'] = 'Prenotazione';
$string['privacy:metadata:reservation_note'] = 'Salva la nota utente di una richiesta di prenotazione';
$string['privacy:metadata:reservation_note:note'] = 'Registra Salva la nota utente di una richiesta di prenotazione note utente di una richiesta di prenotazione';
$string['privacy:metadata:reservation_request'] = 'Salva i dati utente di una richiesta di prenotazione';
$string['privacy:metadata:reservation_request:grade'] = 'Voto del utente in una richiesta di prenotazione';
$string['privacy:metadata:reservation_request:grader'] = 'ID del valutatore';
$string['privacy:metadata:reservation_request:mailed'] = 'Lo stato della notifica via mail della valutazione';
$string['privacy:metadata:reservation_request:reservationid'] = 'ID della prenotazione';
$string['privacy:metadata:reservation_request:timecancelled'] = 'Data e ora della cancellazione della richiesta di prenotazione';
$string['privacy:metadata:reservation_request:timecreated'] = 'Data e ora della creazione della richiesta di prenotazione';
$string['privacy:metadata:reservation_request:timegraded'] = 'Data e ora della valutazione della richiesta di prenotazione';
$string['privacy:metadata:reservation_request:userid'] = 'ID dell\'utente';
$string['publiclists'] = 'Lista prenotazioni pubblica';
$string['requestoverview'] = 'Riassunto prenotazioni';
$string['requests'] = 'Richieste';
$string['required'] = 'Obbligatorie';
$string['reservation:addinstance'] = 'Aggiungere una nuova prenotazione';
$string['reservation:downloadrequests'] = 'Scaricare l\'elenco delle prenotazioni';
$string['reservation:grade'] = 'Inserire valutazioni';
$string['reservation:manage'] = 'Gestire prenotazioni';
$string['reservation:manualdelete'] = 'Annullare prenotazioni di altri utenti';
$string['reservation:manualreserve'] = 'Effettuare prenotazioni per altri utenti';
$string['reservation:reserve'] = 'Effettuare prenotazioni personali';
$string['reservation:uploadreservations'] = 'Caricare file di prenotazioni';
$string['reservation:view'] = 'Visualizzare prenotazioni';
$string['reservation:viewnote'] = 'Visualizzare le note delle prenotazioni';
$string['reservation:viewrequest'] = 'Visualizzare l\'elenco delle prenotazioni';
$string['reservation_listing'] = 'Impostazioni per la pagina dell\'elenco delle prenotazioni del corso';
$string['reservation_other'] = 'Altre impostazioni';
$string['reservation_settings'] = 'Impostazioni di modifica';
$string['reservation_view'] = 'Impostazioni della pagina di visualizzazione';
$string['reservationcancelled'] = 'Prenotazione annullata';
$string['reservationclosed'] = 'Prenotazioni chiuse';
$string['reservationdenied'] = 'Prenotazioni non consentite';
$string['reservationevent'] = 'Crea un evento del corso dalla data di apertura a quella di chiusura (periodo di prenotazione)';
$string['reservationnotopened'] = 'Prenotazioni non ancora aperte';
$string['reservations'] = 'Prenotazioni';
$string['reservationsettings'] = 'Impostazioni prenotazione';
$string['reserve'] = 'Prenota';
$string['reservecancel'] = 'Annulla Prenotazione';
$string['reserved'] = 'Prenotato';
$string['reservedon'] = 'Prenotato il';
$string['reservedonconnected'] = 'Prenotazione già effettuata nella prenotazione collegata: {$a}';
$string['reserversmail'] = 'Hai effettuato la prenotazione a \'{$a->reservation}\'.';
$string['reserversmailhtml'] = 'Hai effettuato la prenotazione a <em>{$a->reservation}</em>.';
$string['resetreservation'] = 'Rimuovere tutte le prenotazioni';
$string['save'] = 'Salva valutazioni';
$string['search:activity'] = 'Prenotazione - informazioni attività';
$string['selectvalue'] = 'Selezionare uno dei valori disponibili';
$string['showrequest'] = 'Elenco delle prenotazioni pubblico';
$string['showuserrequest'] = 'Gli utenti possono visualizzare';
$string['sortby'] = 'Elenchi delle prenotazioni ordinate per';
$string['status'] = 'Stato della prenotazione';
$string['sublimit'] = '{$a}º sottolimite prenotazioni';
$string['sublimitrules'] = 'Definizione dei sottolimiti';
$string['sublimits'] = 'Sottolimiti prenotazioni';
$string['timeclose'] = 'Chiusura prenotazioni';
$string['timeend'] = 'Data fine';
$string['timeopen'] = 'Apertura prenotazioni';
$string['timestart'] = 'Data inizio';
$string['tools'] = 'Strumenti delle prenotazioni';
$string['upload'] = 'Caricamento prenotazioni';
$string['upload_help'] = '<p>Le prenotazioni possono essere caricate tramite un file di testo. Il formato del file deve essere il seguente:</p><ul><li>Ogni linea deve contenere un record</li><li>Ogni record è una serie di dati separati da virgole (o altro delimitatore)</li><li>Il primo record contiene una lista dei nomi dei campi che definiscono il formato del resto del file</li><li>I campi obbligatori sono section, name, timestart</li><li>I campi opzionali sono course, intro, teachers, timeend, grade, timeopen, timeclose, maxrequest</li><li>Se il corso non è impostato dovrà essere selezionato nella pagina di anteprima, tutte le prenotazioni finiranno in un solo corso</li></ul>';
$string['uploadreservations'] = 'Caricamento prenotazioni';
$string['uploadreservationspreview'] = 'Anteprima caricamento prenotazioni';
$string['uploadreservationsresult'] = 'Report caricamento prenotazioni';
$string['useralreadybooked'] = 'Utente già prenotato';
$string['userevent'] = 'Crea un evento utente dalla data di inizio alla data di fine quando l\'utente effettua una prenotazione';
$string['with'] = 'con';
$string['withselected'] = 'Con i selezionati...';
$string['yourgrade'] = 'Il voto relativo a questa prenotazione è: {$a->grade}/{$a->maxgrade}';
$string['yournote'] = 'La tua nota:';
$string['yourscale'] = 'Il voto relativo a questa prenotazione è: {$a}';
